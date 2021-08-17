<!-- Contact -->
<div id="contact" class="form-1">
        <img class="decoration-star" src="<?= base_url() ?>/public/images/decoration-star.svg" alt="alternative">
        <img class="decoration-star-2" src="<?= base_url() ?>/public/images/decoration-star.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= base_url() ?>/public/images/contact.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Hubungi kami dengan isi form berikut</h2>

                        <!-- Contact Form -->
                        <!-- <form> -->
                        <!-- Handle Form -->
                        <?= form_open('home/hubungikami', ['class' => 'formHubungiKami']); ?>
                        <?= csrf_field(); ?>
                            <div class="form-group">
                               <input type="text" class="form-control-input" placeholder="Nama" name="input_name" id="input_name">
                               <div style="margin-left: 10px" class="invalid-feedback errorInputName">test</div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" placeholder="Email" name="input_mail" id="input_mail">
                                <div style="margin-left: 10px" class="invalid-feedback errorInputMail">test</div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control-textarea" placeholder="Pesan" name="input_msg" id="input_msg"></textarea>
                               <div style="margin-left: 10px" class="invalid-feedback errorInputMsg">test</div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button btnHubungikami">Kirim</button>
                            </div>
                        <!-- </form> -->
                        <?= form_close(); ?>
                        <!-- Handle FORM -->
                        <!-- end of contact form -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
<!-- end of contact -->