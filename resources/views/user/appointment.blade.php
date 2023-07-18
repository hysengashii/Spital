<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="post">

        @csrf
        <div class="mt-5 row ">
          <div class="py-2 col-12 col-sm-6 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="py-2 col-12 col-sm-6 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="py-2 col-12 col-sm-6 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="py-2 col-12 col-sm-6 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

                <option value="">---Select Doctor---</option>
                @foreach ($doctor as $doctors )


              <option value="{{$doctors->name}}">{{$doctors->name}} ---Speciality--- {{$doctors->speciality}}</option>

              @endforeach
            </select>
          </div>
          <div class="py-2 col-12 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Number..">
          </div>
          <div class="py-2 col-12 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="mt-3 btn btn-primary wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->
