@extends('layout.app')
@section('title', 'Category Create')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Welcome</h4>
                            <h2>let’s create a new Category</h2>
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
        
        <form style="background-color: #f48840; padding:25px" action="{{ route('create.category') }}" method="POST"
            id="categoryCreateForm">

            @csrf

            <div class="form-group">
                <label for="categoryName">Title</label>
                <input type="text" class="form-control" id="categoryName" placeholder="Enter title" name="categoryName">

                <div class="my-3" id="categoryError"></div>
            </div>
            <button type="submit" class="btn btn-outline-light create_category"> Create Category </button>
        </form>
    </div>

    @push('js')
        <script>
            var categoryUrl = "{{ route('create.category') }}";
        </script>
    @endpush
@endsection
