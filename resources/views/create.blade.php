@extends('layout.app')

@section('title', 'my form')

@section('content')
    <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <div class="container-fluid ">
                <h1 class=" text-center mt-4">Create New User</h1>
                <p class="alert alert-success d-none"> </p>
                {!! Form::open(['route' => 'createuser', 'method' => 'post']) !!}
                {{-- {!! Form::open(['id' => 'form', ])!!} --}}
                <div class="form-group mt-2">
                    {!! Form::label('Username', 'Username', ['class' => 'fw-bold']) !!}
                    {!! Form::text('Username', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">
                        @error('Username')
                            {{ $message }}
                        @enderror
                </div>

                <div class="form-group mt-2">
                    {!! Form::label('Email', 'Email', ['class' => 'fw-bold']) !!}
                    {!! Form::text('Email', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">
                        @error('Email')
                            {{ $message }}
                        @enderror
                </div>
                <div class="form-group mt-2">
                    {!! Form::label('Password', 'Password', ['class' => 'fw-bold']) !!}
                    {!! Form::text('Password', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">
                        @error('Password')
                            {{ $message }}
                        @enderror
                </div>
                <div class="form-group mt-2">
                    {!! Form::label('Phone', 'Phone', ['class' => 'fw-bold']) !!}
                    {!! Form::text('Phone', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">
                        @error('Phone')
                            {{ $message }}
                        @enderror
                </div>
                <div class="form-group mt-2">
                    {!! Form::label('Status', 'Status', ['class' => 'fw-bold']) !!}
                    {!! Form::select('Status', ['A' => 'Active', 'N' => 'In-Active'], null, ['class' => 'form-control']) !!}
                    <span class="text-danger">

                </div>
                <div class="form-group mt-4">
                    {!! Form::submit('submit', ['class' => 'fw-bold btn btn-primary', 'id' => 'button']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
