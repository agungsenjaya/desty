<div class="col-md p-4">
	<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
            <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin/produk">produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">produk edit</li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Produk Edit</h4>
      </div>
      <div class="d-none d-md-block">
        <button class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" data-toggle="modal" data-target="#exampleModal"><?php echo date('Y-m-d') ?></button>
      </div>
    </div>
    <!-- Content -->
    <?php foreach ($produk as $jr): ?>
    <div class="col-md-6 offset-md-3">
      <div class="card card-body">
        <h3 class="text-capitalize tx-sans"><?php echo $jr->produk_nama; ?></h3>
        <div class="row">
          <div class="col-4 col-xl-4 d-sm-flex align-items-center">
            <div class="p-1 text-white rounded px-3 mr-2 bg-dark">
              <i class="fa fa-angle-right"></i>
            </div>
            <div>
              <label class="mb-0 tx-sans text-uppercase tx-10">Ukuran</label>
              <h4 class="font-weight-bold mb-0 tx-12"><?php echo $jr->produk_uk ?></h4>
            </div>
          </div>
          <div class="col-4 col-xl-4 d-sm-flex align-items-center">
            <div class="p-1 text-white rounded px-3 mr-2 bg-secondary">
              <i class="fa fa-angle-right"></i>
            </div>
            <div>
              <label class="mb-0 tx-sans text-uppercase tx-10">warna</label>
              <h4 class="font-weight-bold mb-0 tx-12"><?php echo $jr->produk_wr ?></h4>
            </div>
          </div>
          <div class="col-4 col-xl-4 d-sm-flex align-items-center">
            <div class="p-1 text-white rounded px-3 mr-2 bg-secondary">
              <i class="fa fa-angle-right"></i>
            </div>
            <div>
              <label class="mb-0 tx-sans text-uppercase tx-10">desain</label>
              <h4 class="font-weight-bold mb-0 tx-12"><?php echo $jr->produk_ds ?></h4>
            </div>
          </div>
        </div>
        <hr>
        <a href="<?php echo base_url(''); ?>admin/produk_delete/<?php echo $jr->produk_id; ?>" title="" class="btn btn-secondary btn-uppercase mg-t-10">hapus produk</a>
      </div>
    
    <!-- Form -->
    <div class="card card-body mg-t-20">
    <form action="<?php echo base_url(); ?>admin/produk_update" method="POST">
          <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="hidden" name="produk_id" value="<?php echo $jr->produk_id ?>">
            <input type="text" name="produk_nama" class="form-control" required placeholder="Masukan nama" value="<?php echo $jr->produk_nama ?>">
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label for="">Warna</label>
              <input type="text" name="produk_wr" class="form-control" placeholder="Masukan warna" required value="<?php echo $jr->produk_wr ?>">
            </div>
            <div class="form-group col">
              <label for="">Ukuran</label>
              <input type="text" name="produk_uk" class="form-control" placeholder="Masukan ukuran" required value="<?php echo $jr->produk_uk ?>">
            </div>
            <div class="form-group col">
              <label for="">Desain</label>
              <input type="text" name="produk_ds" class="form-control" placeholder="Masukan desain" required value="<?php echo $jr->produk_ds ?>">
            </div>
          </div>
          <div>
            <button type="submit" class="btn btn-dark btn-uppercase mg-l-5">Update Data</button>
          </div>
        </form>
      </div>
    <!-- End Form -->
    </div>
    <?php endforeach ?>
    <!-- End Content -->
</div>