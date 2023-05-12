@extends('layout.app')
@section('title', 'login form')

@section('content')

    <div class="container">

        {{ Form::open(['route' => 'login', 'method' => '#', 'class' => 'form-signin']) }}

        <h3 class="text-center mt-4 form-signin-heading">Please Sign In</h1>

            <div class="form-group mt-2">
                {!! Form::email('email', null, ['placeholder' => 'Your Email Address', 'class' => 'form-control mt-2']) !!}
            </div>
            <div class="form-group mt-2">
                {{ Form::password('password', ['placeholder' => 'Your Password', 'class' => 'form-control']) }}
            </div>
            <div class="form-group mt-2">
                {{ Form::submit('Sign In', ['class' => 'btn btn-sm btn-primary btn-block']) }}
                <a href="{{ route('createuser') }}" class="btn btn-sm btn-primary btn-block">Register</a>
                {{-- {{ Form::submit('Register', ['route' => 'createuser', 'class' => 'btn btn-sm btn-primary btn-block']) }} --}}
            </div>

            {{ Form::close() }}


    </div>


@endsection
