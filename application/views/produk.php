<div class="col-md p-4">
	<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">produk</li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Halaman Produk</h4>
      </div>
      <div class="d-none d-md-block">
        <button class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-1"></i>Tambah Produk</button>
      </div>
    </div>
    <!-- Content -->
    <table class="table dataTable no-footer" id="konsumen">
    	<thead class="tx-sans tx-11 text-uppercase tx-bold tx-spacing-1">
    		<tr>
    			<th scope="col">#</th>
    			<th class="bg-light" scope="col">Nama Produk</th>
          <th scope="col">Ukuran</th>
          <th class="bg-light" scope="col">Desain</th>
          <th scope="col">Warna</th>
    			<th class="bg-light" scope="col">Actions</th>
    		</tr>
    	</thead>
    	<tbody>
          <?php 
          // Jabtan
          $sql = "SELECT * FROM tbl_produks";
          $qq = $this->db->query($sql);
            foreach ($qq->result() as $kuy) {
           ?>
           <tr class="item<?php echo $kuy->produk_id?>">
            <th><?php echo $kuy->produk_id; ?></th>
            <td class="bg-light"><?php echo $kuy->produk_nama; ?></td>
            <td><?php echo $kuy->produk_uk; ?></td>
            <td class="bg-light"><?php echo $kuy->produk_ds; ?></td>
            <td><?php echo $kuy->produk_wr; ?></td>
            <td class="bg-light"><a href="<?php echo base_url();?>admin/produk_edit/<?php echo $kuy->produk_id ?>" title="">Actions</a></td>
           </tr>
          <?php }?>
    	</tbody>
    </table>
    <!-- End Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title tx-spacing--1 ml-auto" id="exampleModalLabel">Form Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>admin/produk_store" method="POST">
          <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" name="produk_nama" class="form-control" required placeholder="Masukan nama">
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label for="">Warna</label>
              <input type="text" name="produk_wr" class="form-control" placeholder="Masukan warna" required>
            </div>
            <div class="form-group col">
              <label for="">Ukuran</label>
              <input type="text" name="produk_uk" class="form-control" placeholder="Masukan ukuran" required>
            </div>
            <div class="form-group col">
              <label for="">Desain</label>
              <input type="text" name="produk_ds" class="form-control" placeholder="Masukan desain" required>
            </div>
          </div>
          <div>
            <button type="button" class="btn btn-secondary btn-uppercase mg-l-5" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-dark btn-uppercase mg-l-5">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
</div>