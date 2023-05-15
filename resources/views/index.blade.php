@extends('layout.app')
@section('title', 'login form')

@section('content')

    <div class="container">

<<<<<<< HEAD
        {{-- @if (isset($message))
            <div class="alert alert-success">

                {{ $message }}

            </div>
        @endif --}}
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        {{ Form::open(['route' => 'loginDashboard', 'method' => 'POST', 'class' => 'form-signin']) }}
=======
        {{ Form::open(['route' => 'auth', 'method' => 'post', 'class' => 'form-signin']) }}
>>>>>>> 19c0b42274c60e3559b8a6b0152ab3530f273849

        <h3 class="text-center mt-4 form-signin-heading">Please Sign In</h1>

            <div class="form-group mt-2">
                {!! Form::email('email', null, ['placeholder' => 'Your Email Address', 'class' => 'form-control mt-2']) !!}
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
            </div>
            <div class="form-group mt-2">
                {{ Form::password('password', ['placeholder' => 'Your Password', 'class' => 'form-control']) }}
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
            </div>
            <div class="form-group mt-2">
                {{ Form::submit('Sign In', ['class' => 'btn btn-sm btn-primary btn-block']) }}
                <a href="{{ route('createuser') }}" class="btn btn-sm btn-primary btn-block">Register</a>

            </div>

            {{ Form::close() }}


    </div>


@endsection
