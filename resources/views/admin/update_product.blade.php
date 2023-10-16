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
<base href="/public">
	<!-- core:css -->
	@include('admin.css')

    <style>
        label{
            font-size: 20px;
            display: inline-block;
            width: 200px;
        }
    </style>
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
                        <h2 style="font-size: 30px;" class="text-center">Edit product</h2>
                            <br><br>


                    <form action="{{url('/update_product_confirm',$product->id)}}" method="post" 
                    enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="">Product title: &nbsp; </label>
                            <input value="{{$product->title}}" class="text-gray-700 rounded-3" type="text" name="title" placeholder="Title" required=" ">
                        </div>
                        <br>

                        <div>
                            <label for="">Product Description: &nbsp; </label>
                            <input value="{{$product->description}}" class="text-gray-700 rounded-3" type="text" name="description" placeholder="description" required=" ">
                        </div>
                        <br>

                        <div>
                            <label for="">Product Price: &nbsp; </label>
                            <input value="{{$product->price}}" class="text-gray-700 rounded-3" type="number" name="price" placeholder="price" required=" " >
                        </div>
                        <br>

                        <div>
                            <label for="">Discount Price : &nbsp; </label>
                            <input value="{{$product->discount_price}}" class="text-gray-700 rounded-3" type="number" min="0" name="discount_price"  placeholder="Discount">
                        </div>
                        <br>

                        <div>
                            <label for="">Product Quantity: &nbsp; </label>
                            <input value="{{$product->quantity}}" class="text-gray-700 rounded-3" type="number" min="0" name="quantity" placeholder="quantity" required=" ">
                        </div>
                        <br>

                        <div>
                            <label for="">Product Category: &nbsp; </label>
                            <select name="category" id="" class="text-gray-700 rounded-3" required=" ">
                            <option value="{{$product->category}}" selected>{{$product->category}}</option>

                            @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                             @endforeach   
                            <!--   -->
                            </select>
                        </div>
                        <br>

                        <div>
                            <label for="">Old Product Image: &nbsp; </label>
                            <img height="100" width="100" src="/prodcut/{{$product->image}}" alt="">
                        </div>
                        <br><br>

                        <div>
                            <label for="">Change Product Image: &nbsp; </label>
                            <input type="file" name="image" >
                        </div>
                        <br>

                        <div>
                            <input type="submit" value="Update Product" class="btn btn-primary bg-primary" >
                        </div>
                        <br>

    </form>
                       




                    </div>
	            </div>
            </div>

		
		</div>
	</div>

	<!-- core:js -->
	@include('admin.script')
	<!-- End custom js for this page -->

</body>
</html>    