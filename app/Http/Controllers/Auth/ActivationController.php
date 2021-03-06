<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivationController extends Controller
{
    public function activate(Request $request)
    {
      $user = User::byActivationColumns( $request->email, $request->token)->firstOrFail();

      $user->update([
        'active' => true,
        'activation_token' => null,
      ]);
      Auth::loginUsingID($user->id);

      return redirect()->route('home')->withSuccess('Activated! You are now signed in');

    }
}
