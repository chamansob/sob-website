<?php
include("includes/initialize.php");
include_layout_web('header.php');
if (isset($_POST['submit_contact'])) {
    $temp = Template::find_by_id(1);
    extract($_POST);
    $name = $fname;
    $email = $cemail;
    $phone = $cphone;
    $country = $country;
    $city = $city;
    $budget = $budget;
    $meeting = $meeting;
    $comment = $message;


    $to = $temp->email;

    $subjects = "Business Enquiry Through " . $temp->sitename . " !!";


    $strMessage = '<table width="100%" border="0" cellspacing="0" cellpadding="10" style="border-collapse:collapse" class="table">
															<tbody><tr>
																<td colspan="2" align="center" class="table-title" style="border-width:1px; border-style:solid; font-family: Verdana, Geneva, sans-serif; line-height: 20px; font-size:14px; font-weight:bold; color:#272424; border-color:#ebebeb; background:#ebebeb; border-right-color:#dfdfdf">Enquiry Details</td>
																</tr>
															  <tr>
															    <td colspan="2"  style="padding: 8px;
    color: #669;">&nbsp;</td>
														      </tr>
															  <tr>
															  <td  style="padding: 8px;
    color: #669;" width="269">Name</td>
															  <td  style="padding: 8px;
    color: #669;" width="271">' . $name . '</td>
															  </tr>
															<tr>
															  <td  style="padding: 8px;
    color: #669;" width="269">Email</td>
															  <td  style="padding: 8px;
    color: #669;" width="271">' . $email . '</td>
															  </tr>
															<tr>
															  <td  style="padding: 8px;
    color: #669;" width="269">Phone</td>
															  <td  style="padding: 8px;
    color: #669;" width="271">' . $phone . '</td>
															  </tr>
															  <tr>
															  <td  style="padding: 8px;
    color: #669;" width="269">Country</td>
															  <td  style="padding: 8px;
    color: #669;" width="271">' . $country . '</td>
															  </tr>
															   <tr>
															  <td  style="padding: 8px;
    color: #669;" width="269">City</td>
															  <td  style="padding: 8px;
    color: #669;" width="271">' . $city . '</td>
															  </tr>
                                                              <tr>
															  <td  style="padding: 8px;
    color: #669;" width="269">Budget</td>
															  <td  style="padding: 8px;
    color: #669;" width="271">' . $budget . '</td>
															  </tr>
                                                              <tr>
															  <td  style="padding: 8px;
    color: #669;" width="269">Meeting</td>
															  <td  style="padding: 8px;
    color: #669;" width="271">' . $meeting . '</td>
															  </tr>
															<tr>
															  <td  style="padding: 8px;
    color: #669;">Message</td>
															  <td  style="padding: 8px;
    color: #669;">' . $comment . '</td>
															  </tr>
														</tbody>
                                </table>';

    $to_name = "magic byte solutions";
    $to = $temp->email;

    $from = "info@seooutofthebox.com";
    $subject = $subjects;
    //$subject = "Mail Test at ".strftime("%T", time());
    $message = "This is a testing From vps Server Test Site";
    $message = wordwrap($message, 70);
    $from_name = $name;
    // PHPMailer's Object-oriented approach	

    $mail = new PHPMailer();
    // $mail->IsSMTP();
    // $mail->SMTPSecure = false;
    // $mail->SMTPAutoTLS = false;
    // $mail->Host     = "localhost";
    // $mail->Port     = 25;
    //$mail->SMTPDebug  = 2; 

    $mail->FromName = $from_name;
    $mail->From     = $from;
    $mail->AddAddress($to, $to_name);
    $mail->Subject  = $subject;
    $mail->IsHTML(true);
    $mail->Body     = $strMessage;

    //$mailit = $mail->Send();
    $result = $mail->Send();

    if ($result) {


?>
        <!-- Google Code for query form Conversion Page -->

        <script>
            function Redirect() {
                alert("Thank you For Contact Us");
                window.location = "<?= BASE_PATH ?>";

            }

            setTimeout('Redirect()', 10);
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Please Try Again")
        </script>
<?php

    }
}




?>


<section class="page-banner">
    <div class="image-layer" style="background-image:url(<?= BASE_PATH ?>asstes/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= BASE_PATH ?>">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->


<!--Contact Section-->
<section class="contact-section contact-two">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-two__content">
                    <div class="sec-title">
                        <h2>Write us any
                            message <span class="dot">.</span></h2>
                    </div>
                    <p class="contact-two__text"><?= Module::where('status', 0)->where('id', 8)->first()->small_text ?></p>
                    <!-- /.contact-two__text -->
                    <div class="contact-two__social">
                        <?php
                        $social = Social::where('status', 0)->get();
                        foreach ($social as $so) {
                            echo ' <a href="' . $so->url . '"><span class="fab fa-' . $so->class . '"></span></a>';
                        }
                        ?>
                    </div><!-- /.contact-two__social -->
                </div><!-- /.contact-two__content -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="form-box">
                    <div class="default-form">
                        <form method="post" action="#" id="contact-form">
                            <div class="row clearfix">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="cname" value="" placeholder="Full Name" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="email" name="cemail" value="" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="cphone" value="" placeholder="Phone Number" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="country" value="" placeholder="Country Name" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="city" value="" placeholder="City" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="company" value="" placeholder="Company  Name" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="website" value="" placeholder="Website Url" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <select name="budget" id="">
                                            <option value="">Select Your Budget</option>
                                            <option value="$200 To $400">$200 To $400</option>
                                            <option value="$400 To $600">$400 To $600</option>
                                            <option value="$600 To $1000">$600 To $1000</option>
                                            <option value="$1000 To $1200">$1000 To $1200</option>
                                            <option value="$2000 To $3000">$2000 To $3000</option>
                                            <option value="$3000 ABOVE">$3000 ABOVE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <select name="meeting" id="">
                                            <option value="">Preferred time</option>
                                            <option value="Morning 8 am to 12 noon">Morning 8 am to 12 noon</option>
                                            <option value="Afternoon 12pm to 5 pm">Afternoon 12pm to 5 pm</option>
                                            <option value="Evening 5pm to 8 pm">Evening 5pm to 8 pm</option>
                                            <option value="Night 8 pm to 12 am">Night 8 pm to 12 am</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <textarea name="message" placeholder="Anything else? (optional)" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-one" name="submit">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Send message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->

    </div>
</section>




<section class="contact-info-two">
    <div class="auto-container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms">
                    <i class="fa fa-map-marker-alt"></i>
                    <a href="#"><?= Module::where('status', 0)->where('id', 5)->first()->small_text ?></a>
                </div><!-- /.contact-info-two__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4">
                <div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?= Module::where('status', 0)->where('id', 7)->first()->small_text ?>"><?= Module::where('status', 0)->where('id', 7)->first()->small_text ?></a>
                </div><!-- /.contact-info-two__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4">
                <div class="contact-info-two__card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <i class="fa fa-phone"></i>
                    <a href="tel:<?= Module::where('status', 0)->where('id', 6)->first()->small_text ?>"><?= Module::where('status', 0)->where('id', 6)->first()->small_text ?></a>
                </div><!-- /.contact-info-two__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.contact-info-two -->

<div class="map-box">
    <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.6388439905486!2d55.35714287431343!3d25.282731828232965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d450095dd97%3A0xe3958c1b7c44a689!2sSEO%20Out%20of%20the%20Box!5e0!3m2!1sen!2sus!4v1689685844127!5m2!1sen!2sus" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
</div>

<?php
include_layout_web('footer.php');
?>