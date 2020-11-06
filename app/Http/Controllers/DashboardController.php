<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, App\User, App\Upload, App\Task, App\ca_2020;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'can:isAdmin']);
        $this->middleware(['auth', 'can:isAdmin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('ca_2020s')->orderBy('points', 'desc')->get();
        return view('dashboard.index')->with(['users' => $users]);
    }

    public function showTask()
    {
        $tasks = DB::table('tasks')->orderBy('number', 'desc')->get();
        return view('dashboard.task')->with(['tasks' => $tasks]);
    }

    public function createTask()
    {
        return view('dashboard.create');
    }

    public function storeTask(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required',
        ]);
        $task = new Task;
        $task->title = $request->input('title');
        $task->desc = $request->input('desc');
        $task->points = $request->input('points');
        $task->number = $request->input('number');
        $task->fb_link = $request->input('fb_link');
        $task->insta_link = $request->input('insta_link');
        $task->twitter_link = $request->input('twitter_link');
        $task->linkedin_link = $request->input('linkedin_link');
        $task->save();
        return redirect()->route('tasks');
    }

    public function editTask($id)
    {
        $task = Task::find($id);
        // return $task;
        return view('dashboard.edit')->with(['task' => $task]);
    }

    public function updateTask(Request $request, $id)
    {
        $this->validate($request, [
            'desc' => 'required',
        ]);
        $task = Task::find($id);
        $task->title = $request->input('title');
        $task->desc = $request->input('desc');
        $task->points = $request->input('points');
        $task->number = $request->input('number');
        $task->fb_link = $request->input('fb_link');
        $task->insta_link = $request->input('insta_link');
        $task->twitter_link = $request->input('twitter_link');
        $task->linkedin_link = $request->input('linkedin_link');
        $task->save();
        return redirect()->route('tasks');
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks');
        // return $task;
    }

    public function viewUploads()
    {
        $tasks = DB::table('tasks')->orderBy('number', 'desc')->get();
        return view('dashboard.viewUploads')->with('tasks', $tasks);
    }

    public function viewTaskUpload($id)
    {
        $uploads = DB::table('uploads')->where('task_id', $id)->orderBy('created_at', 'desc')->paginate(20);
        return view('dashboard.viewTaskUpload')->with(['uploads' => $uploads, 'task_id' => $id]);
        // return $uploads;
    }

    public function verifyUpload($user, $id)
    {
        // $upload = Upload::find($id);
        // $ca = ca_2020::find($user);
        // return $ca;
        // $points = Task::find($upload->task_id)->points;
        // $upload->update(['verified' => true, 'rejected' => false]);
        // $user->increment('points', $points);
        // $upload->save();



        $upload = Upload::find($id);
        $task_id = $upload->task_id;
        $ca = ca_2020::find($user);
        // $user = DB::table('ca_2020s')->where('email', auth()->user()->email)->get()->first();
        DB::update('update uploads set points_given = 1,verified=1,rejected=0, updated_at=? where ca_id=? AND task_id=?', [Carbon::now(), $ca->id, $task_id]);
        // $email = auth()->user()->email;
        //insert code here
        if ($upload->rejected == 1)
            $points = 1.5 * (Task::find($upload->task_id)->points);
        else
            $points = 1.0 * (Task::find($upload->task_id)->points);
        DB::update('update ca_2020s set points = points+? where id = ?', [$points, $ca->id]);
        $upload->save();

        return redirect()->route('viewTaskUpload', ['id' => $upload->task_id]);
    }

    public function rejectUpload($user, $id)
    {
        // $upload = Upload::find($id);
        // $ca = ca_2020::find($user);
        // // points to be deducted
        // $points = Task::find($upload->task_id)->points * 0.5;;
        // $upload->update(['rejected' => true, 'verified' => false]);
        // $ca->decrement('points', $points);
        // $upload->save();
        // return redirect()->route('viewTaskUpload', ['id' => $upload->task_id]);

        $upload = Upload::find($id);
        $ca = ca_2020::find($user);
        $task_id = $upload->task_id;
        // $user = DB::table('ca_2020s')->where('email', auth()->user()->email)->get()->first();
        // points to be deducted
        $points = Task::find($upload->task_id)->points * 1.5;
        DB::update('update uploads set points_given = 0,verified=0,rejected=1, updated_at=? where ca_id=? AND task_id=?', [Carbon::now(), $ca->id, $task_id]);
        $ca->decrement('points', $points);
        $upload->save();
        return redirect()->route('viewTaskUpload', ['id' => $upload->task_id]);
    }

    //task_id
    public function verifyAll($id)
    {
        // $points = Task::find($id)->points;
        // $user_ids = DB::table('uploads')->where('task_id', $id)->where('rejected', false)->where('verified', false)->pluck('ca_id');
        // for ($i = 0; $i < count($user_ids); $i++) {
        //     $user = ca_2020::find($i);
        //     $user->increment('points', $points);
        // }
        // DB::table('uploads')->where('task_id', $id)->where('rejected', false)->where('verified', false)->update(['verified' => true]);
        $task = Task::find($id);
        $points = $task->points;
        // $email = auth()->user()->email;
        $ids = array();

        $uploads = DB::table('uploads')->where('verified', 0)->where('rejected', 0)->where('task_id', $task->id)->get();
        foreach ($uploads as $upload) {
            if ($upload->points_given == 0) {
                $ca_id = $upload->ca_id;
                $task_id = $upload->task_id;
                DB::update('update uploads set points_given = 1, verified=1,rejected=0,updated_at=? where ca_id=? AND task_id=?', [Carbon::now(), $ca_id, $task_id]);
                array_push($ids, $ca_id);
            }
        }

        $ids = array_unique($ids);

        foreach ($ids as $i) {
            DB::update('update ca_2020s set points = points+? where id = ?', [$points, $i]);
        }



        return redirect()->route('viewTaskUpload', ['id' => $id]);
    }

    public function verifybyuser($ca_id)
    {

        $uploads = DB::table('uploads')->where('ca_id', $ca_id)->orderBy('created_at', 'desc')->paginate(20);

        return view('dashboard.uploadsbyuser')->with('uploads', $uploads);
    }
}
