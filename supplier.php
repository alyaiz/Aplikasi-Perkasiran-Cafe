<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Supplier</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="css/menuadmin.css" />
</head>

<body>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "cafecash");
  $result = mysqli_query($conn, "SELECT * FROM supplier");
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
          <a style="background: #ffffff; color: rgb(0, 0, 0)" href="supplier.php"><i class="fas fa-truck icon"></i><span class="text nav-text">Supplier</span></a>
        </li>
        <li>
          <a href="transaksi.php"><i class="fas fa-donate icon"></i><span class="text nav-text">Transaksi</span></a>
        </li>
        <li>
          <a href="tambah.php"><i class="fas fa-plus icon"></i><span class="text nav-text">Tambah</span></a>
        </li>
        <li class="bot">
          <a style="background-color: #916be1" href="admin.php"><i class="fas fa-sign-out-alt icon"></i><span class="text nav-text">Logout</span></a>
        </li>
      </ul>
    </div>
    <section>
      <h1>Data Supplier</h1>
      <div class="table-container">
        <table style="width: 80%; text-align:center">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Supplier</th>
              <th>Nama Supplier</th>
              <th>Alamat</th>
              <th>Keterangan Supplier</th>
              <th>Edit</th>
            </tr>
          </thead>
          <?php $i = 1; ?>
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr class="q">
              <td><?php echo $i; ?></td>
              <td><?php echo $row['ID_Supplier'] ?></td>
              <td><?php echo $row['Nama_Supplier'] ?></td>
              <td><?php echo $row['Alamat'] ?></td>
              <td><?php echo $row['Keterangan_Supplier'] ?></td>
              <td>
                <a href="edit_supplier.php?ID_Supplier=<?php echo $row['ID_Supplier'] ?>"><i style="color: #70C762;" class="fas fa-pen" id="open"></i></a> ||
                <a href="hapus_supplier.php?ID_Supplier=<?php echo $row['ID_Supplier'] ?>"><i style="color: #F65E5E;" class="fas fa-trash" id="open"></i></a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endwhile; ?>
        </table>
      </div>
    </section>
  </main>
</body>

</html>