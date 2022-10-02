<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Data Master /</span> Tipe Pegawai</h4>
    
        <div class="row g-0">
            <div class="col-12">
                <!-- Basic Bootstrap Table -->
                <div class="card p-4">
                    <div class="col-12">
                        <a href="" class="btn btn-primary">Tambah</a>

                    </div>
                    <div class="col-12 mt-4">

                        <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Unit Kerja</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <tr>
                                <td>1</td>
                                <td>Ammar W Jannah</td>
                                <td>Dept IT</td>
                                <td>Jl. B. Lasbaun RT 01 RW 03 Kec. Alak</td>
                                <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-md pull-up"
                                    title="Lilian Fuller"
                                    >
                                    <img src="<?= base_url('assets/img/avatars/5.png'); ?>" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    
                                </ul>
                                </td>
                                <td>03 Maret 1998<br><span class="badge bg-label-primary me-1">24 Tahun</span></td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm">Detail</a>
                                    <a href="" class="btn btn-secondary btn-sm">Ubah</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>2</td>
                                <td>Ammar W Jannah</td>
                                <td>Dept IT</td>
                                <td>Jl. B. Lasbaun RT 01 RW 03 Kec. Alak</td>
                                <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-md pull-up"
                                    title="Lilian Fuller"
                                    >
                                    <img src="<?= base_url('assets/img/avatars/5.png'); ?>" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    
                                </ul>
                                </td>
                                <td>03 Maret 1998<br><span class="badge bg-label-primary me-1">24 Tahun</span></td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm">Detail</a>
                                    <a href="" class="btn btn-secondary btn-sm">Ubah</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>3</td>
                                <td>Ammar W Jannah</td>
                                <td>Dept IT</td>
                                <td>Jl. B. Lasbaun RT 01 RW 03 Kec. Alak</td>
                                <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-md pull-up"
                                    title="Lilian Fuller"
                                    >
                                    <img src="<?= base_url('assets/img/avatars/5.png'); ?>" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    
                                </ul>
                                </td>
                                <td>03 Maret 1998<br><span class="badge bg-label-primary me-1">24 Tahun</span></td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm">Detail</a>
                                    <a href="" class="btn btn-secondary btn-sm">Ubah</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            
                            
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>
        </div>
    </div>
    <!-- / Content -->
<?php $this->load->view('Layouts/footer.php') ?>