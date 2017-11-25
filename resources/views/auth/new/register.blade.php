@title('Register')

@extends('layouts.small')

@section('small-content')

    {!! Form::open(['route' => 'register.post']) !!}
    @formGroup('name')
    {!! Form::label('学号（用户名）') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'required', 'placeholder' => '2016000000']) !!}
    @error('name')
    @endFormGroup

    @formGroup('email')
    {!! Form::label('邮箱') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'john@example.com']) !!}
    @error('email')
    @endFormGroup

    @formGroup('phone')
    {!! Form::label('手机号') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required', 'placeholder' => '189XXXXXXXX']) !!}
    @error('phone')
    @endFormGroup

    @formGroup('password')
    {!! Form::label('密码') !!}
    {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
    @error('password')
    @endFormGroup

    @formGroup('rules')
    <label>
        {!! Form::checkbox('rules') !!}
        &nbsp; 我同意 <a href="{{ route('rules') }}" target="_blank">网站的用户条款</a>
    </label>
    @error('rules')
    @endFormGroup

    {!! Form::submit('立即注册', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}

@endsection
