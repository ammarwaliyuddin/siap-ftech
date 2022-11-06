<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Data Pegawai</h4>
    
        <div class="row g-0">
            <div class="col-12">
                <!-- Basic Bootstrap Table -->
                <div class="card p-4">
                    <div class="col-12">
                        <?php if($this->session->userdata('role') == 'admin'): ?>
                            <a href="<?= base_url('tambah-pegawai'); ?>" class="btn btn-primary">Tambah</a>
                            <a href="<?= base_url('export-pegawai'); ?>" class="btn btn-success">Export Excel</a>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 mt-4">

                        <div class="table-responsive text-nowrap">
                        <table class="table table-striped" id="mytable"">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Unit Kerja</th>
                                <th>Jabatan</th>
                                <th>Pangkat</th>
                                <th>Pendidikan</th>
                                <th>Foto</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php
                            $i = 1;
                            foreach ($pegawai as $d) : ?>
                                
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td width="200"><?= $d['nama_pegawai'] ?></td>
                                    <td width="100"><?= $d['unit_kerja'] ?></td>
                                    <td width="300"><?= $d['jabatan'] ?></td>
                                    <td width="300"><?= $d['pangkat'] ?></td>
                                    <td width="row"><?= $d['strata'].'-' .$d['jurusan'] ?></td>
                                    <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-md pull-up"
                                    title="<?= $d['nama_pegawai'] ?>"
                                    >
                                    <img src="<?php if (!empty($d['foto'])) {
                                                                echo base_url('assets/file/pegawai/' . $d['foto']);
                                                            } ?>" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    
                                    </ul>
                                    </td>
                                    
                                    <td>
                                    <a href="" class="btn btn-info btn-sm">Detail</a>
                                    <!-- <a href="<?php echo base_url('ubah-pegawai');?>/<?php echo $d['id_pegawai'];?>" class="btn btn-secondary btn-sm">Ubah</a> -->
                                    <a href="<?php echo base_url();?>DataPegawaiController/ubahPegawai/<?php echo $d['id_pegawai'];?>" class="btn btn-secondary btn-sm">Ubah</a>
                                    <button class="btn btn-danger btn-sm button-delete"  data-id_pegawai="<?= $d['id_pegawai']; ?>">Hapus</button>

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
            <h5 class="modal-title" id="exampleModalLabel1">Hapus Pegawai</h5>
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
                <a href="<?= base_url('DataPegawaiController/hapus?id_pegawai=')?><?= $d['id_pegawai'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
            </div>
            
        </div>
        </div>
    </div>

    <!-- / Content -->
<?php $this->load->view('Layouts/footer.php') ?>
<script>
   $(function() {
        $(".button-delete").on('click',function(){
            $data = $('.button-delete').data('id_pegawai')
            $("#modal-delete").modal('show');
            // alert($data)
        })
    });
</script>