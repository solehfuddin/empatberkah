<!-- Services -->
<div id="services" class="cards-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2><?= $service_h['title'] ?></h2>
                        <p><?= $service_h['description'] ?></p>
                        <p><?= $service_h['description2'] ?></p>
                        <ul class="list-unstyled li-space-lg">
                            <?php foreach($service_i as $item): ?>
                                <li class="d-flex">
                                    <i class="fas fa-square"></i>
                                    <div class="flex-grow-1"><?= $item['title']; ?></div>
                                </li>
						    <?php endforeach ?>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="card-container">
                        <?php foreach($service_item as $item): ?>
                            <div class="card">
                                <div class="card-icon">
                                    <span class="fas <?= $item['image']; ?>"></span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item['title']; ?></h5>
                                </div>
                            </div>
						<?php endforeach ?>
                    </div> <!-- end of container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
<!-- end of services -->