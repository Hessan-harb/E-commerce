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
    <base href="/public">
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

                    <div class="container justify-content-center ">
                        <h2 style="font-size: 30px;" class="text-center">Send Email To: {{$order->email}}</h2>
                    </div><br><br>

                    
                    <div style="padding-left: 35%; padding-top: 30px;">

                        <form action="{{url('send_user_email',$order->id)}}" method="post">
                            @csrf

                            <div >
                                <label for="">Email Greeting : &nbsp;</label>
                                <input style="color: black;" class="rounded-3" type="text" name="greeting">
                            </div><br>

                            <div >
                                <label for="">Email Firstline : &nbsp;</label>
                                <input style="color: black;" class="rounded-3" type="text" name="firstline">
                            </div><br>

                            <div >
                                <label for="">Email Body : &nbsp;</label>
                                <input style="color: black;" class="rounded-3" type="text" name="body">
                            </div><br>

                            <div >
                                <label for="">Email Button Name : &nbsp;</label>
                                <input style="color: black;" class="rounded-3" type="text" name="button">
                            </div><br>

                            <div >
                                <label for="">Email Url : &nbsp;</label>
                                <input style="color: black;" class="rounded-3" type="text" name="url">
                            </div><br>

                            <div >
                                <label for="">Email Lastline : &nbsp;</label>
                                <input style="color: black;" class="rounded-3" type="text" name="lastline">
                            </div><br>

                            <div >
                                <input class="btn btn-primary bg-primary" type="submit" value="Sent Mail">
                            </div><br>

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