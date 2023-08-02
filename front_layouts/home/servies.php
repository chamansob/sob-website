<section class="services-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title Block-->
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
                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-<?= $service->icon ?>"></span></div>
                        <h5><a href="<?= BASE_PATH . 'service/' . $service->service_slug  ?>"><?= $service->service_title  ?></a></h5>
                        <div class="text"><?= $service->sub_text  ?></div>
                        <div class="link-box"><a href="<?= BASE_PATH . "service" . DS . $service->service_slug  ?>"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>
                <!--Service Block-->

            <?php
            } ?>
        </div>

    </div>
</section>