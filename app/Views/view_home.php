<?= $this->extend('components/template_landing') ?>
    
    <?= $this->section('content') ?>
        
    <?= $this->include('components/navbar_area'); ?>

    <?= $this->include('components/header_area'); ?>

    <?= $this->include('components/counter_area'); ?>

    <?= $this->include('components/intro_area'); ?>
        
    <?= $this->include('components/details1_area'); ?>

    <?= $this->include('components/services_area'); ?>
        
    <?= $this->include('components/details2_area'); ?>

    <?= $this->include('components/invitation_area'); ?>
        
    <?= $this->include('components/project_area'); ?>

    <?= $this->include('components/testimoni_area'); ?>

    <?= $this->include('components/contactus_area'); ?>
    
<?= $this->endSection(); ?>