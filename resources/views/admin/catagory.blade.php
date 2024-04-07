

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
        .input_color{
          color: black;
        }
        .cnter{
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 30px;
          border: 3px solid white;
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

                <h2 class="h2_font">add catagory</h2>
                
                <form action="{{url('/add_catagory')}}" method="POST">

                  @csrf
                  <input type="text" class="input_color" name="catagory" placeholder="writh catagory name">
                  <input type="submit" class="btn btn-primary" name="submit" value="add catagory">

                </form>
            </div>


            <table class="cnter">
              <tr>
                <td>catagory name</td>
                <td>action</td>
              </tr>
              @foreach($data as $data)
              <tr>
                <td>{{$data->catagory_name}}</td>
                <td>
                  <a onclick="return confirm('are you shour to delete this')" class="btn btn-danger" href="{{url('delate_catagory',$data->id)}}">delete</a>
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