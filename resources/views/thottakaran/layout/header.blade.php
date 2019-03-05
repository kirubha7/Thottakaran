
 <header class="site-header header header-style-1 mo-left">
     <!-- top bar -->
     <div class="top-bar">
         <div class="container">
             <div class="row justify-content-between">
                 <div class="dez-topbar-left">
                     <ul class="social-bx list-inline d-flex pull-right">
                         <li><a href="https://www.facebook.com/mythottakaran/" class="fa fa-facebook"></a></li>
                         <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                         <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                         <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
                     </ul>
                 </div>
                 <div class="dez-topbar-right list-unstyled e-p-bx ">
                     <ul>
                         <li><i class="fa fa-envelope"></i><span>thottakaran@gmail.com</span></li>
                         <li><i class="fa fa-phone"></i><span>+91 91719 99161</span></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <!-- top bar END-->
     <!-- main header -->
     <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
         <div class="main-bar bg-primary clearfix ">
             <div class="container clearfix">
                 <!-- website logo -->
                 <div class="logo-header mostion"><a href="{{ route('home') }}"><img src="images/logo.jpg" width="193" height="89" alt=""></a></div>
                 <!-- nav toggle button -->
                 <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span></span>
                     <span></span>
                     <span></span>
                 </button>
                 <!-- extra nav -->

                 <!-- main nav -->
                 <div class="header-nav navbar-collapse collapse justify-content-end"  id="navbarNavDropdown">
                     <ul class=" nav navbar-nav">
                         <li class="active"> <a href="{{ route('home') }}">Home</a></li>
                         <li class=""> <a href="#services">Services</a></li>
                         <li class=""> <a href="#gallery">Gallery</a></li>
                         <li class=""> <a href="#About-Us">About Us</a>
                         <li class=""> <a href="#contact-us">Contact Us</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <!-- main header END -->
 </header>