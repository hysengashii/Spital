<!DOCTYPE html>
<html lang="en">
    <head>
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


        <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div style="padding:15px">
                <label for="">Doctor Name</label>
                <input type="text" name="name" style="color: black" id="" placeholder="Write te name" required>
            </div>

            <div style="padding:15px">
                <label for="">Phone</label>
                <input type="number" name="number" style="color: black" id="" placeholder="Write te number" required>
            </div>

            <div style="padding:15px">
                <label for="">Speciality</label>
                <select name="speciality" id="" style="color:black; width:200px;" required>
                    <option value="">--Select--</option>
                    <option value="skin">Skin</option>
                    <option value="heart">Heart</option>
                    <option value="eye">Eye</option>
                    <option value="nose">Nose</option>
                </select>
            </div>

            <div style="padding:15px">
                <label for="">Room No</label>
                <input type="number" name="room" style="color: black" id="" placeholder="Write the room number" required>
            </div>

            <div style="padding:15px">
                <label for="">Doctor Image</label>
                <input type="file" name="file" >
            </div>

            <div style="padding:15px">
                <label for="">Doctor Image</label>
                <input type="submit" class="btn btn-success" required >
            </div>



        </form>
       </div>
      </div>


       @include('admin.script')
  </body>
</html>
