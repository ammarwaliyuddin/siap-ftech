<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light"> Ubah Data Pegawai</h4>
    
        <div class="col-xxl">
                  <div class="card mb-4">
                    <!-- <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic with Icons</h5>
                      
                    </div> -->
                    <?= form_open_multipart(); ?>

                    <input type="hidden" name="id_pegawai" id="id_pegawai" value="<?php echo $pegawai['id_pegawai'];?>">
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Pegawai</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nama_pegawai"
                                name="nama_pegawai"
                                value="<?php echo $pegawai['nama_pegawai'];?>"
                                aria-label="Masukkan Nama Pegawai"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NIP</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-id-card"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nip"
                                name="nip"
                                value="<?php echo $pegawai['nip'];?>"
                                aria-label="Masukkan NIP"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Pangkat/Golongan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-group"></i
                              ></span>
                                <select class="form-select" id="pangkat" name="pangkat" aria-label="Default select example">
                                <option value="">Pilih Pangkat/Golongan</option>
                                <option value="1" <?php if($pegawai['pangkat'] == '1'){echo "selected";} ?>>Pangkat 1</option>
                                <option value="2" <?php if($pegawai['pangkat'] == '2'){echo "selected";} ?>>Pangkat 2</option>
                                <option value="3" <?php if($pegawai['pangkat'] == '3'){echo "selected";} ?>>Pangkat 3</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">TMT</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-calendar"></i
                              ></span>
                              <input
                                type="date"
                                class="form-control"
                                id="tmt"
                                name="tmt"
                                value="<?php echo $pegawai['tmt'];?>"
                                aria-label="Masukkan TMT"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Gaji Pokok</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-money"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="gaji_pokok"
                                name="gaji_pokok"
                                value="<?php echo $pegawai['gaji_pokok'];?>"
                                aria-label="Masukkan Gaji pokok"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK ( Pejabat )</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="pejabat"
                                name="pejabat"
                                value="<?php echo $pegawai['pejabat'];?>"
                                aria-label="Masukkan SK Pejabat"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK ( No SK )</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-task"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nomor_sk"
                                name="nomor_sk"
                                value="<?php echo $pegawai['nomor_sk'];?>"
                                aria-label="Masukkan nomor SK"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK ( Tanggal SK )</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-calendar"></i
                              ></span>
                              <input
                                type="date"
                                class="form-control"
                                id="tanggal_sk"
                                name="tanggal_sk"
                                value="<?php echo $pegawai['tanggal_sk'];?>"
                                aria-label="Pilih tanggal SK"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tipe Pegawai</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-group"></i
                              ></span>
                              <select class="form-select" id="tipe_pegawai" name="tipe_pegawai" aria-label="Default select example">
                                <option value="">Pilih Tipe Pegawai</option>
                                <option value="1" <?php if($pegawai['tipe_pegawai'] == '1'){echo "selected";} ?>>PNS</option>
                                <option value="2" <?php if($pegawai['tipe_pegawai'] == '2'){echo "selected";} ?>>Honorer</option>
                                <option value="3" <?php if($pegawai['tipe_pegawai'] == '3'){echo "selected";} ?>>THL</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nomor Kartu Pegawai</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-id-card"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nomor_kartu"
                                name="nomor_kartu"
                                value="<?php echo $pegawai['nomor_kartu'];?>"
                                aria-label="Masukkan Nomor Kartu Pegawai"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tempat Lahir</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bxs-city"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="tempat_lahir"
                                name="tempat_lahir"
                                value="<?php echo $pegawai['tempat_lahir'];?>"
                                aria-label="Masukkan Tempat Lahir"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tanggal Lahir</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-calendar"></i
                              ></span>
                              <input
                                type="date"
                                class="form-control"
                                id="tanggal_lahir"
                                name="tanggal_lahir"
                                value="<?php echo $pegawai['tanggal_lahir'];?>"
                                aria-label="Pilih tanggal lahir"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jenis Kelamin</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-body"></i
                              ></span>
                              <select class="form-select" id="jk" name="jk" aria-label="Default select example">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="1" <?php if($pegawai['jk'] == '1'){echo "selected";} ?>>Pria</option>
                                <option value="2" <?php if($pegawai['jk'] == '2'){echo "selected";} ?>>Wanita</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Agama</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <select class="form-select" id="agama" name="agama" aria-label="Default select example">
                                <option value="">Pilih Agama</option>
                                <option value="1" <?php if($pegawai['agama'] == '1'){echo "selected";} ?>>Islam</option>
                                <option value="2" <?php if($pegawai['agama'] == '2'){echo "selected";} ?>>Kristen Protestan</option>
                                <option value="3" <?php if($pegawai['agama'] == '3'){echo "selected";} ?>>Katolik</option>
                                <option value="4" <?php if($pegawai['agama'] == '4'){echo "selected";} ?>>Hindu</option>
                                <option value="5" <?php if($pegawai['agama'] == '5'){echo "selected";} ?>>Buddha</option>
                                <option value="6" <?php if($pegawai['agama'] == '6'){echo "selected";} ?>>Konghucu</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Status Nikah</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <select class="form-select" id="status_nikah" name="status_nikah" aria-label="Default select example">
                                <option value="">Pilih Status Nikah</option>
                                <option value="1" <?php if($pegawai['status_nikah'] == '1'){echo "selected";} ?>>Nikah</option>
                                <option value="2" <?php if($pegawai['status_nikah'] == '2'){echo "selected";} ?>>Belum Menikah</option>
                                <option value="3" <?php if($pegawai['status_nikah'] == '3'){echo "selected";} ?>>Duda / Janda</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Alamat</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-map"></i
                              ></span>
                              <input
                                type="text"
                                id="alamat"
                                name="alamat"
                                class="form-control phone-mask"
                                value="<?php echo $pegawai['alamat'];?>"
                                aria-label="Masukkan No HP"
                                aria-describedby="basic-icon-default-phone2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">No HP</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                              ></span>
                              <input
                                type="text"
                                id="no_hp"
                                name="no_hp"
                                class="form-control phone-mask"
                                value="<?php echo $pegawai['no_hp'];?>"
                                aria-label="Masukkan No HP"
                                aria-describedby="basic-icon-default-phone2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                              <input
                                type="text"
                                id="email"
                                name="email"
                                class="form-control"
                                value="<?php echo $pegawai['email'];?>"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                              <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Password</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-lock-alt"></i
                              ></span>
                              <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                value="<?php echo $pegawai['password'];?>"
                                aria-label="Masukkan Password"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Pendidikan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <select class="form-select" id="pendidikan" name="pendidikan" aria-label="Default select example">
                                <option value="">Pilih Pendidikan</option>
                                <option value="1" <?php if($pegawai['pendidikan'] == '1'){echo "selected";} ?>>SMA / SMK</option>
                                <option value="2" <?php if($pegawai['pendidikan'] == '2'){echo "selected";} ?>>Sarjana</option>
                                <option value="3" <?php if($pegawai['pendidikan'] == '3'){echo "selected";} ?>>Magister</option>
                                <option value="4" <?php if($pegawai['pendidikan'] == '4'){echo "selected";} ?>>Doctor</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Eselon</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <select class="form-select" id="eselon" name="eselon" aria-label="Default select example">
                                <option value="">Pilih Eselon</option>
                                <option value="1" <?php if($pegawai['eselon'] == '1'){echo "selected";} ?>>I</option>
                                <option value="2" <?php if($pegawai['eselon'] == '2'){echo "selected";} ?>>II</option>
                                <option value="3" <?php if($pegawai['eselon'] == '3'){echo "selected";} ?>>III</option>
                                <option value="4" <?php if($pegawai['eselon'] == '4'){echo "selected";} ?>>IV</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jabatan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <select class="form-select" id="jabatan" name="jabatan" aria-label="Default select example">
                                <option value="">Pilih Jabatan</option>
                                <option value="1" <?php if($pegawai['jabatan'] == '1'){echo "selected";} ?>>Kepala Keuangan</option>
                                <option value="2" <?php if($pegawai['jabatan'] == '2'){echo "selected";} ?>>Kepala Administrasi</option>
                                <option value="3" <?php if($pegawai['jabatan'] == '3'){echo "selected";} ?>>Kepala Kepegawaian</option>
                                <option value="4" <?php if($pegawai['jabatan'] == '4'){echo "selected";} ?>>Kepala Dinas</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Unit Kerja</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <select class="form-select" id="unit_kerja" name="unit_kerja" aria-label="Default select example">
                                <option value="">Pilih Unit Kerja</option>
                                <option value="1" <?php if($pegawai['unit_kerja'] == '1'){echo "selected";} ?>>Keuangan</option>
                                <option value="2" <?php if($pegawai['unit_kerja'] == '2'){echo "selected";} ?>>Administrasi</option>
                                <option value="3" <?php if($pegawai['unit_kerja'] == '3'){echo "selected";} ?>>Kepegawaian</option>
                                </select>
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
                    <h5 class="card-header">Foto Pegawai</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="<?php if (!empty($pegawai['foto'])) {
                                                                echo base_url('assets/img/pegawai/' . $pegawai['foto']);
                                                            } ?>"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload Foto</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              name="foto"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="tambah" class="btn btn-primary">Ubah Data</button>
                          </div>
                        </div>
                        <?php form_close() ?>
                    </div>
                  </div>
                </div>
    </div>

    
    
    <!-- / Content -->  
<?php $this->load->view('Layouts/footer.php') ?>