@extends('template.main')

@section('content')
<div class="container">
    <h2 class="mb-4">Categories List</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection