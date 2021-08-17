<?= $this->extend('components/template_landing') ?>
    
<?= $this->section('content') ?>
    <?= $this->include('components/navbar_area'); ?>

    <?= $this->include('components/title_article'); ?>

    <?= $article['full_description']; ?>

<?= $this->endSection(); ?>