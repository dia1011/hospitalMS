@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js"></script>

</head>
<div id="about" class="section  wow fadeIn">
    <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
         <h2>The Specialist Clinic</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>What We Do</h4>
               <h2>Clinic Service</h2>
               <p class="lead">Our hospital offers a wide range of premium healthcare services to ensure that all your medical needs are met with the highest standards of care. Our Emergency Services are available 24/7, providing immediate medical attention for critical situations, ensuring rapid response and expert care when every second counts. For patients who do not require overnight hospitalization, our Outpatient Services offer consultations, diagnostic tests, and treatment plans, all designed to cater to your individual healthcare needs. For those who require more extensive care, we provide Inpatient Services, offering comfortable, private rooms with continuous medical supervision, ensuring your well-being throughout your stay.</p>
               <p class="lead">Our Surgical Services are equipped with state-of-the-art facilities, where skilled surgeons perform a variety of procedures using the latest techniques and equipment. To support accurate and timely diagnoses, we offer Diagnostic Services with advanced tools such as X-rays, MRIs, CT scans, and laboratory tests. Our Pediatric Care ensures that children receive the best healthcare with specialized pediatricians and a child-friendly environment. For new mothers and their babies, we provide comprehensive Maternity Care, including prenatal care, delivery, and postnatal services, focusing on both the mother and child’s health.</p>
               <p class="lead">For heart-related concerns, our Cardiological Services provide expert care through advanced diagnostic equipment and specialized treatment plans for various heart conditions. Our Oncology Services offer specialized care for cancer patients, from diagnosis to personalized treatment plans, supported by a team of experts. Additionally, our Physiotherapy and Rehabilitation services assist in recovery from injuries or surgeries, improving mobility and quality of life. Our Pharmacy Services are readily available, providing prescribed medications and expert guidance on their usage.</p>
               <p class="lead">We also offer Telemedicine Services for remote consultations, ensuring that patients can access healthcare from the comfort of their homes. Our Laboratory Services are equipped with advanced diagnostic tools for quick and accurate test results, supporting precise treatment plans. Lastly, we provide Mental Health Services, offering counseling, therapy, and psychiatric support to promote emotional and psychological well-being. With Specialist Consultations in a variety of medical fields, including neurology, orthopedics, and dermatology, our hospital ensures that you receive expert care tailored to your specific needs.</p>
            </div>
            <!-- end messagebox -->
         </div>
         <!-- end col -->
         <div class="col-md-6">
         <div class="post-media wow fadeIn">
               <img src="images/about_03.jpg" alt="" class="img-responsive">
               <a href="https://youtu.be/Tl0ZAEJRYo0?si=V6RxigCUTnL-DQI1" data-rel="prettyPhoto[gal]" class="playbutton" target="_blank"><i class="fa fa-play"></i>
               </a>
            <!-- end media -->
         </div>
         <!-- end col -->
      </div>

   </div>
   <!-- end container -->
</div>
@endsection
