@extends('common.layouts01')
@section('title',$title)

    @section('banner')
    <div class="c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" >
    <img src="http://www.ccpofund.com/img/c-bj.png" alt="Image-1" width="100%" height="auto">
            </div>
    @stop
    @section('content')
    <div class="c-content-box  c-bg-white" style="padding-top: 45px;">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
                    <div class="row c-menu-left">
                        <div class="c-menu-left-img">
                            <span style="background-image: url(../img/home.png);"></span>
                            <a href="{{route('company')}}">{{$title}}</a>
                        </div>
                    </div>
               </div>
               <div class="col-md-6">
                <div class="row">
                    <div class="c-menu-right">
                        <span><a href="{{route('cooper')}}">合作流程</a></span>
                        <span><a href="{{route('certify')}}">基金登记证明</a></span>
                    </div>
                </div>
              </div>
            </div>
        </div>              
    </div>
    <div class="c-content-box c-bg-white" style="padding-top: 15px;">
        <div class="container" >
            <div class="col-md-8" >
                <div class="row" style="border-top: 1px solid #c9caca;border-right: 1px solid #c9caca;">   
                    <div class="text-content">
                        @section('text-content')
                        @show
                    </div>
                </div>
            </div>
            <div class="col-md-4" >
                <div class="row" style="border-top: 1px solid #c9caca;"> 
                        @include('common.rightside')     
                </div>
            </div> 
        </div>       
    </div>
    @stop