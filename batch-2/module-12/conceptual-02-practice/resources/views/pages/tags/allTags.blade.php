@extends('layout.app')
@section('title', 'All Tags')
@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>hi!!</h4>
                            <h2>Here is all tags</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        @session('success')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p> {{ session('success') }} </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endsession
    </div>

    <table class="table table-hover table-dark container mt-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tag Name</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tags as $tag)
                <tr>
                    <th scope="row"> {{ $tag->id }} </th>
                    <td> {{ ucwords($tag->name) }} </td>
                    <td> {{ $tag->created_at->diffForHumans() }} </td>
                    <td>
                        <div style="display: flex;">
                            <div style="margin-right: 5px">
                                <a class="btn btn-sm btn-outline-warning"
                                    href="{{ route('show.edit.tag',$tag->id) }}">
                                    Edit </a>
                            </div>
                            <div>
                                {{-- category delete form --}}
                                <form action="{{ route('delete.tag', $tag->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" href=""> Delete </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align: center;">
                    <p style="color:rgb(255, 209, 3)">No Data</p>
                </td>
            </tr>
            @endforelse

        </tbody>
    </table>
@endsection
