@extends('layouts.app')
@section('title', 'Create Post')
@section('content')
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>WELCOME</h4>
                            <h2>let’s create a new post</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->


    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="down-contact">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item contact-form">
                                    <div class="sidebar-heading">
                                        <h2>Start form here</h2>
                                    </div>

                                    @session('success')
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <p> {{ session('success') }} </p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endsession


                                    <div class="content">

                                        <form id="contact" action="{{ route('create.post') }}" method="post"
                                            enctype="multipart/form-data">

                                            @csrf

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <input name="title" type="text" id="title"
                                                            value="{{ old('title') }}" placeholder="Inter a cachy title"
                                                            required="">

                                                        @error('title')
                                                            <p class="text-red">{{ $message }}</p>
                                                        @enderror

                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <select name="category" class="custom-select">
                                                        <option selected>Open this select menu</option>
                                                        <option value="Technology">Technology</option>
                                                        <option value="lifeStyle">lifeStyle</option>
                                                        <option value="International">International</option>
                                                        <option value="Khela">Khela</option>
                                                    </select>
                                                    @error('category')
                                                        <p class="text-red">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-12 mt-3">
                                                    <fieldset>
                                                        <textarea name="description" rows="6" id="message" placeholder="Your Message"> {{ old('description') }} </textarea>
                                                        @error('title')
                                                            <p class="text-red">{{ $message }}</p>
                                                        @enderror
                                                    </fieldset>
                                                </div>

                                                <div class="col-lg-12">
                                                    <label for="tags"
                                                        style="display: block; margin-bottom: 10px;">Select tag</label>
                                                    <div class="custom-control custom-checkbox"
                                                        style="display: inline-block; margin-right: 10px;">
                                                        <input name="tags[]" type="checkbox" class="custom-control-input"
                                                            id="customCheck1" value="php">
                                                        <label class="custom-control-label" for="customCheck1">PHP</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox"
                                                        style="display: inline-block;">
                                                        <input name="tags[]" type="checkbox" class="custom-control-input"
                                                            id="customCheck2" value="Laravel">
                                                        <label class="custom-control-label" for="customCheck2">Laravel</label>
                                                    </div>
                                                    @error('tags')
                                                        <p class="text-red">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-lg-12 mt-3">
                                                    <label for="status"
                                                        style="display: block; margin-bottom: 10px;">Status</label>
                                                    <div class="custom-control custom-radio"
                                                        style="display: inline-block; margin-right: 10px;">
                                                        <input type="radio" id="customRadio1" name="status"
                                                            value="published" class="custom-control-input"
                                                            {{ old('status', $status ?? '') == 'published' ? 'checked' : '' }}>
                                                        <label class="custom-control-label"
                                                            for="customRadio1">Published</label>
                                                    </div>
                                                    <div class="custom-control custom-radio" style="display: inline-block;">
                                                        <input type="radio" id="customRadio2" name="status"
                                                            value="draft" class="custom-control-input"
                                                            {{ old('status', $status ?? '') == 'draft' ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customRadio2">Draft</label>
                                                    </div>
                                                    @error('status')
                                                        <p class="text-red">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-lg-12 mt-3">
                                                    <fieldset>
                                                        <label for="featured_image">Featured Image</label>
                                                        <input name="featured_image" type="file" class=""
                                                            id="">
                                                        @error('featured_image')
                                                            <p class="text-red">{{ $message }}</p>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit"
                                                            class="main-button">Create
                                                            post</button>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
