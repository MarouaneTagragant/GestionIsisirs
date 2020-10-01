@extends('layouts.app')
@include('admin.dashbord')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @yield('admindashboard')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Sections  <a href="{{ route('admin.addSection') }}" class="dashadd btn btn-success">Add section</a></div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sections as $section)
                      <tr>
                      <th scope="row">{{ $section->id }}</th>
                      <td>{{ $section->name }}</td>
                        <td>
                            <a href="/admin/section/show/{{$section->id}}" type="button" class="btn btn-info">Detaills</a>
                            <a href="/admin/section/edit/{{$section->id}}" type="button" class="btn btn-warning">Edit</a>
                            <a href="/admin/section/delete/{{$section->id}}" type="button" class="btn btn-danger">Delete</a>
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