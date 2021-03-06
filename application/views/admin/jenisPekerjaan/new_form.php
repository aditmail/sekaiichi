<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">
            <div class="container-flud">
                <?php $this->load->view("admin/_partials/breadcumb.php") ?>

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/JenisPekerjaan/') ?>"><i class="fas fa-arrow-left"></i> Kembali </a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo site_url('admin/JenisPekerjaan/add') ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <input type="checkbox" checked name="is_visible" value="True"> Tampilkan Data<br>
                            </div>

                            <div class="form-group">
                                <label>Tipe Pekerjaan*</label>
                                <select class="form-control" name="tipe" id="category" required>
                                    <option value="">No Selected</option>
                                    <?php foreach ($mt_tipe_pekerjaan as $row): ?>
                                        <option value="<?php echo $row->tipe; ?>"><?php echo $row->tipe; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tipe') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jenis_pekerjaan">Jenis Pekerjaan*</label>
                                <input class="form-control <?php echo form_error('jenis_pekerjaan') ? 'is-invalid' : '' ?>" type="text" name="jenis_pekerjaan" placeholder="Tipe Pekerjaan" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jenis_pekerjaan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi*</label>
                                <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" type="" name="deskripsi" placeholder="Deskripsi Jenis Pekerjaan" rows="5" cols="30"></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('deskripsi') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Simpan Data" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * Harus Diisi
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>