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
                        <h2 style="font-size: 30px;" class="text-center">Show Order</h2>
                    </div><br>

                    <div>
                        <form action="{{url('search')}}" method="get">
                            @csrf
                            <input style="color: black;" class="rounded-2" type="text" name="search" placeholder="Search.....">&nbsp;
                            <input type="submit" value="Search" class="btn btn-outline-primary">
                        </form>
                    </div>

                    <div class="container mt-5">
                    <table class="table table-dark table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"> Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Product Title</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Delivery Status</th>
                                <th scope="col">Image</th>
                                <th scope="col">Delivered</th>
                                <th scope="col">Print PDF</th>
                                <th scope="col">Send Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($order as $order)
                            <tr>

                                <td>{{$order->name}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->product_title}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>{{$order->delivery_status}}</td>
                                <td>
                                   <img src="/prodcut/{{$order->image}}" alt="">
                                </td>
                                <td>
                                    @if($order->delivery_status=='processing')
                                    <a href="{{url('delivered',$order->id)}}" class="btn btn-primary">Delivered</a>
                                    @else
                                    <p style="color: brown;">Delivered</p>
                               
                                    @endif
                                </td>

                                <td>
                                    <a href="{{url('print_pdf',$order->id)}}" class="btn btn-primary">PDF</a>
                                </td>

                                <td>
                                    <a href="{{url('send_email',$order->id)}}" class="btn btn-primary">Send Mail</a>
                                </td>
                           
                            </tr>

                            @empty
<!-- to viedo 22 start -->
                            <tr>
                                <td colspan="16">No Data Found</td> 
                            </tr>
                            @endforelse
                            
                           
                        </tbody>
                    </table>
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