<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function home()
    {
        $posts = Post::latest()->paginate(6);

        // $comments = Comment::latest();

        return view('home', [
            'posts' => $posts,
            // 'comments' => $comments
        ]);
    }
    public function index(){
        $this->middleware(['auth', 'can:accessAdmin']);
        return view('posts.index');
    }
    public function store(Request $request){
        $this->validate($request, [
            "title" => "required",
            "image" => "required",
            "date" => "required"
        ]);

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore =  time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
            }
        Post::create([
            "title" => $request->title,
            "image" => 'storage/image/' . $fileNameToStore,
            "release_date" => $request->date
        ]);

        
        return back();
    }

    public function show($id)
    {
    	$post = Post::find($id);
        $comments = Comment::get();

        return view('posts.post', [
            'post' => $post,
            'comments' => $comments
        ]);
    }
}