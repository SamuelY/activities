@extends('layouts.master')

@section('title')
註冊 @parent
@stop

@section('carousel')
<!-- delete the carousel -->
@stop

@section('css')
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/beside.css') }}
	
@stop

@section('content')			



 
 {{ Form::open(['route' => 'beside.create', 'method' => 'POST', 'class' => 'form-signin', 'enctype' => 'multipart/form-data']) }}
			<h2 class="form-signin-heading">建立活動</h2>
			{{ Form::label('event_name', '活動名稱', ['class' => 'sr-only']) }}
			{{ Form::text('event_name', null, array('class' => 'form-control', 'placeholder' => '活動名稱')) }} 
			
			{{ Form::label('event_introduce', '活動介紹', ['class' => 'sr-only']) }}
            {{ Form::textarea('event_introduce', null,array('class' => 'form-control', 'placeholder' => '活動介紹')) }}

			{{ Form::label('organization', '舉辦單位', ['class' => 'sr-only']) }}
			{{ Form::text('organization', null, array('class' => 'form-control', 'placeholder' => '舉辦單位')) }} 
			</br>
			<h2 class="form-signin-heading">選擇活動圖片</h2>
			{{ Form::file('uploadfile') }}
			<div class="text-right">
                {{ Form::submit('建立', ['class' => 'btn btn-lg btn-primary btn-block']) }}
            </div>
{{ Form::close() }}
@stop 

