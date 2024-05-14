@extends('layouts.app')
@section('title', 'Multiple Image')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>

                <form class="forms-sample" method="POST" action="{{ route('admin.upload.multiple.image') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label>Multiple image upload</label>
                        {{-- <input type="file" name="image"> --}}
                        <input type="file" name="images[]" class="" multiple>
                       
                    </div>
                    {{-- <button type="submit" class="btn btn-primary mr-2">Submit</button> --}}
                    {{-- <button class="btn btn-dark">Cancel</button> --}}
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
