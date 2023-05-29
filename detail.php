<?php
include('koneksi1.php');

if (!isset($_GET['id_order'])) {
  header('Location: laporan.php');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/tabel.css" />
  <title>CAFE CASH</title>
</head>

<body>
  <div class="container">
    <h1>Detail Order</h1>

    <div class="tabeles">
      <table class="detail">
        <thead align="center">
          <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Pembelian</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $query = mysqli_query($conn, "SELECT * FROM `laporan` INNER JOIN menu ON laporan.id_menu = menu.id_menu WHERE id_Order = '$_GET[id_order]'");
          $no = 1;
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td align="center"><?php echo $no++; ?></td>
              <td><?php echo $data['nama'] ?></td>
              <td><?php echo number_format((string)$data['harga'], 0, ".", ".") ?></td>
              <td align="center"><?php echo $data['pembelian'] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="buttons">
      <a href="laporan.php">
        <button>Kembali</button>
      </a>
    </div>
  </div>
</body>

</html>