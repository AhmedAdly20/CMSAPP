@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts SoftDeleted</div>
                <div class="card-body">
                    @if ($posts->count()>0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Restore</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">
                                        <img src="{{ $post->featured }}" alt="{{ $post->title }}" class="img-thumbnail" width="100px" height="100px">
                                    </th>
                                    <th scope="row">{{ $post->title }}</th>
                                    <td>
                                        <a href="{{ route('post.hdelete',['id'=>$post->id]) }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('post.restore',['id'=>$post->id]) }}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i> Restore
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <div class="text-center alert alert-danger" >No Posts To Show</div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
