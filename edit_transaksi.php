<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Transaksi</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="css/menuadmin.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="icon" type="image/png" href="img/logokopi.png">
</head>

<body>
  <?php
  include 'koneksi.php';
  $edit_data = mysqli_query($conn, "SELECT * FROM transaksi WHERE ID_Transaksi = '" . $_GET['ID_Transaksi'] . "'");
  $result = mysqli_fetch_array($edit_data);
  ?>
  <main>
    <input type="checkbox" id="check" />
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fa fa-arrow-right" id="open"></i>
    </label>
    <div class="sidebar">
      <div class="top">CAFE CASH</div>
      <ul>
        <li>
          <a href="barang.php"><i class="fas fa-dolly-flatbed"></i> Barang</a>
        </li>
        <li>
          <a href="supplier.php"><i class="fas fa-truck"></i> Supplier</a>
        </li>
        <li>
          <a style="background-color: #1dff1d" href="transaksi.php"><i class="fas fa-donate"></i> Transaksi</a>
        </li>
        <li>
          <a href="tambah.php"><i class="fas fa-edit"></i> Tambah</a>
        </li>
        <li>
          <a style="background-color: #916be1" href="admin.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>
    </div>
    <section>
      <h1>Edit data transaksi</h1>
      <form action="" method="POST">
        <table>
          <tr>
            <td>ID Transaksi</td>
            <td>:</td>
            <td><input type="text" name="ID Transaksi" placeholder="ID Transaksi" value="<?php echo $result['ID_Transaksi'] ?>" required></td>
          </tr>
          <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="Nama Barang" placeholder="Nama Barang" value="<?php echo $result['Nama_Barang'] ?>" required></td>
          </tr>
          <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="text" name="Harga" placeholder="Harga" value="<?php echo $result['Harga'] ?>" required></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="simpan"></td>
          </tr>
        </table>
      </form>
      <p> <?php
          if (isset($_POST['simpan'])) {
            $update = mysqli_query($conn, "UPDATE transaksi SET Nama_Barang = '" . $_POST['Nama_Barang'] . "',
            Harga = '" . $_POST['Harga'] . "' WHERE ID_Transaksi = '" . $_GET['ID_Transaksi'] . "'");
            if ($update) {
              echo 'Data berhasil di edit! silahkan lihat di data barang';
            } else {
              echo 'Data gagal di edit!';
            }
          }
          ?>
      </p>
    </section>
  </main>
</body>

</html>