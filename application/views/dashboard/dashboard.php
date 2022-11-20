<?php $this->load->view('Layouts/header.php') ?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title text-primary">Welcome <?= $this->session->userdata('nama_pegawai') ?> 🎉</h5>
                    <p class="mb-4">
                   Semoga Hari mu menyenangkan !!!
                    </p>

                    <!-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> -->
                </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img
                    src="<?= base_url('assets/img/illustrations/man-with-laptop-light.png'); ?>"
                    height="140"
                    alt="View Badge User"
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
         <!-- Responsive Table -->
         <div class="card">
                <h5 class="card-header">Statistik Unit Kerja</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>No</th>
                        <th>Unit Kerja</th>
                        <th>Jumlah Pegawai</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                                $i = 1;
                                foreach ($unit as $d) : ?>
                                <?php $jumlah = $this->db->get_where('tbl_pegawai', ['id_unit' => $d['id_unit']])->num_rows(); ?>
                                    <tr>
                                        <th width="50"><?= $i ?></th>
                                        <td><?= $d['unit_kerja'] ?></td>
                                        <td><?= $jumlah ?></td>
                                       
                                    </tr>
                                    
                                <?php $i++;
                                endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
         <!-- Responsive Table -->
         <div class="card mt-5">
                <h5 class="card-header">Statistik Pangkat</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>No</th>
                        <th>Pangkat</th>
                        <th>Jumlah Pegawai</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                                $i = 1;
                                foreach ($pangkat as $d) : ?>
                                <?php $jumlah = $this->db->get_where('tbl_pegawai', ['id_pangkat' => $d['id_pangkat']])->num_rows(); ?>
                                    <tr>
                                        <th width="50"><?= $i ?></th>
                                        <td><?= $d['pangkat'] ?></td>
                                        <td><?= $jumlah ?></td>
                                       
                                    </tr>
                                    
                                <?php $i++;
                                endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
         <!-- Responsive Table -->
         <div class="card mt-5">
                <h5 class="card-header">Statistik Tipe Pegawai</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>No</th>
                        <th>Tipe Pegawai</th>
                        <th>Jumlah Pegawai</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                                $i = 1;
                                foreach ($tipe as $d) : ?>
                                <?php $jumlah = $this->db->get_where('tbl_pegawai', ['id_tipe' => $d['id_tipe']])->num_rows(); ?>
                                    <tr>
                                        <th width="50"><?= $i ?></th>
                                        <td><?= $d['tipe'] ?></td>
                                        <td><?= $jumlah ?></td>
                                       
                                    </tr>
                                    
                                <?php $i++;
                                endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
         <!-- Responsive Table -->
         <!-- <div class="card mt-5">
                <h5 class="card-header">Statistik Pendidikan</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>No</th>
                        <th>Pendidikan</th>
                        <th>Jumlah Pegawai</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                                $i = 1;
                                foreach ($pendidikan as $d) : ?>
                                <?php $jumlah = $this->db->get_where('tbl_pegawai', ['id_pendidikan' => $d['id_pendidikan']])->num_rows(); ?>
                                    <tr>
                                        <th width="50"><?= $i ?></th>
                                        <td><?= $d['strata'] ?></td>
                                        <td><?= $jumlah ?></td>
                                       
                                    </tr>
                                    
                                <?php $i++;
                                endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div> -->
              <!--/ Responsive Table -->
        </div>
    </div>
    </div>
    <!-- / Content -->
<?php $this->load->view('Layouts/footer.php') ?>

           
