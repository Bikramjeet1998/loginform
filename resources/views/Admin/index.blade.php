@extends('layout.app')
@section('title', 'login form')

@section('content')

    <div class="container">

        @if (isset($message))
            <div class="alert alert-success">

                {{ $message }}

            </div>
        @endif


        {{ Form::open(['route' => 'adminlogin', 'method' => 'POST', 'class' => 'form-signin']) }}

        <h3 class="text-center mt-4 form-signin-heading">Welcome to Admin Panel </h1>

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


            </div>

            {{ Form::close() }}


    </div>


@endsection
