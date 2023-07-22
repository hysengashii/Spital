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
      <div class="p-0 m-0 row proBanner" id="proBanner">
        <div class="p-0 m-0 col-md-12">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="border-0 btn me-2 buy-now-btn">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="text-white mdi mdi-home me-3"></i></a>
              <button id="bannerClose" class="p-0 border-0 btn">
                <i class="text-white mdi mdi-close me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
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
