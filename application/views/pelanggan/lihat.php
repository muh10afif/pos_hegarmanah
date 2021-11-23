<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18"><?= $title ?></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Hegarmanah</li>
                    <li class="breadcrumb-item active"><?= $title ?></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header p-3">
                <button class="btn float-right btn-primary" id="tambah_pelanggan" data-toggle="modal" data-target="#modal_pelanggan"><i class="mdi mdi-plus-circle mr-2"></i>Tambah Data</button>
            
                <h4 id="judul" class="font-weight-bold text-dark mt-2">Master Pelanggan</h4>
            </div>
            <div class="card-body table-responsive">

                <table class="table table-bordered table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"  id="tabel_pelanggan" width="100%" cellspacing="0">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Pelanggan</th>
                                <th width="20%">No Telepon</th>
                                <th width="20%">Alamat</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                
                        </tbody>
                    </table>
                
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_pelanggan" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="judul_modal">Tambah Data pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="mr-2 text-dark">&times;</span>
        </button>
      </div>
        <form id="form_pelanggan" autocomplete="off">
            <input type="hidden" name="id_pelanggan" id="id_pelanggan">
            <input type="hidden" name="aksi" id="aksi" value="Tambah">
            <div class="modal-body">
                <div class="col-md-12 p-3">
                    <div class="form-group row">
                        <label for="nama_pelanggan" class="col-sm-3 col-form-label">Nama pelanggan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" style="font-size: 14px;" name="nama_pelanggan" id="nama_pelanggan" placeholder="Masukkan Nama pelanggan">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-3 col-form-label">No Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control numeric" name="no_telp" id="no_telp" placeholder="Masukkan No Telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <textarea name="alamat" id="alamat" rows="5" class="form-control" placeholder="Masukkan Alamat"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="simpan_pelanggan">Simpan</button>
            </div>
        </form>
    </div>
  </div>
</div>

