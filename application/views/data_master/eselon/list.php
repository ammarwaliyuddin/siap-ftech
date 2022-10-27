<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Data Eselon</h4>
    
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
                                <th>Eselon</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php
                            $i = 1;
                            foreach ($eselon as $d) : ?>
                                
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td width="row"><?= $d['eselon'] ?></td>
                                    <td>
                                    <button class="btn btn-secondary btn-sm button-edit"  data-id_eselon="<?= $d['id_eselon']; ?>" data-eselon="<?= $d['eselon']; ?>">edit</button>
                                    <button class="btn btn-danger btn-sm button-delete"  data-id_eselon="<?= $d['id_eselon']; ?>">Hapus</button>

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
            <h5 class="modal-title" id="exampleModalLabel1">Hapus Data Eselon</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="del-idEselon">
                
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
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Eselon</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
                
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Eselon</label>
                <div class="col-sm-10">
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-user"></i
                    ></span>
                    <input
                    type="text"
                    class="form-control"
                    id="eselon"
                    placeholder="Masukkan Eselon"
                    aria-label="Masukkan Eselon"
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
            <h5 class="modal-title" id="exampleModalLabel1">Edit Eselon</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
                
            <div class="row mb-3">
                <input type="hidden" id="edit-idEselon">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Eselon</label>
                <div class="col-sm-10">
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-user"></i
                    ></span>
                    <input
                    type="text"
                    class="form-control"
                    id="edit-eselon"
                    placeholder="Masukkan Eselon"
                    aria-label="Masukkan Eselon"
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

           const idEselon = $(this).data('id_eselon')

            $("#del-idEselon").val(idEselon)
            $("#modal-delete").modal('show');
            // alert($data)
        })

        $('#delete-data').on('click', function() {
            
            const idEselon = $('#del-idEselon').val();

            $.ajax({
                type : "POST",
                url  : "<?= base_url('del-eselon') ?>",
                dataType : "JSON",
                data : {idEselon:idEselon},
                success: function(data){
                    console.log(`data : ${data}`)
                    if(data == 1){
                        $("#modal-delete").modal('hide');
                        Swal.fire({
                            // position: 'top-end',
                            icon: 'success',
                            title: 'Data Eselon Berhasil di Hapus',
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
            id_eselon = $(this).data('id_eselon')
            eselon = $(this).data('eselon')

            $("#edit-idEselon").val(id_eselon);
            $("#edit-eselon").val(eselon);

            // console.log(`unit gan : ${$id_unit}, ${$unit_kerja}`)
            $("#modal-update").modal('show');
            // alert($data)
        })

        $('#update-data').on('click', function() {
            
            const idEselon = $('#edit-idEselon').val();
            const eselon = $('#edit-eselon').val();

            if(!eselon){
                el = `<span class="text-danger" >Data Tidak Boleh Kosong</span>`;
                $("#modal-update #required").empty().html(el);
                
            }else{
                $.ajax({
                    type : "POST",
                    url  : "<?= base_url('ubah-eselon') ?>",
                    dataType : "JSON",
                    data : {idEselon:idEselon,eselon:eselon},
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
            
            const eselon = $('#eselon').val();

            if(!eselon){
                el = `<span class="text-danger" >Data Tidak Boleh Kosong</span>`;
                $("#modal-add #required").empty().html(el);
                
            }else{
                $.ajax({
                    type : "POST",
                    url  : "<?= base_url('DataEselonController/tambahEselon') ?>",
                    dataType : "JSON",
                    data : {eselon:eselon},
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