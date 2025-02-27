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
      <link rel="shortcut icon" href="images/faviconn.png" type="">
      <title>TAKLIDIY</title>
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
         <!-- slider section -->
        
            @include('home.slider')

         <!-- end slider section -->
      </div>
      <!-- why section -->
      
        @include('Home.why')

      <!-- end why section -->
      
      <!-- arrival section -->
        @include('home.new_arival')
      <!-- end arrival section -->
      
      <!-- product section -->
      <div id="viewe">
                 @include('home.product')
      </div>
      <!-- end product section -->

      <!-- subscribe section -->
        @include('home.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
        @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
      <div id="footer">
                 @include('home.footer')

      </div>
      <!-- footer end -->
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