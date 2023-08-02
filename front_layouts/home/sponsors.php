<section class="sponsors-section sponsors-section__dark">
    <div class="sponsors-outer">
        <!--Sponsors-->
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="sponsors-carousel owl-theme owl-carousel">
                <?php
                $clients = Client::where('status', 0)->get();
                foreach ($clients as $client) {
                ?>
                    <div class="slide-item">
                        <figure class="image-box"><a href="<?= $client->url ?>" target="_blank"><img src="<?= BASE_PATH . $client->path() . $client->image ?>" alt=""></a>
                        </figure>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>