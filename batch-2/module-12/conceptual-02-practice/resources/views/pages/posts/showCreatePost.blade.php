@extends('layout.app')
@section('title', 'Post Create')
@push('css')
    <style>
        .custom-form-background {
            background-color: #f48840;
            padding: 30px;
            border-radius: 5px;
        }
    </style>
@endpush
@section('content')

    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Welcome</h4>
                            <h2>let’s create a new post!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container mt-5">

        @session('success')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p> {{ session('success') }} </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endsession

        <form class="custom-form-background" action="{{ route('create.post') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Title Input -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title"
                    value="{{ old('title') }}">
                @error('title')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description Input -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description">{{ old('description') }}</textarea>
                @error('description')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <!-- Dropdown -->
            <div class="form-group">
                <label for="dropdown">Select Category</label>
                <select name="category_id" class="form-control" id="dropdown">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->categoryName }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>



            <!-- Checkboxes -->
            <div class="form-group">
                <label>Select Tags</label>
                <div class="d-flex flex-wrap">
                    @foreach ($tags as $tag)
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                id="tag{{ $tag->id }}"
                                {{ is_array(old('tags')) && in_array($tag->id, old('tags')) ? 'checked' : '' }}>
                            <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                </div>
                @error('tags')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <!-- Radio Buttons -->
            <div class="form-group">
                <h5 class="pb-2">Status</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="radio1" value="published"
                        {{ old('status') == 'published' ? 'checked' : '' }}>
                    <label class="form-check-label" for="radio1">Published</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="radio2" value="draft"
                        {{ old('status') == 'draft' ? 'checked' : '' }}>
                    <label class="form-check-label" for="radio2">Draft</label>
                </div>
                @error('status')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <!-- File Upload -->
            <div class="form-group">
                <label for="fileUpload">Upload File</label>
                <input type="file" name="featured_image" class="form-control-file" id="fileUpload">
                @error('featured_image')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-outline-light">Create Post</button>
        </form>


    </div>
@endsection
