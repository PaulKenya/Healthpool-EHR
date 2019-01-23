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
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
<!-- Navbar -->
<div class="card">
    <div class="card-header">
        <h3>Healthpool Stores</h3>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Categories</h4>
                            <p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
                            <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
                            <div class="modal fade" id="form_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add categories</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('manage_categories_post')}}" method="post" >{!! csrf_field() !!}
                                                <form id="category_form" onsubmit="return false">

                                                    <div class="form-group">
                                                        <label>Category Name</label>
                                                        <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp" placeholder="Enter email">
                                                        <small id="cat_error" class="form-text text-muted"></small>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>

                                                </form>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('manage_categories')}}" class="btn btn-primary">Manage</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Brands</h4>
                            <p class="card-text">Here you can manage your brand and you add new brand</p>
                            <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
                            <!-- Modal -->
                            <div class="modal fade" id="form_brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Brand</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('manage_brand_post')}}" method="post" >{!! csrf_field() !!}
                                                <form id="brand_form" onsubmit="return false">
                                                    <div class="form-group">
                                                        <label>Brand Name</label>
                                                        <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter Brand Name">
                                                        <small id="brand_error" class="form-text text-muted"></small>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                </form>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('manage_brand')}}" class="btn btn-primary">Manage</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Products</h4>
                            <p class="card-text">Here you can manage your prpducts and you add new products</p>
                            <a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
                            <!-- Modal -->
                            <div class="modal fade" id="form_products" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add new products</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('manage_products_post')}}" method="post" >{!! csrf_field() !!}
                                                <form id="product_form" onsubmit="return false">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Date</label>
                                                            <input type="date" class="form-control" name="added_date" id="added_date" value="<?php echo date("Y-m-d"); ?>" readonly/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Product Name</label>
                                                            <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select class="form-control" id="select_cat" name="select_cat" required>
                                                            @if(isset($manage_categories))
                                                                @foreach($manage_categories as $manage_categori)
                                                                    <option value={{ $manage_categori->category_name }}>{{ $manage_categori->category_name }}</option>

                                                                @endforeach
                                                            @endif


                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Brand</label>
                                                        <select class="form-control" id="select_brand" name="select_brand" required>
                                                            @if(isset($manage_brand))
                                                                @foreach($manage_brand as $manage_brands)
                                                                    <option value={{ $manage_brands->brand_name }}> {{ $manage_brands->brand_name }} </option>

                                                                @endforeach
                                                            @endif


                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Product Price</label>
                                                        <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Enter Price of Product" required/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Quantity</label>
                                                        <input type="number" class="form-control" id="product_qty" name="product_qty" placeholder="Enter Quantity" required/>
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Add Product</button>
                                                </form>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('manage_product')}}" class="btn btn-primary">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<p></p>
<p></p>
</body>
</html>
@endsection

