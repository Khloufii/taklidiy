

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

                <h2 class="h2_font">show products</h2>
            </div>


            <table class="cnter">
              @csrf
              <tr class="th_color">
                <th class="th_deg">product title</th>
                <th class="th_deg">Description</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">Catagory</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">descount price</th>
                <th class="th_deg">image</th>
                <th class="th_deg">delete</th>
                <th class="th_deg">edite</th>
              </tr>
              @foreach($products as $product)
              <tr class="font_size">
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->catagory}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount_price}}</td>
                <td>
                <img class="img_size" src="/product/{{$product->image}}">    
                </td>
                <td>
                  <a onclick="return confirm('are you shour to delete this')" class="btn btn-danger" href="{{url('delete_product',$product->id)}}">delete</a>
                </td>
                <td>
                  <a  class="btn btn-success" href="{{url('edit_product',$product->id)}}">edit</a>
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