@extends('layouts.app')
@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js"></script>

</head>
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');" {{ $app = App\Models\settings::latest()->first() }}>
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="text-contant">
               <h2>
                  <!-- <span class="center"><img src="{{ asset('images/icon-logo.png') }}" alt="#"></span> -->
                  <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Life Care", "We Care Your Health", "We are Expert!" ]'>
                  <span class="wrap"></span>
                  </a>
               </h2>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="time-table" class="time-table-section">
   <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time one" style="background:#2895f1;">
               <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
               <h3>Emergency Case</h3>
               <p>Rapid response for emergency cases, providing immediate and expert care when needed most.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time middle" style="background:#0071d1;">
               <span class="info-icon"><i class="fa-solid fa-clock"></i></span>
               <h3>OPD Hours</h3>
               <div class="time-table-section">
                  <ul>
                     <li><span class="left">Monday - Friday</span><span class="right">8.00 – 18.00</span></li>
                     <li><span class="left">Saturday</span><span class="right">8.00 – 16.00</span></li>
                     <li><span class="left">Sunday</span><span class="right">8.00 – 13.00</span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time three" style="background:#0060b1;">
               <span class="info-icon"><i class="fa fa-calendar-alt" aria-hidden="true"></i></span>
               <h3>Hospital Timetable</h3>
               <p>Convenient Hospital timetable, offering flexible hours for your healthcare needs.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="about" class="section wow fadeIn">
   <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="{{ asset('images/icon-logo.png') }}" alt="#"></span>
         <h2>About Us</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>What We Do</h4>
               <h2>Hospital Service</h2>
               <p class="lead">Our hospital offers a wide range of premium healthcare services to ensure that all your medical needs are met with the highest standards of care. Our Emergency Services are available 24/7, providing immediate medical attention for critical situations, ensuring rapid response and expert zcare when every second counts. </p>
                <p class="lead"> For patients who do not require overnight hospitalization, 
                  our Outpatient Services offer consultations, diagnostic tests,
                    and treatment plans, all designed to cater to your individual 
                    healthcare needs. For those who require more extensive care, 
                    we provide Inpatient Services, offering comfortable, private
                     rooms with continuous medical supervision, ensuring your 
                     well-being throughout your stay.</p>
               <a href="about" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
            </div>
            <!-- end messagebox -->
         </div>
         <!-- end col -->
         <div class="col-md-6">
            <div class="post-media wow fadeIn">
               <img src="images/about_03.jpg" alt="" class="img-responsive">
               <a href="https://youtu.be/Tl0ZAEJRYo0?si=V6RxigCUTnL-DQI1" data-rel="prettyPhoto[gal]" class="playbutton" target="_blank"><i class="fa fa-play"></i>
               </a>
            </div>
            <!-- end media -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="hr1">
      <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_01.jpg" alt="" class="img-responsive">
               </div>
               <h3>Digital Control Center</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_02.jpg" alt="" class="img-responsive">
               </div>
               <h3>Hygienic Operating Room</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/relation.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/relation.jpg" alt="" class="img-responsive" id="img">
               </div>
               <h3>Compassionate Care</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/specialiestteam.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/specialiestteam.jpg" alt="" class="img-responsive" id="img1">
               </div>
               <h3>Expert Team</h3>
            </div>
            <!-- end service -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<div id="service" class="services wow fadeIn">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
             <div class="inner-services">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                      <h4>PREMIUM FACILITIES</h4>
                      <p>Top-tier care with advanced facilities, private rooms,
                         and 24/7 emergency services.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                      <h4>LARGE LABORATORY</h4>
                      <p>State-of-the-art laboratory equipped with 
                        advanced technology for accurate and timely diagnostics.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                      <h4>DETAILED SPECIALIST</h4>
                      <p>Highly skilled specialists offering in-depth expertise across
                         a wide range of medical fields.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                      <h4>CHILDREN CARE CENTER</h4>
                      <p>Compassionate care in a child-friendly environment, 
                        prioritizing your child's health and comfort.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                      <h4>FINE INFRASTRUCTURE</h4>
                      <p>Modern infrastructure designed for efficiency, comfort, 
                        and high-quality healthcare.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                      <h4>ANYTIME BLOOD BANK</h4>
                      <p>24/7 blood bank services, ensuring immediate 
                        availability for critical care.</p>
                   </div>
                </div>
             </div>
          </div>
          @livewire('appointmentform')
       </div>
    </div>
 </div>
 <!-- end section -->

<!-- doctor -->

<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
  <div class="container">

   <div class="heading">
         <span class="icon-logo"><img src="{{ asset('images/icon-logo.png') }}" alt="#"></span>
         <h2>The Specialist Doctors</h2>
      </div>

      <div class="row dev-list text-center">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
              <div class="widget clearfix">
                  <img src="images/Dr.-Aayushi-Choksi.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Aayushi Chokshi Parikh</h3>
                      <small>Consultant Emergency Physician and ER In-Charge</small>
                  </div>
                  <!-- end title -->
                  <p>Emergency MRCEM (UK), MBBS, ACLS Instructor (AHA)</p>

                  <div class="footer-social">
                     <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                      <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                  </div>
              </div><!--widget -->
          </div><!-- end col -->

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
              <div class="widget clearfix">
                  <img src="images/Dr-Mansi-Shah.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Mansi Shah</h3>
                      <small>consultant dermatologist, specializing in Dermatology, Venereology</small>
                  </div>
                  <!-- end title -->
                  <p>Venereology, and Leprology from SBKS Medical Institute and Research Centre</p>

                  <div class="footer-social">
                      <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                      <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                  </div>
              </div><!--widget -->
          </div><!-- end col -->

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
              <div class="widget clearfix">
                  <img src="images/Dr-Rashmi-Chovatia-2.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Rashmi Chovatia</h3>
                      <small>Physician</small>
                  </div>
                  <!-- end title -->
                  <p>General Medicine MBBS, MD (INTERNAL MEDICINE) Physician Speciality: Diabetes, Hypertension, Fever related Illness/p>

                  <div class="footer-social">
                      <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                      <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                  </div>
              </div><!--widget -->
          </div><!-- end col -->

      </div><!-- end row -->
  </div><!-- end container -->
</div>

<div id="testimonials" class="section wb wow fadeIn">
   <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="{{ asset('images/icon-logo.png') }}" alt="#"></span>
         <h2>Testimonials</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>James Fernando <small>- Manager of Racer</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                  <h4>Andrew Atkinson <small>- Life Manager</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="invis">
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                  <h4>Amanda DOE <small>- Manager of Racer</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>Martin Johnson <small>- Founder of Goosilo</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
@livewire('contactus')
</div>
@endsection
