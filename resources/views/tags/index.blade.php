@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tags</div>
                <div class="card-body">
                @if ($tags->count()>0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <th scope="row">{{ $tag->tag }}</th>
                                    <td>
                                        <a href="{{route('tag.edit',['id'=>$tag->id])}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('tag.delete',['id'=>$tag->id]) }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="text-center alert alert-danger" >No Tags To Show</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
