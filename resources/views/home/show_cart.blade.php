<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
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
      <style type="text/css">
        .div_center{
            text-align: center ;
            padding-top: 40px;
        }

        .h2_font{
            text-align: center;
            font-size: 40px;
            padding-top:20px; 
        }
        .cnter{
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 40px;
          border: 3px solid white;
        }
        .th_color{
            background: skyblue;
        }
        .img_size{
            width:120px;
            height: 110px;
        }
        .th_deg{
            padding: 30px;
        }
    </style>
   </head>
   <body>
      <div class="hero_area">
         
         <!-- header section strats -->
        
            @include('home.header')

         <!-- end header section -->





         <div class="main-panel">
            <div class="content-wrapper">
              <div class="div_center">
  
                  @if(session()->has('message'))
  
                    <div class='alert alert-success'>
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                      {{session()->get('message')}}
                    </div>
  
                  @endif
  
                  <h2 class="h2_font">show products</h2>
              </div>
  
  
              <table class="cnter">
                @csrf
                <tr class="th_color">
                  <th class="th_deg">product title</th>
                  <th class="th_deg">Quantity</th>
                  <th class="th_deg">Price</th>
                  <th class="th_deg">image</th>
                  <th class="th_deg">delete</th>
                </tr>
                @php
                  $totale_peice = 0 ;   
                @endphp
                @foreach($carts as $cart)
                <tr class="font_size">
                  <td>{{$cart->product_title}}</td>
                  <td>{{$cart->quantity}}</td>
                  <td>{{$cart->price}}</td>
                  
                  <td>
                  <img class="img_size" src="/product/{{$cart->image}}" >    
                  </td>
                  <td>
                    <a onclick="return confirm('are you shour to delete this')" class="btn btn-danger" href="{{url('delete_cart',$cart->id)}}">delete this</a>
                  </td>
                
                </tr>
                @php
                    $totale_peice = $totale_peice+ $cart->price;  
                @endphp
                @endforeach
              </table>
              
  
  
            </div>
            <div>
                <h2 class="h2_font">totale peice: {{$totale_peice}}</h2>
                <h2 class="h2_font">_______________</h2>
              </div>
            <div style="text-align: center;">
                <h1 style="font-size: 25px; padding-bottom:15px;">proceed to order</h1>
                <a href="{{url('cach_order')}}" class="btn btn-danger">cash on delivery</a>
                <a href="{{url('stripe',$totale_peice)}}" class="btn btn-danger">Pay using card</a>
            </div>
        </div>









         <!-- slider section -->
        
         <!-- end slider section -->
      </div>
      <!-- why section -->
      
     
        @include('home.footer')
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