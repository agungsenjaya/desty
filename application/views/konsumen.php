<div class="col-md p-4">
	<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item tx-bold"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">konsumen</li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Halaman Konsumen</h4>
      </div>
      <div class="d-none d-md-block">
        <button class="btn btn-sm pd-x-15 btn-dark btn-uppercase mg-l-5" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-1"></i>Tambah konsumen</button>
      </div>
    </div>
    <!-- Content -->
    <table class="table dataTable no-footer" id="konsumen">
    	<thead class="tx-sans tx-11 text-uppercase tx-bold tx-spacing-1">
    		<tr>
    			<th scope="col">konsumen_id</th>
    			<th class="bg-light" scope="col">konsumen_nama</th>
          <th scope="col">konsumen_telepon</th>
          <th class="bg-light">konsumen_alamat</th>
          <th scope="col">konsumen_reg</th>
    			<th class="bg-light" scope="col">Actions</th>
    		</tr>
    	</thead>
    	<tbody>
          <?php 
          // Jabtan
          $sql = "SELECT * FROM tbl_konsumens";
          $qq = $this->db->query($sql);
            foreach ($qq->result() as $kuy) {
           ?>
           <tr class="item<?php echo $kuy->konsumen_id?>">
            <th><?php echo $kuy->konsumen_id; ?></th>
            <td class="bg-light"><?php echo $kuy->konsumen_nama; ?></td>
            <td><?php echo $kuy->konsumen_telepon; ?></td>
            <td class="bg-light"><?php echo $kuy->konsumen_alamat; ?></td>
            <td><?php echo $kuy->konsumen_reg; ?></td>
            <td class="bg-light"><a href="<?php echo base_url();?>admin/konsumen_edit/<?php echo $kuy->konsumen_id ?>" title="">Actions</a></td>
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
        <h5 class="modal-title tx-spacing--1 ml-auto" id="exampleModalLabel">Form Tambah Konsumen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>admin/konsumen_store" method="POST">
          <div class="form-row">
            <div class="form-group col">
              <label for="">Nama Lengkap</label>
              <input type="text" name="konsumen_nama" class="form-control" placeholder="Masukan nama" required>
            </div>
            <div class="form-group col">
              <label for="">No Telepon</label>
              <input type="text" name="konsumen_telepon" class="form-control" placeholder="Masukan no telepon" required>
            </div>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="konsumen_alamat" class="form-control" placeholder="Masukan alamat" required></textarea>
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