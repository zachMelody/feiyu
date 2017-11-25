@title('Register')

@extends('layouts.small')

@section('small-content')

    {!! Form::open(['route' => 'register.post']) !!}
        @formGroup('name')
            {!! Form::label('name') !!}
            {!! Form::text('name', session('githubData.name'), ['class' => 'form-control', 'required', 'placeholder' => 'John Doe']) !!}
            @error('name')
        @endFormGroup

        @formGroup('email')
            {!! Form::label('email') !!}
            {!! Form::email('email', session('githubData.email'), ['class' => 'form-control', 'required', 'placeholder' => 'john@example.com']) !!}
            @error('email')
        @endFormGroup

        @formGroup('username')
            {!! Form::label('username') !!}
            {!! Form::text('username', session('githubData.username'), ['class' => 'form-control', 'required', 'placeholder' => 'johndoe']) !!}
            @error('username')
        @endFormGroup

        @formGroup('rules')
            <label>
                {!! Form::checkbox('rules') !!}
                &nbsp; I agree to <a href="{{ route('rules') }}" target="_blank">the rules of the portal</a>
            </label>
            @error('rules')
        @endFormGroup

        {!! Form::hidden('github_id', session('githubData.id')) !!}
        {!! Form::hidden('github_username', session('githubData.username')) !!}
        {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}

@endsection
