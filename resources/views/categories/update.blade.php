@extends('template.main')

@section('title', 'Update Category')

@section('content')
    <body>
        <div class="container mt-5">
            <h2>Update Category</h2>
            <form action="/categories/update/{{$category->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="{{ old('category_name', $category->category_name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="category_description" class="form-label">Category Description</label>
                    <textarea class="form-control" id="category_description" name="category_description" rows="4" required>{{ old('category_description', $category->category_description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
@endsection
