<section class="facts-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
    <!-- <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div> -->
    <img src="<?= BASE_PATH ?>asstes/images/background/image-1.webp" alt="" class="jarallax-img">
    <div class="auto-container">
        <div class="inner-container">

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="<?= Counter::where('status', 0)->where('id', 1)->first()->number ?>"><?= Counter::where('status', 0)->where('id', 1)->first()->number ?></span>
                                </div>
                                <div class="counter-title"><?= Counter::where('status', 0)->where('id', 1)->first()->name ?></div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="<?= Counter::where('status', 0)->where('id', 2)->first()->number ?>"><?= Counter::where('status', 0)->where('id', 2)->first()->number ?></span>
                                </div>
                                <div class="counter-title"><?= Counter::where('status', 0)->where('id', 2)->first()->name ?></div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="<?= Counter::where('status', 0)->where('id', 3)->first()->number ?>"><?= Counter::where('status', 0)->where('id', 3)->first()->number ?></span>
                                </div>
                                <div class="counter-title"><?= Counter::where('status', 0)->where('id', 3)->first()->name ?></div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="<?= Counter::where('status', 0)->where('id', 4)->first()->number ?>"><?= Counter::where('status', 0)->where('id', 4)->first()->number ?></span>
                                </div>
                                <div class="counter-title"><?= Counter::where('status', 0)->where('id', 4)->first()->name ?></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>