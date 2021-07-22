<?= $this->extend('Layout/home') ?>

<?= $this->section('content') ?>

<!-- Section 1 -->
<section class="project-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 inner-project">
                <h1 class="title"><?= $project['nama'] ?></h1>
                <p class="deskripsi my-3"><?= $project['deskripsi'] ?></p>
                <div class="facilities mb-3">
                    <div class="row">
                        <div class="col-3 mt-2 text-center">
                            <p> Bedroom</p>
                            <div class="icon">
                                <p><img src="/icon/bedroom.svg" class="img-fluid" alt=""> <?= $project['bedroom'] ?></p>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <p> Luas Area</p>
                            <div class="icon">
                                <p><img src="/icon/luas-area.svg" class="img-fluid" alt=""> <?= $project['luas_area'] ?></p>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <p> Luas Gedung</p>
                            <div class="icon">
                                <p><img src="/icon/luas-gedung.svg" class="img-fluid" alt=""> <?= $project['luas_gedung'] ?></p>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <p> Tempat Parkir</p>
                            <div class="icon">
                                <p><img src="/icon/tempat-parkir.svg" class="img-fluid" alt=""> <?= $project['parkir'] ?></p>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <p> Kamar Mandi</p>
                            <div class="icon">
                                <p><img src="/icon/kamar-mandi.svg" class="img-fluid" alt=""> <?= $project['kamar_mandi'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-warning btn-contact">Contact Us</button>
            </div>
            <div class="col-md-6 pt-5 d-md-block d-lg-block d-none">
                <img src="/uploads/thumbnail/<?= $project['img_thumbnail'] ?>" class="rounded mx-auto d-block shadow img-fluid" alt="...">
            </div>
        </div>
    </div>
</section>

<section class="project-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 gallery">
                <img src="/uploads/gallery/<?= $project['img_gallery_1'] ?>" class="rounded d-block shadow w-100" alt="...">
            </div>
            <div class="col-md-4 gallery">
                <img src="/uploads/gallery/<?= $project['img_gallery_2'] ?>" class="rounded d-block shadow w-100" alt="...">
            </div>
            <div class="col-md-4 gallery">
                <img src="/uploads/gallery/<?= $project['img_gallery_3'] ?>" class="rounded d-block shadow w-100" alt="...">
            </div>
        </div>
    </div>
</section>

<section class="project-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <video class="img-fluid" controls>
                    <source src="/uploads/video/<?= $project['video'] ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-md-6 pl-5">
                <h1 class="title"><?= $project['nama'] ?></h1>
                <p class="mt-3 deskripsi">
                    <?= $project['deskripsi'] ?>
                </p>
            </div>
        </div>
    </div>

</section>

<?= $this->endSection() ?>