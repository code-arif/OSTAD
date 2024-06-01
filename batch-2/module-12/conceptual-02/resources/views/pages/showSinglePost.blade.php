@extends('layouts.app')
@section('title', 'post')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Post Details</h4>
                            <h2>Single blog post</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="{{ asset('images/post_image/' . $singlePost->featured_image) }}"
                                            alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>{{ ucwords($singlePost->category) }}</span>
                                        <a href="post-details.html">
                                            <h4>{{ $singlePost->title }}</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li>{{ $singlePost->created_at->format('F d,Y') }}</li>
                                        </ul>
                                        <p>{{ $singlePost->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-5 tagcloud">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sidebar-heading">
                        <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                        <ul class="list-inline">

                                <li class="list-inline-item">{{ ucwords(implode(', ', $singlePost->tags)) }}
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
