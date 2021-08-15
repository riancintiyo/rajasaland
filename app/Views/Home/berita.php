<?= $this->extend('Layout/home') ?>

<?= $this->section('content') ?>
<div id="content" class="site-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title">
                <h2>Berita Wangsarajasa</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita as $b) : ?>
                <div class="col-md-3">
                    <div class="card shadow-lg" style="width: 18rem;">
                        <img src="<?= base_url('uploads/berita') . '/' . $b['image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <?= $b['description'] ?>
                            <a class="text-white text-bold" href="<?= base_url('berita') . '/' . $b['id'] ?>">
                                Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

            <!-- <nav aria-label="Page navigation example" class="mt-5">
                <ul class="pagination justify-content-center pagination-lg">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> -->
            <?= $pager->links() ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>