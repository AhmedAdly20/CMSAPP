<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if($categories->count()==0){
            return redirect()->route('category.create');
        }
        $tags = Tag::all();
        if($tags->count()==0){
            return redirect()->route('tag.create');
        }
        return view('posts.create')->with('categories',Category::all())->with('tags',Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'         =>'required',
            'content'       =>'required',
            'category_id'   =>'required',
            'featured'      =>'required|image',
            'tags'          => 'required'
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/posts',$featured_new_name);

        $post = Post::create([
            'title'         =>  $request->title,
            'content'       =>  $request->content,
            'category_id'   =>  $request->category_id,
            'featured'      =>  'uploads/posts/'.$featured_new_name,
            'slug'          =>  str_slug($request->title),
        ]);
        $post->tags()->attach($request->tags);
        $post->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post)->with('categories',Category::all())->with('tags',Tag::all());
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
        $this->validate($request,[
            'title'         =>'required',
            'content'       =>'required',
            'category_id'   =>'required',
        ]);

        $post = Post::find($id);

        if( $request->hasFile('featured')){
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/posts',$featured_new_name);
            $post->featured = 'uploads/posts/'.$featured_new_name;
        }
        $post->title        =  $request->title;
        $post->content      =  $request->content;
        $post->category_id  = $request->category_id;
        $post->slug         = str_slug($request->title);
        $post->tags()->sync($request->tags);
        $post->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.softdeleted')->with('posts',$posts);
    }
    public function hdelete($id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->forceDelete();
        return redirect()->back();
    }
    public function restore($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->route('post.index');
    }
}
