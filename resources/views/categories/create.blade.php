@extends('layouts.bootstrap')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-center">Create Category</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">

                <br>
                <label for="" class="form-label">Color</label>
                <input type="color" name="color" class="form-control">
                <br>
                <label for="" class="form-label">File</label>
                <input type="file" name="file" class="form-control">
                <br>

                <div class="text-end">
                    <input type="submit" value="Create category" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('title')
<title>Create Category</title>
@endsection
