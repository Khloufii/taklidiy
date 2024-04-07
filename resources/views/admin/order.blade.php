

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align: center ;
            padding-top: 40px;

        }

        .h2_font{
            text-align: center;
            font-size: 40px;
            padding-top:20px;
            font-family: bold; 
        }
        .cnter{
          margin: auto;
          width: 70%;
          text-align: center;
          /* padding-top: 50px; */
          border: 3px solid white;
        }
        .th_color{
            background: skyblue;
        }
        .img_size{
            width:120px;
            height: 110px;
        }
        /*.th_deg{
            padding: 30px;
        }
        .div_tab{
            width: 100px;
            margin-right: 56px;
        } */
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->

        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
                                <div class="div_center">

                                    @if(session()->has('message'))

                                    <div class='alert alert-success'>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                        {{session()->get('message')}}
                                    </div>

                                    @endif
                                </div>
                

                <h2 class="h2_font">show products</h2>
     
            <table  class="cnter">
              @csrf
              <tr class="th_color">
                <th class="th_deg">name</th>
                <th class="th_deg">email</th>
                <th class="th_deg">phone</th>
                <th class="th_deg">address</th>
                <th class="th_deg">product_title</th>
                <th class="th_deg">descount price</th>
                <th class="th_deg">quantity</th>
                <th class="th_deg">price</th>
                <th class="th_deg">payment_status</th>
                <th class="th_deg">delivery_status</th>
                <th class="th_deg">action</th>
              </tr>
              @foreach($orders as $order)
              <tr class="font_size">
                <td>{{$order->name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td>
                <img class="img_size" src="/product/{{$order->image}}">    
                </td><td>
                @if ($order->delivery_status=='processing')
                   
                  <a onclick="return confirm('are you shour to delete this')" class="btn btn-primary" href="{{url('delivered',$order->id)}}">delivered</a>
                
                @else
                    <p style="color: #00ff15;">delivered</p>
                @endif
                </td> 
                
              </tr>
              @endforeach
            </table>
        
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>