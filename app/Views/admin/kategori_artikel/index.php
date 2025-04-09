<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Daftar Kategori Artikel</h1>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?php echo base_url() . "admin/kategoriartikel/create" ?>" class="btn btn-primary me-md-2"> + Tambah Artikel</a>
            </div>
        </div>
        <div class="tab-content" id="orders-table-tab-content">
            <?php if (session()->has('success')) : ?>
                <div class="alert alert-success">
                    <?= session('success') ?>
                </div>
            <?php endif; ?>
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="text-center" valign="middle">Nama Kategori (ID)</th>
                                        <th class="text-center" valign="middle">Nama Kategori (EN)</th>
                                        <th class="text-center" valign="middle">Slug Kategori (ID)</th>
                                        <th class="text-center" valign="middle">Slug Kategori (EN)</th>
                                        <th class="text-center" valign="middle">Meta Title Kategori (ID)</th>
                                        <th class="text-center" valign="middle">Meta Title Kategori (EN)</th>
                                        <th class="text-center" valign="middle">Meta Description Kategori (ID)</th>
                                        <th class="text-center" valign="middle">Meta Description Kategori (EN)</th>
                                        <th class="text-center" valign="middle">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($categories as $category) : ?>
                                        <tr>
                                            <td><?= $category['nama_kategori_id'] ?></td>
                                            <td><?= $category['nama_kategori_en'] ?></td>
                                            <td><?= $category['slug_kategori_id'] ?></td>
                                            <td><?= $category['slug_kategori_en'] ?></td>
                                            <td><?= $category['title_kategori_id'] ?></td>
                                            <td><?= $category['title_kategori_en'] ?></td>
                                            <td><?= $category['meta_desc_id'] ?></td>
                                            <td><?= $category['meta_desc_en'] ?></td>

                                            <td valign="middle">
                                                <div class="d-grid gap-2">
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $category['id_kategori_artikel'] ?>">
                                                        Hapus
                                                    </button>
                                                    <a href="<?= base_url('admin/kategoriartikel/edit') . '/' . $category['id_kategori_artikel'] ?>" class="btn btn-primary">Ubah</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->
                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div><!--//tab-pane-->
        </div><!--//container-fluid-->
    </div><!--//app-content-->
</div><!--//app-wrapper-->

<!-- Modal Konfirmasi Hapus -->
<?php foreach ($categories as $category) : ?>
    <div class="modal fade" id="deleteModal<?= $category['id_kategori_artikel'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="<?= base_url('admin/kategoriartikel/delete') . '/' . $category['id_kategori_artikel'] ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection('content') ?>