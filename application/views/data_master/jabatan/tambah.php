<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light"> Tambah Data Jabatan</h4>
    
        <div class="col-xxl">
                  <div class="card mb-4">
                    <!-- <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic with Icons</h5>
                      
                    </div> -->
                    <form action="<?= base_url('DataJabatanController/tambahJabatan') ?>" method="post">
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jabatan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="jabatan"
                                name="jabatan"
                                placeholder="Masukkan Jabatan"
                                aria-label="Masukkan Jabatan"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('jabatan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                          </div>
                        </div>
                        </form>
                    </div>
                  </div>
                </div>
    </div>
    
    <!-- / Content -->  
<?php $this->load->view('Layouts/footer.php') ?>