@extends('layouts.app')
@include('admin.dashbord')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @yield('admindashboard')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Niveau Infos') }}</div>

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
                            <td>{{$niveau->id}}</td>
                          </tr>
                          <tr>
                            <th scope="row">NAME</th>
                            <td>{{$niveau->name}}</td>
                          </tr>
                          <tr>
                            <th scope="row">SECTION</th>
                            <td> {{ $niveau->section->name }}</td>
                          </tr>
                         
                        </tbody>
                        
                      </table>
                      <a href="/admin/niveau/edit/{{$niveau->id}}" type="button" class="btn btn-warning">Edit</a>
                      <a href="/admin/niveau/delete/{{$niveau->id}}" type="button" class="btn btn-danger">Delete</a>

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
