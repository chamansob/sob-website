<?php include("includes/initialize.php");
include_layout_web('header.php');
$service = Services::where('status', 0)->where('service_slug', $_GET['slug'])->first();
if ($service != null) {
} else {
    redirect_to(BASE_PATH);
}
?>
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(<?= BASE_PATH ?>asstes/images/background/image-7.webp);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1><?= ucfirst($service->title) ?></h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= BASE_PATH ?>">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li class="active"><?= ucfirst($service->title) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-details">
                    <div class="main-image image">
                        <img src="<?= BASE_PATH . $service->path() . $service->image ?>" alt="<?= $service->title ?>">
                    </div>
                    <div class="text-content">
                        <h3><?= ($service->small_text) ?></h3>
                        <?= ($service->text) ?>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">

                    <div class="sidebar-widget services">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>All Services</h4>
                            </div>
                            <ul>
                                <?php
                                $services = Services::where('status', 0)->get();
                                foreach ($services as $service) {
                                ?>
                                    <li <?= ($service->service_slug == $_GET['slug']) ? 'class="active"' : '' ?>><a href="<?= BASE_PATH . "service" . DS . $service->service_slug ?>"><?= ucfirst($service->title) ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget call-up">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>need Linoor help?</h4>
                            </div>
                            <div class="text"><?= Module::where('status', 0)->where('id', 5)->first()->small_text ?></div>
                            <div class="phone"><a href="tel:<?= Module::where('status', 0)->where('id', 6)->first()->small_text ?>"><span class="icon flaticon-call"></span><?= Module::where('status', 0)->where('id', 6)->first()->small_text ?></a></div>
                        </div>
                    </div>


                </aside>
            </div>

        </div>
    </div>
</div>
<?php
if ($_GET['slug'] == 'web-development') {
?>
    <section class="faqs-section py-3">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="faq-block col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-center text-white">Faqs</h3>
                    <ul class="accordion-box clearfix">

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
<?php
}
?>


<?php
include_layout_web('home/call.php');
include_layout_web('footer.php');
?>