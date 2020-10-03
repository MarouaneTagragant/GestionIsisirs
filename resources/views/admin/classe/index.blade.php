@extends('layouts.app')
@include('admin.dashbord')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @yield('admindashboard')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Classes  <a href="{{ route('admin.Classes') }}" class="dashadd btn btn-success">Add Classe</a></div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Section</th>
                        <th scope="col">Niveau</th>
                        <th scope="col">Name of the professeur</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($classes as $classe)
                      <tr>
                        <th scope="row">{{ $classe->id }}</th>
                        <td>{{ $classe->name }}</td>
                        <td>{{ $classe->section->name }}</td>
                        <td>{{ $classe->niveau->name }}</td>
                        <td>
                          @foreach ($classe->professeurs as $prof)
                              {{$prof->name}}<br>
                          @endforeach
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