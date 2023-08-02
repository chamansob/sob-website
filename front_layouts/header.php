<?php
$template  = Template::find(1);
$des = '';
$key = '';
$title = '';
$canonical = '';
$analytics = '';
$og_title = '';
$og_locale = '';
$og_type = '';
$og_description = '';
$og_url = '';
$og_site_name = '';
$article_modified_time = '';
$google_site_verification = '';
$og_image = '';
$og_image_alt = '';
if (isset($_GET['id'])) {
    $menu_name4 = htmlentities($_GET['id']);
    $rws = Menu::where("url", $menu_name4)->count();
    if ($rws == 1) {
        if (!is_numeric($menu_name4)) {
            $rw = Menu::where("url", $menu_name4)->first();
            $che = Page::where("mid", $rw->id)->count();
            if ($che != 0) {
                $cms = Page::where("mid", $rw->id)->first();
                $title = $cms->title;
                $des = $cms->meta_description;
                $key = $cms->meta_keywords;
                $canonical = $cms->canonical;
                $analytics = $template->analytics;

                $og_locale = empty($cms->og_locale) ? $template->og_locale : $cms->og_locale;
                $og_type = empty($cms->og_type) ? $template->og_type : $cms->og_type;
                $og_title = empty($cms->og_title) ? $template->og_title : $cms->og_title;
                $og_description = empty($cms->og_description) ? $template->og_description : $cms->og_description;

                $og_url = empty($cms->og_url) ? $template->og_url : $cms->og_url;
                $og_site_name = empty($cms->og_site_name) ? $template->og_site_name : $cms->og_site_name;
                $article_modified_time = $template->article_modified_time;
                $og_image =  empty($cms->og_image) ? $template->og_image : $cms->og_image;
                $cms->og_image;
                $og_image_alt = empty($cms->og_image_alt) ? $template->og_image_alt : $cms->og_image_alt;
            }
        } else {
        }
    }
} elseif (isset($_GET['slug'])) {

    $blog = Blog::where('status', 0)->where('blog_slug', $_GET['slug'])->first();
    if ($blog != null) {
        $title = $blog->meta_title;
        $des = $blog->meta_description;
        $key = $blog->meta_keywords;
    }
    $service = Services::where('status', 0)->where('service_slug', $_GET['slug'])->first();
    if ($service != null) {
        $title = $service->meta_title;
        $des = $service->meta_description;
        $key = $service->meta_keywords;
    }

    if ($blog == null && $service == null && $menu == null) {
        $site = $template;
        $title = $site->sitename;
        $des = $site->meta_description;
        $key = $site->meta_keywords;
    }

    $analytics = $template->analytics;
    $canonical = $template->canonical;

    $og_locale = $template->og_locale;
    $og_type = $template->og_type;
    $og_locale = empty($template->og_locale) ? $template->og_locale : $template->og_locale;
    $og_type = empty($template->og_type) ? $template->og_type : $template->og_type;
    $og_title = empty($template->og_title) ? $template->og_title : $template->og_title;
    $og_description = empty($template->og_description) ? $template->og_description : $template->og_description;

    $og_url = empty($template->og_url) ? $template->og_url : $template->og_url;
    $og_site_name = empty($template->og_site_name) ? $template->og_site_name : $template->og_site_name;
    $article_modified_time = $template->article_modified_time;
    $og_image =  empty($template->og_image) ? $template->og_image : $template->og_image;
    $template->og_image;
    $og_image_alt = empty($template->og_image_alt) ? $template->og_image_alt : $template->og_image_alt;
} else {
    $site = $template;
    $title = $site->sitename;
    $des = $site->meta_description;
    $key = $site->meta_keywords;
    $analytics = $site->analytics;
    $google_site_verification = $template->google_site_verification;
    $canonical = $site->canonical;
    $og_locale = $site->og_locale;
    $og_type = $site->og_type;
    $og_title = $site->og_title;
    $og_description = $site->og_description;
    $og_url = $site->og_url;
    $og_site_name = $site->og_site_name;
    $article_modified_time = $site->article_modified_time;
    $og_image = $site->og_image;
    $og_image_alt = $site->og_image_alt;
}

