<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  </head> -->
@extends('template.main')

@section('title', 'Add Item')

@section('content')
  <body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
      <div class="row justify-content-center w-100">
        <div class="col-sm-12 col-md-8 col-lg-5">
          <div class="card shadow-lg p-4 position-relative">
            <button class="btn btn-primary position-absolute top-0 start-0 mb-3">Back</button>

            <form class="mt-5">
              <div class="mb-3 row align-items-center">
                <label for="category" class="col-4 col-form-label text-end">Categories:</label>
                <div class="col-8">
                  <select class="form-select" id="category" required>
                    <option selected>Select Category</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                    <option value="3">Category 3</option>
                  </select>
                </div>
              </div>

              <div class="mb-3 row align-items-center">
                <label for="itemName" class="col-4 col-form-label text-end">Item Name:</label>
                <div class="col-8">
                  <input type="text" class="form-control" id="itemName" placeholder="Enter item name" required/>
                </div>
              </div>

              <div class="mb-3 row align-items-center">
                <label for="price" class="col-4 col-form-label text-end">Price:</label>
                <div class="col-8">
                  <input type="number" class="form-control" id="price" placeholder="Enter price" required/>
                </div>
              </div>

              <div class="mb-3 row align-items-center">
                <label for="quantity" class="col-4 col-form-label text-end">Qty:</label>
                <div class="col-8">
                  <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" required/>
                </div>
              </div>

              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary px-4">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>
