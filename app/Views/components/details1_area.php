<!-- Details 1 -->
    <div id="details" class="basic-2">
        <img class="decoration-star" src="<?= base_url() ?>/public/images/decoration-star.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= base_url() . "/public/images/" . $details_header['image']; ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="text-container">
                        <h2><?= $details_header['title'] ?></h2>
                        <ul class="list-unstyled li-space-lg">
							<?php foreach($details_content as $item): ?>
								<li class="d-flex">
									<i class="fas fa-square"></i>
									<div class="flex-grow-1"><?= $item['description']; ?></div>
								</li>
							<?php endforeach ?>
                        </ul>
                        <a class="btn-solid-reg" href="#">Get started</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
 <!-- end of details 1 -->