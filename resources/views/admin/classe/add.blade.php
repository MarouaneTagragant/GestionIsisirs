@extends('layouts.app')
@include('admin.dashbord')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @yield('admindashboard')
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">CLass <a href="{{ route('admin.addClass') }}" class="dashadd btn btn-success">Add Class</a></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.storeClass') }}" enctype="multipart/form-data" >
                            
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="nameClass" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sectiondeClass" class="col-md-4 col-form-label text-md-right">{{ __('Section CLass') }}</label>

                                <div class="col-md-6">
                                    <select name="sectionClass" id="sectionClass" class="form-control form-control-sm">
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                                        @endforeach                                        
                                    </select>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label id="niveaudeClass" for="niveaudeClass" class="col-md-4 col-form-label text-md-right">{{ __('Niveau CLass') }}</label>

                                <div class="col-md-6">
                                    <select name="niveauClass" id="niveauClass" class="form-control form-control-sm">
                                            @foreach ($niveaux as $niveau)
                                                <option value="{{ $niveau->id }}">{{ $niveau->name }}</option>
                                            @endforeach
                                    </select>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label id="profeClass" for="profeClass" class="col-md-4 col-form-label text-md-right">{{ __('Professeur of the CLass') }}</label>

                                <div class="col-md-6">
                                    <select name="profClass" id="profClass" class="form-control form-control-sm">
                                            @foreach ($professeurs as $professeur)
                                                <option value="{{ $professeur->id }}">{{ $professeur->name }}</option>
                                            @endforeach
                                    </select>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add') }}
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>
@endsection