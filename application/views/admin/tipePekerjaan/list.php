<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("admin/_partials/head.php")?>
    
    </head>

    <body id="page-top">
        <?php $this->load->view("admin/_partials/navbar.php")?>
        <div id="wrapper">
            <?php $this->load->view("admin/_partials/sidebar.php")?>

            <div id="content-wrapper">

            <div class="container-fluid">
                <?php $this->load->view("admin/_partials/breadcumb.php")?>

                <!-- Data Tables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/TipePekerjaan/add')?>"><i class="fas fa-plus"></i>Tambah Tipe Pekerjaan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Tipe Pekerjaan</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mt_tipe_pekerjaan as $tipePekerjaan): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $tipePekerjaan->tipe ?>
                                        </td>
                                        <td class="small">
                                            <?php echo substr($tipePekerjaan->deskripsi, 0, 300) ?> ...
                                        </td>
                                        <td width="350" class="text-center">
                                            <a href="<?php echo site_url('admin/TipePekerjaan/edit/'.$tipePekerjaan->id_tipe_pekerjaan) ?>"
                                            class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                            
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/TipePekerjaan/delete/'.$tipePekerjaan->id_tipe_pekerjaan) ?>')"
                                            href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>

                                            <a href="<?php echo site_url('admin/JenisPekerjaan/'.$tipePekerjaan->id_tipe_pekerjaan) ?>"
                                            class="btn btn-small text-primary"><i class="fas fa-plus"></i> Tambah</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid-->

            <!-- Sticky Footer -->
            <?php $this->load->view("admin/_partials/footer.php")?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php $this->load->view("admin/_partials/scrolltop.php")?>
        <?php $this->load->view("admin/_partials/modal.php")?>

        <?php $this->load->view("admin/_partials/js.php")?>

        <script>
            function deleteConfirm(url){
                $('#btn-delete').attr('href', url);
                $('#deleteModals').modal();
            }
        </script>
    </body>
</html>