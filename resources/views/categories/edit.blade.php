@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{ $category->name }} Category</div>
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
                    <form action="{{ route('category.update',['id'=>$category->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{ $category->name }}" type="text" class="form-control" name="name" placeholder="Enter Category Name">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
