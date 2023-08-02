<section class="news-section news-section__dark">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Latest news & articles<span class="dot">.</span></h2>
        </div>

        <div class="row clearfix">
            <?php
            $blogs = Blog::where('status', 0)->get();
            foreach ($blogs as $blog) {
            ?>
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="<?= BASE_PATH . "blog" . DS . $blog->blog_slug ?>"><img src="<?= BASE_PATH . $blog->path() . $blog->image ?>" alt=""></a>
                        </div>
                        <div class="lower-box">
                            <div class="post-meta">
                                <ul class="clearfix">
                                    <li><span class="far fa-clock"></span><?= date('d M', strtotime($blog->created_at)) ?></li>
                                    <li><span class="far fa-user-circle"></span> Admin</li>
                                </ul>
                            </div>
                            <h5><a href="<?= BASE_PATH . "blog" . DS . $blog->blog_slug ?>"><?= $blog->blog_title ?></a></h5>
                            <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                            <div class="link-box"><a class="theme-btn" href="<?= BASE_PATH . "blog" . DS . $blog->blog_slug ?>"><span class="flaticon-next-1"></span></a></div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>