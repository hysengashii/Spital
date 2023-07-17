<div class="page-section">
    <div class="container">
      <h1 class="mb-5 text-center wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">



        @foreach ($doctor as $doctors)


        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="mb-0 text-xl">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>
