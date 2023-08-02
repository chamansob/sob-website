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
    <link href="<?= BASE_PATH ?>asstes/css/style2.css" rel="stylesheet">
    <!-- rtl css -->
    <link href="<?= BASE_PATH ?>asstes/css/rtl.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="<?= BASE_PATH ?>asstes/css/responsive.css" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="<?= BASE_PATH ?>asstes/css/colors/color-default2.css">




</head>

<body class="body-dark">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>