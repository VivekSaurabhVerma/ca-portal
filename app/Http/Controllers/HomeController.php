<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use DB;
use App\Upload;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $email = auth()->user()->email;
        $user = DB::table('ca_2020s')->where('email', $email)->get()->first();
        $tasks = DB::table('tasks')->orderBy('number', 'desc')->get();

        // Find rank of user
        $ca_ids = DB::table('ca_2020s')->orderBy('points', 'desc')->orderBy('updated_at', 'asc')->pluck('id')->all();
        $collection = collect($ca_ids);
        $ca_rank = $collection->search(auth()->user()->id) + 1;
        $user->rank = $ca_rank;
        return view('ca_dashboard')->with(['user' => $user, 'tasks' => $tasks]);
    }

    // Handle profile update
    public function edit(Request $request, $id)
    {
        // Increase points of referring person
        $referral = $request->input('referral');
        $referrer = DB::table('ca_2020s')->where('email', $referral);
        if ($referrer->exists()) {
            if ($referrer->num_referred_by < 5) {
                $referrer->points += 10;
                $referrer->num_referred_by++;
            }
        }
        $phone = $request->input('phone');
        $address = $request->input('address');
        $college = $request->input('college');
        $pincode = $request->input('pincode');
        $year = $request->input('year');
        DB::update('update ca_2020s set phone = ?,referral=?,address=?,college=?,pincode=?,year=? where id = ?', [$phone, $referral, $address, $college, $pincode, $year, $id]);
        return redirect()->route('home');
    }

    public function update()
    {
        $userEmail = auth()->user()->email;
        $user = DB::table('ca_2020s')->where('email', $userEmail)->get()->first();
        // return $user;
        return view('update')->with(['user' => $user]);
    }

    public function upload($id)
    {
        $task = DB::table('tasks')->where('id', $id)->get()->first();
        $user = DB::table('ca_2020s')->where('email', auth()->user()->email)->get()->first();
        // check if proof already uploaded
        if (DB::table('uploads')->where('task_id', $id)->where('ca_id', $user->id)->exists()) {
            return view('upload')->with(['status' => 'uploaded', 'task' => $task]);
        }
        return view('upload')->with(['status' => 'notUploaded', 'task' => $task]);
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|image|max:1999',
        ]);

        $user = DB::table('ca_2020s')->where('email', auth()->user()->email)->get()->first();
        // Handle File Upload
        // Get filename with the extension
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        // Upload Image
        $path = $request->file('image')->storeAs('ca_uploads', $fileNameToStore, 's3');
        // Set visibility of path public
        Storage::disk('s3')->setvisibility($path, 'public');
        $request->file('image')->storeAs('ca_uploads', $fileNameToStore, ['disk' => 's3']);
        // Create level
        $upload = new Upload;
        $upload->url = Storage::disk('s3')->url($path);
        $upload->task_id = $id;
        $upload->ca_id = $user->id;
        $upload->save();
        return redirect('/home')->with('success', 'Proof uploaded!');
    }

    public function store1(Request $request, $id)
    {

        $task_id = $id;
        $image = $request->file('file');
        // return $image;
        $user = DB::table('ca_2020s')->where('email', auth()->user()->email)->get()->first();
        $imageName = $user->id . '-' . $task_id . '-' .  time() . '.' . rand() . $image->extension();

        $image->move(public_path('images'), $imageName);

        $data = array('url' => $imageName, 'ca_id' => $user->id, 'task_id' => $task_id, 'created_at' => Carbon::now());

        DB::table('uploads')->insert($data);

        return response()->json(['success' => $imageName]);
    }
}
