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

    public function destroy($id)
    {

    }

    public function edit($id)
    {

    }

    public function show($id)
    {
        $user = $this->users->find($id);

        return view('post.show', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {

    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        return view('post.list');
    }

}
