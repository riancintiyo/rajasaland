<?= $this->extend('Layout/admin') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="col-md-12">
        <h1>Welcome, <b> <?= user()->username ?> </b></h1>
    </div>
</div>
<?= $this->endSection() ?>