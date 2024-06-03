@extends('layout.app')
@section('title', 'All Post')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>hi!!</h4>
                            <h2>Here is all post</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container mt-3">
        @session('success')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p> {{ session('success') }} </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endsession
    </div>

    <table class="table table-hover table-dark" style="margin: 25px;">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Tags</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($allPost as $post)
                <tr>
                    <th scope="row"> {{ $post->id }} </th>
                    <td> {{ ucwords($post->title) }} </td>
                    <td> {{ ucwords($post->category->categoryName) }} </td>
                    <td><p>tags</p></td>
                    {{-- <td> {{ ucwords(implode(', ', $post->tags->name)) }} </td> --}}
                    <td> {{ $post->created_at->diffForHumans() }} </td>
                    <td>
                        <div style="display: flex;">
                            <div style="margin-right: 5px">
                                <a class="btn btn-sm btn-outline-success"
                                    href="{{ route('show.single.post', $post->id) }}">
                                    View </a>
                            </div>
                            <div style="margin-right: 5px">
                                <a class="btn btn-sm btn-outline-warning"
                                    href="{{ route('show.edit.post', $post->id) }}">
                                    Edit </a>
                            </div>
                            <div>
                                {{-- category delete form --}}
                                <form action="{{ route('delete.post', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"> Delete </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">
                        <p style="color:rgb(255, 209, 3)">No Data</p>
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>
@endsection
