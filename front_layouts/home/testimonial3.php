 <!--Testimonials Section-->
 <section class="testimonials-section">
     <div class="auto-container">
         <div class="sec-title">
             <h2>Customer feedbacks<span class="dot">.</span></h2>
         </div>
         <div class="carousel-box">
             <div class="testimonials-carousel owl-theme owl-carousel">
                 <?php
                    $testimonials = Testimonials::where('status', 0)->get();
                    foreach ($testimonials as $test) {
                    ?>
                     <div class="testi-block">
                         <div class="inner">
                             <div class="icon"><span>“</span></div>
                             <div class="info">
                                 <div class="image"><a href="#"><img src=" <?= BASE_PATH ?><?= $test->path() ?><?= $test->image ?>" alt=""></a></div>
                                 <div class="name"><?= ucfirst($test->name) ?></div>
                                 <div class="designation"><?= ucfirst($test->designation) ?></div>
                             </div>
                             <div class="text"><?= $test->text?></div>
                         </div>
                     </div>
                 <?php
                    }
                    ?>
             </div>
         </div>
     </div>
 </section>