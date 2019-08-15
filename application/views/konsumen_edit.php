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
        <h4 class="mg-b-0 tx-spacing--1">Konsumen Edit</h4>
      </div>
      <div class="d-none d-md-block">
        <button class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" data-toggle="modal" data-target="#exampleModal"><?php echo date('Y-m-d') ?></button>
      </div>
    </div>
    <!-- Content -->
    <div class="row">
      <?php foreach ($konsumen as $kons): ?>
      <div class="col-md-6 col-xl-5 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title tx-sans text-uppercase tx-13"><?php echo $kons->konsumen_nama ?></h6>
              <p class="tx-12 mb-3 text-muted"><?php echo $kons->konsumen_alamat ?></p>
              <div class="row">
                <div class="col-6 col-xl-6 d-sm-flex align-items-center">
                  <div class="p-1 text-white rounded px-2 mr-2 bg-dark">
                    <i class="fa fa-github"></i>
                  </div>
                  <div>
                    <label class="mb-0 tx-sans text-uppercase tx-10">Date Reg</label>
                    <h4 class="font-weight-bold mb-0 tx-12"><?php echo $kons->konsumen_reg ?></h4>
                  </div>
                </div>
                <div class="col-6 col-xl-6 d-sm-flex align-items-center">
                  <div class="p-1 text-white rounded px-2 mr-2 bg-secondary">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div>
                    <label class="mb-0 tx-sans text-uppercase tx-10">telepon</label>
                    <h4 class="font-weight-bold mb-0 tx-12"><?php echo $kons->konsumen_telepon ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mg-t-20">
              <h5 class="tx-sans tx-11 tx-spacing-1 tx-bold tx-uppercase">actions button</h5>
              <a href="<?php echo base_url(''); ?>admin/konsumen_delete/<?php echo $kons->konsumen_id; ?>" title="" class="btn btn-secondary btn-uppercase mg-t-10">hapus konsumen</a>
          </div>
        </div>
        <div class="col-md-6 col-xl stretch-card grid-margin">
          <div class="card card-body">
            <form action="<?php echo base_url(); ?>admin/konsumen_update" method="POST">
            <div class="form-row">
              <div class="form-group col">
                <label for="">Nama Lengkap</label>
                <input type="hidden" name="konsumen_id" value="<?php echo $kons->konsumen_id ?>">
                <input type="text" name="konsumen_nama" class="form-control" placeholder="Masukan nama" required value="<?php echo $kons->konsumen_nama ?>">
              </div>
              <div class="form-group col">
                <label for="">No Telepon</label>
                <input type="text" name="konsumen_telepon" class="form-control" placeholder="Masukan no telepon" required value="<?php echo $kons->konsumen_telepon ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <textarea name="konsumen_alamat" class="form-control" placeholder="Masukan alamat" required><?php echo $kons->konsumen_alamat ?></textarea>
            </div>
            <div>
          <button type="submit" class="btn btn-dark btn-uppercase mg-l-5">Update Data</button>
            </div>
          </form>
          </div>
        </div>
        <?php endforeach ?>
    </div>
    <!-- End Content -->
  </div>