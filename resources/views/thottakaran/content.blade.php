@extends('thottakaran.layout.master')

@section('slide')

    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url();">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Content</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Content</li>
            </ul>
        </div>
    </div>


    <div class="section-full content-inner">
        <div class="container">


            @foreach($Contents as $Content)
                <div class="blog-post blog-md clearfix">
                    <div class="dez-post-info">
                        <div class="dez-post-title ">
                            <h3 class="post-title"><a href="#">{{ $Content->title }}</a></h3>
                        </div>
                        <div class="dez-post-meta ">
                            <ul>
                                <li class="post-date"> <i class="fa fa-calendar"></i>{{ date("d M Y", strtotime($Content->date)) }}</li>
                                <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Admin</a> </li>
                            </ul>
                        </div>
                        <div class="dez-post-text">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="dez-post-readmore">
                            <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">Read More...</a>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>


@endsection