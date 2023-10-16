<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	@include('admin.css')
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		
    @include('admin.sidebar')
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			@include('admin.header')
			<!-- partial -->

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">

                @if(session()->has('message'))
                    <div class="alert alert-warning alert-dismissible fade show text-white" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
                    {{session()->get('message')}}

                    </div>

                @endif

                    <div class="container justify-content-center ">
                        <h2 style="font-size: 30px;" class="text-center">All product</h2>
                    </div>
                    <br><br>

                    <div class="container pt-6">
                        <table class="table table-dark table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Product Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Prodcut Image</th>
                                <th scope="col">Delete </th>
                                <th scope="col">Edit </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $product)
                                <tr>
                                <td>{{$product->title}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->discount_price}}</td>
                                <td>
                                    <img src="/prodcut/{{$product->image}}" alt="">
                                </td>
                                <td><a class="btn btn-danger" href="{{url('delete_product',$product->id)}}">
                                    Delete
                                </a></td>
                                <td><a class="btn btn-primary" href="{{url('update_product',$product->id)}}">
                                    Edit
                                </a></td>
                                </tr>

                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

	<!-- core:js -->
	@include('admin.script')
	<!-- End custom js for this page -->

</body>
</html>    