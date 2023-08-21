<?php
include "includes/initialize.php";
$template  = Template::find(1);
$des = '';
$key = '';
$title = '';
$canonical = '';
$analytics = '';
$og_title = '';
$og_locale = '';
$og_type = '';
$og_description = '';
$og_url = '';
$og_site_name = '';
$article_modified_time = '';
$google_site_verification = '';
$og_image = '';
$og_image_alt = '';
if (isset($_GET['id'])) {
  $menu_name4 = htmlentities($_GET['id']);
  $rws = Menu::where("url", $menu_name4)->count();
  if ($rws == 1) {
    if (!is_numeric($menu_name4)) {
      $rw = Menu::where("url", $menu_name4)->first();
      $che = Page::where("mid", $rw->id)->count();
      if ($che != 0) {
        $cms = Page::where("mid", $rw->id)->first();
        $title = $cms->title;
        $des = $cms->meta_description;
        $key = $cms->meta_keywords;
        $canonical = $cms->canonical;
        $analytics = $template->analytics;

        $og_locale = empty($cms->og_locale) ? $template->og_locale : $cms->og_locale;
        $og_type = empty($cms->og_type) ? $template->og_type : $cms->og_type;
        $og_title = empty($cms->og_title) ? $template->og_title : $cms->og_title;
        $og_description = empty($cms->og_description) ? $template->og_description : $cms->og_description;

        $og_url = empty($cms->og_url) ? $template->og_url : $cms->og_url;
        $og_site_name = empty($cms->og_site_name) ? $template->og_site_name : $cms->og_site_name;
        $article_modified_time = $template->article_modified_time;
        $og_image =  empty($cms->og_image) ? $template->og_image : $cms->og_image;
        $cms->og_image;
        $og_image_alt = empty($cms->og_image_alt) ? $template->og_image_alt : $cms->og_image_alt;
      }
    } else {
    }
  }
} elseif (isset($_GET['slug'])) {

  $blog = Blog::where('status', 0)->where('blog_slug', $_GET['slug'])->first();
  if ($blog != null) {
    $title = $blog->meta_title;
    $des = $blog->meta_description;
    $key = $blog->meta_keywords;
  }
  $service = Services::where('status', 0)->where('service_slug', $_GET['slug'])->first();
  if ($service != null) {
    $title = $service->meta_title;
    $des = $service->meta_description;
    $key = $service->meta_keywords;
  }

  if ($blog == null && $service == null && $menu == null) {
    $site = $template;
    $title = $site->sitename;
    $des = $site->meta_description;
    $key = $site->meta_keywords;
  }

  $analytics = $template->analytics;
  $canonical = $template->canonical;

  $og_locale = $template->og_locale;
  $og_type = $template->og_type;
  $og_locale = empty($template->og_locale) ? $template->og_locale : $template->og_locale;
  $og_type = empty($template->og_type) ? $template->og_type : $template->og_type;
  $og_title = empty($template->og_title) ? $template->og_title : $template->og_title;
  $og_description = empty($template->og_description) ? $template->og_description : $template->og_description;

  $og_url = empty($template->og_url) ? $template->og_url : $template->og_url;
  $og_site_name = empty($template->og_site_name) ? $template->og_site_name : $template->og_site_name;
  $article_modified_time = $template->article_modified_time;
  $og_image =  empty($template->og_image) ? $template->og_image : $template->og_image;
  $template->og_image;
  $og_image_alt = empty($template->og_image_alt) ? $template->og_image_alt : $template->og_image_alt;
} else {
  $site = $template;
  $title = $site->sitename;
  $des = $site->meta_description;
  $key = $site->meta_keywords;
  $analytics = $site->analytics;
  $google_site_verification = $template->google_site_verification;
  $canonical = $site->canonical;
  $og_locale = $site->og_locale;
  $og_type = $site->og_type;
  $og_title = $site->og_title;
  $og_description = $site->og_description;
  $og_url = $site->og_url;
  $og_site_name = $site->og_site_name;
  $article_modified_time = $site->article_modified_time;
  $og_image = $site->og_image;
  $og_image_alt = $site->og_image_alt;
}

