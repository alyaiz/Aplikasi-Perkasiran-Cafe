<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lihatPesan.css" />
    <title>CAFE CASH</title>
</head>

<body>
    <section>
        <div class="header">
            <div class="left">
                <h3 id="1">Order</h3>
                <h1>#11215</h1>
            </div>
            <div class="mid">
                <h1>Keranjang</h1>
            </div>
            <div class="right">
                <p>
                    Monday, 15 Mei 2023
                </p>
                <div>
                    <a class="cancel" href="kasir.html">
                        Logout
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="logout">
                            <rect width="256" height="256" fill="none" />
                            <polyline fill="#none" stroke="#ec4646" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="24" points="174.011 86 216 128 174.011 170" />
                            <line x1="104" x2="215.971" y1="128" y2="128" fill="none" stroke="#ec4646"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
                            <path fill="none" stroke="#ec4646" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="24" d="M104,216H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8h56" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="container1">
            <div>
                <div class="contGamb">
                    <img class="gambar" src="./assets/kosong1.png" alt="Beli dulu ya">
                </div>
                <h1>Tidak Ada Pesanan!</h1>
            </div>
        </div>
        <div class="container">
            <div class="cards">
                <div class="card">
                    <img src='img/valiate.jpg'style='width:100%;  height:45%; object-fit: cover; object-position: 100% 20%'>
                    <div class="anu1">
                        <h2><b>Valiate</b></h2>
                        <div class="anu">
                            <div class="contCard">
                                <form method="POST" action="">
                                    <input type="hidden" id="id_produk" name="id_produk" value=""></input>
                                    <input class="jumlah" type="number" id="pembelian" name="pembelian" value="" min="0" max="" readonly>
                                </form>
                                    <a href="hapus.html">
                                        <button class="hapus">Hapus</button>
                                    </a> 
                            </div>
                            <div class="harga">
                                <div>
                                    <p>Total</p>
                                    <p class="num">Rp 10.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src='img/ayamteri.jpg'style='width:100%;  height:45%; object-fit: cover; object-position: 100% 20%'>
                    <div class="anu1">
                        <h2><b>Ayam Teri</b></h2>
                        <div class="anu">
                            <div class="contCard">
                                <form method="POST" action="">
                                    <input type="hidden" id="id_produk" name="id_produk" value=""></input>
                                    <input class="jumlah" type="number" id="pembelian" name="pembelian" value="" min="0" max="" readonly>
                                </form>
                                    <a href="hapus.html">
                                        <button class="hapus">Hapus</button>
                                    </a> 
                            </div>
                            <div class="harga">
                                <div>
                                    <p>Total</p>
                                    <p class="num">Rp 10.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src='img/indomie.jpg'style='width:100%;  height:45%; object-fit: cover; object-position: 100% 20%'>
                    <div class="anu1">
                        <h2><b>Indomie</b></h2>
                        <div class="anu">
                            <div class="contCard">
                                <form method="POST" action="">
                                    <input type="hidden" id="id_produk" name="id_produk" value=""></input>
                                    <input class="jumlah" type="number" id="pembelian" name="pembelian" value="" min="0" max="" readonly>
                                </form>
                                    <a href="hapus.html">
                                        <button class="hapus">Hapus</button>
                                    </a> 
                            </div>
                            <div class="harga">
                                <div>
                                    <p>Total</p>
                                    <p class="num">Rp 10.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src='img/pizza.jpg'style='width:100%;  height:45%; object-fit: cover; object-position: 100% 20%'>
                    <div class="anu1">
                        <h2><b>Pizza</b></h2>
                        <div class="anu">
                            <div class="contCard">
                                <form method="POST" action="">
                                    <input type="hidden" id="id_produk" name="id_produk" value=""></input>
                                    <input class="jumlah" type="number" id="pembelian" name="pembelian" value="" min="0" max="" readonly>
                                </form>
                                    <a href="hapus.html">
                                        <button class="hapus">Hapus</button>
                                    </a> 
                            </div>
                            <div class="harga">
                                <div>
                                    <p>Total</p>
                                    <p class="num">Rp 10.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="footer">
            <div class="buttons">
                <a href="menuCof.html">
                    <button >Kembali</button>
                </a>
                <a href="hapusPesan.html">
                    <button >Hapus Pesanan</button>
                </a>
                <a href="checkout.html">
                    <button type="submit" value="confirm" name="confirm">Konfirmasi Pesanan</button>
                </a>
            </div>
            <div class=" tampil">
                <h3>Total Pembayaran</h3>
                <h2>
                Rp 10.000
                </h2>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>