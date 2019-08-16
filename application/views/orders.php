<div class="col-md p-4">
	<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Orders</li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Halaman Orders</h4>
      </div>
      <div class="d-none d-md-block">
        <button class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-1"></i>Tambah Orders</button>
      </div>
    </div>
    <!-- Content -->
    <table class="table dataTable no-footer" id="konsumen">
      <thead class="tx-sans tx-11 text-uppercase tx-bold tx-spacing-1">
        <tr>
          <th scope="col">ID ORDER</th>
          <th class="bg-light" scope="col">Id Konsumen</th>
          <th scope="col">Nama Produk</th>
          <th class="bg-light" scope="col">Orders Date</th>
          <th scope="col">Hasil</th>
          <th class="bg-light" scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
          <?php 
          // Jabtan
          $sql = "SELECT * FROM tbl_orders";
          $qq = $this->db->query($sql);
            foreach ($qq->result() as $kuy) {
           ?>
           <tr class="item<?php echo $kuy->order_id?>">
            <th><?php echo $kuy->order_id?></th>
            <td class="bg-light"><?php echo $kuy->konsumen_id; ?></td>
            <td class="text-capitalize"><?php 
            $jk = "SELECT produk_nama FROM tbl_produks WHERE produk_id=".$kuy->produk_id;
            $jh = $this->db->query($jk)->result();
            foreach ($jh as $hj) {
              echo $hj->produk_nama;
            }
            ?></td>
            <td class="bg-light"><?php echo $kuy->order_reg; ?></td>
            <td><?php echo $kuy->order_hasil; ?></td>
            <td class="bg-light"><a href="<?php echo base_url();?>admin/orders_edit/<?php echo $kuy->order_id ?>" title="">Actions</a></td>
           </tr>
          <?php }?>
      </tbody>
    </table>
    <!-- End Content -->
    <!-- Modal -->
<div class="modal fade" id="exampleModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title tx-spacing--1 ml-auto" id="exampleModalLabel">Form Tambah Orders</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>admin/orders_store" method="POST">
          <div class="form-group">
            <label for="">ID Konsumen</label>
            <select id="drod" class="btn-block" required name="konsumen_id">
              <option value="">Masukan ID Konsumen</option>
              <?php 
              $oml = "SELECT * FROM tbl_konsumens";
              $kk = $this->db->query($oml);
              foreach ($kk->result() as $kuy) {
              ?>
              <option value="<?php echo $kuy->konsumen_id ?>"><?php echo $kuy->konsumen_id?> - <?php echo $kuy->konsumen_nama?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Pilihan Produk</label>
            <select id="drad" class="btn-block" required name="produk_id">
              <option value="">Select Produk</option>
              <?php 
              $aml = "SELECT * FROM tbl_produks";
              $gg = $this->db->query($aml);
              foreach ($gg->result() as $kuy) {
              ?>
              <option value="<?php echo $kuy->produk_id ?>"><?php echo $kuy->produk_nama?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label for="">Warna Produk</label>
              <input disabled type="text" id="wa" class="form-control" placeholder="Nilai kosong">
            </div>
            <div class="form-group col">
              <label for="">Ukuran Produk</label>
              <input disabled type="text" id="wi" class="form-control" placeholder="Nilai kosong">
            </div>
            <div class="form-group col">
              <label for="">Desain Produk</label>
              <input disabled type="text" id="wu" class="form-control" placeholder="Nilai kosong">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label for="">Warna</label>
              <input type="text" id="ta" name="order_wr" class="form-control" placeholder="Masukan warna" required>
            </div>
            <div class="form-group col">
              <label for="">Ukuran</label>
              <input type="text" id="ti" name="order_uk" class="form-control" placeholder="Masukan ukuran" required>
            </div>
            <div class="form-group col">
              <label for="">Desain</label>
              <input type="text" id="tu" name="order_ds" class="form-control" placeholder="Masukan desain" required>
              <input type="hidden" name="order_hasil" class="form-control" id="se">
            </div>
          </div>
            <button type="button" class="btn btn-secondary btn-uppercase mg-l-5" data-dismiss="modal">Close</button>
            <button type="submit" id="buha" class="btn btn-primary btn-uppercase mg-l-5" disabled>Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
</div>