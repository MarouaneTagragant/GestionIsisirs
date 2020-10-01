@extends('layouts.app')
@include('admin.dashbord')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @yield('admindashboard')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Section Infos') }}</div>

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
                            <td>{{$section->id}}</td>
                          </tr>
                          <tr>
                            <th scope="row">NAME</th>
                            <td>{{$section->name}}</td>
                          </tr>
                        </tbody>  
                        
                      </table>
                      <div class="container row">
                        <div class="col-md-6">
                          <h4>Les niveau avalaible for this section</h4>
                        </div>
                        <div class="col-md-6">
                        @foreach ($niveaux as $niveau)
                            @if ($niveau->section->id == $section->id)
                        <a href="{{ route('admin.showNiveau',['id' => $niveau->id]) }}">{{$niveau->name}}</a><br>
                            @endif
                        @endforeach
                        </div>
                      </div>
                      <a href="/admin/section/edit/{{$section->id}}" type="button" class="btn btn-warning">Edit</a>
                      <a href="/admin/section/delete/{{$section->id}}" type="button" class="btn btn-danger">Delete</a>

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
