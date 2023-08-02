<section class="about-section about-section__dark">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="<?= BASE_PATH ?>asstes/images/resource/featured-image-1.jpg" alt=""></div>
                    <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="<?= BASE_PATH ?>asstes/images/resource/featured-image-2.jpg" alt=""></div>
                </div>
            </div>
            <!--Text Column-->
            <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <?php echo Module::find(2)->text; ?>
                </div>
            </div>
        </div>
    </div>
</section>