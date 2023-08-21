 <?php


    $template  = Template::find(1); ?>
 <!-- Main Footer -->
 <footer class="main-footer">
     <div class="auto-container">
         <!--Widgets Section-->
         <div class="widgets-section">
             <div class="row clearfix">

                 <!--Column-->
                 <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                     <div class="footer-widget logo-widget">
                         <div class="widget-content">
                             <div class="logo">
                                 <a href="<?= BASE_PATH ?>"><img id="fLogo" src="<?= BASE_PATH ?><?= Template::where('id', 1)->first()->path() ?><?= Template::where('id', 1)->first()->logo ?>" alt="" /></a>
                             </div>
                             <div class="text"><?= Module::where('status', 0)->where('id', 8)->first()->small_text ?></div>
                             <ul class="social-links clearfix">
                                 <?php
                                    $social = Social::where('status', 0)->get();
                                    foreach ($social as $so) {
                                        echo ' <li><a href="' . $so->url . '" target="_blank"><span class="fab fa-' . $so->class . '"></span></a></li>';
                                    }
                                    ?>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <!--Column-->
                 <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                     <div class="footer-widget links-widget">
                         <div class="widget-content">
                             <h6>Explore</h6>
                             <div class="row clearfix">
                                 <div class="col-md-6 col-sm-12">
                                     <ul>
                                         <li><a href="<?= BASE_PATH ?>about-us">About</a></li>
                                         <li><a href="#">Meet Our Team</a></li>
                                         <li><a href="<?= BASE_PATH ?>portfolio">Our Portfolio</a></li>
                                         <li><a href="<?= BASE_PATH ?>blog">Latest News</a></li>
                                         <li><a href="<?= BASE_PATH ?>contact-us">Contact</a></li>
                                     </ul>
                                 </div>
                                 <div class="col-md-6 col-sm-12">

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!--Column-->
                 <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                     <div class="footer-widget info-widget">
                         <div class="widget-content">
                             <h6>Contact</h6>
                             <ul class="contact-info">
                                 <li class="address"><span class="icon flaticon-pin-1"></span> <?= Module::where('status', 0)->where('id', 5)->first()->small_text ?></li>
                                 <li><span class="icon flaticon-call"></span><a href="tel:<?= Module::where('status', 0)->where('id', 6)->first()->small_text ?>"><?= Module::where('status', 0)->where('id', 6)->first()->small_text ?></a></li>
                                 <li><span class="icon flaticon-email-2"></span><a href="mailto:<?= Module::where('status', 0)->where('id', 6)->first()->small_text ?>"><?= Module::where('status', 0)->where('id', 7)->first()->small_text ?></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <!--Column-->
                 <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                     <div class="footer-widget newsletter-widget">
                         <div class="widget-content">
                             <h6>Newsletter</h6>
                             <div class="newsletter-form">
                                 <form method="post" action="#">
                                     <div class="form-group clearfix">
                                         <input type="email" name="email" value="" placeholder="Email Address" required="">
                                         <button type="submit" class="theme-btn"><span class="fa fa-envelope"></span></button>
                                     </div>
                                 </form>
                             </div>
                             <div class="text">Sign up for our latest news & articles. We won’t give you spam
                                 mails.</div>
                         </div>
                     </div>
                 </div>

             </div>

         </div>
     </div>

     <!-- Footer Bottom -->
     <div class="footer-bottom">
         <div class="auto-container">
             <div class="inner clearfix">
                 <div class="copyright">&copy; Copyright <?= date('Y') ?> by <?= $template->sitename ?></div>
             </div>
         </div>
     </div>

 </footer>

 </div>
 <!--End pagewrapper-->
<!-- Whatsup Bottom -->
 <div id="myButton"></div>
 <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


 <script src="<?= BASE_PATH ?>asstes/js/jquery.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/popper.min.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/bootstrap.min.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/TweenMax.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/jquery-ui.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/jquery.fancybox.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/owl.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/mixitup.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/knob.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/validate.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/appear.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/wow.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/jQuery.style.switcher.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js">
 </script>
 <script src="<?= BASE_PATH ?>asstes/js/jquery.easing.min.js"></script>
 <script src="<?= BASE_PATH ?>asstes/js/custom-script.js"></script>

	<!-- Whatsup js -->
   <script type="text/javascript" src="<?= BASE_PATH ?>asstes/whatsup/floating-wpp.js"></script>

<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '<?= Module::where('status', 0)->where('id', 6)->first()->small_text ?>',
            popupMessage: 'Hello, how can we help you?',
            message: "",
            showPopup: true,
            position:'left',			
			showOnIE:true,
			autoOpenTimer: 0,
			headerColor:'#009688',
			zIndex: 999999,
            headerTitle: 'Welcome to SEO Out The Box',
            backgroundColor:'crimson',
            buttonImage: '<img src="<?= BASE_PATH ?>asstes/whatsup/whatsapp.svg" />'
        });
    });
</script>


 </body>

 </html>