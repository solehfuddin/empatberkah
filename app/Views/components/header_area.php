<!-- Header -->
    <header id="header" class="header">
        <img class="decoration-star" src="<?= base_url() ?>/public/images/decoration-star.svg" alt="alternative">
        <img class="decoration-star-2" src="<?= base_url() ?>/public/images/decoration-star.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-5">
                    <div class="text-container">
                       <!-- <h1 class="h1-large">Beautifying office spaces</h1> -->
						<h1 class="h1-large"><?= $header['title'] ?></h1>
                        <p class="p-large"><?= $header['description'] ?></p>
                        <a class="btn-solid-lg" href="#introduction">More details</a>
                        <a class="btn-outline-lg" href="#contact">Contact us</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5 col-xl-7">
                    <div class="image-container">
                        <!--<img class="img-fluid" src="<?= base_url() . "/public/images/" . $header['image']; ?>" alt="alternative">-->
						<img class="img-fluid" src="<?= $defaultImg . $header['image']; ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
<!-- end of header -->