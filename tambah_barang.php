<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Barang</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="css/menuadmin.css" />
</head>

<body>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "login");
  $result = mysqli_query($conn, "SELECT * FROM barang");
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
          <a href="homeadmin.php"><i class="fa fa-home"></i><span class="text nav-text">Dashboard</span></a>
        </li>
        <li>
          <a style="background: #ffffff; color: rgb(0, 0, 0)" href="barang.php"><i class="fas fa-dolly-flatbed"></i><span class="text nav-text">Barang</span></a>
        </li>
        <li>
          <a href="supplier.php"><i class="fas fa-truck"></i>
            <span class="text nav-text">Supplier</span></a>
        </li>
        <li>
          <a href="transaksi.php"><i class="fas fa-donate"></i>
            <span class="text nav-text">Transaksi</span></a>
        </li>
        <li>
          <a href="tambah.php"><i class="fas fa-plus"></i><span class="text nav-text">Tambah</span></a>
        </li>
        <li class="bot">
          <a style="background-color: #916be1" id="log" href="admin.php"><i class="fas fa-sign-out-alt"></i>
            <span class="text nav-text">Logout</span></a>
        </li>
      </ul>
    </div>
    <section>
      <h1>Input data barang</h1>
      <form action="" method="POST">
        <table>
          <tr>
            <td>ID Barang</td>
            <td>:</td>
            <td><input type="text" name="ID_Barang" placeholder="Tidak perlu diisi"></td>
          </tr>
          <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="Nama_Barang" required></td>
          </tr>
          <tr>
            <td>Jumlah Barang</td>
            <td>:</td>
            <td><input type="text" name="Jumlah_Barang" required></td>
          </tr>
          <tr>
            <td>Harga Barang</td>
            <td>:</td>
            <td><input type="text" name="Harga_Barang" required></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="simpan"></td>
          </tr>
        </table>
      </form>
      <p style="color:  rgb(121, 241, 85);">
        <?php
        include 'koneksi.php';
        if (isset($_POST['simpan'])) {
          $insert = mysqli_query($conn, "INSERT INTO barang  VALUES ('" . $_POST['ID_Barang'] . "', '" . $_POST['Nama_Barang'] . "', '" . $_POST['Jumlah_Barang'] . "','" . $_POST['Harga_Barang'] . "')");
          if ($insert) {
            echo "Data berhasil disimpan!";
          } else {
            echo "gagal disimpan!";
          }
        }
        ?>
      </p>
    </section>
  </main>
</body>

</html>