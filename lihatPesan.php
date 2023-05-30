<?php
session_start();
include('koneksi.php');
$total_bayar = 0;
include('keranjang.php');

if (!$conn) {
    die("Koneksi gagal. " . mysqli_connect_error()); // close koneksi
}

if (!isset($_GET['cari'])) {
    $query = mysqli_query($conn, "SELECT * FROM menu");
} else {
    $query = mysqli_query($conn, "SELECT * FROM menu WHERE nama_produk LIKE '%" . $_GET['cari'] . "%'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lihatPesan.css" />
    <title>CAFE CASH</title>
</head>

<body>
    <section>
        <?php
        $sql = mysqli_query($conn, 'SELECT * FROM transaksi_penjualan');
        while ($data = mysqli_fetch_array($sql)) {
            $id = $data['ID_Transaksi'];
        }
        ?>
        <div class="header">
            <div class="left">
                <h3 id="1">Order</h3>
                <h1>#<?php echo $id + 1 ?></h1>
            </div>
            <div class="mid">
                <h1>Keranjang</h1>
            </div>
            <div class="right">
                <p>
                    <?php date_default_timezone_set("Asia/Jakarta");
                    echo date("l, d M Y")  ?>
                </p>
                <div>
                    <a class="cancel" href="kasir.php">
                        Logout
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="logout">
                            <rect width="256" height="256" fill="none" />
                            <polyline fill="#none" stroke="#ec4646" stroke-linecap="round" stroke-linejoin="round" stroke-width="24" points="174.011 86 216 128 174.011 170" />
                            <line x1="104" x2="215.971" y1="128" y2="128" fill="none" stroke="#ec4646" stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
                            <path fill="none" stroke="#ec4646" stroke-linecap="round" stroke-linejoin="round" stroke-width="24" d="M104,216H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8h56" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php
        if (empty($_SESSION['keranjang'])) {
        ?>
            <div class="container1">
                <div>
                    <div class="contGamb">
                        <img class="gambar" src="./assets/kosong1.png" alt="Beli dulu ya">
                    </div>
                    <h1>Tidak Ada Pesanan!</h1>
                </div>
            </div>
        <?php } else {
        ?>
            <div class="container">
                <div class="cards">
                    <?php
                    $index = 0;
                    for ($i = 0; $i < count($keranjang); $i++) {
                        $total = $_SESSION['keranjang'][$i]['harga'] * $_SESSION['keranjang'][$i]['pembelian'];
                    ?>
                        <div class="card">
                            <?php echo "<img src='img/" . $keranjang[$i]['gambar'] . "'style='width:100%;  height:45%; object-fit: cover; object-position: 100% 20%'>" ?>
                            <div class="anu1">
                                <h2><b> <?php echo $keranjang[$i]['nama'] ?> </b></h2>
                                <div class="anu">
                                    <div class="contCard">
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                            <input type="hidden" id="id_produk" name="id_produk" value="<?php echo $data['id_menu'] ?>"></input>
                                            <input class="jumlah" type="number" id="pembelian" name="pembelian" value="<?php echo $_SESSION['keranjang'][$i]['pembelian'] ?>" min="0" max="<?php echo $data['stok'] ?>" readonly>
                                        </form>
                                        <a href="?index=<?= $index; ?>">
                                            <button class="hapus">Hapus</button>
                                        </a>
                                    </div>
                                    <div class="harga">
                                        <div>
                                            <p>Total</p>
                                            <p class="num">Rp <?php echo number_format((string)$total, 0, ".", ".") ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php $index++;
                    }
                }
                ?>
                </div>
            </div>
    </section>
    <?php ?>

    <section>
        <div class="footer">
            <div class="buttons">
                <a href="menuCof.php">
                    <button>Kembali</button>
                </a>
                <a href="hapusPesan.php">
                    <button>Hapus Pesanan</button>
                </a>
                <a href="checkout.php">
                    <button type="submit" value="confirm" name="confirm">Konfirmasi Pesanan</button>
                </a>
            </div>
            <div class=" tampil">
                <h3>Total Pembayaran</h3>
                <h2>
                    Rp <?php echo number_format((string)($total_bayar), 0, ".", "."); ?>
                </h2>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>