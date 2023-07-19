<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gethsemane District HQ</title>
        <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
       
  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Core theme CSS (includes Bootstrap)
   <link href="css/styles.css" rel="stylesheet" />
-->
     
         <!-- Custom styles for this template -->
  <link href="/css/clean-blog.min.css" rel="stylesheet">

        <link href="/css/geths.css" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!--<link href="css/mdb.min.css" rel="stylesheet" />-->
		<link rel="stylesheet" type="text/css" href="css/evo-calendar.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="css/evo-calendar.midnight-blue.min.css">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        
		
    </head>
    <body>
    <x-nav></x-nav>
        <!-- Page Header -->
  <header class="masthead" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6),rgba(0,0,0,0.7)), url('assets/img/church.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class=" col-md-12 mx-auto">
          <div class="site-heading">
            <h1 class=' '>Cherubim And Seraphim Movement church </h1>
            <span class="subheading">Gethsemane District HQ</span>
            <a class="btn btn-default text-light shadow animate__animated animate__infinite animate__slower animate__wobble" href="#our-location">Find Us</a>
            
          <div class="marquee mt-5">
              <div class="track">
                  <div class="content h4 text-warning">
                      @if($announcements!=null)
                      Announcement: 
                      @endif
                  {{$announcements}}
                  </div>
              </div>
          </div>
          
          
        </div>
      </div>
    </div>
  </header>
  
      <!-- Carousel-Starts  -->
    <div id="carouselExampleControls" class="carousel slide carousel-fade pic" data-ride="carousel" data-interval="2500">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/choir.jpeg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="assets/img/3.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="assets/img/4.jpg" class="d-block w-100" >
    </div>
     <div class="carousel-item">
      <img src="assets/img/5.jpg" class="d-block w-100" >
    </div>
     <div class="carousel-item">
      <img src="assets/img/8.jpg" class="d-block w-100" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Carousel-Ends  -->


  <div data-aos="flip-up">
<div class="look animate__animated animate__shakeY">
	<section>
		<div class="ife">
			<div class="bless">
				<div class="content">
					<h3>Baba Aladura</h3>
						<div class="imgbx"><img src="assets/img/baba1.jfif"></div>
							<div class="contentbx">
							<h3><br><span class="font-weight-bold">Most Rev. (Dr) Prophet Adefila .A. Samuel JP</span></h3>
						</div>
				</div>
			</div>
		</div>
	</section>
    

<section>
<div class="ife">
<div class="bless">
<div class="content">
	<h3>District Chairman</h3>
<div class="imgbx"><img src="assets/img/chairman.jpg"></div>
<div class="contentbx">
<h3><br><span class="font-weight-bold">Special Apostle Pastor P.A Ogundele JP</span></h3>
</div>
</div>
</div>
</div>

</section>


<section>
<div class="ife">
<div class="bless">
<div class="content">
	<h3>Leader In Charge</h3>
<div class="imgbx"><img src="assets/img/leader.jpeg"></div>
<div class="contentbx">
<h3><br><span class="font-weight-bold">Special Apostle Pastor F.K. Odudare JP</span></h3>
</div>
</div>
</div>
</div>

</section>
<section>
    <div class="ife">
        <div class="bless">
            <div class="content">
                <h3>Church Secretatry</h3>
                <div class="imgbx"><img src="assets/img/secretary.jpeg"></div>
                <div class="contentbx">
                    <h3><br/><span class="font-weight-bold">Most Snr Apostle B.A. Adelore</span></h3>

                </div>
            </div>
        </div>
    </div>

</section>
</div>
</div>
<div class="animate__animated animate__fadeInRightBig">
<div class="container my-5 ">
<div class="d-flex justify-content-center align-items-center my-5">
        <div>
            <h3 class="display-4">Weekly Activities</h3>
            <hr>
        </div>
    </div>
    @foreach($weekly as $day)
    <div class="p-2 row shadow-sm my-3" data-aos="fade-right">
        <div class="col-md-2 d-flex justify-content-center align-items-center border-right">
            <i class="fa fa-calendar-alt text-info fa-3x "></i>
        </div>
        <div class="col-md-10">
        <h6 class="p-0 my-1  text-dark ">{{$day->period}}</h6>
        <p class="p-0 my-0">{{$day->name}}</p>
        <span class="rounded-lg btn text-info shadow" >
           <i class="far fa-clock"></i> {{$day->time}}</span>
        </div>
        
    </div>
    @endforeach

</div>
</div>
<div class="container my-5">
    <div class="d-flex justify-content-center align-items-center my-5">
        <div>
            <h3 class="display-4">Other Activities</h3>
            <hr>
        </div>
    </div>
    @foreach($others as $day)
    <div class="p-2 row shadow-sm my-3">
        <div class="col-md-2 d-flex justify-content-center align-items-center border-right">
            <i class="fa fa-calendar-alt text-info fa-3x "></i>
        </div>
        <div class="col-md-10">
        <h6 class="p-0 my-1 text-dark">{{$day->period}}</h6>
        <p class="p-0 my-0">{{$day->name}}</p>
        <span class="rounded-lg btn text-info shadow" >
           <i class="far fa-clock"></i> {{$day->time}}</span>
        </div>
        
    </div>
    @endforeach

</div>

		<div class="container my-5" data-aos="zoom-out-right">
			<div id="calendar"></div>
		</div>
		
		<div id="" class="d-flex justify-content-center align-items-center my-5">
        <div>
            <h3 class="display-4" id="our-location">Our Location</h3>
            <hr>
        </div>
        </div>
		
		 <div id="map" style="height: 500px;"></div>
        <x-footer />      
		<!-- Bootstrap core JS-->
		<script src="js/app.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/evo-calendar.min.js"></script>
		
		<script>
            document.addEventListener('DOMContentLoaded', cal);
function cal(){
    var my_calendar= null;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			my_calendar = JSON.parse(this.responseText);
             // initialize your calendar, once the page's DOM is ready
        $(document).ready(function() {
           $('#calendar').evoCalendar({
		   
				theme: "Midnight Blue",
				todayHighlight: true,
				calendarEvents: my_calendar
			})
        })
			console.log(this.responseText);
		}

	};
	xhttp.open("GET", "/api/calendar", true);

	xhttp.send();
}
        
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>
        <!-- Map script -->
         <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
         <script> 
                     (startMap());
            
            function startMap() {
                const latitude = 9.149254; 
                const longitude = 7.339901;
                getMap(latitude, longitude);
              }
              function error() {
                console.log("Unable to retrieve location");
              }
            
              function getMap(latitude, longitude) {
                const map = L.map("map").setView([latitude, longitude], 5);
                L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png").addTo(map);
                L.marker([latitude, longitude]).addTo(map);
              }
         </script>
		<!-- Static JS -->
		<!--<script src="js/mdb.min.js"></script>-->
       <!-- <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

        <!-- Third party plugin JS-->
        
        <!-- Core theme JS
        <script src="js/scripts.js"></script>
        <script src="js/mdb.min.js"></script>-->
    </body>
</html>
