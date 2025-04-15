@extends('template.main')

@section('title', 'Inventory')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title m-0">Inventory</h4>
                            <!-- <button class="btn btn-success">Add Inventory</button> -->
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Category</th>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$item->category->category_name}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>
                                                <a href="/inventory/update/{{$item->id}}" class="btn btn-info btn-sm mr-1">Edit</button>
                                                <a href="/inventory/update/{{$item->id}}" class="btn btn-danger btn-sm mr-1">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
