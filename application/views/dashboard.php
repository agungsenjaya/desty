<div class="col-md p-4">
	<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Desty Project</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Halaman Dashboard</h4>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5"><i class="fa fa-github mr-1"></i>Selamat Datang, <?php echo $this->session->userdata('nama') ?></button>
            </div>
          </div>
          <!-- Content -->
          <div class="row row-xs">
            <div class="col-sm-6 col-lg-4">
              <div class="card card-body bg-dark">
                <h6 class="tx-white tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">total konsumen<i class="ml-1 fa fa-angle-down"></i></h6>
                <div class="d-flex d-lg-block d-xl-flex align-items-end">
                  <h1 class="tx-white tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">050</h1>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-body">
                <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">total produk<i class="ml-1 fa fa-angle-down"></i></h6>
                <div class="d-flex d-lg-block d-xl-flex align-items-end">
                  <h1 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">200</h1>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-body">
                <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">total orders<i class="ml-1 fa fa-angle-down"></i></h6>
                <div class="d-flex d-lg-block d-xl-flex align-items-end">
                  <h1 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">010</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- End Content -->
          <hr>
          <!-- Produk -->
          <div class="mg-t-10">
            <h4 class="mg-b-20 tx-spacing--1">Produk Kami</h4>
            <div class="row row-xs">
              <?php 
                $sql = "SELECT * FROM tbl_produks";
                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                  foreach ($query->result() as $hay) {
               ?>
              <div class="col-md-3">
                <div class="bg-dark rounded text-white text-center">
                  <!-- <img src="<?php echo base_url(); ?>assets/produk.jpg" width="100%" alt=""> -->
                  <div class="py-3">
                    <i class="fa fa-houzz display-1"></i>
                  </div>
                  <div class="px-3 py-2">
                    <h5 class="text-uppercase tx-sans tx-white tx-bold tx-14 tx-spacing-1"><?php echo $hay->produk_nama ?></h5>
                    <p class="text-white"><span class="text-capitalize"><?php echo $hay->produk_nama ?></span> merupakan salah satu produk unggulan kami.</p>
                  </div>
                </div>
              </div>
            <?php }} ?>
            </div>
          </div>
          <!-- End Produk -->
</div>