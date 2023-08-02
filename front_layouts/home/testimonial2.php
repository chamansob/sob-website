<section class="testimonials-nine">
    <div class="auto-container">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "pagination": { "el": "#testimonials-nine-pagination", "type": "bullets", "clickable": true }, "autoplay": { "delay": 5000 }}'>
            <div class="swiper-wrapper">
                <?php
                $testimonials = Testimonials::where('status', 0)->get();
                foreach ($testimonials as $test) {
                ?>
                    <div class="swiper-slide">
                        <div class="testimonials-nine__item">
                            <div class="testimonials-nine__client-img">
                                <img src="<?= BASE_PATH ?><?= $test->path() ?><?= $test->image ?>" alt="">
                                <div class="testimonials-nine__quote">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                            </div>
                            <p class="testimonials-nine__text"><?= $test->text ?></p>
                            <h5 class="testimonials-nine__client-name"><?= ucfirst($test->name) ?></h5>
                            <p class="testimonials-nine__client-sub-title"><?= ucfirst($test->designation) ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="swiper-pagination" id="testimonials-nine-pagination"></div>
        </div>
    </div>
</section>