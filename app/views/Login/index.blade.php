@extends('layouts.master')

@section('title')
註冊 @parent
@stop

@section('carousel')
<!-- delete the carousel -->
@stop

@section('css')
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/login.css') }}
@stop

@section('content')			

{{ Form::open(['route' => 'login.auth', 'method' => 'POST', 'class' => 'form-signin', 'role' => 'form']) }}
            <h2 class="form-signin-heading">登入</h2>
			{{ Form::label('name', '帳號', ['class' => 'sr-only']) }}
			{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) }}  

			{{ Form::label('password', '密碼', ['class' => 'sr-only']) }}
			{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }} 
			
			<div class="text-right">
                {{ Form::submit('登入', ['class' => 'btn btn-lg btn-primary btn-block']) }}
            </div>
{{ Form::close() }}
@stop 

