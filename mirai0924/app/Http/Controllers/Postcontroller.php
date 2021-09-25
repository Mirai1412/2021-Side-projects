<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;


class Postcontroller extends Controller
{
    public function home($id)//생성자
    {

        return view('posts.home', ['user' => User::findOrFail($id)]);

    }
}
