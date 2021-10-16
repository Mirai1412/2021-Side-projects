<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostControllers extends Controller
{
    public function home()
    {
        return view('post.home');
    }

    public function list()
    {
        return view('post.list');
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {

        return view('post.list');
    }

}
