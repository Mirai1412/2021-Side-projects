<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PostControllers extends Controller
{
    public function __construct()//생성자
    {
    $this->middleware(['auth'])->except([/*적용을 예외로 할것*/'home','show']);
    //이안에있는 모든 라우터들은 auth미들웨어가 적용된다.
    }

    public function home()
    {
        $post = Post::latest()->paginate(5);

        return view('post.home',['posts'=>$post]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);

        if($post->image) {
            Storage::delete('public/images/'.$post->image);
        }

        $page  = $request->page;
        $post->delete();

        return redirect()->route('home',['page'=>$page]);
    }



        public function show($id)
        {
            $post = Post::find($id);

            return view('post.show', ['post'=>$post]);
        }



    public function store(Request $request)
    {
        $this->validate($request, ['title'=>'required',
        'content'=>'required|min:3']);

       $fileName = null;
       if($request->hasFile('image')) {
       $fileName = time().'_'.
       $request->file('image')->getClientOriginalName();
       $path = $request->file('image')
           ->storeAs('public/images', $fileName);
       }

       $input = array_merge($request->all(),
           ["user_id"=>Auth::user()->id]);

       if($fileName) {
       $input = array_merge($input, ['image' => $fileName]);
       }


       Post::create($input);

       return redirect()->route('home')->with('success', 'true');
    }

    public function mypost(){

        Auth::user()->id; //로그인 한사람의 아이디를 가져온다
        $user = User::find(Auth::user()->id);
        $post = $user->posts()->paginate(5);

        return view('post.mypost',['posts'=>$post]);
    }



    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'image',
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('image')) {

            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            if ($post->image) {
                Storage::delete('public/images/' . $post->image);
                $post->image = null;
            }
            $request->file('image')->storeAs(
                'public/images/',
                $fileName
            );
            $post->image = $fileName;
        }
        $post->save();

        return redirect()->route('show', ['post' => $post->id]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.show', ['post'=>$post]);
    }


}
