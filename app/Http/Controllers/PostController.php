<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    // we can also try auth inside web php
    public function __construct(){
        $this->middleware('auth')->only('create', 'edit', 'destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id()); 
        $posts = $user->posts()->orderBy('created_at','desc')->get();
        $count = $user->posts()->where('title','!=','')->count();

        return view('posts.post', compact('posts', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|unique:posts|max:225',
            'description' => 'required'
        ]);

        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename.''.time().'.'.$extension;
            $path = $request->file('img')->storeAs('public/img', $fileNameToStore);
        }else{
            $fileNameToStore = '';
        }

        // $post = new Post();
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->img = $fileNameToStore;
        // $post->save();
        $post = new Post();
        $post->fill($request->all());
        $post->img = $fileNameToStore;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts');
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('welcome', compact('posts'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = $post->id;
        $post = Post::where('id', $post)->get();
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::destroy($id);

        return redirect('/posts');
    }
 
}
