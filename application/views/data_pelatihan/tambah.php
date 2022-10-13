<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light"> Tambah Data Pelatihan</h4>
    
        <div class="col-xxl">
                  <div class="card mb-4">
                    <!-- <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic with Icons</h5>
                      
                    </div> -->
                    <?= form_open_multipart('DataPelatihanController/tambahPelatihan'); ?>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Pelatihan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nama_pelatihan"
                                name="nama_pelatihan"
                                placeholder="Masukkan Nama Pelatihan"
                                aria-label="Masukkan Nama Pelatihan"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('nama_pelatihan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Pegawai</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <select class="form-select" id="id_pegawai" name="id_pegawai" aria-label="Default select example">
                                <option value="">Pilih Pegawai</option>
                                <?php foreach ($pegawai as $peg) : ?>
                                <option value="<?php echo $peg->id_pegawai?>"><?php echo $peg->nama_pegawai?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jam Pelatihan (Jam)</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="number"
                                class="form-control"
                                id="jam_pelatihan"
                                name="jam_pelatihan"
                                placeholder="Masukkan Jam Pelatihan"
                                aria-label="Masukkan Jam Pelatihan"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('jam_pelatihan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tanggal Pelatihan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-calendar"></i
                              ></span>
                              <input
                                type="date"
                                class="form-control"
                                id="tanggal"
                                name="tanggal"
                                placeholder="Pilih Tanggal Pelatihan"
                                aria-label="Pilih Tanggal Pelatihan"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        
                        <!-- <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Foto Pegawai</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Masukkan Foto Pegawai"
                                aria-label="Masukkan Foto Pegawai"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div> -->
                        <div class="card mb-4">
                    <h5 class="card-header">File Pelatihan</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="button-wrapper">
                        <input type="text" class="form-control" disabled placeholder="Nama File" id="file">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload File</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              name="file"
                              class="account-file-input"
                              hidden
                              accept="file/pdf"
                            />
                          </label>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                          </div>
                        </div>
                        <?php form_close() ?>
                    </div>
                  </div>
                </div>
    </div>
    
    <!-- / Content -->  
<?php $this->load->view('Layouts/footer.php') ?>
<script>

$('#upload').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

</script>