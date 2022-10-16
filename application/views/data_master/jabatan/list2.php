<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Data Jabatan</h4>
    
        <div class="row g-0">
            <div class="col-12">
                <!-- Basic Bootstrap Table -->
                <div class="card p-4">
                    <div class="col-12">
                        <a href="<?= base_url('tambah-jabatan'); ?>" class="btn btn-primary">Tambah</a>

                    </div>
                    <div class="col-12 mt-4">

                        <div class="table-responsive text-nowrap">
                        <table class="table table-striped" id="mytable"">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Jabatan</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php
                            $i = 1;
                            foreach ($jabatan as $d) : ?>
                                
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td width="row"><?= $d['jabatan'] ?></td>
                                    <td>
                                    <!-- <a href="<?php echo base_url('ubah-jabatan');?>/<?php echo $d['id_jabatan'];?>" class="btn btn-secondary btn-sm">Ubah</a> -->
                                    <a href="<?php echo base_url();?>DataJabatanController/ubahJabatan/<?php echo $d['id_jabatan'];?>" class="btn btn-secondary btn-sm">Ubah</a>
                                    <button class="btn btn-danger btn-sm button-delete"  data-id_jabatan="<?= $d['id_jabatan']; ?>">Hapus</button>

                                    </td>
                                </tr>
                            <?php $i++;
                            endforeach ?>
                            
                            
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>
        </div>
    </div>

   

    <!-- Modal -->
    <div class="modal fade" id="modal-delete" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Hapus Jabatan</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
                
                <p>Anda yakin ingin menghapus data ?</p>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="<?= base_url('DataJabatanController/hapus?id_jabatan=')?><?= $d['id_jabatan'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
            </div>
            
        </div>
        </div>
    </div>

    <!-- / Content -->
<?php $this->load->view('Layouts/footer.php') ?>
<script>
   $(function() {
        $(".button-delete").on('click',function(){
            $data = $('.button-delete').data('id_jabatan')
            $("#modal-delete").modal('show');
            // alert($data)
        })
    });
</script>