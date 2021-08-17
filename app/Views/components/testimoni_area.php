 <!-- Testimonials -->
 <div class="slider-1 bg-gray">
        <img class="quotes-decoration" src="<?= base_url() ?>/public/images/quotes.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <?php foreach($testimoni as $item): ?>
                                    <div class="swiper-slide">
                                        <img class="testimonial-image" src="<?= base_url() . "/public/images/" . $item['image']; ?>" alt="alternative">
                                        <p class="testimonial-text"><?= $item['testimoni']; ?></p>
                                        <div class="testimonial-author"><?= $item['name']; ?></div>
                                        <div class="testimonial-position"><?= $item['jabatan']; ?> - <?= $item['perusahaan']; ?></div>
                                    </div>
                                <?php endforeach ?>
        
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
<!-- end of testimonials -->