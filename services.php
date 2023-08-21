<?php include("includes/initialize.php");
include_layout_web('header.php');
?>
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(<?= BASE_PATH ?>asstes/images/background/image-7.webp);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Services</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= BASE_PATH ?>">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->



<section class="service-nine ">
    <div class="auto-container">
        <div class="row">
            <?php
            $services = Services::where('status', 0)->get();
            $count = count($services);
            $col = ($count == 6) ? 3 : 3;
            $cols = ($count >= 6) ? 6 : 12;
            ?>
            <div class="title-block col-xl-<?= $cols ?> col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <?php echo Module::find(1)->text; ?>
                    </div>
                </div>
            </div>
            <?php

            foreach ($services as $service) {
            ?>
                <div class="col-md-6 col-lg-4 ">
                    <div class="service-nine__card bg-white">
                        <div class="service-nine__card__inner">
                            <div class="service-nine__image">
                                <img src="<?= BASE_PATH . $service->path() . $service->image_front ?>" alt="">
                            </div><!-- /.service-nine__image -->
                            <div class="service-nine__content">
                                <div class="service-nine__icon">
                                    <i class="flaticon-responsive"></i>
                                </div><!-- /.service-nine__icon -->
                                <h3 class="service-nine__title">
                                    <a href="<?= BASE_PATH . 'service/' . $service->service_slug  ?>"><?= $service->service_title  ?></a>
                                </h3><!-- /.service-nine__title -->
                                <p class="service-nine__text"><?= $service->sub_text  ?></p><!-- /.service-nine__text -->
                                <a href="<?= BASE_PATH . 'service/' . $service->service_slug  ?>" class="service-nine__link"><i class="fa fa-angle-right"></i></a>
                            </div><!-- /.service-nine__content -->
                        </div><!-- /.service-nine__card__inner -->
                    </div><!-- /.service-nine__card -->
                </div><!-- /.col-md-6 col-lg-4 -->
            <?php
            } ?>

        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.service-nine -->


<?php
include_layout_web('home/call.php');
include_layout_web('footer.php');
?>