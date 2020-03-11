<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Tag;
use App\Post;
use Counter;

class WebsiteUIController extends Controller
{
    public function index(){
        return view('index')->with('blog',Setting::get()->first())
                            ->with('categories',Category::all())
                            ->with('tags',Tag::all())
                            ->with('first_post',Post::orderBy('created_at','desc')->first())
                            ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                            ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                            ->with('fourth_post',Post::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
                            ->with('firstthreePosts',Post::orderBy('created_at','desc')->take(3)->get())
                            ->with('secondthreePosts',Post::orderBy('created_at','desc')->skip(3)->take(3)->get())
                            ->with('thirdthreePosts',Post::orderBy('created_at','desc')->skip(6)->take(3)->get())
                            ->with('lastfivePosts',Post::orderBy('created_at','desc')->take(5)->get())
                            ->with('firstfourPosts',Post::take(4)->get());
    }

    public function contact(){
        return view('contact')->with('tags',Tag::all())->with('categories',Category::all())->with('blog',Setting::get()->first());
    }

    public function singlePost($id){
        $post = Post::find($id);
        $post->increment('views');
        $post->save();
        return view('post')->with('tags',Tag::all())->
                                                    with('categories',Category::all())->
                                                    with('post',$post)->
                                                    with('relatedPosts',$post->category->posts()->take(3)->get())->
                                                    with('previous',Post::where('id', '<', $post->id)->orderBy('id','desc')->first())->
                                                    with('next',Post::where('id', '>', $post->id)->orderBy('id')->first());
    }

    public function category($id){
        $category = Category::find($id);
        return view('category')->with('Category',$category)
                                ->with('categories',Category::all())
                                ->with('tags',Tag::all())
                                ->with('first_post',Post::where('category_id',$category->id)->orderBy('created_at','desc')->first());
    }
}
