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
                        <h2 style="font-size: 30px;" class="text-center">Add Category</h2>

                        <form action="{{url('/add_category')}}" method="post">
                            @csrf
                            <input type="text" name="category" placeholder="Write Category Name"><br><br>
                            <input type="submit" class="btn btn-primary bg-primary" value="Add Category">
                        </form>
                    </div>
                    
                 </div>
                
                 <div class="container">
                    <table class="table table-dark table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                            <th >{{$data->category_name}}</th>
                            <td>
                                <a href="{{url('delete_category',$data->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                           
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                 </div>
                 
            </div>

			
		
		</div>
	</div>

	<!-- core:js -->
	@include('admin.script')
	<!-- End custom js for this page -->

</body>
</html>    