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
    <?php foreach ($kategori as $k): 
        
        if ($k['jml'] == 0) {
            $class = '';
            $color = "background-color: red; color: white;";
        } else {
            $class = 'badge-success';
            $color = "";
        }

        ?>
        <div class="col-lg-4">
            <div class="card card-body">
                <div class="row p-3">
                    <div class="col-md-6">
                        <h3 class="card-text"><?= $k['kategori'] ?></h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <h2><span class="badge badge-success"><?= $k['jml'] ?></span></h2>
                    </div>
                </div>
                <a href="<?= base_url('produk/detail/'.$k['id']) ?>" class="btn btn-primary waves-effect waves-light mt-1 btn_lihat" id_kategori="<?= $k['id'] ?>" type="button">
                <span id="lihat<?= $k['id'] ?>"><i class="mdi mdi-arrow-right-thick mr-1"></i> Lihat</span>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    $(document).ready(function () {

        
        
    })
</script>