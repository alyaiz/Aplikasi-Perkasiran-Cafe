<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/tabel.css" />
  <link rel="icon" type="image/png" href="img/logokopi.png">
  <title>CAFE CASH</title>
</head>

<body>
  <div class="container">
    <h1>Laporan Transaksi</h1>
    <div class="tabeles">
      <table class="laporan">
        <thead align="center">
          <tr>
            <th>Id Transaksi</th>
            <th>Tgl. Transaksi</th>
            <th>Total Item</th>
            <th>Total Bayar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody align="center">
          <?php
          $query = mysqli_query($conn, "SELECT * FROM transaksi_penjualan");
          while ($data = mysqli_fetch_array($query)) {
          ?>

            <tr>
              <td><?php echo $data['ID_Transaksi'] ?></td>
              <td><?php echo $data['tanggal'] ?></td>
              <td><?php echo $data['jumlah'] ?></td>
              <td><?php echo number_format((string)$data['Harga'], 0, ".", ".") ?></td>
              <td>
                <a href="detail.php?id_order=<?php echo $data['ID_Transaksi'] ?>">Detail Order</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="buttons">
      <a href="menuCof.php">
        <button class="">Menu</button>
      </a>
    </div>
  </div>
</body>

</html>