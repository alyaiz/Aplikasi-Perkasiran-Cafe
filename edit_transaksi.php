<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Transaksi</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/menuadmin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
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
            <a href="barang.html"
              ><i class="fas fa-dolly-flatbed"></i> Barang</a
            >
          </li>
          <li>
            <a href="supplier.html"><i class="fas fa-truck"></i> Supplier</a>
          </li>
          <li>
            <a style="background-color: #1dff1d" href="transaksi.html"
              ><i class="fas fa-donate"></i> Transaksi</a
            >
          </li>
          <li>
            <a href="tambah.html"><i class="fas fa-edit"></i> Tambah</a>
          </li>
          <li>
            <a style="background-color: #916be1" href="admin.html"
              ><i class="fas fa-sign-out-alt"></i> Logout</a
            >
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
              <td>
                <input
                  type="text"
                  name="ID Transaksi"
                  placeholder="ID Transaksi"
                  value="ID Transaksi"
                  required
                />
              </td>
            </tr>
            <tr>
              <td>Nama Barang</td>
              <td>:</td>
              <td>
                <input
                  type="text"
                  name="Nama Barang"
                  placeholder="Nama Barang"
                  value="Nama Barang"
                  required
                />
              </td>
            </tr>
            <tr>
              <td>Harga</td>
              <td>:</td>
              <td>
                <input
                  type="text"
                  name="Harga"
                  placeholder="Harga"
                  value="Harga"
                  required
                />
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td><input type="submit" name="simpan" value="simpan" /></td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
