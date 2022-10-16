<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Data Pendidikan</h4>
    
        <div class="row g-0">
            <div class="col-12">
            <?php if($this->session->flashdata('message')) : ?>
                <div class="alert alert-info alert-dismissible" role="alert">
                    <?= $this->session->flashdata('message'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
                <!-- Basic Bootstrap Table -->
                <div class="card p-4">
                    <div class="col-12">
                        <button 
                            type="button"
                            class="btn btn-primary button-add" 
                            data-bs-toggle="modal"
                            data-bs-target="#modal-add">
                            Tambah
                        </button>
                       

                    </div>
                    <div class="col-12 mt-4">

                        <div class="table-responsive text-nowrap">
                        <table class="table table-striped" id="mytable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Pendidikan</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php
                            $i = 1;
                            foreach ($pendidikan as $d) : ?>
                                
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td width="row"><?= $d['pendidikan'] ?></td>
                                    <td>
                                    <button class="btn btn-secondary btn-sm button-edit"  data-id_pendidikan="<?= $d['id_pendidikan']; ?>" data-pendidikan="<?= $d['pendidikan']; ?>">edit</button>
                                    <button class="btn btn-danger btn-sm button-delete"  data-id_pendidikan="<?= $d['id_pendidikan']; ?>">Hapus</button>

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

   

    <!-- Delete Modal -->
    <div class="modal fade" id="modal-delete" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Hapus Data Pendidikan</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="del-idPendidikan">
                
                <p>Anda yakin ingin menghapus data ?</p>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="delete-data"><i class="fa fa-trash"></i> Hapus</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- add Modal -->
    <div class="modal fade" id="modal-add" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Pendidikan</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
                
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Pendidikan</label>
                <div class="col-sm-10">
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-user"></i
                    ></span>
                    <input
                    type="text"
                    class="form-control"
                    id="pendidikan"
                    placeholder="Masukkan Pendidikan"
                    aria-label="Masukkan Pendidikan"
                    aria-describedby="basic-icon-default-fullname2"
                    autofocus
                    /> 
                </div>
                <div id="required"></div>                 
                </div>
            </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="add-data"><i class="fa fa-add"></i> Tambah</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- update Modal -->
    <div class="modal fade" id="modal-update" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Edit Pendidikan</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
                
            <div class="row mb-3">
                <input type="hidden" id="edit-idPendidikan">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Pendidikan</label>
                <div class="col-sm-10">
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-user"></i
                    ></span>
                    <input
                    type="text"
                    class="form-control"
                    id="edit-pendidikan"
                    placeholder="Masukkan Pendidikan"
                    aria-label="Masukkan Pendidikan"
                    aria-describedby="basic-icon-default-fullname2"
                    autofocus
                    /> 
                </div>
                <div id="required"></div>                 
                </div>
            </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="update-data"><i class="fa fa-add"></i> Ubah</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- / Content -->
<?php $this->load->view('Layouts/footer.php') ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   $(function() {
        $(".button-delete").on('click',function(){

           const idPendidikan = $(this).data('id_pendidikan')

            $("#del-idPendidikan").val(idPendidikan)
            $("#modal-delete").modal('show');
            // alert($data)
        })

        $('#delete-data').on('click', function() {
            
            const idPendidikan = $('#del-idPendidikan').val();

            $.ajax({
                type : "POST",
                url  : "<?= base_url('del-pendidikan') ?>",
                dataType : "JSON",
                data : {idPendidikan:idPendidikan},
                success: function(data){
                    console.log(`data : ${data}`)
                    if(data == 1){
                        $("#modal-delete").modal('hide');
                        Swal.fire({
                            // position: 'top-end',
                            icon: 'success',
                            title: 'Data Pendidikan Berhasil di Hapus',
                            showConfirmButton: false,
                            timer: 1200
                        })
                        setTimeout(function() { 
                            location.reload();
                        }, 1300);
                    }else{

                        Swal.fire({
                            // position: 'top-end',
                            icon: 'warning',
                            title: 'Data gagal terhapus',
                            showConfirmButton: false,
                            timer: 1000
                        })

                    }
                }
            })
     
	    });

        $(".button-edit").on('click',function(){
            id_pendidikan = $(this).data('id_pendidikan')
            pendidikan = $(this).data('pendidikan')

            $("#edit-idPendidikan").val(id_pendidikan);
            $("#edit-pendidikan").val(pendidikan);

            // console.log(`unit gan : ${$id_unit}, ${$unit_kerja}`)
            $("#modal-update").modal('show');
            // alert($data)
        })

        $('#update-data').on('click', function() {
            
            const idPendidikan = $('#edit-idPendidikan').val();
            const pendidikan = $('#edit-pendidikan').val();

            if(!pendidikan){
                el = `<span class="text-danger" >Data Tidak Boleh Kosong</span>`;
                $("#modal-update #required").empty().html(el);
                
            }else{
                $.ajax({
                    type : "POST",
                    url  : "<?= base_url('ubah-pendidikan') ?>",
                    dataType : "JSON",
                    data : {idPendidikan:idPendidikan,pendidikan:pendidikan},
                    success: function(data){
                        console.log(`data : ${data}`)
                        if(data == 1){
                            $("#modal-update").modal('hide');
                            Swal.fire({
                                // position: 'top-end',
                                icon: 'success',
                                title: 'Data Tersimpan',
                                showConfirmButton: false,
                                timer: 1200
                            })
                            setTimeout(function() { 
                                location.reload();
                            }, 1300);
                        }else if(data == 3){

                            Swal.fire({
                                // position: 'top-end',
                                icon: 'warning',
                                title: 'Data Sudah Ada',
                                showConfirmButton: false,
                                timer: 1000
                            })

                        }
                        else{
                            Swal.fire({
                                // position: 'top-end',
                                icon: 'error',
                                title: 'Data Tidak Tersimpan',
                                showConfirmButton: false,
                                timer: 1200
                            })
                            
                        }
                    }
                })

            }
            
     
	    });

        $('#add-data').on('click', function() {
            
            const pendidikan = $('#pendidikan').val();

            if(!pendidikan){
                el = `<span class="text-danger" >Data Tidak Boleh Kosong</span>`;
                $("#modal-add #required").empty().html(el);
                
            }else{
                $.ajax({
                    type : "POST",
                    url  : "<?= base_url('DataPendidikanController/tambahPendidikan') ?>",
                    dataType : "JSON",
                    data : {pendidikan:pendidikan},
                    success: function(data){
                        console.log(`data : ${data}`)
                        if(data == 1){
                            $("#modal-add").modal('hide');
                            Swal.fire({
                                // position: 'top-end',
                                icon: 'success',
                                title: 'Data Tersimpan',
                                showConfirmButton: false,
                                timer: 1200
                            })
                            setTimeout(function() { 
                                location.reload();
                            }, 1300);
                        }else if(data == 3){

                            Swal.fire({
                                // position: 'top-end',
                                icon: 'warning',
                                title: 'Data Sudah Ada',
                                showConfirmButton: false,
                                timer: 1000
                            })

                        }
                        else{
                            Swal.fire({
                                // position: 'top-end',
                                icon: 'error',
                                title: 'Data Tidak Tersimpan',
                                showConfirmButton: false,
                                timer: 1200
                            })
                            
                        }
                    }
                })

            }
            
     
	    });

    });
</script>