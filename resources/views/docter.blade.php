@extends('layouts.app')

@section('content')
<head>
    <!-- preettyPhoto links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js"></script>
</head>
<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
    <div class="container">
  
     <div class="heading">
           <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
           <h2>Our Specialist Team</h2>
        </div>
  
        <div class="row dev-list text-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                 <div class="widget clearfix">
                <div class="service-widget">  
                <div class="post-media wow fadeIn"> 
                  <a href="javascript:void(0);" class="hoverbutton global-radius" onclick="openPopup('html_files/DRAayushi.html')"></a> 
                  <img src="images/Dr.-Aayushi-Choksi.jpg" alt="Click to Open HTML" 
                        class="img-responsive img-rounded hover-effect" 
                        style="cursor: pointer;" 
                       onclick="openPopup('html_files/DRAayushi.html');">
                  <!-- <a href="public\html_files\DRAayushi.html" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"></a>
                  <img src="images/Dr.-Aayushi-Choksi.jpg" alt="" class="img-responsive img-rounded"> 
                 <img src="images/Dr.-Aayushi-Choksi.jpg" alt="Click to Open HTML" style="cursor: pointer;" onclick="window.location.href='html_files/DRAayushi.html';" class="img-responsive img-rounded" id="images">  -->
                </div> 
                  </div>
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
                </div>  <!--widget -->
            </div>        <!--end col-->
  

             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="widget clearfix">
                <div class="service-widget">
                <div class="post-media wow fadeIn">
                <a href="javascript:void(0);" class="hoverbutton global-radius" onclick="openPopup('html_files/DRAbhilashC.html')"></a> 
                  <img src="images/Dr.-Abhilash-Choksi.jpg" alt="Click to Open HTML" 
                        class="img-responsive img-rounded hover-effect" 
                        style="cursor: pointer;" 
                       onclick="openPopup('html_files/DRAbhilashC.html');">
                  <!-- <a href="images/Dr.-Abhilash-Choksi.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/Dr.-Abhilash-Choksi.jpg" alt="" class="img-responsive img-rounded">
                  <img src="images/Dr.-Abhilash-Choksi.jpg" alt="Click to Open HTML" style="cursor: pointer;" onclick="window.location.href='html_files/Abhilash C Chokshi _ Marengo Asia CIMS Hospital - Best Hospital in Ahmedabad.html';"> -->
               </div>
                  </div>
                    <div class="widget-title">
                        <h3>Abhilash C Chokshi</h3>
                        <small>Consultant Laparoscopic General Surgeon</small>
                    </div>
                    <!-- end title -->
                    <p>Head of Department of Surgery MORE THAN 33+ YEARS OF EXPERIENCE</p>
  
                     <div class="footer-social">
                      <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                      <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div> 
                </div>  <!--widget -->
            </div>         <!--end col -->


            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="widget clearfix">
                <div class="service-widget">
                <div class="post-media wow fadeIn">
                <a href="javascript:void(0);" class="hoverbutton global-radius" onclick="openPopup('html_files/DrAjayNaik.html')"></a> 
                  <img src="images/Dr.-Ajay-Naik-1.jpg" alt="Click to Open HTML" 
                        class="img-responsive img-rounded hover-effect" 
                        style="cursor: pointer;" 
                       onclick="openPopup('html_files/DrAjayNaik.html');">
                  <!-- <a href="images/Dr.-Ajay-Naik-1.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/Dr.-Ajay-Naik-1.jpg" alt="" class="img-responsive img-rounded"> -->
               </div>
                  </div>
                    <div class="widget-title">
                        <h3>Ajay Naik</h3> 
                      <small>Interventional Cardiologist & Cardiac Electrophysiologis</small>
                    </div>
                     <!-- end title  -->
                   <p>Cardiology MD, DM, DNB, FACC, FHRS Cardiac Electrophysiologist</p>
                    <div class="footer-social">
                       <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                       <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                       <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                       <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div> 
               </div>      <!--widget -->
             </div>       <!--end col -->


            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="widget clearfix">
                <div class="service-widget">
                <div class="post-media wow fadeIn">
                <a href="javascript:void(0);" class="hoverbutton global-radius" onclick="openPopup('html_files/DRManshi.html')"></a> 
                  <img src="images/Dr-Mansi-Shah.jpg" alt="Click to Open HTML" 
                        class="img-responsive img-rounded hover-effect" 
                        style="cursor: pointer;" 
                       onclick="openPopup('html_files/DRManshi.html');">
                  <!-- <a href="images/Dr-Mansi-Shah.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/Dr-Mansi-Shah.jpg" alt="" class="img-responsive img-rounded"> -->
               </div> 
                </div>
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
                </div>      <!--widget -->
           </div>       <!--end col -->


             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="widget clearfix">
                <div class="service-widget">
                <div class="post-media wow fadeIn">
                <a href="javascript:void(0);" class="hoverbutton global-radius" onclick="openPopup('html_files/DrAjitKukraja.html')"></a> 
                  <img src="images/Dr-Ajit-N-Kukreja.jpg.jpg" alt="Click to Open HTML" 
                        class="img-responsive img-rounded hover-effect" 
                        style="cursor: pointer;" 
                       onclick="openPopup('html_files/DrAjitKukraja.html');">
                  <!-- <a href="images/Dr-Ajit-N-Kukreja.jpg.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/Dr-Ajit-N-Kukreja.jpg.jpg" alt="" class="img-responsive img-rounded"> -->
               </div>
                  </div>
                    <div class="widget-title">
                        <h3>Ajit Kukreja</h3>
                        <small>MBBS, MS (General Surgery), FICS (Surgical Gastroenterology), FIAGES, LL.B.</small>
                    </div>
                   <!-- end title -->
                   <p>Gastrointestinal & Anorectal Surgeon 36 Years of Experience</p>
  
                    <div class="footer-social">
                      <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                      <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div> 
              </div>       <!--widget -->
            </div>       <!--end col -->


          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="widget clearfix">
                <div class="service-widget">
                <div class="post-media wow fadeIn">
                <a href="javascript:void(0);" class="hoverbutton global-radius" onclick="openPopup('html_files/DRAjayshingDevda.html')"></a> 
                  <img src="images/Dr.-Ajaysinh-Devda.jpg" alt="Click to Open HTML" 
                        class="img-responsive img-rounded hover-effect" 
                        style="cursor: pointer;" 
                       onclick="openPopup('html_files/DRAjayshingDevda.html');">
                  <!-- <a href="images/Dr.-Ajaysinh-Devda.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/Dr.-Ajaysinh-Devda.jpg" alt="" class="img-responsive img-rounded"> -->
               </div>
                  </div>
                    <div class="widget-title">
                        <h3>Ajaysinh V. Devda</h3>
                        <small>Consultant Orthopaedics, Joint Replacement and Robotic Surgery</small>
                    </div>
                    <!-- end title -->
                     <p>MBBS, MS Consultant Orthopaedics, Joint Replacement and Robotic Surgery</p>
  
                    <div class="footer-social">
                      <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                      <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div> 
                </div>      <!--widget -->
            </div>    <!--end col -->


                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="widget clearfix">
                <div class="service-widget">
                <div class="post-media wow fadeIn">
                <a href="javascript:void(0);" class="hoverbutton global-radius" onclick="openPopup('html_files/DrRashmiChovatia.html')"></a> 
                  <img src="images/Dr-Rashmi-Chovatia-2.jpg" alt="Click to Open HTML" 
                        class="img-responsive img-rounded hover-effect" 
                        style="cursor: pointer;" 
                       onclick="openPopup('html_files/DrRashmiChovatia.html');">
                  <!-- <a href="images/Dr-Rashmi-Chovatia-2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/Dr-Rashmi-Chovatia-2.jpg" alt="" class="img-responsive img-rounded"> -->
               </div>
                  </div>
                    <div class="widget-title">
                        <h3>Rashmi Chovatia</h3>
                        <small>Physician</small>
                    </div> 
                    <!-- end title -->
                     <p>General Medicine MBBS, MD (INTERNAL MEDICINE) Physician Speciality: Diabetes, Hypertension, Fever related Illness</p>
  
                    <div class="footer-social">
                      <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                      <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>     <!--widget -->
               </div>    <!--end col -->
  

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                <div class="widget clearfix">
                <div class="service-widget">
                <div class="post-media wow fadeIn">
                <a href="javascript:void(0);" class="hoverbutton global-radius" onclick="openPopup('html_files/DRAjayjain.html')"></a> 
                  <img src="images/Dr-Ajay-Jain.jpg" alt="Click to Open HTML" 
                        class="img-responsive img-rounded hover-effect" 
                        style="cursor: pointer;" 
                       onclick="openPopup('html_files/DRAjayjain.html');">
                  <!-- <a href="images/Dr-Ajay-Jain.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/Dr-Ajay-Jain.jpg" alt="" class="img-responsive img-rounded"> -->
               </div>
                  </div>
                    <div class="widget-title">
                        <h3>Ajay Kumar Jain</h3>
                        <small>Consultant Pulmonologist, Bronchoscopist, Sleep Disorders Specialist & Critical Care Specialist</small>
                    </div>
                    <!-- end title -->
                     <p>Pulmonology MBBS, MD (Tuberculosis and Respiratory Diseases)</p>
  
                    <div class="footer-social">
                      <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                      <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                 </div>     <!--widget -->
                </div>     <!--end col -->
  
           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                <div class="widget clearfix">
                <div class="service-widget">
                <div class="post-media wow fadeIn">
                <a href="javascript:void(0);" class="hoverbutton global-radius" onclick="openPopup('html_files/DrAmitChande.html')"></a> 
                  <img src="images/Dr-Amit-Chandan.jpg" alt="Click to Open HTML" 
                        class="img-responsive img-rounded hover-effect" 
                        style="cursor: pointer;" 
                       onclick="openPopup('html_files/DrAmitChande.html');"> 
                  <!-- <a href="images/Dr-Amit-Chandan.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/Dr-Amit-Chandan.jpg" alt="" class="img-responsive img-rounded"> -->
               </div>
                  </div>
                    <div class="widget-title">
                        <h3>Amit Chandan</h3>
                        <small>Consultant Cardiothoracic and Vascular Surgeon</small>
                    </div>
                    <!-- end title -->
                   <p>Cardiac Surgery BBS, DNB (Cardiothoracic Surgery) Consultant Cardiothoracic and Vascular Surgeon</p>
  
                    <div class="footer-social">
                      <a href="https://www.facebook.com/" class="btn grd1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://github.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-github"></i></a>
                      <a href="https://x.com/" class="btn grd1" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/" class="btn grd1" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>    <!--widget -->
           </div>   <!--end col -->

        </div>     <!--end row -->
    </div>       <!--end container -->
  </div>
  <!-- Other content here -->


<script>
  function openPopup(url) {
    window.open(url, "popupWindow", "width=800,height=600,left=200,top=200");
}
</script>


@endsection