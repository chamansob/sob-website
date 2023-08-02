<?php
include "includes/initialize.php";
include_layout_web('headertwo.php');
$template = Template::find(1);
?>
<section class="coming-soon" style="background-image: url(<?= BASE_PATH ?><?= Module::find(11)->image_path() ?>);">
    <div class="auto-container">
        <div class="row">
            <div class="col-7">
                <div class="logo-box">
                    <div class="logo">
                        <a href="<?= BASE_PATH ?>" title="">
                            <img src="<?= BASE_PATH ?><?= $template->path() . $template->logo ?>" id="thm-logo" alt="Linoor - DIgital Agency HTML Template" width="134" height="34" title="Linoor - DIgital Agency HTML Template"></a>
                    </div>
                </div>

            </div><!-- /.col-lg-7 -->

            <div class="col-5">
                <div class="logo-box text-end">
                    <div class="logo">
                        <a href="<?= BASE_PATH ?>" title="">
                            <img src="<?= BASE_PATH ?>asstes/images/cta/CTA-Logo-White.png" id="thm-logo" alt="ICF Accredited Professional Coach Certification Program Online" width="184" height="84" title="ICF Accredited Professional Coach Certification Program Online"></a>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
        <div class="row ">
            <div class="col-lg-12">
                <h3 class="coming-soon__title text-center px-5">
                    <?= Module::find(11)->small_text; ?>
                </h3><!-- /.coming-soon__title -->
            </div>

        </div><!-- /.container -->

</section><!-- /.coming-soon -->
<section class="services-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title Block-->
            <div class="title-block col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title ">
                        <h2>Service to offer</h2>

                    </div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-target"></span></div>
                    <h6><a href="#">Search Engine <br>Optimization</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-presentation"></span></div>
                    <h6><a href="#">Search Engine <br>Marketing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-responsive"></span></div>
                    <h6><a href="#">Website <br>Development</a></h6>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="about-seven bg-white">
    <div class="auto-container">
        <div class="row">
            <?= Module::find(11)->text; ?>
            <div class="col-md-12 col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="about-seven__images">
                    <img src="<?= BASE_PATH ?>asstes/images/cta/about-seven-1-1.jpg" alt="">
                    <img src="<?= BASE_PATH ?>asstes/images/cta/about-seven-1-2.jpg" alt="">
                </div><!-- /.about-seven__images -->
            </div><!-- /.col-md-12 col-lg-6 -->
            <div class="col-md-12 col-lg-6">
                <div class="about-seven__content mt-5 pt-5">
                    <div class="sec-title-six text-start ">
                        <p class="sec-title-six__text "><span>About Offer</span></p>
                        <!-- /.sec-title-six__text -->
                        <h2 class="sec-title-six__title"> <?= Module::find(10)->heading; ?></h2>
                        <!-- /.sec-title-six__title -->
                    </div><!-- /.sec-title-six -->
                    <!-- /.about-seven__title -->
                    <?= Module::find(10)->text; ?>
                    <a href=" <?= BASE_PATH ?><?= Module::find(10)->link; ?>" class="about-seven__btn thm-btn__six"> <?= Module::find(10)->small_text; ?></a>
                </div><!-- /.about-seven__content -->
            </div><!-- /.col-md-12 col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.about-seven -->
<!--We DO Section-->
<section class="we-do-section bg-dark">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="sec-title">
                <h2><?= Module::find(9)->heading; ?></span></h2>
            </div>
            <!--Left Column-->
            <div class="left-col col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <?= Module::find(9)->text; ?>
                    <p>To avail the offer</p>
                    <a href="<?= BASE_PATH ?><?= Module::find(9)->link; ?>" class="about-seven__btn thm-btn__six"><?= Module::find(9)->small_text; ?></a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include_layout_web('footertwo.php'); ?>