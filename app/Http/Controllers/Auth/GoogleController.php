<?php



namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\User;
use App\ca_2020;

class GoogleController extends Controller
{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function redirectToGoogle()

    {
        return Socialite::driver('google')->redirect();
    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Check if user exists
            $finduser = ca_2020::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                $finduser->increment('no_of_login');
                return redirect('/home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                ]);
                $newCA = ca_2020::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy'),
                    'avatar' => $user->getAvatar(),
                ]);
                Auth::login($newUser);
                $newCA->increment('no_of_login');
                return redirect('/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
