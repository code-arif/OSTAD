@extends('layouts.app')
@section('title', 'Post')

@section('content')
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">

                @foreach ($showCase as $item)
                    <div class="item">
                        <img src="{{ asset('images/post_image/' . $item->featured_image) }}" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span> {{ ucwords($item->category) }} </span>
                                </div>
                                <a href="post-details.html">
                                    <h4> {{ $item->title }} </h4>
                                </a>
                                <ul class="post-info">
                                    <li style="color: aqua"> {{ $item->created_at->format('F d, Y') }} </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->
@endsection
