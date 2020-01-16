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
                        <a href="<?php echo site_url('admin/TipePekerjaan/') ?>"><i class="fas fa-arrow-left"></i> Kembali </a>
                    </div>
                    <div class="card-body">

                        <form action="<?php site_url('admin/tipePekerjaan/edit') ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $mt_tipe_pekerjaan->id_tipe_pekerjaan?>"/>

                            <div class="form-group">
                                <input type="checkbox" name="is_visible" value="True" <?php echo $is_visible = $mt_tipe_pekerjaan->is_visible;
                                if((String) $is_visible == 'True'){?> checked <?php } ?>> Tampilkan Data<br>
                            </div>    

                            <div class="form-group">
                                <label for="tipe">Tipe Pekerjaan*</label>
                                <input class="form-control <?php echo form_error('tipe') ? 'is-invalid' : '' ?>" 
                                type="text" name="tipe" placeholder="Tipe Pekerjaan" value="<?php echo $mt_tipe_pekerjaan->tipe ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tipe') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi*</label>
                                <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" 
                                type="text" name="deskripsi" placeholder="Deskripsi Tipe Pekerjaan" rows="5" cols="30"><?php echo $mt_tipe_pekerjaan->deskripsi ?></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('deskripsi') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetime_created">Created Data</label>
                                <input class="form-control <?php echo form_error('datetime_created') ? 'is-invalid' : '' ?>" 
                                type="text" readonly name="datetime_created" placeholder="Created Date" 
                                value="<?php $dateFromDB = $mt_tipe_pekerjaan->datetime_created;
                                if($dateFromDB != null){
                                    echo date('d-m-Y H:i:s', strtotime($dateFromDB));
                                }
                                 ?>" />
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Perbarui Data" />
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