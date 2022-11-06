<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light"> Tambah Data Pegawai</h4>
    
        <div class="col-xxl">
                  <div class="card mb-4">
                    <!-- <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic with Icons</h5>
                      
                    </div> -->
                    <?= form_open_multipart('DataPegawaiController/tambahPegawai'); ?>
                    <div class="card-body">
                      <form>

                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tipe Pegawai</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-group"></i
                              ></span>
                              <select class="form-select" id="id_tipe" name="id_tipe" aria-label="Default select example">
                                <option value="">Pilih Tipe Pegawai</option>
                                <?php foreach ($tipe as $tip) : ?>
                                <option value="<?php echo $tip->id_tipe?>"><?php echo $tip->tipe?></option>
                                <?php endforeach; ?>
                                </select>
                                <?= form_error('id_tipe', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
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
                                placeholder="Masukkan Nama Pegawai"
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
                                placeholder="Masukkan NIP"
                                aria-label="Masukkan NIP"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('nip', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                <select class="form-select" id="id_pangkat" name="id_pangkat" aria-label="Default select example">
                                <option value="">Pilih Pangkat/Golongan</option>
                                <?php foreach ($pangkat as $pan) : ?>
                                <option value="<?php echo $pan->id_pangkat?>"><?php echo $pan->pangkat?></option>
                                <?php endforeach; ?>
                                </select>
                                <?= form_error('id_pangkat', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                placeholder="Masukkan TMT"
                                aria-label="Masukkan TMT"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('tmt', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                placeholder="Masukkan Gaji pokok"
                                aria-label="Masukkan Gaji pokok"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('gaji_pokok', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK CPNS (No SK)</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-task"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nomor_skcpns"
                                name="nomor_skcpns"
                                placeholder="Masukkan nomor SK CPNS"
                                aria-label="Masukkan nomor SK CPNS"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('nomor_skcpns', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK CPNS (Tanggal SK)</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-calendar"></i
                              ></span>
                              <input
                                type="date"
                                class="form-control"
                                id="tanggal_skcpns"
                                name="tanggal_skcpns"
                                placeholder="Pilih tanggal SK CPNS"
                                aria-label="Pilih tanggal SK CPNS"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('tanggal_skcpns', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK PNS (No SK)</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-task"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nomor_skpns"
                                name="nomor_skpns"
                                placeholder="Masukkan nomor SK PNS"
                                aria-label="Masukkan nomor SK PNS"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('nomor_skpns', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK PNS (Tanggal SK)</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-calendar"></i
                              ></span>
                              <input
                                type="date"
                                class="form-control"
                                id="tanggal_skpns"
                                name="tanggal_skpns"
                                placeholder="Pilih tanggal SK PNS"
                                aria-label="Pilih tanggal SK PNS"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('tanggal_skpns', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK Pangkat Terakhir (No SK)</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-task"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nomor_skterakhir"
                                name="nomor_skterakhir"
                                placeholder="Masukkan nomor SK Pangkat Terakhir"
                                aria-label="Masukkan nomor SK Pangkat Terakhir"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('nomor_skterakhir', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK Pangkat Terakhir (Tanggal SK)</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-calendar"></i
                              ></span>
                              <input
                                type="date"
                                class="form-control"
                                id="tanggal_skterakhir"
                                name="tanggal_skterakhir"
                                placeholder="Pilih tanggal SK Pangkat Terakhir"
                                aria-label="Pilih tanggal SK Pangkat Terakhir"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('tanggal_skterakhir', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                placeholder="Masukkan Nomor Kartu Pegawai"
                                aria-label="Masukkan Nomor Kartu Pegawai"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('nomor_kartu', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                placeholder="Masukkan Tempat Lahir"
                                aria-label="Masukkan Tempat Lahir"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                placeholder="Pilih tanggal lahir"
                                aria-label="Pilih tanggal lahir"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                <option value="1">Pria</option>
                                <option value="2">Wanita</option>
                                </select>
                                <?= form_error('jk', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                <option value="1">Islam</option>
                                <option value="2">Kristen Protestan</option>
                                <option value="3">Katolik</option>
                                <option value="4">Hindu</option>
                                <option value="5">Buddha</option>
                                <option value="6">Konghucu</option>
                                </select>
                                <?= form_error('agama', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                <option value="1">Nikah</option>
                                <option value="2">Belum Menikah</option>
                                <option value="3">Duda / Janda</option>
                                </select>
                                <?= form_error('status_nikah', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-message">Alamat</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class="bx bx-map"></i
                              ></span>
                              <textarea
                                id="alamat"
                                name="alamat"
                                class="form-control"
                                placeholder="Masukkan Alamat"
                                aria-label="Masukkan Alamat"
                                aria-describedby="basic-icon-default-message2"
                              ></textarea>
                              <?= form_error('alamat', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                placeholder="Masukkan No HP"
                                aria-label="Masukkan No HP"
                                aria-describedby="basic-icon-default-phone2"
                              />
                              <?= form_error('no_hp', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                placeholder="john.doe"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                              <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                              <?= form_error('email', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                placeholder="Masukkan Password"
                                aria-label="Masukkan Password"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('password', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <select class="form-select" id="id_pendidikan" name="id_pendidikan" aria-label="Default select example">
                                <option value="">Pilih Pendidikan</option>
                                <?php foreach ($pendidikan as $pk) : ?>
                                <option value="<?php echo $pk->id_pendidikan?>"><?php echo $pk->pendidikan?></option>
                                <?php endforeach; ?>
                                </select>
                                <?= form_error('id_pendidikan', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <select class="form-select" id="id_eselon" name="id_eselon" aria-label="Default select example">
                                <option value="">Pilih Eselon</option>
                                <?php foreach ($eselon as $ese) : ?>
                                <option value="<?php echo $ese->id_eselon?>"><?php echo $ese->eselon?></option>
                                <?php endforeach; ?>
                                </select>
                                <?= form_error('id_eselon', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <select class="form-select" id="id_jabatan" name="id_jabatan" aria-label="Default select example">
                                <option value="">Pilih Jabatan</option>
                                <?php foreach ($jabatan as $jb) : ?>
                                <option value="<?php echo $jb->id_jabatan?>"><?php echo $jb->jabatan?></option>
                                <?php endforeach; ?>
                                </select>
                                <?= form_error('id_jabatan', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <select class="form-select" id="id_unit" name="id_unit" aria-label="Default select example">
                                <option value="">Pilih Unit Kerja</option>
                                <?php foreach ($unit as $un) : ?>
                                <option value="<?php echo $un->id_unit?>"><?php echo $un->unit_kerja?></option>
                                <?php endforeach; ?>
                                </select>
                                <?= form_error('id_unit', '<small class="text-danger pl-3">', ' </small>') ?>
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
                          src="<?= base_url('assets/img/avatars/1.png'); ?>"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="foto" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload Foto</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="foto"
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

                        <div class="card mb-4">
                    <h5 class="card-header">Ijazah</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="button-wrapper">
                        <input type="text" class="form-control" disabled placeholder="Nama File" id="ijazah">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload File</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              name="ijazah"
                              class="account-file-input"
                              hidden
                              accept="file/pdf"
                            />
                          </label>
                        </div>
                      </div>
                    </div>
                        </div>

                        <div class="card mb-4">
                    <h5 class="card-header">SK CPNS</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="button-wrapper">
                        <input type="text" class="form-control" disabled placeholder="Nama File" id="sk_cpns">
                          <label for="upload2" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload File</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload2"
                              name="sk_cpns"
                              class="account-file-input"
                              hidden
                              accept="file/pdf"
                            />
                          </label>
                        </div>
                      </div>
                    </div>
                        </div>

                        <div class="card mb-4">
                    <h5 class="card-header">SK PNS</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="button-wrapper">
                        <input type="text" class="form-control" disabled placeholder="Nama File" id="sk_pns">
                          <label for="upload3" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload File</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload3"
                              name="sk_pns"
                              class="account-file-input"
                              hidden
                              accept="file/pdf"
                            />
                          </label>
                        </div>
                      </div>
                    </div>
                        </div>

                        <div class="card mb-4">
                    <h5 class="card-header">SK Pangkat</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="button-wrapper">
                        <input type="text" class="form-control" disabled placeholder="Nama File" id="sk_pangkat">
                          <label for="upload4" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload File</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload4"
                              name="sk_pangkat"
                              class="account-file-input"
                              hidden
                              accept="file/pdf"
                            />
                          </label>
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
        $("#ijazah").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

$('#upload2').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#sk_cpns").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
$('#upload3').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#sk_pns").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
$('#upload4').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#sk_pangkat").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

</script>