 <!-- Projects -->
 <div id="projects" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Portofolio Kami</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach($article as $item): ?>
                        <div class="card">
                            <img class="img-fluid" src="<?= base_url() . "/public/images/" . $item['image']; ?>" alt="alternative">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item['title']; ?></h5>
                                <p class="card-text"><?= $item['description']; ?> <a class="blue no-line" href="<?= base_url() . "/informasi/" . $item['slug']; ?>">...Read more</a></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
<!-- end of projects -->