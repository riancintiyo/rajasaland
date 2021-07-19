<?= $this->extend('Layout/admin') ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-2 text-gray-800">Detail Project</h1>
<p class="mb-4">Wangsarajasa Project</p>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Project Tables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <th>Nama Project</th>
                        <td><?= $project['nama'] ?></td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td><?= $project['deskripsi'] ?></td>
                    </tr>
                    <tr>
                        <th>Thumbnail</th>
                        <td><img src="/uploads/thumbnail/<?= $project['img_thumbnail'] ?>" width="300" alt=""></td>
                    </tr>
                    <tr>
                        <th>Image Gallery 1</th>
                        <td><img src="/uploads/gallery/<?= $project['img_gallery_1'] ?>" width="300" alt=""></td>
                    </tr>
                    <tr>
                        <th>Image Gallery 2</th>
                        <td><img src="/uploads/gallery/<?= $project['img_gallery_2'] ?>" width="300" alt=""></td>
                    </tr>
                    <tr>
                        <th>Image Gallery 3</th>
                        <td><img src="/uploads/gallery/<?= $project['img_gallery_3'] ?>" width="300" alt=""></td>
                    </tr>
                    <tr>
                        <th>Video</th>
                        <td> <video width="620" height="340" controls>
                                <source src="/uploads/video/<?= $project['video'] ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="/admin/project">
            kembali
        </a>
    </div>
</div>

<?= $this->endSection() ?>