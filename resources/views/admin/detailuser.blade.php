@extends('layouts.app')
@include('admin.dashbord')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @yield('admindashboard')
      <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('User Infos') }}</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Infos</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ID</th>
                            <td>{{$user->id}}</td>
                          </tr>
                          <tr>
                            <th scope="row">NAME</th>
                            <td>{{$user->name}}</td>
                          </tr>
                          <tr>
                            <th scope="row">EMAIL</th>
                            <td>{{$user->email}}</td>
                          </tr>
                          <tr>
                            <th scope="row">ROLE</th>
                            <td>{{$user->role->name}}</td>
                          </tr>
                          <tr>
                            <th scope="row">GENDER</th>
                            <td> @if($user->gender == 1) Male @else Female @endif </td>
                          </tr>
                          <tr>
                            <th scope="row">PHONE</th>
                            <td>{{$user->phone}}</td>
                          </tr>
                          <tr>
                            <th scope="row">BIRTH DAY</th>
                            <td>{{$user->dateofbirthday}}</td>
                          </tr>
                        </tbody>
                        
                      </table>
                      <a href="/admin/updateUser/{{$user->id}}" type="button" class="btn btn-warning">Edit</a>
                      <a href="/admin/deleteUser/{{$user->id}}" type="button" class="btn btn-danger">Delete</a>

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
