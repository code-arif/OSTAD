@extends('layouts.app')
@section('title', 'HOME')

@section('content')
    <div class="row">
        @foreach ($tasks as $task)
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">${{ $task['total-sale'] }}</h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">{{ $task['task-name'] }}</h6>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
