<div class="col-md p-4">
	<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
            <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin/orders">orders</a></li>
            <li class="breadcrumb-item active" aria-current="page">orders edit</li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Orders Edit</h4>
      </div>
      <div class="d-none d-md-block">
        <button class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" data-toggle="modal" data-target="#exampleModal"><?php echo date('Y-m-d') ?></button>
      </div>
    </div>
    <?php foreach ($orders as $key): ?>
      <div class="col-md-6 offset-md-3">
        <div class="card card-body">
          <table class="table table-striped tx-11">
            <tbody>
              <tr>
                <td class="tx-bold">ORDER ID</td>
                <td>:</td>
                <td><?php echo $key->order_id ?></td>
              </tr>
              <tr>
                <td class="tx-bold">ORDER DATE</td>
                <td>:</td>
                <td><?php echo $key->order_reg ?></td>
              </tr>
              <tr>
                <td class="tx-bold">KONSUMEN ID</td>
                <td>:</td>
                <td><?php echo $key->konsumen_id ?></td>
              </tr>
              <tr>
                <td class="tx-bold">NAMA PRODUK</td>
                <td>:</td>
                <td class="text-capitalize">
                  <?php 
                  $jk = "SELECT produk_nama FROM tbl_produks WHERE produk_id=".$key->produk_id;
                  $jh = $this->db->query($jk)->result();
                  foreach ($jh as $hj) {
                    echo $hj->produk_nama;
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td class="tx-bold">ORDER WARNA</td>
                <td>:</td>
                <td><?php echo $key->order_wr ?></td>
              </tr>
              <tr>
                <td class="tx-bold">K.WARNA</td>
                <td>:</td>
                <td><?php echo $key->or_wr ?></td>
              </tr>
              <tr>
                <td class="tx-bold">ORDER UKURAN</td>
                <td>:</td>
                <td><?php echo $key->order_uk ?></td>
              </tr>
              <tr>
                <td class="tx-bold">K.UKURAN</td>
                <td>:</td>
                <td><?php echo $key->or_uk ?></td>
              </tr>
              <tr>
                <td class="tx-bold">ORDER DESAIN</td>
                <td>:</td>
                <td><?php echo $key->order_ds ?></td>
              </tr>
              <tr>
                <td class="tx-bold">K.DESAIN</td>
                <td>:</td>
                <td><?php echo $key->or_ds ?></td>
              </tr>
              <tr>
                <td class="tx-bold">TOTAL ORDER</td>
                <td>:</td>
                <td>
                  <?php 
                  $asa = $key->konsumen_id;
                   $this->db->select('*')->from('tbl_orders')->where('konsumen_id',$asa); 
                  $q = $this->db->get(); 
                  echo $q->num_rows();
                  ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card card-body bg-dark text-center mt-4">
          <h5 class="text-uppercase m-0 tx-13 tx-sans tx-spacing-1 tx-bold tx-white"><i class="fa fa-file-text mr-2"></i> hasil order : <?php echo $key->order_hasil ?></h5>
        </div>
      </div>
    <?php endforeach ?>
  </div>