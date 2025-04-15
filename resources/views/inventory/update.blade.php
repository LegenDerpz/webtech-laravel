@extends('template.main')

@section('title', 'Update Item')

@section('content')
    <body>
        <div class="container mt-5">
            <h2>Update Item</h2>
            <form action="/inventory/update/{{$item->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" id="category_id" name="category_id" required>
                        <option value="" disabled selected>Select a category</option>
                        @foreach($categories as $id => $category_name)
                            <option value="{{ $id }}">
                                {{ $category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="item_name" name="name" value="{{ old('name', $item->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $item->price) }}" required>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $item->quantity) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
@endsection
