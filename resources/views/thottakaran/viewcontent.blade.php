@extends('thottakaran.layout.master')

@section('slide')


    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url();">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">ViewContent</h1>
            </div>
        </div>
    </div>

    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>ViewContent</li>
            </ul>
        </div>
    </div>


    <div class="section-full content-inner">
        <div class="container">
            <div class="blog-post blog-md clearfix">
                <div class="dez-post-info">
                    <div class="dez-post-title ">
                        <h3 class="post-title"><?php print_r($Contents->title);?></h3>
                    </div>
                    <div class="dez-post-content ">
                        <h3 class="post-content"><?php print_r($Contents->content); ?></h3>
                    </div>  
                </div>
            </div>
        </div>
    </div>


@endsection