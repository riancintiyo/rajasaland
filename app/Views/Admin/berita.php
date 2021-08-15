<?= $this->extend('Layout/admin') ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Berita</h1>
<p class="mb-4">Daftar berita Rajasaland</p>
<a href="<?= base_url('admin/news/add') ?>">
    <button class="btn btn-primary mb-3"> <i class="fas fa-plus"></i> Tambah Berita</button>
</a>
<?php if (session('insert') == "success") : ?>
    <div class="alert alert-success" role="alert">
        Berhasil menambahkan data !
    </div>
<?php elseif (session('delete') == "success") : ?>
    <div class="alert alert-success" role="alert">
        Berhasil menghapus data !
    </div>
<?php elseif (session('update') == "success") : ?>
    <div class="alert alert-success" role="alert">
        Berhasil mengubah data !
    </div>
<?php endif; ?>



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Berita Tables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Berita</th>
                        <th>Deskripsi</th>
                        <th>Image</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($berita as $b) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $b['title'] ?> </td>
                            <td><?= $b['description'] ?></td>
                            <td><img src="/uploads/berita/<?= $b['image'] ?>" width="100" alt=""></td>
                            <td><?= $b['created_at'] ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>