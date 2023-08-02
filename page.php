<?php include("includes/initialize.php");
include_layout_web('header.php');
$menu_name4 = htmlentities($_GET['id']);
$rws = Menu::where("url", $menu_name4)->first();
//dd($rws);
$che = 0;
if ($rws != null) {
    $rw = Menu::where("url", $menu_name4)->first();
    $che = Page::where("mid", $rw->id)->count();
}
?>
<?php

if ($rws != null && $che != 0) {

    $menu_name4 = htmlentities($_GET['id']);
    $rw = Menu::where("url", $menu_name4)->first();
    $cms = Page::where("mid", $rw->id)->first();

    $pname = str_replace('-', ' ', $menu_name4)
?>
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(<?= BASE_PATH ?>asstes/images/background/image-7.jpg);"></div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">

                    <h1><?= ucfirst($cms->title) ?></h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="<?= BASE_PATH ?>">Home</a></li>
                            <li class="active"><?= ucfirst($cms->heading) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Discover Section-->
    <section class="featured-section featured-section__about-two">
        <div class="auto-container">
            <div class="row clearfix">
                <?php
                if ($cms->image != '') {
                ?>
                    <img class="about-img" src="<?= BASE_PATH . $cms->image_path() ?>" alt="<?= ucfirst($cms->heading) ?>">
                <?php
                }
                ?>
                <?= $cms->text ?>
            </div>
        </div>
    </section>

<?php

} else {
?>
<?php
    redirect_to(BASE_PATH);
} ?>
<!-- Testimonial Section -->
<?php include_layout_web('home/testimonial.php'); ?>
<?php
include_layout_web('footer.php');
?>