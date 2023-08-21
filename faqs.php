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
                <h1>FAQs</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= BASE_PATH ?>">Home</a></li>
                        <li class="active">FAQs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Testimonials Section-->
<section class="faqs-section py-3">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="faq-block col-lg-12 col-md-12 col-sm-12">
                <ul class="accordion-box clearfix">
                    <h3>Faqs</h3>
                    <?php
                    $i = 1;
                    $faqs = Faqs::all();
                    // dd($faqs->count());
                    if ($faqs->count() != 0) {
                        foreach ($faqs as $faq) {
                    ?>
                            <!--Block-->
                            <li class="accordion block <?= ($i == 1) ? 'active-block' : '' ?>">
                                <div class="acc-btn active"><span class="count"><?= $i ?>.</span> <?= ucfirst($faq->title) ?></div>
                                <div class="acc-content  <?= ($i == 1) ? 'current' : '' ?>">
                                    <div class="content">
                                        <div class="text"><?= ucfirst($faq->text) ?></div>
                                    </div>
                                </div>
                            </li>
                    <?php
                            $i++;
                        }
                    } else {
                        echo '<div class="alert alert-warning text-center">No faqs found</div>';
                    }
                    ?>

                </ul>
            </div>

        </div>
    </div>
</section>




<!-- Testimonial Section -->

<?php
include_layout_web('home/call.php');
include_layout_web('footer.php');
?>