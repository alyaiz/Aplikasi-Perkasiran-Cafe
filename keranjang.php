<?php
include('koneksi1.php');

if (isset($_POST['id_produk'], $_POST['pembelian'])) {

    $id = $_POST['id_produk'];
    $pembelian = $_POST['pembelian'];

    $query = mysqli_query($conn, "SELECT * FROM menu WHERE id_menu = '$id'");

    $data = mysqli_fetch_array($query);

    if (!isset($_SESSION['keranjang'])) $_SESSION['keranjang'] = [];

    $index = -1;
    $keranjang = unserialize(serialize($_SESSION['keranjang']));

    // jika produk sudah ada dalam keranjang maka pembelian akan diupdate
    for ($i = 0; $i < count($keranjang); $i++) {
        if ($keranjang[$i]['id_produk'] == $id) {
            $index = $i;
            $_SESSION['keranjang'][$i]['pembelian'] = $pembelian;
            break;
        }
    }

    // jika produk belum ada dalam keranjang
    if ($index == -1) {
        $_SESSION['keranjang'][] = [
            'id_produk' => $id,
            'nama' => $data['nama'],
            'harga' => $data['harga'],
            'gambar' => $data['gambar'],
            'pembelian' => $pembelian
        ];
    }
}

if (!empty($_SESSION['keranjang'])) {

    if (isset($_SESSION['keranjang'])) {
        $keranjang = unserialize(serialize($_SESSION['keranjang']));
        $index = 0;
        $no = 1;
        $total = 0;
        $total_bayar = 0;

        for ($i = 0; $i < count($keranjang); $i++) {
            $total = $_SESSION['keranjang'][$i]['harga'] * $_SESSION['keranjang'][$i]['pembelian'];
            $total_bayar += $total;
?>

     <?php
            $index++;
        }

        // hapus produk dalam keranjang
        if (isset($_GET['index'])) {
            $keranjang = unserialize(serialize($_SESSION['keranjang']));
            unset($keranjang[$_GET['index']]);
            $keranjang = array_values($keranjang);
            $_SESSION['keranjang'] = $keranjang;
        }
    }
        ?>

<?php
}

if (isset($_GET['index'])) {
    header('Location: menuCof.php');
}
?>