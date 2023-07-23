<!DOCTYPE html>
<html lang="en">
    <head>

        <base href="/public">


        @include('admin.css')

        <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
        </style>
    </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper">
       <div class="container" align="center" style="padding-top:100px">


        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
                {{session()->get('message')}}
            </div>
        @endif


        <form action="{{url('sendemail',$data->id)}}" method="post"">
            @csrf

            <div style="padding:15px">
                <label for="">Greeting</label>
                <input type="text" name="greeting" style="color: black" id="" required>
            </div>

            <div style="padding:15px">
                <label for="">Body</label>
                <input type="text" name="body" style="color: black" id="" required>
            </div>



            <div style="padding:15px">
                <label for="">Action Text</label>
                <input type="text" name="actiontext" style="color: black" id=""  required>
            </div>

            <div style="padding:15px">
                <label for="">Action URL</label>
                <input type="text" name="actionurl" style="color: black" id=""  required>
            </div>

            <div style="padding:15px">
                <label for="">End Part</label>
                <input type="text" name="endpart" style="color: black" id=""  required>
            </div>


            <div style="padding:15px">
                <input type="submit" class="btn btn-success" required >
            </div>



        </form>
       </div>
      </div>


       @include('admin.script')
  </body>
</html>
