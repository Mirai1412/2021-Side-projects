<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostControllers extends Controller
{
    public function __construct()//생성자
    {
    $this->middleware(['auth'])->except([/*적용을 예외로 할것*/'home','show']);
    //이안에있는 모든 라우터들은 auth미들웨어가 적용된다.
    }

    public function home()
    {
        $posts = Post::latest()->paginate(5);

        return view('post.home',['posts'=>$posts]);

        return view('post.home');
    }

    public function create()
    {
        return view('post.create');
    }

    public function destroy($id)
    {

    }

    public function edit(Request $request, $id)
    {
        $post = Post::find($id);

        return view('posts.edit', ['post'=>$post,'page'=>$request->page]);
    }

    public function show($id)
    {
        $page = $request->page;
        $post = Post::find($id);

        if(Auth::user() !=null && !$post -> viewers->contains(Auth::user())){
            $post->viewers()->attach(Auth::user()->id);
        }

        return view('post.show',compact('post', 'page'));
    }

    public function update(Request $request, $id)
    {

    }

    public function store(Request $request)
    {
        $title = $request->title;
        $content = $request->content;

        $request->validate([
            'title' => 'required | min:3',
            'content' => 'required',
            'imageFile'=>'image | max:2000'

        ]);

        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect('/home');
    }

}
