<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title><?= $title['title'] ?></title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/public/css/swiper.css" rel="stylesheet">
	<link href="<?= base_url() ?>/public/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="<?= base_url() . "/public/images/" . $title['image']; ?>">
</head>
<body>
	<!-- Page content -->
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <div class="footer bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6><?= $footer['title'] ?></h6>
                        <p class="p-small"> <?= $footer['description'] ?></p>
                    </div>
                    
                    <div class="footer-col second">
                        <!--
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="terms.html">Terms & Conditions</a>, <a href="privacy.html">Privacy Policy</a></li>
                            <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                            <li>Menu: <a href="#header">Home</a>, <a href="#details">Details</a>, <a href="#services">Services</a>, <a href="#contact">Contact</a></li>
                        </ul>  -->
                    </div>
                   
                    <div class="footer-col third">
                        <?php foreach($sosmed as $item): ?>
                            <span class="fa-stack">
                                <a href="<?= $item['link']; ?>">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab <?= $item['image']; ?> fa-stack-1x"></i>
                                </a>
                            </span>
                        <?php endforeach ?>
                        <p class="p-small"><?= $contact['title']; ?> <a href="<?= $contact['link']; ?>"><strong><?= $contact['description']; ?></strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Empat Berkah Global | 2021</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->

            <!--
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Distributed By <a href="https://themewagon.com/">Themewagon</a></p>
                </div>
            </div> -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="<?= base_url() ?>/public/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
    	
    <!-- Scripts -->
    <script src="<?= base_url() ?>/public/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?= base_url() ?>/public/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?= base_url() ?>/public/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="<?= base_url() ?>/public/js/scripts.js"></script> <!-- Custom scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/public/js/function.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
