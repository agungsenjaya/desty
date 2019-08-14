<div class="col-md p-4">
	<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Desty Project</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Halaman Konsumen</h4>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5"><i class="fa fa-github mr-1"></i>Selamat Datang, <?php echo $this->session->userdata('nama') ?></button>
            </div>
          </div>
          <!-- Content -->
          <table class="table">
          	<thead>
          		<tr>
          			<th scope="col">#</th>
          			<th class="bg-light" scope="col">Nama Lengkap</th>
          			<th scope="col">Nomor NIK</th>
          			<th scope="col">Jenis Kelamin</th>
          			<th scope="col">Actions</th>
          		</tr>
          	</thead>
          	<tbody>
          		<tr>
          			<th scope="row">1</th>
          			<td class="bg-light">Angga Candra</td>
          			<td>32021542123</td>
          			<td>Laki - Laki</td>
          			<td><a href="javascript:void(0)" title="">Actions</a></td>
          		</tr>
          	</tbody>
          </table>
          <!-- End Content -->
</div>