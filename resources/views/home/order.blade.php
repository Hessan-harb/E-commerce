<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
   
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <br><br>
         <div class="contanier mt-4 pt-7">
             <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">product Title</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Delivery Status</th>
                        <th scope="col">Image</th>
                        <th scope="col">Cancle Order</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order as $order)
                        <tr>
                        <th>{{$order->product_title}}</th>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img height="50" width="50" src="prodcut/{{$order->image}}" alt="">
                        </td>
                        <td>
                            @if($order->delivery_status=='processing')
                            <a href="{{url('cancel_order',$order->id)}}" class="btn btn-primary">Cancel Order</a>
                            @else
                            <p style="color: brown;">Not Allowed</p>
                       
                            @endif
                        </td>
                        </tr>
                        <tr>
                         @endforeach
                       
                    </tbody>
             </table>
             </div>
      </div>

   
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>