<?= $this->extend('Layout/admin') ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Project</h1>
<p class="mb-4">Daftar project Rajasaland</p>
<a href="/admin/project/add">
    <button class="btn btn-primary mb-3"> <i class="fas fa-plus"></i> Tambah Project</button>
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
        <h6 class="m-0 font-weight-bold text-primary">Project Tables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Project</th>
                        <th>Deskripsi</th>
                        <th>Thumbnail</th>
                        <th>Created At</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($project as $p) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $p['nama'] ?> </td>
                            <td><?= $p['deskripsi'] ?></td>
                            <td><img src="/uploads/thumbnail/<?= $p['img_thumbnail'] ?>" width="100" alt=""></td>
                            <td><?= $p['created_at'] ?></td>
                            <td style="display: grid;">
                                <a href="/admin/project/detail/<?= $p['id'] ?>">
                                    <button class="btn btn-primary">Details</button>
                                </a>
                                <a href="/admin/project/edit/<?= $p['id'] ?>" class="mt-2">
                                    <button class="btn btn-success">Edit</button>
                                </a>
                                <a class="mt-2" href="/admin/project/delete/<?= $p['id'] ?>">
                                    <button class="btn btn-danger">Hapus</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>