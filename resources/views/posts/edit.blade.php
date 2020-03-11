@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{ $post->title }} Post</div>
                <div class="card-body">
                    @if (count($errors)>0)
                        <ul class="navbar-nav mr-auto">
                        @foreach ($errors->all() as $error)
                            <li class="nav-item active alert alert-danger">
                                {{ $error }}
                            </li>
                        @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('post.update',['id'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Post Title" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" rows="8" cols="8" placeholder="Enter Post Content">{{ $post->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option
                                    value="{{ $category->id }}"
                                    @if ($post->category_id == $category->id )
                                        selected
                                    @endif
                                    >
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tags</label>
                            @foreach ($tags as $tag)
                                <div class="form-check">
                                    <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=" {{ $tag->id }} "
                                    name="tags[]"
                                    @if ($post->hasTag($tag->id))
                                        checked
                                    @endif
                                    >
                                    <label class="form-check-label" for="tag">
                                        {{ $tag->tag }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="featured">Image</label>
                            <input type="file" class="form-control-file" name="featured">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
