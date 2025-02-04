<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <div class="container">
        <br><br><br><br>
        <div class="row">

        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <button class="btn btn-md btn-success">Add Inventory</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Category</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Computer</td>
                            <td>Lenovo</td>
                            <td>80</td>
                            <td>50000</td>
                            <td>
                                <button class="btn btn-md btn-info">Edit</button>
                                <button class="btn btn-md btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
   </div>
</body>
<script src = https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js>
</html>