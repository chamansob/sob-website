<section class="banner-section banner-one">

    <div class="left-based-text">
        <div class="base-inner">
            <div class="hours">
                <!-- <ul class="clearfix">
                    <li><span>mon - fri</span></li>
                    <li><span>9am - 7pm</span></li>
                </ul> -->
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <?php
                    $social = Social::where('status', 0)->get();
                    foreach ($social as $so) {
                        echo '<li><a href="' . $so->url . ' " target="_blank"><span>' . ucfirst($so->title) . '</span></a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>

    <div class="banner-carousel owl-theme owl-carousel">
        <?php
        $sliders = Slider::all();
        foreach ($sliders as $slider) {
        ?>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(<?= BASE_PATH . $slider->path() . $slider->image ?>);"></div>
                <div class="left-top-line"></div>
                <div class="right-bottom-curve"></div>
                <div class="right-top-curve"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="sub-title"><?= $slider->title ?></div>
                                <?= $slider->sub_title ?>
                                <div class="link-box">
                                    <a class="theme-btn btn-style-one" href="<?= $slider->url ?>">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title"><?= $slider->btn_title ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>


    </div>
</section>
<!--End Banner Section -->