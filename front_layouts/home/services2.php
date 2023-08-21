<?php
$services = Services::where('status', 0)->get();
$count = count($services);
$i = 1;
$col = ($count == 6) ? 3 : 3;
$cols = ($count >= 6) ? 6 : 12;
foreach ($services as $service) {
    if ($i % 2 == 0) {
?>
        <!-- Services Eleven Start -->
        <section id="services" class="services-eleven service-details">
            <div class="services-eleven__wrapper clearfix">
                <div class="services-eleven__left">
                    <div class="services-eleven__img" style="background-image: url(<?= BASE_PATH . $service->path() . $service->image_front ?>);">
                    </div>
                </div>
                <div class="services-eleven__right">
                    <div class="services-eleven__content-box">
                        <div class="text-content">
                            <h3 class="text-theme"><?= ($service->service_title) ?></h3>
                            <?= ($service->front_text) ?>
                            <div class="text clearfix">
                                <div class="link-box"><a class="theme-btn btn-style-one" href="<?= BASE_PATH . 'service' . DS . $service->service_slug  ?>"><i class="btn-curve"></i> <span class="btn-title">Discover More</span> </a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Services Eleven End -->

    <?php
    } else { ?>
        <!-- Skill Section Start -->
        <section id="skill" class="skill-section service-details">
            <div class="skill-section__wrapper clearfix">
                <div class="skill-section__left">
                    <div class="skill-section__content-box">
                        <div class="text-content pt-4">
                            <h3 class="text-theme"><?= ($service->service_title) ?></h3>
                            <?= ($service->front_text) ?>
                            <div class="text clearfix">
                                <div class="link-box"><a class="theme-btn btn-style-one" href="<?= BASE_PATH . 'service' . DS . $service->service_slug  ?>"><i class="btn-curve"></i> <span class="btn-title">Discover More</span> </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skill-section__right">
                    <div class="skill-section__img" style="background-image: url(<?= BASE_PATH . $service->path() . $service->image_front ?>);">
                    </div>

                </div>
            </div>
        </section>
        <!-- Skill Section End -->

<?php
    }
    $i++;
}
?>