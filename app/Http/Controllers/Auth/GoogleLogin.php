<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Artesaos\Defender\Facades\Defender;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Auth;
use Exception;
use App\User;
use App\Helpers\GenerateRandomString;

class GoogleLogin extends Controller
{
    use AuthenticatesUsers;

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        if(Auth::user()->hasRole('admin')) {
            return '/admin';
        }

        return '/painel';
    }

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){

        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'Não foi possível realizar autenticar com sua conta google.');
        }

        $existingUser = User::where('email', $user->email)->first();

        if($existingUser && $existingUser->google_id){
            Auth::login($existingUser);
            return redirect($this->redirectTo());
        }elseif($existingUser){
            $existingUser->update(['google_id' => $user->id, 'email_verified_at' => date('Y-m-d H:i:s')]);
            Auth::login($existingUser);
            return redirect($this->redirectTo());
        }else{
            $newUser = User::create([
                'sub_id' => 1,
                'name' => $user->user['given_name'],
                'lastname' => $user->user['family_name'],
                'email' => $user->email,
                'google_id'=> $user->id,
                'password' => Hash::make(GenerateRandomString::generate()),
            ]);

            $role_user = Defender::findRole('user');
            $newUser->attachRole($role_user);

            event(new Registered($newUser));

            Auth::login($newUser);
            return redirect($this->redirectTo());
        }
    }
}