if (str_contains($_SERVER['REQUEST_URI'], 'portfolio')) {
    $page = Page::where("mid", 3)->first();
    if ($page != null) {
        $title = $page->title;
        $des = $page->meta_description;
        $key = $page->meta_keywords;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("meta.php"); ?>
    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/fontawesome-all.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/owl.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/flaticon.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/linoor-icons-2.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/animate.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/jquery-ui.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/hover.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_PATH ?>asstes/css/jarallax.css">
    <link href="<?= BASE_PATH ?>asstes/css/custom-animate.css" rel="stylesheet">
    <link href="<?= BASE_PATH ?>asstes/css/style.css" rel="stylesheet">
    <!-- rtl css -->
    <link href="<?= BASE_PATH ?>asstes/css/rtl.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="<?= BASE_PATH ?>asstes/css/responsive.css" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="<?= BASE_PATH ?>asstes/css/colors/color-default.css">

    <link rel="shortcut icon" href="images/favicon.png" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" id="fav-icon" type="image/x-icon">

</head>

<body class="body-dark">

    <div class="page-wrapper">


        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="<?= BASE_PATH ?>" title="<?= $template->sitename ?>">
                                <img src="<?= BASE_PATH ?><?= $template->path() . $template->logo ?>" id="thm-logo" alt="<?= $template->sitename ?>" title="<?= $template->sitename ?>"></a></div>
                    </div>
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span class="txt">Menu</span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li>
                                        <a href="<?= BASE_PATH ?>">
                                            Home
                                        </a>
                                    </li>
                                    <?php

                                    $menu = Menu::where('group_id', 1)->where('status', 'Active')->where('parent_id', 0)->orderBy('position', 'asc')->get();
                                    foreach ($menu as $key => $menus) {
                                        $m = Menu::where('parent_id', $menus->id)->count();
                                        $m1 = Page::where("mid", $menus->id)->count();
                                        $menu_name = str_replace(' ', '-', $menus->title);
                                        if ($m1 != 0 && $menus->url == '') {
                                            $link = BASE_PATH . "page/" . $menu_name;
                                        } elseif ($menus->url != '') {
                                            $link = BASE_PATH . $menus->url;
                                        } else {
                                            $link = '#';
                                        }
                                        if ($m != 0) {
                                            $drop = 'dropdown';
                                            $drops = 'dropdown-toggle';
                                            $ico = '<span class="fa fa-angle-right"></span>';
                                        } else {
                                            $drop = '';
                                            $drops = '';
                                            $ico = '';
                                        }

                                        echo '<li class="' . $drop . '"><a  href="' . strtolower($link) . '">' . ucfirst($menus->title) . '<div class="dropdown-btn">' . $ico . '</div></a>';

                                        if ($m != 0) {
                                            echo '<ul>';
                                            $sub = Menu::where('group_id', 1)->where('status', 'Active')->where('parent_id', $menus->id)->get();

                                            foreach ($sub as $key => $ro) {
                                                $m2 = Menu::where('parent_id', $ro->id)->count();
                                                $rp1 = Page::where("mid", $ro->id)->count();
                                                $menu_name2 = str_replace(' ', '-', $ro->title);

                                                if ($rp1 != 0 && $ro->url == '') {
                                                    $link = BASE_PATH . "page/" . $menu_name2;
                                                } elseif ($ro->url != '') {
                                                    $link = BASE_PATH . $ro->url;
                                                } else {
                                                    $link = '#';
                                                }
                                                echo '<li><a   href="' . $link . '">' . ucfirst($ro->title) . '</a></li>';
                                                if ($m2 != 0) {
                                                    echo '<ul>';
                                                    $sub1 = Menu::where('group_id', 1)->where('status', 'Active')->where('parent_id', $ro->id)->get();

                                                    foreach ($sub1 as $key => $ro1) {
                                                        $m3 = Menu::where('parent_id', $ro1->id)->count();
                                                        $rp2 = Page::where("mid", $ro1->id)->count();
                                                        $menu_name3 = str_replace(' ', '-', $ro1->title);
                                                        if ($rp2 != 0 && $ro1->url == '') {
                                                            $link = BASE_PATH . "page/" . $menu_name3;
                                                        } elseif ($ro1->url != '') {
                                                            $link = BASE_PATH . $ro1->url;
                                                        } else {
                                                            $link = '#';
                                                        }
                                                        echo '<li><a  href="' . $link . '">' . ucfirst($ro1->title) . '</a></li>';
                                                        if ($m3 != 0) {
                                                            echo '<ul>';
                                                            $sub2 = Menu::where('group_id', 1)->where('status', 'Active')->where('parent_id', $ro1->id)->get();

                                                            foreach ($sub2 as $key => $ro2) {
                                                                $m3 = Menu::where('parent_id', $ro2->id)->count();
                                                                $rp3 = Page::where("mid", $ro2->id)->count();
                                                                $menu_name4 = str_replace(' ', '-', $ro2->title);
                                                                if ($rp3 != 0 && $ro2->url == '') {
                                                                    $link = BASE_PATH . "page/" . $menu_name4;
                                                                } elseif ($ro2->url != '') {
                                                                    $link = BASE_PATH . $ro2->url;
                                                                } else {
                                                                    $link = '#';
                                                                }
                                                                echo '<li><a  href="' . $link . '">' . ucfirst($ro2->title) . '</a></li>';
                                                            }
                                                            echo '</ul>';
                                                        }
                                                    }
                                                    echo '</ul>';
                                                }
                                            }
                                            echo '</ul>';
                                        }
                                        echo "</li>";
                                    }


                                    ?>

                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">

                        <!--Search Btn-->
                        <div class="search-btn">
                            <!-- <button type="button" class="theme-btn search-toggler"><span class="flaticon-loupe"></span></button> -->
                        </div>
                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href="tel:<?= Module::where('status', 0)->where('id', 6)->first()->small_text ?>">
                                    <span class="icon"></span>
                                    <span class="sub-text">Call Anytime</span>
                                    <span class="number"><?= Module::where('status', 0)->where('id', 6)->first()->small_text ?></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png" alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <p><?= Module::where('status', 0)->where('id', 5)->first()->small_text ?></p>
                    <p><a href="mailto:<?= Module::where('status', 0)->where('id', 6)->first()->small_text ?>"><?= Module::where('status', 0)->where('id', 7)->first()->small_text ?></a> <br>
                        <a href="tel:<?= Module::where('status', 0)->where('id', 6)->first()->small_text ?>"><?= Module::where('status', 0)->where('id', 6)->first()->small_text ?></a>
                    </p>
                    <div class="side-menu__social">
                        <?php
                        $social = Social::where('status', 0)->get();
                        foreach ($social as $so) {
                            echo '<a href="' . $so->url . '"><i class="fab fa-' . $so->class . '"></i></a>';
                        }
                        ?>
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

        <!--Search Popup-->
        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.search-popup__inner -->
        </div><!-- /.search-popup -->