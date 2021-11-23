<style>
    .float{
        position:fixed;
        height:80px;
        top: 0px;
        right:50px;
        text-align:center;
        z-index: 9999;
        cursor: pointer;
    }

    .noti-icon .badge {
        position: absolute;
        top: 5px;
    }

    @keyframes bounce {
        0%{transform: scale(1);}
        50%{transform: scale(1.1);}
        100%{transform: scale(1);}
    }

    .pulse.active {
        animation: bounce 0.3s ease-out 1;
    }

    /* @media (min-width: 768px) {
        .modal-dialog {
            width: 130%;
            max-width:1300px;
            margin: 10px auto;
            z-index: 99999;
        }
    } */

    .tabel-list td {
        text-overflow:ellipsis;
        overflow:hidden;
        white-space:pre-wrap;
        color: black;
    }

</style>

<style>
    .article {
    box-shadow: 7px 7px 8px 7px rgba(0, 0, 0, 0.03);
    box-shadow: 7px 7px 8px 7px rgba(0, 0, 0, 0.03);
    background-color: #fff;
    border-radius: 3px;
    border: none;
    position: relative;
    margin-bottom: 30px; }
    .article .article-header {
        height: 170px;
        position: relative;
        overflow: hidden; }
        .article .article-header .article-image {
        background-color: #fbfbfb;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        z-index: -1; }
        .article .article-header .article-title {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.01) 1%, rgba(0, 0, 0, 0.65) 98%, rgba(0, 0, 0, 0.65) 100%);
        padding: 10px; }
        .article .article-header .article-title h2 {
            font-size: 16px;
            line-height: 24px; }
            .article .article-header .article-title h2 a {
            font-weight: 700;
            text-decoration: none;
            color: #fff; }
    .article .article-details {
        background-color: #fff;
        padding: 20px;
        line-height: 24px; }
        .article .article-details .article-cta {
        text-align: center; }
    .article .article-header .article-badge {
        position: absolute;
        bottom: 10px;
        left: 10px; }
        .article .article-header .article-badge .article-badge-item {
        padding: 7px 15px;
        font-weight: 600;
        color: #fff;
        border-radius: 30px;
        font-size: 12px; }
        .article .article-header .article-badge .article-badge-item .ion, .article .article-header .article-badge .article-badge-item .fas, .article .article-header .article-badge .article-badge-item .far, .article .article-header .article-badge .article-badge-item .fab, .article .article-header .article-badge .article-badge-item .fal {
            margin-right: 3px; }
    .article.article-style-b .article-details .article-title {
        margin-bottom: 10px; }
        .article.article-style-b .article-details .article-title h2 {
        line-height: 22px; }
        .article.article-style-b .article-details .article-title a {
        font-size: 16px;
        font-weight: 600; }
    .article.article-style-b .article-details p {
        color: #34395e; }
    .article.article-style-b .article-details .article-cta {
        text-align: right; }
    .article.article-style-c .article-header {
        height: 233px; }
    .article.article-style-c .article-details .article-category {
        text-transform: uppercase;
        margin-bottom: 5px;
        letter-spacing: 1px;
        color: #34395e; }
        .article.article-style-c .article-details .article-category a {
        font-size: 10px;
        color: #34395e;
        font-weight: 700; }
    .article.article-style-c .article-details .article-title {
        margin-bottom: 10px; }
        .article.article-style-c .article-details .article-title h2 {
        line-height: 22px; }
        .article.article-style-c .article-details .article-title a {
        font-size: 16px;
        font-weight: 600; }
    .article.article-style-c .article-details p {
        color: #34395e; }
    .article.article-style-c .article-user {
        display: inline-block;
        width: 100%;
        margin-top: 20px; }
        .article.article-style-c .article-user img {
        border-radius: 50%;
        float: left;
        width: 45px;
        margin-right: 15px; }
        .article.article-style-c .article-user .user-detail-name {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis; }
        .article.article-style-c .article-user .user-detail-name a {
            font-weight: 700; }

    @media (max-width: 575.98px) {
    .article .article-style-c .article-header {
        height: 225px; } }

    @media (min-width: 768px) and (max-width: 991.98px) {
    .article {
        margin-bottom: 40px; }
        .article .article-header {
        height: 195px !important; }
        .article.article-style-c .article-header {
        height: 155px; } }

    @media (max-width: 1024px) {
    .article.article-style-c .article-header {
        height: 216px; }
    .article .article-header {
        height: 155px; } }

</style>
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

<!-- <a class="float header-item noti-icon checkout">
    <i class="mdi mdi-cart mdi-48px text-primary"></i>
    <h3><span class="badge badge-danger badge-pill" style="background-color: red;">0</span></h3>
</a> -->

<div class="row d-flex justify-content-end" style="margin-top: -20px; margin-right: 0px;">
    <button type="button" class="btn header-item noti-icon waves-effect cart" style="z-index: 999; width: 10%;">
        <i class="mdi mdi-cart mdi-48px text-primary"></i>
        <h3><span class="badge badge-danger badge-pill angka_c" style="background-color: red;">0</span></h3>
    </button>
</div>

<div class="row f_isi" style="margin-top: -30px;">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">

                    <?php $i=0; foreach ($kategori as $k): 
                        
                        if ($i == 0) {
                            $act = 'active';
                        } else {
                            $act = '';
                        }
                        
                    ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $act ?>" data-toggle="tab" href="#<?= ucwords($k['kategori']).$k['id'] ?>" role="tab">
                                <span class="d-none d-sm-block mb-3" style="font-size: 17px;"><?= ucwords($k['kategori']) ?><?= nbs(2) ?><span class="badge" style="background-color: red; color: white; font-size: 15px;" id="t_kat_<?= $k['id'] ?>" hidden>1</span></span>
                            </a>
                        </li>
                    <?php $i++; endforeach; ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                <?php $i=0; foreach ($kategori as $k): 
                        
                        if ($i == 0) {
                            $act = 'active';
                        } else {
                            $act = '';
                        }

                        $pro = $this->produk->get_produk($k['id'])->result_array();
                        
                    ?>
                       <div class="tab-pane <?= $act ?>" id="<?= ucwords($k['kategori']).$k['id'] ?>" role="tabpanel">
                            <p class="mb-0">
                                <div class="col-xl-12 mt-3">
                                    <input type="text" class="input3 form-control search" autocomplete="off" placeholder="Cari..">
                                </div>

                                <div class="row mt-3">
                                    <?php foreach ($pro as $p): 
                                        
                                        if ($p['stok'] == 0) {
                                            $hid = '';
                                            $po  = '';
                                            $nm  = '';
                                        } else {
                                            $hid = 'hidden';
                                            $po  = 'cursor: pointer;';
                                            $nm  = 'pulse nm_produk';
                                        }
                                        
                                    ?>
                                
                                        <div class="col-md-6 col-xl-3 mt-2 mb-3 menu-card <?= $nm ?>" style="<?= $po ?>" id="pro_<?= $p['id'] ?>" data-id="<?= $p['id'] ?>" harga="<?= $p['harga'] ?>" nm_produk="<?= $p['nama_product'] ?>" kategori="<?= $k['id'] ?>" stok="<?= $p['stok'] ?>">

                                            <article class="article article-style-c mb-0">
                                                <div class="article-header">
                                                    <div class="article-image" data-background="<?= base_url() ?>assets/img/upload/produk/<?= $p['foto_produk'] ?>" style="background-image: url('<?= base_url() ?>assets/img/upload/produk/<?= $p['foto_produk'] ?>');">
                                                    </div>
                                                </div>
                                                <div class="article-details mb-0" style="height: 150px;"><hr>
                                                    <div class="article-title text-center">
                                                        
                                                        <h5><code class='text-success font-weight-bold mr-2 tot_kat_<?= $k['id'] ?> t_qty_<?= $p['id'] ?>' style='font-size: 20px' hidden>0x</code><span class="nama-product" data-id="<?= $p['id'] ?>"><?= ucwords($p['nama_product']) ?></span></h5>
                                                        <h6 class="text-muted mt-0"><mark><?= number_format($p['harga'],0,'.','.') ?></mark></h6>

                                                        <h5 id="t_stok_habis<?= $p['id'] ?>" <?= $hid ?> class="mt-0"><span class="badge" style="background-color: red; color: white;">Stok Habis</span></h5>
                                                        
                                                    </div>
                                                </div>
                                            </article> 

                                        </div>
                                    <?php endforeach;?>
                                </div>

                            </p>
                        </div>
                    <?php $i++; endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_tr" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="judul_modal">Checkout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="mr-2 text-dark">&times;</span>
        </button>
      </div>
        <form id="form_tr" autocomplete="off">
            <input type="hidden" name="id_tr" id="id_tr">
            <input type="hidden" name="aksi" id="aksi" value="Tambah">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7" style="height: 35rem; overflow-y: auto;">
                        <div style="margin-top: -2px;">
                            <table class="table tabel-list table-borderless table-striped" width="100%">
                                <thead class="text-center" style="background-color: #ffbf00;">
                                    <th class="font-weight-bold" style="color: black;">Product</th>
                                    <th class="font-weight-bold" style="color: black;">Harga</th>
                                    <th class="font-weight-bold" style="color: black;">Qty</th>
                                    <th class="font-weight-bold" style="color: black;">Diskon</th>
                                    <th class="font-weight-bold text-center" style="color: black;">Subtotal</th>
                                    <th class="font-weight-bold" style="color: black;">Aksi</th>
                                </thead>
                                <tbody class="t_list">

                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group p-2 row">
                            <label for="pelanggan" class="col-sm-4 col-form-label">Pelanggan</label>
                            <div class="col-sm-8">
                                <div class="input-group f_pelanggan">
                                    <select name="pelanggan" id="pelanggan" class="form-control select2" style="width: 85%;">
                                        <option value="">Pilih Pelanggan</option>
                                        <?php foreach ($pelanggan as $a): ?>
                                            <option value="<?= $a['id'] ?>" no_telp="<?= $a['no_telp'] ?>" alamat="<?= $a['alamat'] ?>"><?= ucwords($a['pelanggan']) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button" data-toggle="tooltip" data-placement="top" title="Tambah Pelanggan" id="tambah_pel"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="input-group ft_pelanggan" hidden>
                                    <input type="text" name="pelanggan_baru" id="pelanggan_baru" class="form-control" placeholder="Masukkan Pelanggan">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger" type="button" data-toggle="tooltip" data-placement="top" title="Batal Tambah" id="batal_tambah"><i class="fa fa-undo-alt"></i></button>
                                    </div>
                                </div>
                                <span class="text-danger" id="pel_error" hidden>Harap isi atas nama pelanggan!</span>
                                <input type="hidden" id="status_pelanggan" value="lama">
                            </div>
                            <label for="atas_nama" class="col-sm-4 col-form-label mt-3">Telepon</label>
                            <div class="col-sm-8 mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control numeric" id="no_telp" placeholder="Masukkan Telepon" readonly>
                                </div>
                                <span class="text-danger" id="telp_error" hidden>Harap isi nomor telepon!</span>
                            </div>
                            <label for="atas_nama" class="col-sm-4 col-form-label mt-3">Alamat</label>
                            <div class="col-sm-8 mt-3">
                                <textarea name="alamat" id="alamat" rows="5" class="form-control" placeholder="Masukkan Alamat" readonly></textarea>
                                <span class="text-danger" id="alamat_error" hidden>Harap isi alamat!</span>
                            </div>
                        </div>
                        <div class="progress mb-3 mt-3" data-height="5" style="height: 5px;">
                            <div class="progress-bar bg-primary" role="progressbar" data-width="100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                        <table class="table table-no-border mb-2" id="tabel-bawah">
                            <tbody>
                                <tr class="font-weight-bold">
                                    <td>Diskon</td>
                                    <td class="text-right"><span id="diskon" style="font-size: 18px;">Rp. 0</span></td>
                                </tr>
                                <tr class="bg-warning text-white font-weight-bold">
                                    <td>Total</td>
                                    <td class="text-right"><span id="total" style="font-size: 18px;">Rp. 0</span></td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td>Tunai</td>
                                    <td class="text-right">
                                    <div class="row">
                                        <div class="col-md-10 offset-md-2">
                                            <input type="text" style="font-size: 18px;" class="form-control numeric number_separator text-right" name="tunai" id="tunai" placeholder="0" autocomplete="off"> 
                                        </div>
                                    </div></td>
                                </tr>
                                <tr class="bg-primary text-white font-weight-bold">
                                    <td>Kembali</td>
                                    <td class="text-right"><span id="kembali" style="font-size: 18px;">Rp. 0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn-block btn btn-lg btn btn-success waves-effect waves-light mt-3" id="btn_transaksi" disabled>TRANSAKSI</button>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modal_edit" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="judul_edit">Ubah Data Produk</h5>
        <button type="button" class="close batal_ubah" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="mr-2 text-dark">&times;</span>
        </button>
      </div>
        <form id="form_edit" autocomplete="off">
            <input type="hidden" name="id_produk_edit" id="id_produk_edit">
            <input type="hidden" name="id_kategori_edit" id="id_kategori_edit">
            <input type="hidden" name="stok_edit" id="stok_edit">
            <div class="modal-body">
                <div class="col-md-12 p-3">
                    <div class="form-group row">
                        <label for="nama_bahan" class="col-sm-3 col-form-label">Qty</label>
                        <div class="col-sm-9">
                            <div class="input-counter input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn-subtract btn btn-warning btn-spin kurang" aksi="kurang">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control counter text-center angka_qty" data-min="1">
                                <div class="input-group-append">
                                    <button type="button" class="btn-add btn btn-warning btn-spin tambah" aksi="tambah">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="harga_edit" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control text-right" name="harga_edit" id="harga_edit" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="diskon_edit" class="col-sm-3 col-form-label">Diskon</label>
                        <div class="col-sm-9">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Rp. </span>
                                </div>
                                <input type="text" class="form-control numeric number_separator text-right" name="diskon_edit" id="diskon_edit" placeholder="Masukkan Diskon">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subtotal_edit" class="col-sm-3 col-form-label">Subtotal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control text-right" name="subtotal_edit" id="subtotal_edit" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger batal_ubah" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="simpan_ubah">Simpan</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal Selesai -->
<div class="modal fade" id="modal_selesai" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title font-weight-bold text-dark">Transaksi Berhasil!</h5>
        </div>
        <div class="modal-body row">
            <div class="col-md-6">
                <a href="<?php echo base_url('Transaksi/cetak_faktur') ?>"  target="_blank">
                    <div class="card text-center shadow pulse c_nota" style="cursor: pointer; border-radius: 10px;">
                        <div class="card-body text-dark">
                            <h4 class="text-primary mb-2"><i class="mdi mdi-printer mdi-48px"></i></h4>
                            <h5 class="card-text">Cetak Faktur</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <div class="card text-center shadow pulse close-menu-transaksi" onclick="window.location.reload();" style="cursor: pointer; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="text-warning mb-2"><i class="mdi mdi-backburger mdi-48px"></i></h4>
                        <h5 class="card-text">Kembali Transaksi</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function () {

        $(window).scroll(function(){
            if ($(window).scrollTop() >= 300) {
                $('.cart').addClass('float');
            }
            else {
                $('.cart').removeClass('float');
            }
        });

        // 04-10-2020

        // animasi tab
        $('a[data-toggle="tab"]').on('hide.bs.tab', function(e) {
            var $old_tab = $($(e.target).attr("href"));
            var $new_tab = $($(e.relatedTarget).attr("href"));

            if ($new_tab.index() < $old_tab.index()) {
                $old_tab.css('position', 'relative').css("right", "0").show();
                $old_tab.animate({
                "right": "-100%"
                }, 300, function() {
                $old_tab.css("right", 0).removeAttr("style");
                });
                $('.search').val("");
                $('.menu-card').show();
            } else {
                $old_tab.css('position', 'relative').css("left", "0").show();
                $old_tab.animate({
                "left": "-100%"
                }, 300, function() {
                $old_tab.css("left", 0).removeAttr("style");
                });
                $('.search').val("");
                $('.menu-card').show();
            }
        });

        // animasi tab
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            var $new_tab = $($(e.target).attr("href"));
            var $old_tab = $($(e.relatedTarget).attr("href"));

            if ($new_tab.index() > $old_tab.index()) {
                $new_tab.css('position', 'relative').css("right", "-2500px");
                $new_tab.animate({
                "right": "0"
                }, 300);
                $('.search').val("");
                $('.menu-card').show();
            } else {
                $new_tab.css('position', 'relative').css("left", "-2500px");
                $new_tab.animate({
                "left": "0"
                }, 300);
                $('.search').val("");
                $('.menu-card').show();
            }
        });

        // 04-10-2020

        // Live Search
        $('.search').keyup(function(event) {
            var filter = $(this).val();
            $('.nama-product').each(function() {
                var id = $(this).data('id');

                if($(this).text().search(new RegExp(filter, 'i')) < 0) {
                    $('#pro_'+id).hide();
                }else{
                    $('#pro_'+id).show();
                }
            });
        });

        // 04-10-2020
        $(".pulse").click(function(){
            $(this).addClass("active").delay(300).queue(function(next){
                $(this).removeClass("active");
                next();
                $('.search').val("");
                $('.menu-card').show();
            });
        });

        // 04-10-2020
        $('.cart').on('click', function () {
            $('#pelanggan').val('').trigger('change');
            $('.ft_pelanggan').attr('hidden', true);
            $('.f_pelanggan').attr('hidden', false).fadeOut('fast').fadeIn();
            $('#no_telp').attr('readonly', true);
            $('#no_telp').val('');
            $('#alamat').attr('readonly', true);
            $('#alamat').val('');
            $('#status_pelanggan').val('lama');

            $('#modal_tr').modal('show');
        })

        // 04-10-2020
        $('#pelanggan').on('change', function () {
            
            var id_pelanggan    = $(this).val();
            var no_telp         = $(this).find(':selected').attr('no_telp');
            var alamat          = $(this).find(':selected').attr('alamat');
            var tunai           = $('#tunai').val().split('.').join('');
            var kembali         = $('#kembali').text().replace('Rp. ','').split('.').join('');

            if (id_pelanggan != '') {
                $('#no_telp').val(no_telp).fadeOut('fast').fadeIn();
                $('#alamat').val(alamat).fadeOut('fast').fadeIn();

                if (tunai != 0) {
                    if (kembali < 0) {
                        $('#btn_transaksi').attr('disabled', true);
                    } else {
                        $('#btn_transaksi').attr('disabled', false);
                    }
                } else {
                    $('#btn_transaksi').attr('disabled', true);
                }
                
            } else {
                $('#no_telp').val('').fadeOut('fast').fadeIn();
                $('#alamat').val('').fadeOut('fast').fadeIn();

                $('#btn_transaksi').attr('disabled', true);
            }
        })

        // 04-10-2020
        $('#tambah_pel').on('click', function () {

            $('.f_pelanggan').attr('hidden', true);
            $('.ft_pelanggan').attr('hidden', false).fadeOut('fast').fadeIn();
            $('#no_telp').attr('readonly', false).fadeOut('fast').fadeIn();
            $('#no_telp').val('');
            $('#alamat').attr('readonly', false).fadeOut('fast').fadeIn();
            $('#alamat').val('');
            $('#pelanggan_baru').val('');
            $('#status_pelanggan').val('baru');

            var pel_baru    = $('#pelanggan_baru').val();
            var no_telp     = $('#no_telp').val();
            var alamat      = $('#alamat').val();
            var tunai       = $('#tunai').val().split('.').join('');
            var kembali     = $('#kembali').text().replace('Rp. ','').split('.').join('');

            if (pel_baru != '') {
                $('#pel_error').attr('hidden', true);
            } else {
                $('#pel_error').attr('hidden', false);
            }

            if (no_telp != '') {
                $('#telp_error').attr('hidden', true);
            } else {
                $('#telp_error').attr('hidden', false);
            }

            if (alamat != '') {
                $('#alamat_error').attr('hidden', true);
            } else {
                $('#alamat_error').attr('hidden', false);
            }

            if ((pel_baru && no_telp && alamat) != '') {

                if (tunai != 0) {
                    if (kembali < 0) {
                        $('#btn_transaksi').attr('disabled', true);
                    } else {
                        $('#btn_transaksi').attr('disabled', false);
                    }
                } else {
                    $('#btn_transaksi').attr('disabled', true);
                }

            } else {
                $('#btn_transaksi').attr('disabled', true);
            }
            
        })

        // 04-10-2020
        $('#batal_tambah').on('click', function () {

            $('#pelanggan').val('').trigger('change');
            $('.ft_pelanggan').attr('hidden', true);
            $('.f_pelanggan').attr('hidden', false).fadeOut('fast').fadeIn();
            $('#no_telp').attr('readonly', true);
            $('#no_telp').val('');
            $('#alamat').attr('readonly', true);
            $('#alamat').val('');
            $('#status_pelanggan').val('lama');

            var pel_baru    = $('#pelanggan_baru').val();
            var no_telp     = $('#no_telp').val();
            var alamat      = $('#alamat').val();
            var tunai       = $('#tunai').val().split('.').join('');
            var kembali     = $('#kembali').text().replace('Rp. ','').split('.').join('');

            $('#pel_error').attr('hidden', true);
            $('#telp_error').attr('hidden', true);
            $('#alamat_error').attr('hidden', true);
            
        })

        // 04-10-2020
        $('#pelanggan_baru').on('keyup', function () {
            
            var pel_baru    = $('#pelanggan_baru').val();
            var no_telp     = $('#no_telp').val();
            var alamat      = $('#alamat').val();
            var tunai       = $('#tunai').val().split('.').join('');
            var kembali     = $('#kembali').text().replace('Rp. ','').split('.').join('');

            if (pel_baru != '') {
                $('#pel_error').attr('hidden', true);
            } else {
                $('#pel_error').attr('hidden', false);
            }

            if ((pel_baru && no_telp && alamat) != '') {

                if (tunai != 0) {
                    if (kembali < 0) {
                        $('#btn_transaksi').attr('disabled', true);
                    } else {
                        $('#btn_transaksi').attr('disabled', false);
                    }
                } else {
                    $('#btn_transaksi').attr('disabled', true);
                }

            } else {
                $('#btn_transaksi').attr('disabled', true);
            }

        })

        $('#no_telp').on('keyup', function () {
            
            var pel_baru    = $('#pelanggan_baru').val();
            var no_telp     = $('#no_telp').val();
            var alamat      = $('#alamat').val();
            var tunai       = $('#tunai').val().split('.').join('');
            var kembali     = $('#kembali').text().replace('Rp. ','').split('.').join('');

            if (no_telp != '') {
                $('#telp_error').attr('hidden', true);
            } else {
                $('#telp_error').attr('hidden', false);
            }

            if ((pel_baru && no_telp && alamat) != '') {

                if (tunai != 0) {
                    if (kembali < 0) {
                        $('#btn_transaksi').attr('disabled', true);
                    } else {
                        $('#btn_transaksi').attr('disabled', false);
                    }
                } else {
                    $('#btn_transaksi').attr('disabled', true);
                }
                
            } else {
                $('#btn_transaksi').attr('disabled', true);
            }

        })

        $('#alamat').on('keyup', function () {
            
            var pel_baru    = $('#pelanggan_baru').val();
            var no_telp     = $('#no_telp').val();
            var alamat      = $('#alamat').val();
            var tunai       = $('#tunai').val().split('.').join('');
            var kembali     = $('#kembali').text().replace('Rp. ','').split('.').join('');

            if (alamat != '') {
                $('#alamat_error').attr('hidden', true);
            } else {
                $('#alamat_error').attr('hidden', false);
            }

            if ((pel_baru && no_telp && alamat) != '') {
                
                if (tunai != 0) {
                    if (kembali < 0) {
                        $('#btn_transaksi').attr('disabled', true);
                    } else {
                        $('#btn_transaksi').attr('disabled', false);
                    }
                } else {
                    $('#btn_transaksi').attr('disabled', true);
                }

            } else {
                $('#btn_transaksi').attr('disabled', true);
            }

        })

        function separator(kalimat) {
            return kalimat.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // 04-10-2020

        $('.nm_produk').on('click', function () {

            var id_product  = $(this).data('id');
            var harga       = $(this).attr('harga');
            var nm_produk   = $(this).attr('nm_produk');
            var id_kategori = $(this).attr('kategori');
            var stok        = $(this).attr('stok');

            var s_stok      = parseInt(stok) - 1;

            if (s_stok == 0) {
                $('#t_stok_habis'+id_product).attr('hidden', false);
                $('#pro_'+id_product).removeClass('pulse nm_produk');
                $('#pro_'+id_product).css("cursor","");
            } else {
                $('#t_stok_habis'+id_product).attr('hidden', true);
                $('#pro_'+id_product).addClass('pulse nm_produk');
                $('#pro_'+id_product).css("cursor","pointer");
            }

            var total   = (harga * 1);

            var tbody   = "";
            var qty;

            if ($('.id'+id_product).text() == nm_produk) {

                var diskon      = $('#diskon'+id_product).val().split('.').join('');

                if (diskon != '') {
                    diskon = diskon;
                } else {
                    diskon = 0;
                }

                var q = $('.t_qty_'+id_product).text().replace('x','');

                var y = parseInt(q) + 1;

                if (parseInt(q) == stok) {

                    $('#t_stok_habis'+id_product).attr('hidden', false);
                    $('#pro_'+id_product).removeClass('pulse nm_produk');
                    $('#pro_'+id_product).css("cursor","");

                } else {

                    var q = $('#qty'+id_product).text();

                    var y = parseInt(q) + 1;
                    $('#qty'+id_product).text(y);

                    $('.t_qty_'+id_product).attr('hidden', false);
                    $('.t_qty_'+id_product).text(y+"x");

                    var dis = (diskon * y);

                    var total = (harga * y) - dis;
                    $('#total'+id_product).text(separator(total));
                    $('#diskon'+id_product).text(separator(dis));
                    
                    // $('#t_stok_habis'+id_product).attr('hidden', true);
                    // $('#pro_'+id_product).addClass('pulse nm_produk');
                    // $('#pro_'+id_product).css("cursor","pointer");

                    if (parseInt(y) == stok) {
                        $('#t_stok_habis'+id_product).attr('hidden', false);
                        $('#pro_'+id_product).removeClass('pulse nm_produk');
                        $('#pro_'+id_product).css("cursor","");
                    }
                    
                }
                
            } else {

                $('.t_qty_'+id_product).attr('hidden', false);
                $('.t_qty_'+id_product).text("1x");

            }
 
            if ($('.id'+id_product).text() != nm_produk) {
                tbody = 
                "<tr class='list_"+id_product+" list'>"+
                    "<td><div class='id"+id_product+" nama_list' stok='"+stok+"' data-id='"+id_product+"' id_kategori='"+id_kategori+"'>"+nm_produk+"</div></td>"+
                    "<td class='text-left'><div class='harga_list' harga='"+harga+"' id='harga"+id_product+"'>"+separator(harga)+"</div></td>"+
                    "<td class='text-center' width='15%'><span class='qty_list badge' id='qty"+id_product+"' style='background-color: red; color: white; font-size: 15px'>1<span></td>"+
                    "<td class='text-center'><div class='diskon_list' id='diskon"+id_product+"'>0</div></td>"+
                    "<td class='text-center'><div class='subtotal_list' id='total"+id_product+"'>"+separator(total)+"</div></td>"+
                    "<td class='text-center'><span class='text-success ubah-list mr-2' style='cursor:pointer' data-id='"+id_product+"' id_kategori='"+id_kategori+"' stok='"+stok+"'><i class='fa fa-pen-alt fa-lg'></i></span><span class='text-danger hapus-list' style='cursor:pointer' data-id='"+id_product+"' id_kategori='"+id_kategori+"'><i class='fa fa-trash fa-lg'></i></span></td>"+
                "</tr>";
            }

            $('.tabel-list').append(tbody);

             // untuk total total

                var tot_qty_kat = 0;
                $('.tot_kat_'+id_kategori).each(function(){
                    var t_qty_kat   = $(this).text().replace('x','');
                    tot_qty_kat  += parseInt(t_qty_kat);
                });

                $('#t_kat_'+id_kategori).attr('hidden', false);
                $('#t_kat_'+id_kategori).text(tot_qty_kat);

                var nilai_qty = 0;
                $('.qty_list').each(function(){
                    var t_qty   = $(this).text();
                    nilai_qty  += parseInt(t_qty);
                });

                $('.angka_c').text(nilai_qty);

                var nilai_subtotal = 0;
                $('.subtotal_list').each(function(){
                    var total   = $(this).text().split('.').join('');
                    nilai_subtotal  += parseInt(total);
                });

                var nilai_diskon = 0;
                $('.diskon_list').each(function(){
                    var diskon   = $(this).text().split('.').join('');
                    nilai_diskon  += parseInt(diskon);
                });

                $('#total').text("Rp. "+separator(nilai_subtotal));
                $('#diskon').text("Rp. "+separator(nilai_diskon));

                // tunai
                var total   = $('#total').text().replace("Rp. ",'').split('.').join('');
                var tunai   = $('#tunai').val().split('.').join('');

                $('#kembali').text("Rp. "+separator(tunai - total));

            // akhir untuk total total

            if ((tunai - total) < 0) {
                $('#btn_transaksi').attr('disabled', true);
            } else {
                $('#btn_transaksi').attr('disabled', false);
            }
            
        })

        // 04-10-2020
        $('.t_list').on('click', '.hapus-list', function () {

            var id_product  = $(this).data('id');
            var id_kategori = $(this).attr('id_kategori');

            $(".list_"+id_product).remove();

            $('.t_qty_'+id_product).attr('hidden', true);
            $('.t_qty_'+id_product).text("0x");

            $('#t_stok_habis'+id_product).attr('hidden', true);
            $('#pro_'+id_product).addClass('pulse nm_produk');
            $('#pro_'+id_product).css("cursor","pointer");

            // untuk total total

                var tot_qty_kat = 0;
                $('.tot_kat_'+id_kategori).each(function(){
                    var t_qty_kat   = $(this).text().replace('x','');
                    tot_qty_kat  += parseInt(t_qty_kat);
                });

                if (tot_qty_kat == 0) {
                   $('#t_kat_'+id_kategori).attr('hidden', true); 
                } else {
                    $('#t_kat_'+id_kategori).attr('hidden', false);
                }

                $('#t_kat_'+id_kategori).text(tot_qty_kat);

                var nilai_qty = 0;
                $('.qty_list').each(function(){
                    var t_qty   = $(this).text();
                    nilai_qty  += parseInt(t_qty);
                });

                $('.angka_c').text(nilai_qty);

                var nilai_subtotal = 0;
                $('.subtotal_list').each(function(){
                    var total   = $(this).text().split('.').join('');
                    nilai_subtotal  += parseInt(total);
                });

                var nilai_diskon = 0;
                $('.diskon_list').each(function(){
                    var diskon   = $(this).text().split('.').join('');
                    nilai_diskon  += parseInt(diskon);
                });

                $('#total').text("Rp. "+separator(nilai_subtotal));
                $('#diskon').text("Rp. "+separator(nilai_diskon));

                // tunai
                var total   = $('#total').text().replace("Rp. ","").split('.').join('');
                var tunai   = $('#tunai').val().split('.').join('');

                $('#kembali').text("Rp. "+separator(tunai - total));

            // akhir untuk total total

            if ((tunai - total) < 0) {
                $('#btn_transaksi').attr('disabled', true);
            } else {
                if (tunai == 0) {
                    $('#btn_transaksi').attr('disabled', true);
                } else {
                    $('#btn_transaksi').attr('disabled', false);
                }
            }

            if (nilai_qty == 0) {
                $('#pelanggan').val('').trigger('change');
                $('.ft_pelanggan').attr('hidden', true);
                $('.f_pelanggan').attr('hidden', false).fadeOut('fast').fadeIn();
                $('#no_telp').attr('readonly', true);
                $('#no_telp').val('');
                $('#alamat').attr('readonly', true);
                $('#alamat').val('');
                $('#status_pelanggan').val('lama');

                $('#tunai').val('');
                $('#kembali').text('Rp. 0');
            }
            
        })

        // 04-10-2020
        $('.t_list').on('click', '.ubah-list', function () {
            
            var id_product  = $(this).data('id');
            var id_kategori = $(this).attr('id_kategori');
            var stok        = $(this).attr('stok');
            var qty         = $('#qty'+id_product).text();
            var diskon      = $('#diskon'+id_product).text().split('.').join('');
            var subtotal    = $('#total'+id_product).text().split('.').join('');
            var harga       = $('#harga'+id_product).text().split('.').join('');

            $('#stok_edit').val(stok);
            $('#harga_edit').val(separator(harga));
            $('#subtotal_edit').val(separator(subtotal));
            $('#diskon_edit').val(separator(diskon));
            $('.angka_qty').val(qty);
            $('#id_produk_edit').val(id_product);
            $('#id_kategori_edit').val(id_kategori);

            if (qty == 1) {
                $('.kurang').attr('disabled', true);
            } else {
                $('.kurang').attr('disabled', false);
            }

            if (parseInt(qty) == parseInt(stok)) {
                $('.tambah').attr('disabled', true);
            } else {
                $('.tambah').attr('disabled', false);
            }

            $('#modal_tr').modal('hide');
            $('#modal_edit').modal('show');

        })

        // 04-10-2020
        $('.btn-spin').on('click', function () {

            var isi     = $('.angka_qty').val();
            var aksi    = $(this).attr('aksi');
            var harga   = $('#harga_edit').val().split('.').join('');
            var subtotal= $('#subtotal_edit').val().split('.').join('');
            var diskon  = $('#diskon_edit').val().split('.').join('');
            var stok    = $('#stok_edit').val();

            if (aksi == 'kurang') {
                isi = isi - 1;
            } else {
                isi = parseInt(isi) + 1; 
            }
            if (isi == 1) {
                $('.kurang').attr('disabled', true);
            } else {
                $('.kurang').attr('disabled', false);
            }

            if ((parseInt(isi)) == parseInt(stok)) {
                $('.tambah').attr('disabled', true);
            } else {
                $('.tambah').attr('disabled', false);
            }


            if (diskon == '') {
                diskon = 0;
            } else {
                diskon = diskon;
            }

            var tot     = (harga * isi) - (diskon);
            
            $('#subtotal_edit').val(separator(tot));
            
        })

        // 04-10-2020
        $('#diskon_edit').on('keyup', function () {
            
            var isi     = $('.angka_qty').val();
            var harga   = $('#harga_edit').val().split('.').join('');
            var subtotal= $('#subtotal_edit').val().split('.').join('');
            var diskon  = $('#diskon_edit').val().split('.').join('');

            if (diskon == '') {
                diskon = 0;
            } else {
                diskon = diskon;
            }

            var tot = (harga * isi) - (diskon);
            
            $('#subtotal_edit').val(separator(tot));

        })

        // 04-10-2020
        $('.batal_ubah').on('click', function () {

            $('#modal_tr').modal('show');
            $('#modal_edit').modal('hide');
            
        })

        // 04-10-2020
        $('#simpan_ubah').on('click', function () {
            
            var id_product  = $('#id_produk_edit').val();
            var id_kategori = $('#id_kategori_edit').val();

            var qty         = $('.angka_qty').val();
            var subtotal    = $('#subtotal_edit').val();
            var diskon      = $('#diskon_edit').val();

            $('#qty'+id_product).text(qty);
            $('#diskon'+id_product).text(separator(diskon));
            $('#total'+id_product).text(subtotal);

            $('.t_qty_'+id_product).text(qty+"x");

            if (qty == 0) {
                $('#t_stok_habis'+id_product).attr('hidden', false);
                $('#pro_'+id_product).removeClass('pulse nm_produk');
                $('#pro_'+id_product).css("cursor","");
            } else {
                $('#t_stok_habis'+id_product).attr('hidden', true);
                $('#pro_'+id_product).addClass('pulse nm_produk');
                $('#pro_'+id_product).css("cursor","pointer");
            }

            // untuk total total

                var tot_qty_kat = 0;
                $('.tot_kat_'+id_kategori).each(function(){
                    var t_qty_kat   = $(this).text().replace('x','');
                    tot_qty_kat  += parseInt(t_qty_kat);
                });

                if (tot_qty_kat == 0) {
                   $('#t_kat_'+id_kategori).attr('hidden', true); 
                } else {
                    $('#t_kat_'+id_kategori).attr('hidden', false);
                }

                $('#t_kat_'+id_kategori).text(tot_qty_kat);

                var nilai_qty = 0;
                $('.qty_list').each(function(){
                    var t_qty   = $(this).text();
                    nilai_qty  += parseInt(t_qty);
                });

                $('.angka_c').text(nilai_qty);

                var nilai_subtotal = 0;
                $('.subtotal_list').each(function(){
                    var total   = $(this).text().split('.').join('');
                    nilai_subtotal  += parseInt(total);
                });

                var nilai_diskon = 0;
                $('.diskon_list').each(function(){
                    var diskon   = $(this).text().split('.').join('');
                    nilai_diskon  += parseInt(diskon);
                });

                $('#total').text("Rp. "+separator(nilai_subtotal));
                $('#diskon').text("Rp. "+separator(nilai_diskon));

                // tunai
                var total   = $('#total').text().replace("Rp. ","").split('.').join('');
                var tunai   = $('#tunai').val().split('.').join('');

                $('#kembali').text("Rp. "+separator(tunai - total));

            // akhir untuk total total

            if ((tunai - total) < 0) {
                $('#btn_transaksi').attr('disabled', true);
            } else {
                if (tunai == 0) {
                    $('#btn_transaksi').attr('disabled', true);
                } else {
                    $('#btn_transaksi').attr('disabled', false);
                }
            }

            $('#modal_tr').modal('show');
            $('#modal_edit').modal('hide');

        })

        // 04-10-2020
        $('#tunai').on('keyup', function () {

            var total       = $('#total').text().replace("Rp. ","").split('.').join('');
            var tunai       = $('#tunai').val().split('.').join('');
            
            var sts_pel     = $('#status_pelanggan').val();
            var id_pelanggan= $('#pelanggan').val();

            var pel_baru    = $('#pelanggan_baru').val();
            var no_telp     = $('#no_telp').val();
            var alamat      = $('#alamat').val();

            $('#kembali').text("Rp. "+separator(tunai - total));

            var kembali     = $('#kembali').text().replace("Rp. ","").split('.').join('');

            if (sts_pel == 'lama') {
                if (id_pelanggan != '' && tunai != 0) {
                    if (kembali < 0) {
                        $('#btn_transaksi').attr('disabled', true);
                    } else {
                        $('#btn_transaksi').attr('disabled', false);
                    }
                } else {
                    $('#btn_transaksi').attr('disabled', true);
                }
            } else {
                if ((pel_baru && no_telp && alamat) != '') {
                    
                    if (tunai != 0) {
                        if (kembali < 0) {
                            $('#btn_transaksi').attr('disabled', true);
                        } else {
                            $('#btn_transaksi').attr('disabled', false);
                        }
                    } else {
                        $('#btn_transaksi').attr('disabled', true);
                    }

                } else {
                    $('#btn_transaksi').attr('disabled', true);
                }
            }
            
        })

        // 04-10-2020
        $('#btn_transaksi').on('click', function () {

            var total_diskon    = $('#diskon').text().replace("Rp. ", '').split('.').join('');
            var total_harga     = $('#total').text().replace("Rp. ", '').split('.').join('');
            var tunai           = $('#tunai').val().replace(".", '');
            var kembalian       = $('#kembali').text().replace("Rp. ", '').split('.').join('');

            var sts_pelanggan   = $('#status_pelanggan').val();
            var id_pelanggan    = $('#pelanggan').val();
            var pel_baru        = $('#pelanggan_baru').val();
            var no_telp         = $('#no_telp').val();
            var alamat          = $('#alamat').val();


            var id_produk       = [];
            $('.nama_list').each(function() { 
                var id_kategori = $(this).attr('id_kategori');
                var id_pdk      = $(this).data('id');
                var stok        = $(this).attr('stok');

                // var q = $("#qty"+id_pdk).text();

                // var h_stok = parseInt(stok) - parseInt(q);

                // if (parseInt(q) == stok) {

                //     $('#t_stok_habis'+id_pdk).attr('hidden', false);
                //     $('#pro_'+id_pdk).removeClass('pulse nm_produk');
                //     $('#pro_'+id_pdk).css("cursor","");

                //     $('.t_qty_'+$(this).data('id')).attr('hidden', true);
                //     $('.t_qty_'+$(this).data('id')).text("0x");

                // } else {

                //     $('#t_stok_habis'+id_pdk).attr('hidden', true);
                //     $('#pro_'+id_pdk).addClass('pulse nm_produk');
                //     $('#pro_'+id_pdk).css("cursor","pointer");

                //     $('.t_qty_'+$(this).data('id')).attr('hidden', true);
                //     $('.t_qty_'+$(this).data('id')).text("0x");
                    
                // }

                // $('#t_kat_'+id_kategori).attr('hidden', true);
                // $('#t_kat_'+id_kategori).text(0);

                // $('#pro_'+id_pdk).attr('stok', h_stok);

                id_produk.push(id_pdk);
                
            }); 

            var qty_list    = [];
            $('.qty_list').each(function () {
                qty_list.push($(this).text());
            });

            var diskon_list = [];
            $('.diskon_list').each(function () {
                diskon_list.push($(this).text().split('.').join(''));
            })

            var subtotal_list   = [];
            $('.subtotal_list').each(function () {
                subtotal_list.push($(this).text().split('.').join(''));
            });

            $('.angka_c').text(0);
            $('#pelanggan').val('').trigger('change');
            $('.ft_pelanggan').attr('hidden', true);
            $('.f_pelanggan').attr('hidden', false).fadeOut('fast').fadeIn();
            $('#no_telp').attr('readonly', true);
            $('#no_telp').val('');
            $('#alamat').attr('readonly', true);
            $('#alamat').val('');

            $('#diskon').text("Rp. 0");
            $('#total').text("Rp. 0");
            $('#tunai').val('');
            $('#kembali').text("Rp. 0");
            $('#btn_transaksi').attr('hidden', true);

            $('.list').remove();

            $.ajax({
                url         : "Transaksi/simpan_list_transaksi",
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
                data        : {tunai:tunai, kembalian:kembalian, total_harga:total_harga, total_diskon:total_diskon, qty_list:qty_list, diskon_list:diskon_list, subtotal_list:subtotal_list, id_produk:id_produk, sts_pelanggan:sts_pelanggan, id_pelanggan:id_pelanggan, pel_baru:pel_baru, no_telp:no_telp, alamat:alamat},
                dataType    : "JSON",
                success     : function (data) {

                    swal.close();
                    
                    $('#modal_tr').modal('hide');
                    $('#modal_selesai').modal('show');
                    
                    $('.b_stok_habis').text(data.stok_habis);
                    
                }
            })

            return false;
            
        })

    })
</script>