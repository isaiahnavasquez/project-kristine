<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{

  public function addUser() {

    return view('accounts.add');

  }

  public function create() {

    $user = new \App\User;

    $user->name = request('name');
    $user->username = request('username');
    $user->password = bcrypt(request('password'));
    $user->role = request('role');

    $user->save();

    auth()->attempt([
      'username' => $user->username,
      'password' => $user->password 
    ]);

    return view('authentication.dashboard');

  }

}
