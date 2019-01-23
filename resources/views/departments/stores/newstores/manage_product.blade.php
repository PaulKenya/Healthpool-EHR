@extends('layouts.master')
@section('content')
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventory Management System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/manage.js"></script>
</head>
<body>
<!-- Navbar -->

<br/><br/>
<div class="container">
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Added Date</th>

                </tr>
                </thead>
                <tbody>
                @if(isset($manage_product))
                    @foreach($manage_product as $manage_products)
                        <tr>
                            <td>{{ $manage_products->id }}</td>
                            <td>{{ $manage_products->product_name }}</td>
                            <td>{{ $manage_products->select_cat }}</td>
                            <td>{{ $manage_products-> select_brand}}</td>
                            <td>{{ $manage_products->product_price }}</td>
                            <td>{{ $manage_products-> product_qty}}</td>
                            <td>{{ $manage_products->added_date }}</td>


                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </div>
</div>





</body>
</html>
@endsection