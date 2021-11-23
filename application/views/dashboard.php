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

<div class="row p-3">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body">
                <div class="row align-items-center p-2">
                    <div class="col-md-5">
                        <h4 class="mb-0">Transaksi</h4>
                    </div>
                    <div class="col-md-7">
                        <div class="text-right">
                            <h3 class="mb-0"><?= $jml_tr ?></h3>
                        </div>
                    </div>
                    
                </div>
                <div class="progress progress-sm mt-3">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body">
                <div class="row align-items-center p-2">
                    <div class="col-md-5">
                        <h4 class="mb-0">Produk</h4>
                    </div>
                    <div class="col-md-7">
                        <div class="text-right">
                            <h3 class="mb-0"><?= $jml_produk ?></h3>
                        </div>
                    </div>
                    
                </div>
                <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body">
                <div class="row align-items-center p-2">
                    <div class="col-md-5">
                        <h4 class="mb-0">Pendapatan</h4>
                    </div>
                    <div class="col-md-7">
                        <div class="text-right">
                            <h4 class="mb-0">Rp. <?= number_format($pendapatan,0,'.','.') ?></h4>
                        </div>
                    </div>
                    
                </div>
                <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body">
                <div class="row align-items-center p-2">
                    <div class="col-md-5">
                        <h4 class="mb-0">Profit</h4>
                    </div>
                    <div class="col-md-7">
                        <div class="text-right">
                            <h4 class="mb-0">Rp. <?= number_format($pendapatan - $hpp,0,'.','.') ?></h4>
                        </div>
                    </div>
                    
                </div>
                <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
