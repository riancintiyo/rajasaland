<?= $this->extend('Layout/admin') ?>

<?= $this->section('content') ?>
<h3 class="mb-2">Tambah Berita</h3>

<div class="card shadow p-4">
    <form action="<?= base_url('admin/news/insert') ?>" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="title" class="form-label">Judul Berita</label>
            <input type="text" name="title" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : '' ?>" id="title" autofocus value="<?= old('title'); ?>">
            <?php
            if ($validation->hasError('title')) { ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('title'); ?>
                </div>
            <?php
            }
            ?>

        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Isi Berita</label>
            <textarea class="form-control ckeditor <?= ($validation->hasError('content')) ? 'is-invalid' : '' ?>" name="content" id="content" rows="6"><?= old('content'); ?></textarea>
            <?php
            if ($validation->hasError('content')) { ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('content'); ?>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control ckeditor <?= ($validation->hasError('description')) ? 'is-invalid' : '' ?>" name="description" id="description" rows="3"><?= old('description'); ?></textarea>
            <?php
            if ($validation->hasError('description')) { ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('description'); ?>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="keyword" class="form-label">Keyword</label>
            <textarea class="form-control <?= ($validation->hasError('keyword')) ? 'is-invalid' : '' ?>" name="keyword" id="keyword" rows="3"><?= old('keyword'); ?></textarea>
            <?php
            if ($validation->hasError('keyword')) { ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('keyword'); ?>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="inputGroupFile-4">Gambar</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="image">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" accept="image/*" name="image" class="custom-file-input <?= ($validation->hasError('image')) ? 'is-invalid' : '' ?>" id="inputGroupFile01" aria-describedby="image">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <?php
            if ($validation->hasError('image')) { ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('image'); ?>
                </div>
            <?php
            }
            ?>
        </div>
        <button class="btn btn-success" type="submit">Simpan Berita</button>

    </form>


</div>

<?= $this->endSection() ?>