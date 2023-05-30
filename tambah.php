<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="css/menuadmin.css" />
</head>

<body>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "cafecash");
  $result = mysqli_query($conn, "SELECT * FROM transaksi");
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
          <a href="barang.php"><i class="fas fa-dolly-flatbed icon"></i>
            <span class="text nav-text">Barang</span></a>
        </li>
        <li>
          <a href="supplier.php"><i class="fas fa-truck icon"></i><span class="text nav-text">Supplier</span></a>
        </li>
        <li>
          <a href="transaksi.php"><i class="fas fa-donate icon"></i><span class="text nav-text">Transaksi</span></a>
        </li>
        <li>
          <a style="background: #ffffff; color: rgb(0, 0, 0)" href="tambah.php"><i class="fas fa-plus"></i><span class="text nav-text">Tambah</span></a>
        </li>
        <li class="bot">
          <a style="background-color: #916be1" href="admin.php"><i class="fas fa-sign-out-alt icon"></i><span class="text nav-text">Logout</span></a>
        </li>
      </ul>
    </div>
    <section>
      <br /><br /><br /><br /><br /><br />
      <table>
        <tr>
          <a href="tambah_barang.php">
            <h2>Tambah Data Barang</h2>
          </a>
          <a href="tambah_supplier.php">
            <h2>Tambah Data Supplier</h2>
          </a>
          <a href="tambah_transaksi.php">
            <h2>Tambah Data Transaksi</h2>
          </a>
        </tr>
      </table>
    </section>
  </main>
</body>

</html>