<?php
$gals = Gallery::where('status', 0)->get();
?>
<section class="gallery-section gallery-section__dark">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <div class="upper-row clearfix">
                <div class="sec-title">
                    <h2>work showcase<span class="dot">.</span></h2>
                </div>
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All<sup>[<?= count($gals) ?>]</sup></li>
                        <?php
                        $galCat = Gallerycat::where('status', 0)->get();
                        foreach ($galCat as $cat) {
                            // dd($cat->gallery)
                        ?>
                            <li class="filter" data-role="button" data-filter=".<?= $cat->slug ?>"><?= ucfirst($cat->name) ?><sup>[<?= $cat->gallery->count() ?>]</sup>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="filter-list row">
                <?php

                foreach ($gals as $gal) {
                ?>
                    <!-- Gallery Item -->
                    <div class="gallery-item mix all <?= $gal->category->slug ?> col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image"><img src="<?= BASE_PATH . $gal->path() . $gal->image ?>" alt=""></figure>
                            <a href="<?= BASE_PATH . $gal->path() . $gal->image ?>" class="lightbox-image overlay-box" data-fancybox="gallery"></a>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat"><span><?= ucfirst($gal->category->name) ?></span></div>
                                    <div class="title">
                                        <h5><a href="<?= $gal->url ?>" target="_blank"><?= ucfirst($gal->name) ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>



            </div>

        </div>

    </div>
</section>