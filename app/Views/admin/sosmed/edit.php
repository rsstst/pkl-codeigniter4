    <?= $this->extend('admin/template/template'); ?>
    <?= $this->Section('content'); ?>

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title">Edit Sosmed</h1>
            <hr class="mb-4">
            <div class="row g-4 settings-section">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">

                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger" role="alert">
                                <h4>Error</h4>
                                <p><?php echo session()->getFlashdata('error'); ?></p>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('admin/sosmed/update/' . $sosmed['id_sosmed']) ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Sosmed</label>
                                        <input type="text" class="form-control" id="nama_sosmed" name="nama_sosmed" placeholder="Masukkan Nama Kategori" value="<?= old('nama_sosmed', $sosmed['nama_sosmed']) ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Link Sosmed</label>
                                        <input type="text" class="form-control" id="link_sosmed" name="link_sosmed" placeholder="Masukkan Nama Kategori" value="<?= old('link_sosmed', $sosmed['link_sosmed']) ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Foto Sosmed</label>
                                        <input type="file" class="form-control <?= isset($validation) && $validation->hasError('logo_sosmed') ? 'is-invalid' : ''; ?>" id="logo_sosmed" name="logo_sosmed">
                                        <img width="100px" class="img-thumbnail mt-2" src="<?= base_url('assets/img/logo/' . $sosmed['logo_sosmed']); ?>" alt="Logo sosmed">
                                        <?php if (isset($validation) && $validation->hasError('logo_sosmed')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('logo_sosmed'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <p>*Ukuran foto maksimal 572x572 pixels</p>
                                    <p>*Foto harus berekstensi jpg/png/jpeg</p>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    <div class="col">
                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo session()->getFlashdata('success') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div><!--//row-->

            <hr class="my-4">
        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <?= $this->endSection('content'); ?>