if (str_contains($_SERVER['REQUEST_URI'], 'portfolio')) {
  $page = Page::where("mid", 3)->first();
  if ($page != null) {
    $title = $page->title;
    $des = $page->meta_description;
    $key = $page->meta_keywords;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php // include_layout_web("meta.php"); 
  ?>
  <!-- Stylesheets -->
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/fontawesome-all.css" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/owl.css" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/flaticon.css" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/linoor-icons-2.css" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/animate.css" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/jquery-ui.css" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/jquery.fancybox.min.css" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/hover.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= BASE_PATH ?>asstes/css/jarallax.css">
  <link href="<?= BASE_PATH ?>asstes/css/custom-animate.css" rel="stylesheet">
  <link href="<?= BASE_PATH ?>asstes/css/style.css" rel="stylesheet">
  <!-- rtl css -->
  <link href="<?= BASE_PATH ?>asstes/css/rtl.css" rel="stylesheet">
  <!-- Responsive File -->
  <link href="<?= BASE_PATH ?>asstes/css/responsive.css" rel="stylesheet">

  <!-- Color css -->
  <link rel="stylesheet" id="jssDefault" href="<?= BASE_PATH ?>asstes/css/colors/color-default.css">

  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="<?= BASE_PATH ?>assets/js/respond.js"></script><![endif]-->
</head>

<body>
  <?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  if (isset($_POST['cname'])) {
    $temp = Template::find(1);
    extract($_POST);
    $name = $cname;
    $email = $cemail;
    $phone = $cphone;
    $country = $country;
    $city = $city;
    $budget = $budget;
    $meeting = $meeting;
    $comment = $message;


    $to = $temp->email;

    $subject = "Business Enquiry Through " . $temp->sitename . " !!";


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
    $body = file_get_contents($strMessage);
    $to_name = "SOB Out The box";
    $from_name = "SOB Enquiry";
    $to = $temp->email;


    $subject = $subject;



    $from_name = $name;
    // PHPMailer's Object-oriented approach	

    $mail = new PHPMailer(true);
    // $mail->IsSMTP();
    // $mail->SMTPSecure = false;
    // $mail->SMTPAutoTLS = false;
    // $mail->Host     = "localhost";
    // $mail->Port     = 25;
    //$mail->SMTPDebug  = 2; 

    //$mail->FromName = $from_name;
    // $mail->From     = $from;
    $mail->SetFrom($from, $from_name);
    $mail->addAddress($to, $to_name);


    //Content
    $mail->isHTML(true);   //Set email format to HTML
    $mail->Subject  = $subject;
    $mail->Body    = $strMessage;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $result = $mail->Send();

  ?>
    <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader">
        <div class="icon"></div>
      </div>
      <?php
      if ($result) {
      ?>
        <section class="under-construction">
          <div class="under-construction__bg" style="background-image: url(<?= BASE_PATH ?>/asstes/images/thankyou.png);"></div>
          <!-- /.under-construction__bg -->
          <div class="auto-container text-center">
            <div class="logo"><a href="<?= BASE_PATH ?>" title="<?= $template->sitename ?>">
                <img src="<?= BASE_PATH ?><?= $template->path() . "logo-dark.png" ?>" width="134" id="dLogo" class="main-logo" alt="" title=""></a></div>
            <h3 class="under-construction__tagline"></h3>
            <!-- /.under-construction__tagline -->
            <h2 class="under-construction__title py-5">Thank You</h2><!-- /.under-construction__title -->

            <div class="link-box">
              <a class="theme-btn btn-style-two" href="<?= BASE_PATH ?>contact-us">
                <i class="btn-curve"></i>
                <span class="btn-title">Go BACK</span>
              </a>
            </div>
            <p class="under-construction__text">Visit us on our social networks</p>
            <!-- /.under-construction__text -->
            <div class="under-construction__social">
              <?php
              $social = Social::where('status', 0)->get();
              foreach ($social as $so) {
                echo ' <a href="' . $so->url . '" target="_blank"><span class="fab fa-' . $so->class . '"></span></a>';
              }
              ?>

            </div><!-- /.under-construction__social -->
          </div><!-- /.auto-container -->
        </section><!-- /.under-construction -->

      <?php
      } else {
      ?>
        <script>
          alert("Please Try Again")
        </script>
    <?php

      }
    } else {
      redirect_to(BASE_PATH);
    }
    ?>

    </div>
    <!--End pagewrapper-->

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
    <script src="<?= BASE_PATH ?>asstes/js/jarallax.min.js"></script>
    <script src="<?= BASE_PATH ?>asstes/js/countdown.js"></script>
    <script src="<?= BASE_PATH ?>asstes/js/custom-script.js"></script>

    <script src="<?= BASE_PATH ?>asstes/js/color-switcher.js"></script>


</body>


</html>