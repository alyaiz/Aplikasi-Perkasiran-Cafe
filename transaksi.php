<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transaksi</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link rel="stylesheet" href="css/menuadmin.css" />
  </head>
  <body>
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
            <a href="homeadmin.html"
              ><i class="fa fa-home"></i
              ><span class="text nav-text">Dashboard</span></a
            >
          </li>
          <li>
            <a href="barang.html"
              ><i class="fas fa-dolly-flatbed icon"></i>
              <span class="text nav-text">Barang</span></a
            >
          </li>
          <li>
            <a href="supplier.html"
              ><i class="fas fa-truck icon"></i
              ><span class="text nav-text">Supplier</span></a
            >
          </li>
          <li>
            <a
              style="background: #ffffff; color: rgb(0, 0, 0)"
              href="transaksi.html"
              ><i class="fas fa-donate icon"></i
              ><span class="text nav-text">Transaksi</span></a
            >
          </li>
          <li>
            <a href="tambah.html"
              ><i class="fas fa-plus icon"></i
              ><span class="text nav-text">Tambah</span></a
            >
          </li>
          <li class="bot">
            <a style="background-color: #916be1" href="admin.html"
              ><i class="fas fa-sign-out-alt icon"></i
              ><span class="text nav-text">Logout</span></a
            >
          </li>
        </ul>
      </div>
      <section>
        <h1>Data Transaksi</h1>
        <div>
          <table style="width: 80%; text-align: center">
            <tr>
              <th>No</th>
              <th>ID Transaksi</th>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Edit</th>
            </tr>
            <tr class="q">
              <td>1</td>
              <td>2001547</td>
              <td>Mie Ayam</td>
              <td>60.000</td>
              <td>
                <a href="edit_transaksi.html"
                  ><i style="color: #70c762" class="fas fa-pen" id="open"></i
                ></a>
                ||
                <a href="hapus_transaksi.html"
                  ><i style="color: #f65e5e" class="fas fa-trash" id="open"></i
                ></a>
              </td>
            </tr>
            <tr class="q">
              <td>2</td>
              <td>2001548</td>
              <td>Pizza</td>
              <td>100.000</td>
              <td>
                <a href="edit_transaksi.html"
                  ><i style="color: #70c762" class="fas fa-pen" id="open"></i
                ></a>
                ||
                <a href="hapus_transaksi.html"
                  ><i style="color: #f65e5e" class="fas fa-trash" id="open"></i
                ></a>
              </td>
            </tr>
          </table>
        </div>
      </section>
    </main>
  </body>
</html>