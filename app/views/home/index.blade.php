@extends('layouts.master')

@section('title')
首頁 @parent
@stop

@section('content')
	@foreach($besides as $beside)
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="{{{ route('beside.show', $beside->id) }}} "><img src="{{{$beside->image_path}}}" alt=""></a>
                            <div class="caption">
                            <!--    <h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="{{{ route('beside.show', $beside->id) }}} ">{{{ $beside->event_name }}}</a>
                                </h4>
                                <p>{{{$beside->organization}}}</p>
                            </div>
                            <div class="ratings">
							    <span class="browse" ap-tooltip="瀏覽人次" data-placement="bottom">
									<p class="pull-left"><i class="icon-eye-open"></i>{{{$beside->browse}}}</p>
								</span>
								<span class="bookmark" ap-tooltip="收藏人數" data-placement="bottom">
									<p class="pull-left"><i class="icon-bookmark"></i>{{{$beside->bookmark}}}</p>
								</span>
                            </div>
                        </div>
                    </div>
    @endforeach

@stop
                    
