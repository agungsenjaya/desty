<div class="col-md p-4">
	<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
            <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin/konsumen">konsumen</a></li>
            <li class="breadcrumb-item active" aria-current="page">konsumen edit</li>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo</p>
      </div>
    </div>
    <?php endforeach ?>
    <!-- End Content -->
</div>