@extends('layout.app')
@section('title', 'Edit Create')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Welcome</h4>
                            <h2>let’s edit this Category</h2>
                        </div>

                    </div>
                </div>
                <a class="btn btn-outline-warning mt-3" href="{{ route('show.all.category') }}"> Back to all category </a>
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

        <form style="background-color: #f48840; padding:25px" action="{{ route('edit.category', $editCategory->id) }}"
            method="post">

            @csrf

            <div class="form-group">
                <label for="categoryName">Title</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName"
                    value="{{ old('categoryName', $editCategory->categoryName) }}">
                @error('categoryName')
                    <p class="text-danger"> {{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-light">Update Category</button>

        </form>
    </div>
@endsection
