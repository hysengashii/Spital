<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.css')
      </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper ">
        <div class="container"style="padding:100px">

            <table class="table">
                <tr style="background-color:rgb(7, 7, 22) " align="center">
                    <th style="padding: 10px">Doctor Name</th>
                    <th style="padding: 10px">Phone</th>
                    <th style="padding: 10px">Speciality</th>
                    <th style="padding: 10px">Room No</th>
                    <th style="padding: 10px">Image</th>
                    <th style="padding: 10px">Delete</th>
                    <th style="padding: 10px">Update</th>

                </tr>

                @foreach ($data as $doctor)


                <tr align="center" style="background-color:rgb(247, 203, 203); color:black;">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->room}}</td>
                    <td><img src="doctorimage/{{$doctor->image}}" alt="" style="width: 100px; height:100px"></td>

                    <td><a onclick="return confirm('Are you sure to delete this?')" href="{{url('deletedoctor',$doctor->id)}}" class="btn btn-danger">Delete</a></td>
                    <td><a href="{{url('updatedoctor',$doctor->id)}}" class="btn btn-primary">Update</a></td>

                </tr>

                @endforeach
            </table>
            </div>
        </div>


       @include('admin.script')
  </body>
</html>



