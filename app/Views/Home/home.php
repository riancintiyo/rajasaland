<?= $this->extend('Layout/home') ?>

<?= $this->section('content') ?>
<!-- section1 -->
<section>
    <div class="container-fluid " id="section1">
        <section>
            <div class="row-sec1">
                <div class="col-sec1">
                    <h1>Rajasaland</h1>
                    <h1>Property</h1>
                    <div class="btn-group" role="group text-center">
                        <button type="button" class="btn1" href="#page2">About Us</button>
                        <button type="button" class="btn2" href="#form">Contact Us</button>
                    </div>

                </div>
            </div>
        </section>
    </div>
</section>
<!-- end section1 -->

<!-- section2 -->
<section>
    <div class="container-2" id="section2">
        <section class="container">
            <div class="row">
                <div class="col">
                    <div class='inner-container'>
                        <div class="background-container"></div>
                        <div class="subheading-2" style="background-color:#1D6A65; color:#fff">
                            <h1 style="font-weight:600">About Us</h1>
                            <h2>Rajasaland<br></h2>
                            <p style="line-height: 1.5; font-size: 16px;"> Rajasaland merupakan pengembang properti yang progresif dengan pengalaman
                                didaerah Bandung Raya dan sekitarnya. Kami mengembangkan properti dilokasi
                                yang berkembang dan menjanjikan, serta menjalankan bisnis dengan eksekusi yang
                                prima untuk melampaui ekspektasi konsumen. Kami selalu berupaya untuk mewujudkan
                                mimpi keluarga Indonesia untuk memiliki rumah baik sebagai hunian maupun instrumen
                                investasi properti yang menguntungkan dan menginspirasi kehidupan yang lebih baik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!-- end section 2 -->

<!-- section3 -->
<section>
    <div class="container-3">
        <section>
            <div class="row">
                <div class="col">
                    <div class="animasi">
                        <section id="team">
                            <div class="container my-3 py-5 text-center">
                                <div class="row">
                                    <div class="col">
                                        <h1>Our Gallery</h1>
                                    </div>
                                </div>
                                <div class="slider d-flex flex">

                                    <div class="responsive-slider">
                                        <img class="img-slider" src="<?= base_url('') ?>/images/3dbuilding-f.png" alt="carousel_image">
                                    </div>
                                    <div class="responsive-slider">
                                        <img class="img-slider" src="<?= base_url('') ?>/images/3dbuilding.jpg" alt="carousel_image">
                                    </div>

                                    <div class="responsive-slider">
                                        <img class="img-slider" src="<?= base_url('') ?>/images/3dhome.jpg" alt="carousel_image">
                                    </div>

                                    <!-- <div class="responsive-slider">
                                        <img src="<?= base_url('') ?>/images/3dbuilding.jpg" alt="carousel_image">
                                    </div>

                                    <div class="responsive-slider">
                                        <img src="<?= base_url('') ?>/images/3dbuilding.jpg" alt="carousel_image">
                                    </div> -->

                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!-- end section 3  -->

<!-- section4 -->
<div class="section-4" id="project">
    <div class="container">
        <h1>Our Projects</h1>
    </div>
    <div class="container container-4 ">
        <?php foreach ($project as $p) : ?>
            <a href="/project/<?= $p['id'] ?>">
                <div class="card card-project bg-none p-0 text-white col-md-4 col-12 col-lg-4">
                    <img src="/uploads/thumbnail/<?= $p['img_thumbnail']; ?>" class="card-img" alt="<?= $p['nama']; ?>">
                    <div class="card-img-overlay text-center img-overlay">
                        <h3 class="card-title">Wangsarajasa</h3>
                    </div>
                    <div class="gradient-overlay"></div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
</div>
<?= $this->endSection() ?>