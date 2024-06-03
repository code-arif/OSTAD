@extends('layout.app')
@section('title', 'Home')
@section('content')
    <!-- Banner Starts Here -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">
                @foreach ($posts as $post)
                    <div class="item">
                        <img src="{{ asset('images/post_image/'.$post->featured_image) }}" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span> {{ $post->category->categoryName }} </span>
                                </div>
                                <a href="post-details.html">
                                    <h4> {{ $post->title }} </h4>
                                </a>
                                <ul class="post-info">
                                    <li style="color: white"> Codearif </li>
                                    <li style="color: white"> {{ $post->created_at->diffForHumans() }} </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Banner Ends Here -->
        <!-- Banner Ends Here -->
    @endsection
