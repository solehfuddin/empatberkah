<?= $this->extend('components/template_landing') ?>
    
<?= $this->section('content') ?>
    <?= $this->include('components/navbar_area'); ?>

    <?= $this->include('components/title_article'); ?>

	<div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
					<?= $article['full_description']; ?>
				</div>
            </div>
        </div>
    </div> 

<?= $this->endSection(); ?>