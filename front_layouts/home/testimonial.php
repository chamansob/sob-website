<section class="testimonials-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Customer feedbacks<span class="dot">.</span></h2>
        </div>
        <div class="carousel-box">
            <div class="testimonials-carousel owl-theme owl-carousel owl-loaded owl-drag">

                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-3000px, 0px, 0px); transition: all 0.7s ease 0s; width: 7200px;">
                        <?php
                        $testimonials = Testimonials::where('status', 0)->get();
                        foreach ($testimonials as $test) {
                        ?>
                            <div class="owl-item cloned" style="width: 570px; margin-right: 30px;">
                                <div class="testi-block">
                                    <div class="inner">
                                        <div class="icon"><span>“</span></div>
                                        <div class="info">
                                            <div class="image"><a href="#"><img src="<?= BASE_PATH ?><?= $test->path() ?><?= $test->image ?>" alt=""></a></div>
                                            <div class="name"><?= ucfirst($test->name) ?></div>
                                            <div class="designation"><?= ucfirst($test->designation) ?></div>
                                        </div>
                                        <div class="text"><?= $test->text ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span class="icon fa fa-angle-left"></span></button><button type="button" role="presentation" class="owl-next"><span class="icon fa fa-angle-right"></span></button></div>
                <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
            </div>
        </div>
    </div>
</section>