<!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Counter -->
                    <div class="counter-container">
						<?php foreach($counter as $item): ?>
							<div class="counter-cell">
								<div data-purecounter-start="0" data-purecounter-end="<?= $item['title']; ?>" data-purecounter-duration="<?= $item['counter']; ?>" class="purecounter">1</div>
								<div class="counter-info"><?= $item['description']; ?></div>
							</div>
						<?php endforeach ?>
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
<!-- end of statistics -->