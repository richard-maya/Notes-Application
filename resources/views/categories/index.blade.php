@extends('layouts.bootstrap')

@section('title')
<title>All Categories</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">All Categories</h1>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-lg-6 text-end">
            <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm">Create new category</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Actions</th>
                       <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr
                            @if ($category->id > 50)
                                class="table-danger"
                            @endif
                        >
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-secondary">See category</a>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit category</a>
                            </td>
                            <td>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <input type="submit" value="Delete category" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
