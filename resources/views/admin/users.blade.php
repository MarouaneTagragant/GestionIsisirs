@extends('layouts.app')
@include('admin.dashbord')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @yield('admindashboard')
        
        <div class="col-md-10">
        
            <div class="card">
                <div class="card-header">Users <a href="{{ route('admin.add') }}" class="dashadd btn btn-success">Add user</a></div>
                
                <table class="table">
                  
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                      <th scope="row">{{ $user->id }}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->role->name}}</td>
                        <td>
                            <a href="{{ route('admin.showUser'  ,['id'=> $user->id]) }}" type="button" class="btn btn-info">Detaills</a>
                            <a href="{{ route('admin.updateUser',['id'=> $user->id]) }}" type="button" class="btn btn-warning">Edit</a>
                            <a href="{{ route('admin.deleteUser',['id'=> $user->id]) }}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection