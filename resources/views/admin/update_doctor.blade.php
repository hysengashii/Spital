<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">
        @include('admin.css')

        <style>
            label{
                display: inline-block;
                width: 200px;
            }
        </style>
      </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">

      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')



      <div class="container-fluid page-body-wrapper ">


        <div class="container" align="center" style="padding:100px">

            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
                {{session()->get('message')}}
            </div>
        @endif

        
            <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data" style="padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
                @csrf
                <div style="margin-bottom: 10px;">
                  <label for="doctorName">Doctor Name</label>
                  <input type="text" id="doctorName" name="name" value="{{$data->name}}" style="color: black; padding: 5px;">
                </div>

                <div style="margin-bottom: 10px;">
                  <label for="doctorPhone">Doctor Phone</label>
                  <input type="number" id="doctorPhone" name="number" value="{{$data->phone}}" style="color: black; padding: 5px;">
                </div>

                <div style="margin-bottom: 10px;">
                  <label for="doctorSpeciality">Speciality</label>
                  <input type="text" id="doctorSpeciality" name="speciality" value="{{$data->speciality}}" style="color: black; padding: 5px;">
                </div>

                <div style="margin-bottom: 10px;">
                  <label for="roomNo">Room No</label>
                  <input type="text" id="roomNo" name="room" value="{{$data->room}}" style="color: black;  padding: 5px;">
                </div>

                <div style="margin-bottom: 10px;">
                  <label for="doctorImage">Image</label>
                  <br>
                  <img height="150" width="150" src="doctorimage/{{$data->image}}" alt="">
                </div>

                <div style="margin-bottom: 10px;">
                    <label for="">Change Image</label>
                    <input type="file" name="file">
                </div>

                <button type="submit" style="padding: 8px 16px; background-color: #007bff; color: #fff; border: none; border-radius: 4px;">Submit</button>
              </form>


        </div>


      </div>


       @include('admin.script')
  </body>
</html>
