@extends('layouts.app')
@section('title', 'All Post')
@section('content')
    <div class="heading-page mt-10">
        <div class="" style="margin: 20px">

            @session('success')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p> {{ session('success') }} </p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endsession

            <div class="row">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ ucwords($post->title) }}</td>
                                <td> {{ ucwords($post->category) }} </td>
                                <td> {{ ucwords(implode(', ', $post->tags)) }} </td>
                                <td> {{ ucwords($post->status) }} </td>
                                <td> {{ $post->created_at->diffForHumans() }} </td>
                                <td>
                                    <div>
                                        <a class="btn btn-sm btn-outline-success"
                                            href="{{ route('show.single.post', $post->id) }}"> View </a>

                                        <a class="btn btn-sm btn-outline-warning" href="{{ route('show.edit.post', $post->id) }}"> Edit </a>

                                        {{-- post delete form --}}
                                        <form action="{{ route('post.delete', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger"> Delete </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <h2 style="color: red;" class="text-center"> No Data </h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
