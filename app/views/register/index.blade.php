@extends('layouts.master')

@section('title')
註冊 @parent
@stop

@section('carousel')
<!-- delete the carousel -->
@stop

@section('content')
			
@section('css')
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/login.css') }}
@stop

{{ Form::open(['route' => 'register.create', 'method' => 'POST', 'class' => 'form-signin', 'role' => 'form']) }}
            <h2 class="form-signin-heading">註冊</h2>
			{{ Form::label('name', '帳號', ['class' => 'sr-only']) }}
			{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) }} 
			<div class="form-group{{ $errors->first('email', ' has-error')}}">
			{{ Form::label('email', 'Email', ['class' => 'sr-only']) }}
            {{ Form::email('email', null,array('class' => 'form-control', 'placeholder' => 'Email')) }}
			</div>
			{{ Form::label('password', '密碼', ['class' => 'sr-only']) }}
			{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }} 
			
			{{ Form::label('confirm_password', '密碼', ['class' => 'sr-only']) }}
			{{ Form::password('confirm_password', array('class' => 'form-control', 'placeholder' => 'Confirm password')) }} 
			
			<div class="text-right">
                {{ Form::submit('註冊', ['class' => 'btn btn-lg btn-primary btn-block']) }}
            </div>
{{ Form::close() }}

@stop 