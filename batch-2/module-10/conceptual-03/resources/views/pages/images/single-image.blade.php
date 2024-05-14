@extends('layouts.app')
@section('title', 'IMAGE')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                
                <form class="forms-sample" method="POST" action="{{ route('admin.upload.single.image') }}"
                enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image">
                        {{-- <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div> --}}
                    </div>
                    {{-- <button type="submit" class="btn btn-primary mr-2">Submit</button> --}}
                    {{-- <button class="btn btn-dark">Cancel</button> --}}
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
