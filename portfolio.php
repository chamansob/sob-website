<?php include("includes/initialize.php");
include_layout_web('header.php');
?>
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(<?= BASE_PATH ?>asstes/images/background/image-7.jpg);"></div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Portfolio</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="<?= BASE_PATH ?>">Home</a></li>
                            <li class="active">Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

 <?php include_layout_web('home/gallery.php');?>




<?php
include_layout_web('footer.php');
?>