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
    <div class="card">
      <div class="card-header">
        <h4 class="font-weight-bold text-dark">Report</h4>
      </div>
      <form action="<?php echo base_url('Report/download_file') ?>" method="POST" id="form_report">
        <input type="hidden" id="aksi" name="jns">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="input-daterange input-group text-center">
                        <input type="text" name="tgl_awal" class="form-control" id="awal" placeholder="Periode Awal" data-provide="datepicker" data-date-autoclose="true" value="<?= date("d/m/Y", now('Asia/Jakarta')) ?>">
                        
                        <div class="input-group-append">
                            <span class="input-group-text bg-primary b-0 text-white">s / d</span>
                        </div>
                        <input type="text" name="tgl_akhir" class="form-control" id="akhir" placeholder="Periode Akhir" data-provide="datepicker" data-date-autoclose="true" value="<?= date("d/m/Y", now('Asia/Jakarta')) ?>">
                        <input type="hidden" id="tgl" value="<?= date("d/m/Y", now('Asia/Jakarta')) ?>">
                        
                    </div>
                </div>
                <?php if ($this->session->userdata('role') == 2 ): ?>
                  <div class="col-md-4">
                    
                    <select name="kasir" id="kasir" class="form-control select2" style="width: 100%;">
                      <option value="">Pilih Kasir</option>
                      <?php foreach ($kasir as $s): ?>
                        <option value="<?= $s['id'] ?>"><?= ucwords($s['username']) ?></option>
                      <?php endforeach; ?>
                    </select>
                    
                  </div>
                <?php endif; ?>
                
            </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-primary mr-2" type="submit" name="export" data="pdf"><i class="mdi mdi-file-pdf-box mr-2"></i>Download PDF</button>
              <button class="btn btn-warning" type="submit" name="export" data="excel"><i class="mdi mdi-file-excel-box mr-2"></i>Download Excel</button>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <button type="button" id="btn-filter" class="btn btn-primary mr-2">Tampilkan</button>
              <button type="button" id="btn-reset" class="btn btn-warning">Reset</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body table-responsive">
              <div class="row d-flex justify-content-center">
                  <div class="col-md-6">
                      <div class="alert alert-info mb-0" role="alert">
                          <div class="row">
                              <div class="col-md-5 font-weight-bold">Total Pendapatan :</div>
                              <div class="col-md-7 font-weight-bold text-right"><span class="t_pendapatan"><?= number_format($pendapatan,0,'.','.') ?></span></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="alert alert-success mb-0" role="alert">
                          <div class="row">
                              <div class="col-md-5 font-weight-bold">Total Transaksi :</div>
                              <div class="col-md-7 font-weight-bold  text-right"><span class="t_transaksi"><?= $transaksi ?></span></div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-12">
                  <table class="table table-bordered table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"  id="tabel_report" width="100%" cellspacing="0">
                      <thead class="thead-light text-center">
                          <tr>
                              <th width="5%">No</th>
                              <th>Tanggal Transaksi</th>
                              <th>Kode Transaksi</th>
                              <th>Total Harga</th>
                              <th>Pelanggan</th>
                              <th>Detail</th>
                          </tr>
                      </thead>
                      <tbody>
                              
                      </tbody>
                  </table>
                </div>
              </div>
              
              
            </div>
        </div>
    </div>
</div>

<div id="modal_detail_transaksi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content f_detail_transaksi">
            
        </div>
    </div>
</div>

<script>
  $(document).ready(function () {

    // 06-10-2020

    $('button[name="export"]').on('click', function () {
        var jns = $(this).attr('data');

        $('#aksi').val(jns);
    })

    // 03-10-2020

    function separator(kalimat) {
        return kalimat.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // 03-10-2020

    var tabel_report = $('#tabel_report').DataTable({
        "processing"        : true,
        "serverSide"        : true,
        "order"             : [],
        "ajax"              : {
            "url"   : "Report/tampil_report",
            "type"  : "POST",
            "data"  : function (data) {
                data.tgl_awal   = $('#awal').val();
                data.tgl_akhir  = $('#akhir').val();
                data.kasir      = $('#kasir').val();
            }
        },
        "columnDefs"        : [{
            "targets"   : [0,5],
            "orderable" : false
        }, {
            'targets'   : [0,1,2,5],
            'className' : 'text-center',
        }]
    })

    // 03-10-2020
    $('#btn-filter').on('click', function () {

      tabel_report.ajax.reload(null, false);

      var awal  = $('#awal').val();
      var akhir = $('#akhir').val();

      $.ajax({
        url     : "Report/ambil_total",
        method  : "POST",
        data    : {tgl_awal:awal, tgl_akhir:akhir},
        dataType: "JSON",
        success : function (data) {
          
          $('.t_pendapatan').text(separator(data.pendapatan));
          $('.t_transaksi').text(data.transaksi);

          console.log(data.transaksi);
          
        }
      })

      return false;
      
    })

    $('#btn-reset').on('click', function () {

      var tgl = $('#tgl').val();

      $('#awal').val(tgl);
      $('#akhir').val(tgl);

      $('#kasir').val('').trigger('change');

      tabel_report.ajax.reload(null, false);

      var awal  = $('#awal').val();
      var akhir = $('#akhir').val();

      $.ajax({
        url     : "Report/ambil_total",
        method  : "POST",
        data    : {tgl_awal:awal, tgl_akhir:akhir},
        dataType: "JSON",
        success : function (data) {
          
          $('.t_pendapatan').text(separator(data.pendapatan));
          $('.t_transaksi').text(data.transaksi);
          
        }
      })

      return false;
      
    })

    $('#tabel_report').on('click', '.detail-report', function () {
          
      var id_transaksi = $(this).data('id');

      $.ajax({
        url     : "Report/tampil_detail",
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
        data    : {id_transaksi:id_transaksi},
        success : function (data) {

          swal.close();
                
          $('.f_detail_transaksi').html(data);
          $('#modal_detail_transaksi').modal('show');

        }
      })

      return false;

    })
    
  })
</script>