<script>

    // 03-10-2020

    $(document).ready(function () {

        $('.numeric').numericOnly();

        // menampilkan list pelanggan
        var tabel_pelanggan = $('#tabel_pelanggan').DataTable({
            "processing"        : true,
            "serverSide"        : true,
            "order"             : [],
            "ajax"              : {
                "url"   : "Pelanggan/tampil_data_pelanggan",
                "type"  : "POST"
            },
            "columnDefs"        : [{
                "targets"   : [0,4],
                "orderable" : false
            }, {
                'targets'   : [0,4],
                'className' : 'text-center',
            }]

        })

        // menampilkan modal tambah pelanggan
        $('#tambah_pelanggan').on('click', function () {
            $('#form_pelanggan').trigger('reset');
            $('#aksi').val('Tambah');
            $('#modal_pelanggan').modal('show');
            $('#judul_modal').text('Tambah Data Pelanggan');
        })

        // aksi simpan data pelanggan
        $('#simpan_pelanggan').on('click', function () {

            var form_pelanggan  = $('#form_pelanggan').serialize();
            var nama_pelanggan  = $('#nama_pelanggan').val();
            var no_telp         = $('#no_telp').val();
            var alamat          = $('#alamat').val();

            console.log(no_telp);

            if (nama_pelanggan == '') {

                $('#nama_pelanggan').focus();

                swal({
                    title               : "Peringatan",
                    text                : 'Nama pelanggan harus terisi !',
                    buttonsStyling      : false,
                    type                : 'warning',
                    showConfirmButton   : false,
                    timer               : 1000
                }); 

                return false;

            } else if (no_telp == '') {

                $('#no_telp').focus();

                swal({
                    title               : "Peringatan",
                    text                : 'No Telepon harus terisi !',
                    buttonsStyling      : false,
                    type                : 'warning',
                    showConfirmButton   : false,
                    timer               : 1000
                }); 

                return false;
                
            } else if (alamat == '') {

                $('#alamat').focus();

                swal({
                    title               : "Peringatan",
                    text                : 'Alamat harus terisi !',
                    buttonsStyling      : false,
                    type                : 'warning',
                    showConfirmButton   : false,
                    timer               : 1000
                }); 

                return false;
                
            } else {

                swal({
                    title       : 'Konfirmasi',
                    text        : 'Yakin akan kirim data',
                    type        : 'warning',

                    buttonsStyling      : false,
                    confirmButtonClass  : "btn btn-primary",
                    cancelButtonClass   : "btn btn-warning mr-3",

                    showCancelButton    : true,
                    confirmButtonText   : 'Ya',
                    confirmButtonColor  : '#3085d6',
                    cancelButtonColor   : '#d33',
                    cancelButtonText    : 'Batal',
                    reverseButtons      : true
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url     : "pelanggan/simpan_data_pelanggan",
                            type    : "POST",
                            beforeSend  : function () {
                                swal({
                                    title   : 'Menunggu',
                                    html    : 'Memproses Data',
                                    onOpen  : () => {
                                        swal.showLoading();
                                    }
                                })
                            },
                            data    : form_pelanggan,
                            dataType: "JSON",
                            success : function (data) {

                                $('#modal_pelanggan').modal('hide');
                                
                                swal({
                                    title               : "Berhasil",
                                    text                : 'Data berhasil disimpan',
                                    buttonsStyling      : false,
                                    confirmButtonClass  : "btn btn-success",
                                    type                : 'success',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                });    
                
                                tabel_pelanggan.ajax.reload(null,false);        
                                
                                $('#form_pelanggan').trigger("reset");
                                
                                $('#aksi').val('Tambah');
                                
                            }
                        })
                
                        return false;

                    } else if (result.dismiss === swal.DismissReason.cancel) {

                        swal({
                            title               : "Batal",
                            text                : 'Anda membatalkan simpan data',
                            buttonsStyling      : false,
                            confirmButtonClass  : "btn btn-primary",
                            type                : 'error',
                            showConfirmButton   : false,
                            timer               : 1000
                        }); 
                    }
                })

                return false;

            }

        })

        // edit data pelanggan
        $('#tabel_pelanggan').on('click', '.edit-pelanggan', function () {

            $('#judul_modal').text('Ubah Data Pelanggan');

            var id_pelanggan  = $(this).data('id');

            $.ajax({
                url         : "pelanggan/ambil_data_pelanggan/"+id_pelanggan,
                type        : "GET",
                beforeSend  : function () {
                    swal({
                        title   : 'Menunggu',
                        html    : 'Memproses Data',
                        onOpen  : () => {
                            swal.showLoading();
                        }
                    })
                },
                dataType    : "JSON",
                success     : function(data)
                {
                    swal.close();

                    $('#modal_pelanggan').modal('show');
                    
                    $('#id_pelanggan').val(data.id);

                    $('#nama_pelanggan').val(data.pelanggan);
                    $('#no_telp').val(data.no_telp);
                    $('#alamat').val(data.alamat);

                    $('#aksi').val('Ubah');

                    return false;

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })

            return false;

        })

        // hapus pelanggan
        $('#tabel_pelanggan').on('click', '.hapus-pelanggan', function () {

            var id_pelanggan = $(this).data('id');
            var pelanggan    = $(this).attr('pelanggan');

            swal({
                title       : 'Konfirmasi',
                text        : 'Yakin akan hapus pelanggan '+pelanggan+'?',
                type        : 'warning',

                buttonsStyling      : false,
                confirmButtonClass  : "btn btn-danger",
                cancelButtonClass   : "btn btn-primary mr-3",

                showCancelButton    : true,
                confirmButtonText   : 'Hapus',
                confirmButtonColor  : '#d33',
                cancelButtonColor   : '#3085d6',
                cancelButtonText    : 'Batal',
                reverseButtons      : true
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url         : "pelanggan/simpan_data_pelanggan",
                        method      : "POST",
                        beforeSend  : function () {
                            swal({
                                title   : 'Menunggu',
                                html    : 'Memproses Data',
                                onOpen  : () => {
                                    swal.showLoading();
                                }
                            })
                        },
                        data        : {aksi:'Hapus', id_pelanggan:id_pelanggan},
                        dataType    : "JSON",
                        success     : function (data) {

                                tabel_pelanggan.ajax.reload(null,false);   

                                swal({
                                    title               : 'Hapus pelanggan',
                                    text                : 'Data Berhasil Dihapus',
                                    buttonsStyling      : false,
                                    confirmButtonClass  : "btn btn-success",
                                    type                : 'success',
                                    showConfirmButton   : false,
                                    timer               : 1000
                                }); 

                                $('#form_pelanggan').trigger("reset");

                                $('#aksi').val('Tambah');
                            
                        },
                        error       : function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            alert(err.Message);
                        }

                    })

                    return false;
                } else if (result.dismiss === swal.DismissReason.cancel) {

                    swal({
                            title               : 'Batal',
                            text                : 'Anda membatalkan hapus pelanggan',
                            buttonsStyling      : false,
                            confirmButtonClass  : "btn btn-primary",
                            type                : 'error',
                            showConfirmButton   : false,
                            timer               : 1000
                        }); 
                }
            })

        })
        
    })

</script>