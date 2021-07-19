<?= $this->extend('Layout/admin') ?>

<?= $this->section('content') ?>
<h3 class="mb-2">Tambah Project</h3>

<div class="card shadow p-4">
    <form action="/admin/insert" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Project</label>
            <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" autofocus value="<?= old('nama'); ?>">
            <?php
            if ($validation->hasError('nama')) { ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('nama'); ?>
                </div>
            <?php
            }
            ?>

        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?>" name="deskripsi" id="deskripsi" rows="3"><?= old('deskripsi'); ?></textarea>
            <?php
            if ($validation->hasError('deskripsi')) { ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('deskripsi'); ?>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row g-5 mb-3">
            <div class="col-md">
                <label for="bedroom" class="form-label">Jumlah Bedroom</label>
                <input type="number" name="bedroom" class="form-control <?= ($validation->hasError('bedroom')) ? 'is-invalid' : '' ?>" id="bedroom" value="<?= old('bedroom'); ?>">
                <?php
                if ($validation->hasError('bedroom')) { ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('bedroom'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md">
                <label for="luas_area" class="form-label">Luas Area</label>
                <input type="text" name="luas_area" class="form-control <?= ($validation->hasError('luas_area')) ? 'is-invalid' : '' ?>" id="luas_area" placeholder="cth: 4 Meter" value="<?= old('luas_area'); ?>">
                <?php
                if ($validation->hasError('luas_area')) { ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('luas_area'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md">
                <label for="luas_gedung" class="form-label">Luas Gedung</label>
                <input type="text" name="luas_gedung" class="form-control <?= ($validation->hasError('luas_gedung')) ? 'is-invalid' : '' ?>" id="luas_gedung" placeholder="cth: 40 Meter" value="<?= old('luas_gedung'); ?>">
                <?php
                if ($validation->hasError('luas_gedung')) { ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('luas_gedung'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md">
                <label for="parkir" class="form-label">Tempat Parkir</label>
                <input type="number" name="parkir" class="form-control <?= ($validation->hasError('parkir')) ? 'is-invalid' : '' ?>" id="parkir" value="<?= old('parkir'); ?>">
                <?php
                if ($validation->hasError('parkir')) { ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('parkir'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md">
                <label for="kamar_mandi" class="form-label">Jumlah Kamar Mandi</label>
                <input type="number" name="kamar_mandi" class="form-control <?= ($validation->hasError('kamar_mandi')) ? 'is-invalid' : '' ?>" id="kamar_mandi" value="<?= old('kamar_mandi'); ?>">
                <?php
                if ($validation->hasError('kamar_mandi')) { ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('kamar_mandi'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="inputGroupFile-4">Thumbnail</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="thumbnail">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" accept="image/*" name="thumbnail" class="custom-file-input <?= ($validation->hasError('thumbnail')) ? 'is-invalid' : '' ?>" id="inputGroupFile01" aria-describedby="thumbnail">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <?php
            if ($validation->hasError('thumbnail')) { ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('thumbnail'); ?>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row g-3 mb-3">
            <div class="col-md">
                <label for="inputGroupFile-4">Gallery Image 1</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="image_1">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image_1" accept="image/*" class="custom-file-input <?= ($validation->hasError('image_1')) ? 'is-invalid' : '' ?>" id="inputGroupFile01" aria-describedby="image_1">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <?php
                if ($validation->hasError('image_1')) { ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('image_1'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md">
                <label for="inputGroupFile-4">Gallery Image 2</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="image_2">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image_2" accept="image/*" class="custom-file-input <?= ($validation->hasError('image_2')) ? 'is-invalid' : '' ?>" id="inputGroupFile02" aria-describedby="image_2">
                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                    </div>
                </div>
                <?php
                if ($validation->hasError('image_2')) { ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('image_2'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md">
                <label for="inputGroupFile-4">Gallery Image 3</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="image_3">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image_3" accept="image/*" class="custom-file-input <?= ($validation->hasError('image_3')) ? 'is-invalid' : '' ?>" id="inputGroupFile03" aria-describedby="image_3">
                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                    </div>
                </div>
                <?php
                if ($validation->hasError('image_3')) { ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('image_3'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="inputGroupFile-4">Video Project</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="video">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="video" accept="video/*" class="custom-file-input <?= ($validation->hasError('video')) ? 'is-invalid' : '' ?>" id="inputGroupFile02" aria-describedby="video">
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
            </div>
            <?php
            if ($validation->hasError('video')) { ?>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('video'); ?>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="col-md-6 mt-3">
            <button type="submit" class="btn btn-success btn-md px-5">simpan</button>
        </div>
    </form>


</div>

<?= $this->endSection() ?>