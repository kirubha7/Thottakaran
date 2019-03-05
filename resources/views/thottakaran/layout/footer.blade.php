<!-- contact area  START -->
     <div class="section-full content-inner bg-white contact-style-1" id="contact-us">
         <div class="container">
             <div class="section-head  text-center text-black" >
                 <h3 class="h3 text-uppercase">Contact <span class="text-primary">Us</span></h3>
             </div>
             <div class="row">
                 <!-- right part start -->
                 <div class="col-lg-4 d-lg-flex">
                     <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                         <h2 class="m-b10">Quick Contact</h2>
                         <p>If you have any questions simply use the following contact details.</p>
                         <ul class="no-margin">
                             <li class="icon-bx-wraper left m-b30">
                                 <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                 <div class="icon-content">
                                     <h6 class="text-uppercase m-tb0 dez-tilte">Address:</h6>
                                     <p>Chennai</p>
                                 </div>
                             </li>
                             <li class="icon-bx-wraper left  m-b30">
                                 <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                 <div class="icon-content">
                                     <h6 class="text-uppercase m-tb0 dez-tilte">Email:</h6>
                                     <p>thottakaran@gmail.com</p>
                                 </div>
                             </li>
                             <li class="icon-bx-wraper left">
                                 <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                 <div class="icon-content">
                                     <h6 class="text-uppercase m-tb0 dez-tilte">PHONE</h6>
                                     <p>+91 91719 99161</p>
                                 </div>
                             </li>
                         </ul>
                         <div class="m-t20">
                             <ul class="dez-social-icon dez-social-icon-lg">
                                 <li><a href="https://www.facebook.com/mythottakaran/" class="fa fa-facebook bg-primary"></a></li>
                                 <li><a href="javascript:void(0);" class="fa fa-twitter bg-primary"></a></li>
                                 <li><a href="javascript:void(0);" class="fa fa-linkedin bg-primary"></a></li>
                                 <li><a href="javascript:void(0);" class="fa fa-pinterest-p bg-primary"></a></li>
                                 <li><a href="javascript:void(0);" class="fa fa-google-plus bg-primary"></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <!-- right part END -->
                 <!-- Left part start -->
                 <div class="col-lg-8">
                     <div class="p-a30 bg-gray clearfix m-b30 ">
                         <h2>Send Message Us</h2>
                         <div class="dzFormMsg"></div>
                         <form method="post"  action="{{ route('mail') }}">
                             @csrf()
                             <input type="hidden" value="Contact" name="dzToDo" >
                             <div class="row">
                                 <div class="col-lg-6 col-sm-6">
                                     <div class="form-group">
                                         <div class="input-group">
                                             <input name="name" type="text" required class="form-control" placeholder="Your Name">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-6">
                                     <div class="form-group">
                                         <div class="input-group">
                                             <input name="email" type="email" class="form-control" required  placeholder="Your Email Id" >
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-6">
                                     <div class="form-group">
                                         <div class="input-group">
                                             <input name="phone" type="text" required class="form-control" placeholder="Phone">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-6">
                                     <div class="form-group">
                                         <div class="input-group">
                                             <input name="subject" type="text" required class="form-control" placeholder="Subject">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-12">
                                     <div class="form-group">
                                         <div class="input-group">
                                             <textarea name="message" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-12">
                                     <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
                 <!-- Left part END -->
             </div>
         </div>
     </div>
     <!-- contact area  END -->
     <!-- footer bottom part -->
     <footer class="site-footer">
         <!-- footer top part -->
         <div class="footer-top">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 col-md-6 col-sm-6" >
                         <div class="widget widget_about">
                             <div class="logo-footer"><img src="{{ url('/images/logo.jpg') }}" alt="Thottakaran Logo"></div>
                             <p><strong></strong>About Thottakaran Discription</p>
                             <ul class="dez-social-icon">
                                 <li class="border"><a class="fa fa-facebook" href="https://www.facebook.com/thottakaaran/"></a></li>
                                 <li class="border"><a class="fa fa-twitter" href="#"></a></li>
                                 <li class="border"><a class="fa fa-linkedin" href="#"></a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                         <div class="widget widget_services">
                             <h4 class="m-b15 text-uppercase">Our services</h4>
                             <div class="dez-separator-outer m-b10">
                                 <div class="dez-separator bg-white style-skew"></div>
                             </div>
                             <ul>
                                 <li><a href="#">Garden Design and Landscaping</a></li>
                                 <li><a href="#">Garden Maintenance</a></li>
                                 <li><a href="#">Lawn Mowing</a></li>
                                 <li><a href="#">Hedge Cutting</a></li>
                                 <li><a href="#">Weeding </a></li>
                                 <li><a href="#">Leaf Clearance</a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6"  >
                         <div class="widget widget_getintuch">
                             <h4 class="m-b15 text-uppercase">Contact us</h4>
                             <div class="dez-separator-outer m-b10">
                                 <div class="dez-separator bg-white style-skew"></div>
                             </div>
                             <ul>
                                 <li><i class="fa fa-map-marker"></i><strong>address</strong> Chennai</li>
                                 <li><i class="fa fa-phone"></i><strong>phone</strong>+91 91719 99161 (24/7 Support Line)</li>
                                 <li><i class="fa fa-fax"></i><strong>FAX</strong>(123) 123-4567</li>
                                 <li><i class="fa fa-envelope"></i><strong>email</strong>thottakaran@gmail.com</li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="footer-bottom footer-line">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 text-center"> <span>© copyright {{ date('Y') }} by <a href="https://www.greefitech.com">Greefi Technology</a> . All Rights Reserved.</span> </div>
                 </div>
             </div>
         </div>
     </footer>

