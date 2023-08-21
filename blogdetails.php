<?php include("includes/initialize.php");
include_layout_web('header.php');
$blog = Blog::where('status', 0)->where('blog_slug', $_GET['slug'])->first();
if ($blog != null) {
} else {
    redirect_to(BASE_PATH);
}
//dd($blog);
?>
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(<?= BASE_PATH ?>asstes/images/background/image-7.webp);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1><?= ucfirst($blog->blog_title) ?></h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= BASE_PATH ?>">Home</a></li>
                        <li><a href="<?= BASE_PATH ?>blog">blog</a></li>
                        <li class="active"><?= ucfirst($blog->blog_title) ?></li>
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
                <div class="blog-posts">
                    <!--News Block-->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="#">
                                    <img src="<?= BASE_PATH . $blog->path() . $blog->image ?>" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> <?= date('d M', strtotime($blog->created_at)) ?></li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>

                                    </ul>
                                </div>
                                <h4><a href="blog-single.html"><?= ucfirst($blog->blog_title) ?></a>
                                </h4>
                                <div class="text"><?= ucfirst($blog->text) ?></div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">
                    <!--Sidebar Widget-->
                    <!-- <div class="sidebar-widget search-box">
                        <div class="widget-inner">
                            <form method="post" action="http://layerdrops.com/linoorhtml/blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                                    <button type="submit"><span class="icon flaticon-magnifying-glass-1"></span></button>
                                </div>
                            </form>
                        </div>
                    </div> -->

                    <div class="sidebar-widget recent-posts">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Latest Posts</h4>
                            </div>
                            <?php
                            $blogs = Blog::where('status', 0)->latest()->limit(3)->get();
                            foreach ($blogs as $blog) {
                            ?>
                                <div class="post">
                                    <figure class="post-thumb"><img src="<?= BASE_PATH . $blog->path() . $blog->image ?>" alt="">
                                    </figure>
                                    <h5 class="text"><a href="<?= BASE_PATH . 'blog' . DS . $blog->blog_slug ?>"><?= ucfirst($blog->blog_title) ?></a></h5>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                    </div>

                    <div class="sidebar-widget archives">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Categories</h4>
                            </div>
                            <ul>
                                <?php
                                $blogCats = Blog_category::where('status', 0)->get();
                                foreach ($blogCats as $blogcat) {
                                ?>
                                    <li><a href="#"><?= ucfirst($blogcat->cat_title) ?></a></li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>

                    <!-- <div class="sidebar-widget popular-tags">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Tags</h4>
                            </div>
                            <div class="tags-list clearfix">
                                <a href="#">Business</a>, <a href="#">Agency</a>, <a href="#">Technology</a>,<a href="#">Parallax</a>, <a href="#">Innovative</a>, <a href="#">Professional</a>,<a href="#">Experience</a>
                            </div>
                        </div>
                    </div> -->

                </aside>
            </div>

        </div>
    </div>
</div>




<?php
include_layout_web('home/call.php');
include_layout_web('footer.php');
?>