<?php $this->load->view('Layouts/header.php') ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Data Pegawai</h4>
    
        <div class="row g-0">
            <div class="col-12">
                <!-- Basic Bootstrap Table -->
                <div class="card p-4">
                    <div class="col-12">
                        <?php if($this->session->userdata('role') == 'admin'): ?>
                            <a href="<?= base_url('tambah-pegawai'); ?>" class="btn btn-primary">Tambah</a>
                            <a href="<?= base_url('export-pegawai'); ?>" class="btn btn-success">Export Excel</a>
                            <select class="form-select" id="tipe-pegawai" style="display: inline; width:20%">
                                <option value='all' selected>Pilih Type Pegawai</option>
                                <?php foreach ($tipe as $item) :?>
                                    <option value="<?= $item->id_tipe; ?>"><?= $item->tipe; ?></option>
                                <?php endforeach ?>
                            </select>
                          
                        <?php endif; ?>
                    </div>
                    
                    <div class="col-12 mt-4">
                        <div id="load-data">
                            <div class="table-responsive text-nowrap">
                            <table class="table table-striped" >
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Unit Kerja</th>
                                    <th>Jabatan</th>
                                    <th>Pangkat</th>
                                    <th>Pendidikan</th>
                                    <th>Foto</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    
                                
                                </tbody>
                            </table>
                            </div>

                        </div>
                        
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-delete" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Hapus Pegawai</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="del-idPegawai">
                
                <p>Anda yakin ingin menghapus data ?</p>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" id="delete-data"  class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
            </div>
            
        </div>
        </div>
    </div>

    <!-- / Content -->
<?php $this->load->view('Layouts/footer.php') ?>
<script>
   $(function() {

        showdata();

        function showdata(){
            tipePegawai = $('#tipe-pegawai').val()
            
            $.ajax({
                type : "POST",
                url  : "<?= base_url('show-pegawai') ?>",
                dataType : "JSON",
                data : {tipePegawai:tipePegawai},
                beforeSend: function(){
                    el = `<div style="align-items: center;justify-content: center;display: flex;"><div class="spinner-grow text-primary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div> Loading...</div>` 
                    $("#load-data").empty().html(el);
         
                },
                success: function(result){

                    el = '' 
                    el +=`<div class="table-responsive text-nowrap">
                            <table class="table table-striped" id="getDataAjax">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Unit Kerja</th>
                                    <th>Jabatan</th>
                                    <th>Pangkat</th>
                                    <th>Pendidikan</th>
                                    <th>Foto</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">`   
                                
                    if(result.length == 0){
                        el += `<tr><td colspan='9' style="text-align: center;">Tidak Ada Data</td></tr>`

                    }else{
                        no = 1
                        $.each(result, function( index, value ) {
                            foto = (value.foto == null) ? ' ' : `<?= base_url('assets/file/pegawai/') ?>${value.foto}`
                            el += `<tr>
                                            <th scope="row">${no++}</th>
                                            <td width="200">${value.nama_pegawai}</td>
                                            <td width="200">${value.nip}</td>
                                            <td width="100">${value.unit_kerja}</td>
                                            <td width="300">${value.jabatan}</td>
                                            <td width="row">${value.pangkat} - ${value.golongan}</td>
                                            <td width="row">${value.strata} - ${value.jurusan}</td>
                                            <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar avatar-md pull-up"
                                            title="${value.nama_pegawai}"
                                            >
                                            <img src="${foto}" alt="Avatar" class="rounded-circle" />
                                            </li>
                                            
                                            </ul>
                                            </td>
                                            
                                            <td>
                                            <a href="<?php echo base_url();?>DataPegawaiController/detailPegawai/${value.id_pegawai}" class="btn btn-info btn-sm">Detail</a>
                                            <a href="<?php echo base_url();?>DataPegawaiController/ubahPegawai/${value.id_pegawai}" class="btn btn-secondary btn-sm">Ubah</a>
                                            <button class="btn btn-danger btn-sm button-delete" data-id_pegawai="${value.id_pegawai}">Hapus</button>
                                            </td>
                                        </tr>`

                            });

                    }
                      
                    
                    el += ` </tbody>
                            </table>
                            </div>`
                    $("#load-data").empty().html(el);

                    $('#getDataAjax').DataTable({
                        responsive: true
                    });
                    
                }
            })

        }
        $("#tipe-pegawai").on('change',function(){
            showdata();
        })
   
        $("#load-data").on('click','.button-delete',function(){
            const id = $(this).data('id_pegawai')
 
            $("#del-idPegawai").val(id)
            $("#modal-delete").modal('show');
        })

        $('#delete-data').on('click', function() {
            
            let idPegawai = $('#del-idPegawai').val();
            $.ajax({
                type : "POST",
                url  : "<?= base_url('del-pegawai') ?>",
                dataType : "JSON",
                data : {id_pegawai:idPegawai},
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
    });
</script>