@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                @if ($users->count()>0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Role</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">
                                        <img src=" {{ asset($user->profile->avatar) }} " class="img-thumbnail" width="50px" height="50px">
                                    </th>
                                    <th scope="row">{{ $user->name }}</th>
                                    <td>
                                            @if ($user->admin ==0)
                                            <a href=" {{ route('user.admin',['id'=>$user->id]) }} " class="btn btn-primary btn-sm">
                                                Make Admin
                                            </a>
                                            @else
                                            <a href=" {{ route('user.notadmin',['id'=>$user->id]) }} " class="btn btn-primary btn-sm">
                                                Remove Admin
                                            </a>
                                            @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="text-center alert alert-danger" >No Users To Show</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
