<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
    table {
      font-size: 11px;
    }
    .line-1 {
      line-height: 1;
    }
  </style>
</head>
<body>
  <div class="text-center mb-4 line-1">
    <h5 class="font-weight-bold mb-0">LAPORAN ORDERS / <?php echo date('Y-m-d'); ?></h5>
    <small>* Kami hanya menampilkan laporan table order saja</small>
  </div>
  <table class="table table-striped table-sm">
    <thead class="thead-dark">
      <tr>
        <th>ORDER ID</th>
        <th>ORDER_DATE</th>
        <th>KONSUMEN_ID</th>
        <th>PRODUK_ID</th>
        <th>WARNA</th>
        <th>UKURAN</th>
        <th>DESAIN</th>
        <th>STATUS</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $kl = "SELECT * FROM tbl_orders";
      $query = $this->db->query($kl);
      foreach ($query->result() as $sa): ?>
      <tr>
        <td><?php echo $sa->order_id; ?></td>
        <td><?php echo $sa->order_reg; ?></td>
        <td><?php echo $sa->konsumen_id; ?></td>
        <td><?php echo $sa->produk_id; ?></td>
        <td><?php echo $sa->order_wr; ?></td>
        <td><?php echo $sa->order_uk; ?></td>
        <td><?php echo $sa->order_ds; ?></td>
        <td><?php echo $sa->order_hasil; ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>