@extends('layouts.app')
@include('admin.dashbord')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        @yield('admindashboard')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">welcome Admin to dashboard</div>

                
            </div>
        </div>
    </div>
</div>   
@endsection