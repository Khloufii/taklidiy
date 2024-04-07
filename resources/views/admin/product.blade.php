

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
            font-size: 40px;
            padding-bottom: 40px; 
        }
        .text_color{
            color: black;
            padding-bottom: 20px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
        .div_desing{
            padding-bottom: 20px;
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

                <h2 class="h2_font">add product</h2>

                <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="div_desing">
                    <label >Peoduct Title</label>
               <input class="text_color" type="text" name="title" placeholder="whrit title product" required>
                </div>
                <div class="div_desing">
                    <label >Peoduct description</label>
               <input class="text_color" type="text" name="description" placeholder="whrit description product"  required>
                </div>
                <div class="div_desing">
                    <label >Peoduct price</label>
               <input class="text_color" type="number" name="price" placeholder="whrit price product" required>
                </div>
                <div class="div_desing">
                    <label >discount price</label>
               <input class="text_color" type="number" name="discount_price" placeholder="whrit discount price product" required>
                </div>
                <div class="div_desing">
                    <label >Peoduct quantity</label>
               <input class="text_color" type="number" min="0" name="quantity" placeholder="whrit quantity product" required>
                </div>
                <div class="div_desing">
                    <label >Peoduct catagory</label>
                    <select class="text_color"  name="catagory" id=""  required>
                        <option value="" selected="">add catagory</option>
                        @foreach($catagorys as $catagory)
                        <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="div_desing">
                    <label >Peoduct image</label>
               <input type="file" name="image" required>
                </div>
                <div class="div_desing">
                    <input type="submit" value="add product" class="btn btn-primary">
                </div>

                </form>
               
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>