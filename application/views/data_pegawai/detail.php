<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light"> Detail Data Pegawai</h4>
    
        <div class="col-xxl">
                  <div class="card mb-4">
                    <!-- <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic with Icons</h5>
                      
                    </div> -->
                    <?= form_open_multipart(); ?>

                    <div class="card mb-4">
                    <h5 class="card-header">Foto Pegawai</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="<?php if (!empty($pegawai['foto'])) {
                                                                echo base_url('assets/file/pegawai/' . $pegawai['foto']);
                                                            } ?>"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="250"
                          width="250"
                          id="uploadedAvatar"
                        />
                      </div>
                    </div>
                        </div>
                    <div class="card-body">
                      <form>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tipe Pegawai</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['tipe'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Pegawai</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['nama_pegawai'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NIP</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['nip'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NIK</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['nik'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nomor KK</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['nomor_kk'];?></label>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tempat Lahir</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['tempat_lahir'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tanggal Lahir</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['tanggal_lahir'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jenis Kelamin</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['jk'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Agama</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['agama'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Status Nikah</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['status_nikah'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Alamat</label>
                          <div class="col-sm-10">
                          <label><?php echo $pegawai['alamat'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">No HP</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone"><?php echo $pegawai['no_hp'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Email</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['email'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Pendidikan</label>
                          <div class="col-sm-10">
                          <label><?php echo $pegawai['strata'].'-' .$pegawai['jurusan'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-fullname">No Ijazah</label>
                          <div class="col-sm-10">
                          <label><?php echo $pegawai['nomor_ijazah'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Unit Kerja</label>
                          <div class="col-sm-10">
                          <label><?php echo $pegawai['unit_kerja'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Pangkat</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['pangkat'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Golongan</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['golongan'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">TMT</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['tmt'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jabatan</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['jabatan'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Eselon</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['eselon'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nomor Kartu Pegawai</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['nomor_kartu'];?></label>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Gaji Pokok</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['gaji_pokok'];?></label>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK CPNS(No SK)</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['nomor_skcpns'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK CPNS (Tanggal SK)</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['tanggal_skcpns'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK PNS (No SK)</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['nomor_skpns'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK PNS (Tanggal SK)</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['tanggal_skpns'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK Pangkat Terakhir (No SK)</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['nomor_skterakhir'];?></label>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK Pangkat Terakhir (Tanggal SK)</label>
                          <div class="col-sm-10">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"><?php echo $pegawai['tanggal_skterakhir'];?></label>
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
                        

                        <?php form_close() ?>
                    </div>
                  </div>
                </div>
    </div>

    
    
    <!-- / Content -->  
<?php $this->load->view('Layouts/footer.php') ?>
