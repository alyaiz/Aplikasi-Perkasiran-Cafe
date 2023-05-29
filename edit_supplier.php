<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Supplier</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="css/menuadmin.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>

<body>
  <?php
  include 'koneksi.php';
  $edit_data = mysqli_query($conn, "SELECT * FROM supplier WHERE ID_Supplier = '" . $_GET['ID_Supplier'] . "'");
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
          <a style="background-color: #1dff1d" href="supplier.php"><i class="fas fa-truck"></i> Supplier</a>
        </li>
        <li>
          <a href="transaksi.php"><i class="fas fa-donate"></i> Transaksi</a>
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
      <h1>Edit data supplier</h1>
      <form action="" method="POST">
        <table>
          <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="Nama_Supplier" placeholder="Nama Barang" value="<?php echo $result['Nama_Supplier'] ?>" required></td>
          </tr>
          <tr>
            <td>Jumlah Barang</td>
            <td>:</td>
            <td><input type="text" name="Alamat" placeholder="Alamat" value="<?php echo $result['Alamat'] ?>" required></td>
          </tr>
          <tr>
            <td>Harga Barang</td>
            <td>:</td>
            <td><input type="text" name="Keterangan_Supplier" placeholder="Keterangan Supplier" value="<?php echo $result['Keterangan_Supplier'] ?>" required></td>
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
            $update = mysqli_query($conn, "UPDATE supplier SET Nama_Supplier = '" . $_POST['Nama_Supplier'] . "',
            Alamat= '" . $_POST['Alamat'] . "',
            Keterangan_Supplier = '" . $_POST['Keterangan_Supplier'] . "' WHERE ID_Supplier = '" . $_GET['ID_Supplier'] . "'");
            if ($update) {
              echo 'Data berhasil di edit! silahkan lihat di data supplier';
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