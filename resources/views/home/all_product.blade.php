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
      <title>Store</title>
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
         
      

      
     
      
      <!-- product section -->
      @include('home.product_view')
      <!-- end product section -->

      <!-- comment and reply system -->

      <div style="text-align: center; padding-bottom: 30px; background-color: ;" >
         <h1 style="font-size: 30px; text-align: center; padding-top: 20px; padding-bottom: 20px;">Comments</h1>
         <form action="{{url('add_comment')}}" method="post">
            @csrf
            <textarea name="comment" class="rounded-2" style="height: 150px; width: 500px;  border-radius: 20px;" placeholder="Comment Something Here"></textarea><br>
            <input type="submit" class="btn btn-primary" value="Comment">
         </form>
      </div>
      <div style="padding-left: 20%;">
         <h1 style="font-size: 20px; padding-bottom: 20px;">All Comments</h1>
         @foreach($comment as $comment)
         <div>
            <b>{{$comment->name}}</b>
            <p>{{$comment->comment}}</p>
            <a href="javascript::void(0)" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
            @foreach($reply as $rep)
            @if($rep->comment_id==$comment->id)
            <div style="padding-left: 3%; padding-bottom: 10%; padding-bottom: 10%">

               <b>{{$rep->name}}</b>
               <p>{{$rep->reply}}</p>
               <a href="javascript::void(0)" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>

            </div>
            @endif
            @endforeach
         </div><br>

         @endforeach
         
         <div style="display: none;" class="replyDiv">
            <form action="{{url('add_reply')}}" method="post">
               @csrf
               <input type="text" id="commentId" name="commentId" hidden>
               <textarea name="reply"  style="height: 50px; width: 400px;  border-radius: 20px;"  placeholder="  Write...."></textarea><br>
               <button type="submit" class="btn btn-primary bg-primary">Reply</button>
               <a href="javascript::void(0)" class="btn" onclick="reply_close(this)">Close</a>
            </form>
         </div>
        

      </div>
      

      <!--end comment and reply system -->
 

    
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery --> 
         <script>
         function reply(caller){
            document.getElementById('commentId').value=$(caller).attr('data-Commentid')

            $('.replyDiv').insertAfter($(caller));
            $(".replyDiv").show();
         }

         function reply_close(caller){

           
            $(".replyDiv").hide();
         }
      </script>

<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>