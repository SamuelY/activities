@extends('layouts.master')

@section('title')
比賽資訊 @parent
@stop

@section('carousel')
<!-- delete the carousel -->
@stop

@section('content')

            <div class="col-md-15">

                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/800x300" alt="">
                    <div class="caption-full" >

                        <h4><a href="#">{{{ $beside->event_name }}}</a>
                        </h4>
                        <h5>{{{ $beside->event_introduce }}}</h5>
                    </div>

                </div>
            </div>
			
<!-- Comments Form -->
    <div class="well">
        <h4>回覆文章</h4>
        
       @include('partials.message')
        
        {{ Form::open(['route' => 'comments.store', 'method' => 'POST', 'class' => 'horizontal-form', 'role' => 'form']) }}
            <div class="form-group{{ $errors->first('name', ' has-error')}}">
                {{ Form::label('name', '您的名字：') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="form-group{{ $errors->first('email', ' has-error')}}">
                {{ Form::label('email', '您的 Email：') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="form-group{{ $errors->first('content', ' has-error')}}">
                {{ Form::label('content', '您的留言：') }}
                {{ Form::textarea('content', null, ['rows' => 3, 'class' => 'form-control', 'required']) }}
            </div>
            <div class="text-right">
                {{ Form::hidden('beside_id', $beside->id) }}
                {{ Form::submit('送出', ['class' => 'btn btn-info']) }}
            </div>
        {{ Form::close() }}
    </div>

 <!-- Comments -->
    @foreach($beside->comments as $comment)
    <div class="media">
        <div class="media-body">
            <h4 class="media-heading">{{{ $comment->name }}}
                <small>{{{ $comment->email }}}</small>
            </h4>
            {{{ $comment->content }}}
        </div>
    </div>
    @endforeach
@stop 