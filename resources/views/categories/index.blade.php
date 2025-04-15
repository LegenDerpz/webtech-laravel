@extends('template.main')

@section('title', 'Categories')

@section('content')
<div class="container">
    <h2 class="mb-4">Categories</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->category_description }}</td>
                    <td>
                        <a href="/categories/update/{{$category->id}}" class="btn btn-info btn-sm mr-2">Edit</button>
                        <a href="" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection