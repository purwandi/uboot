<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Session;
use Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return Socialite::with('slack')->redirect();
    }

    public function user()
    {
        $slack = Socialite::driver('slack')->user();

        if (!$slack) {
            return 'Unable to login with your slack account';
        }

        $user = User::where('email', $slack->email)
            ->where('slack_id', $slack->id)
            ->first();

        if (!$user) {
            $user = User::create([
                'name'              => $slack->name,
                'email'             => $slack->email,
                'avatar'            => $slack->avatar,
                'slack_id'          => $slack->id,
                'slack_team_id'     => $slack->user['team']['id'],
                'slack_team'        => $slack->user['team']['name'],
                'slack_team_avatar' => $slack->user['team']['image_230'],
                'token'             => $slack->token,
            ]);
        } else {
            $user->name              = $slack->name;
            $user->email             = $slack->email;
            $user->avatar            = $slack->avatar;
            $user->slack_id          = $slack->id;
            $user->token             = $slack->token;
            $user->slack_team_id     = $slack->user['team']['id'];
            $user->slack_team        = $slack->user['team']['name'];
            $user->slack_team_avatar = $slack->user['team']['image_230'];
            $user->save();
        }

        Auth::login($user);
        return redirect('/');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
