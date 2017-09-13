@extends('new.new')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(../img/arrows.png);"></span>
   	    <a href="{{route('inheritance')}}"  class="nav-active">传承动态</a>
    </div>
@stop
@section('text-content')
    <div class="row" style="border-bottom: 1px solid #ccc;height: 133PX;overflow: hidden;">
    	<div class="col-sm-4">
    	<a href="{{route('show',$first['id'])}}">
    		<img src="../upload/{{$first['thumbs']}}" alt="" class="img-responsive" style="height: 123px;width: 100%"></a>
    	</div>
    	<div class="col-sm-8">
	        <h3 class="c-news-title">
		        <a href="{{route('show',$first['id'])}}">
		        	{{$first['title']}}
		        </a>
	        </h3>
	        <p class="t-color-gray t-font-12">{{strip_tags(str_limit($first['content'],200))}}</p>
    	</div>
    	
    </div> 
    <ul class="new-each">
    @foreach($news as $new)
    	<li>
    		<div class="row">
		    	<div class="col-sm-2 n-date">
		    		<h3>
		    		   {{date_format($new->updated_at,'d')}}
		    		</h3>
		    		<p>
		    			{{date_format($new->updated_at,'M')}}
		    		</p>
		    		<p>
		    			{{date_format($new->updated_at,'Y')}}
		    		</p>	
		    	</div>
		    	<div class="col-sm-10">
		    		<h3 class="c-news-title">
	                    <a href="{{route('show',$new->id)}}">
	        	            {{$new->title}}
	                    </a>
	                </h3>
		            <p class="t-color-gray t-font-12">
		                {{str_limit(str_replace(PHP_EOL, '', strip_tags($new->content)),150)}}
		            </p>
		    	</div>
		    </div> 
    	</li>
    	 @endforeach
    </ul>
    {{ $news->links() }}
	
 @stop