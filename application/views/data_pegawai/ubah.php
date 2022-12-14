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
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tipe Pegawai</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-group"></i
                              ></span>
                              <select class="form-select" id="id_tipe" name="id_tipe" aria-label="Default select example">
                                <?php foreach ($tipe as $tipe) : ?>
                                <option value="<?php echo $tipe->id_tipe?>"<?php if($tipe->id_tipe == $pegawai['id_tipe']){echo "selected";} ?>><?php echo $tipe->tipe?> </option>
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
                              <?= form_error('nip', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NIK</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-id-card"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nik"
                                name="nik"
                                value="<?php echo $pegawai['nik'];?>"
                                aria-label="Masukkan NIK"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('nik', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nomor KK</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-id-card"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="nomor_kk"
                                name="nomor_kk"
                                value="<?php echo $pegawai['nomor_kk'];?>"
                                aria-label="Masukkan Nomor KK"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('nomor_kk', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                value="<?php echo $pegawai['tanggal_lahir'];?>"
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
                                <option value="Pria" <?php if($pegawai['jk'] == 'Pria'){echo "selected";} ?>>Pria</option>
                                <option value="Wanita" <?php if($pegawai['jk'] == 'Wanita'){echo "selected";} ?>>Wanita</option>
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
                                <option value="Islam" <?php if($pegawai['agama'] == 'Islam'){echo "selected";} ?>>Islam</option>
                                <option value="Kristen Protestan" <?php if($pegawai['agama'] == 'Kristen Protestan'){echo "selected";} ?>>Kristen Protestan</option>
                                <option value="Katolik" <?php if($pegawai['agama'] == 'Katolik'){echo "selected";} ?>>Katolik</option>
                                <option value="Hindu" <?php if($pegawai['agama'] == 'Hindu'){echo "selected";} ?>>Hindu</option>
                                <option value="Buddha" <?php if($pegawai['agama'] == 'Buddha'){echo "selected";} ?>>Buddha</option>
                                <option value="Konghucu" <?php if($pegawai['agama'] == 'Konghucu'){echo "selected";} ?>>Konghucu</option>
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
                                <option value="Nikah" <?php if($pegawai['status_nikah'] == 'Nikah'){echo "selected";} ?>>Nikah</option>
                                <option value="Belum Menikah" <?php if($pegawai['status_nikah'] == 'Belum Menikah'){echo "selected";} ?>>Belum Menikah</option>
                                <option value="Duda" <?php if($pegawai['status_nikah'] == 'Duda'){echo "selected";} ?>>Duda</option>
                                <option value="Janda" <?php if($pegawai['status_nikah'] == 'Janda'){echo "selected";} ?>>Janda</option>
                                </select>
                                <?= form_error('status_nikah', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                value="<?php echo $pegawai['no_hp'];?>"
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
                                value="<?php echo $pegawai['email'];?>"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                              <?= form_error('email', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <?php foreach ($pendidikan as $pk) : ?>
                                <option value="<?php echo $pk->id_pendidikan?>"<?php if($pk->id_pendidikan == $pegawai['id_pendidikan']){echo "selected";} ?>><?php echo $pk->strata.'-'.$pk->jurusan?> </option>
                                <?php endforeach; ?> 
                                </select>
                                <?= form_error('id_pendidikan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">No Ijazah</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-task"></i
                              ></span>
                              <input
                                type="text"
                                id="nomor_ijazah"
                                name="nomor_ijazah"
                                class="form-control phone-mask"
                                value="<?php echo $pegawai['nomor_ijazah'];?>"
                                aria-label="Masukkan No Ijazah"
                                aria-describedby="basic-icon-default-phone2"
                              />
                              <?= form_error('nomor_ijazah', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                <?php foreach ($unit as $un) : ?>
                                <option value="<?php echo $un->id_unit?>"<?php if($un->id_unit == $pegawai['id_unit']){echo "selected";} ?>><?php echo $un->unit_kerja?> </option>
                                <?php endforeach; ?> 
                                </select>
                                <?= form_error('id_unit', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Pangkat</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-group"></i
                              ></span>
                                <select class="form-select" id="id_pangkat" name="id_pangkat" aria-label="Default select example">
                                <?php foreach ($pangkat as $pan) : ?>
                                <option value="<?php echo $pan->id_pangkat?>"<?php if($pan->id_pangkat == $pegawai['id_pangkat']){echo "selected";} ?>><?php echo $pan->pangkat?> </option>
                                <?php endforeach; ?> 
                                </select>
                                <?= form_error('id_pangkat', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Golongan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-group"></i
                              ></span>
                                <select class="form-select" id="golongan" name="golongan" aria-label="Default select example">
                                <?php foreach ($pangkat as $pan) : ?>
                                <option value="<?php echo $pan->id_pangkat?>"<?php if($pan->id_pangkat == $pegawai['id_pangkat']){echo "selected";} ?>><?php echo $pan->golongan?> </option>
                                <?php endforeach; ?> 
                                </select>
                                <?= form_error('golongan', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <?= form_error('tmt', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <?php foreach ($jabatan as $jb) : ?>
                                <option value="<?php echo $jb->id_jabatan?>"<?php if($jb->id_jabatan == $pegawai['id_jabatan']){echo "selected";} ?>><?php echo $jb->jabatan?> </option>
                                <?php endforeach; ?> 
                                </select>
                                <?= form_error('id_jabatan', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <?php foreach ($eselon as $ese) : ?>
                                <option value="<?php echo $ese->id_eselon?>"<?php if($ese->id_eselon == $pegawai['id_eselon']){echo "selected";} ?>><?php echo $ese->eselon?> </option>
                                <?php endforeach; ?> 
                                </select>
                                <?= form_error('id_eselon', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <?= form_error('nomor_kartu', '<small class="text-danger pl-3">', ' </small>') ?>
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
                              <?= form_error('gaji_pokok', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">SK CPNS(No SK)</label>
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
                                value="<?php echo $pegawai['nomor_skcpns'];?>"
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
                                value="<?php echo $pegawai['tanggal_skcpns'];?>"
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
                                value="<?php echo $pegawai['nomor_skpns'];?>"
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
                                value="<?php echo $pegawai['tanggal_skpns'];?>"
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
                                value="<?php echo $pegawai['nomor_skterakhir'];?>"
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
                                value="<?php echo $pegawai['tanggal_skterakhir'];?>"
                                aria-label="Pilih tanggal SK Pangkat Terakhir"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              <?= form_error('tanggal_skterakhir', '<small class="text-danger pl-3">', ' </small>') ?>
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
                                                                echo base_url('assets/file/pegawai/' . $pegawai['foto']);
                                                            } ?>"
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
                    <h5 class="card-header">KTP</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="button-wrapper">
                        <input type="text" class="form-control" disabled value="<?php echo $pegawai['ktp'];?>" id="ktp">
                          <label for="uploada" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload File</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="uploada"
                              name="ktp"
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
                    <h5 class="card-header">KK</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="button-wrapper">
                        <input type="text" class="form-control" disabled value="<?php echo $pegawai['kk'];?>" id="kk">
                          <label for="uploadb" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload File</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="uploadb"
                              name="kk"
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
                    <h5 class="card-header">Kartu Pegawai</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="button-wrapper">
                        <input type="text" class="form-control" disabled value="<?php echo $pegawai['kartu_pegawai'];?>" id="kartu_pegawai">
                          <label for="uploadc" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload File</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="uploadc"
                              name="kartu_pegawai"
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
                    <h5 class="card-header">Ijazah</h5>
                        <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="button-wrapper">
                        <input type="text" class="form-control" disabled value="<?php echo $pegawai['ijazah'];?>" id="ijazah">
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
                        <input type="text" class="form-control" disabled value="<?php echo $pegawai['sk_cpns'];?>" id="sk_cpns">
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
                        <input type="text" class="form-control" disabled value="<?php echo $pegawai['sk_pns'];?>" id="sk_pns">
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
                        <input type="text" class="form-control" disabled value="<?php echo $pegawai['sk_pangkat'];?>" id="sk_pangkat">
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
<script>

// $('#id_pangkat').change(function(e){
//     id_pangkat = $(this).val()
//     gol= $(this).find("option:selected").attr('data-golongan')
    
//     el = `
//     <input type="text" class="form-control"  placeholder="${gol}" readonly/>
//     <input type='hidden' value="${id_pangkat}" name="golongan" id="golongan" />`

//     $(".get-golongan").empty().html(el);
    
// })

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
$('#uploada').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#ktp").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
$('#uploadb').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#kk").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
$('#uploadc').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#kartu_pegawai").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

</script>