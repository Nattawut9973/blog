<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('category')->get();
//    dd($posts);
       return view('posts.index',compact('posts'));
    }

    public function store(Request $request){
        Post::create([
            'title' => $request->title,
            'body'  => $request->body,
            'size' => 'x' ,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('posts.create')->withSuccess('สร้างโพสสำเร็จ');
    }
    public function category(){
        $posts = Post::all();
       return view('posts.index',compact('posts'));
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public  function update(Post $post, Request $request){
        $post->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return redirect()->back()->withSuccess('แก้ไขเรียบร้อย');
    }


    public function  destroy(Post $post){
     $post->delete();
     return redirect()->route('post.list')->withSuccess("ลบสำเร็จ");
    }


    public  function  create(){
        $categories =  Category::all();
        return view('posts.create',compact('categories'));
    }
}
