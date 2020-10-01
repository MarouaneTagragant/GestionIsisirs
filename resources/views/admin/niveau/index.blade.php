@extends('layouts.app')
@include('admin.dashbord')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @yield('admindashboard')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Niveaux <a href="{{ route('admin.addNiveau') }}" class="dashadd btn btn-success">Add Niveau</a></div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Section Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($niveaux as $niveau)
                      <tr>
                      <th scope="row">{{ $niveau->id }}</th>
                      <td>{{ $niveau->name }}</td>
                      <td>{{ $niveau->section->name  }}</td>
                        <td>
                            <a href="/admin/niveau/show/{{$niveau->id}}" type="button" class="btn btn-info">Detaills</a>
                            <a href="/admin/niveau/edit/{{$niveau->id}}" type="button" class="btn btn-warning">Edit</a>
                            <a href="/admin/niveau/delete/{{$niveau->id}}" type="button" class="btn btn-danger">Delete</a>
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