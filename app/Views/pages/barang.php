<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

.category {
    margin-bottom: 20px;
}

.category h2 {
    color: #007BFF;
    border-bottom: 2px solid #007BFF;
    padding-bottom: 5px;
    margin-bottom: 10px;
}

ul {
    list-style-type: none;
    padding: 0;
}

h3 {
    margin: 0;
    color: #333;
}

p {
    margin: 5px 0;
    color: #555;
}
</style>

<body>
    <div class="container">
        <h1>Kategori Barang Elektronik</h1>
        <div class="category">
            <h2>Perangkat Komputer</h2>
            <ul>
                <li>
                    <h3>Laptop</h3>
                    <p>Deskripsi: Laptop dengan performa tinggi untuk gaming dan pekerjaan.</p>
                    <p>Harga: Rp 12.000.000</p>
                </li>
                <li>
                    <h3>Desktop</h3>
                    <p>Deskripsi: Komputer desktop dengan spesifikasi tinggi untuk desain grafis.</p>
                    <p>Harga: Rp 10.000.000</p>
                </li>
                <li>
                    <h3>Monitor</h3>
                    <p>Deskripsi: Monitor 24 inci dengan resolusi Full HD.</p>
                    <p>Harga: Rp 2.500.000</p>
                </li>
                <li>
                    <h3>Printer</h3>
                    <p>Deskripsi: Printer multifungsi untuk cetak, salin, dan pindai.</p>
                    <p>Harga: Rp 1.500.000</p>
                </li>
                <li>
                    <h3>Perangkat penyimpanan</h3>
                    <p>Deskripsi: SSD 1TB untuk kecepatan transfer data yang tinggi.</p>
                    <p>Harga: Rp 1.000.000</p>
                </li>
            </ul>
        </div>

        <div class="category">
            <h2>Perangkat Mobile</h2>
            <ul>
                <li>
                    <h3>Smartphone</h3>
                    <p>Deskripsi: Smartphone dengan kamera 108 MP dan baterai tahan lama.</p>
                    <p>Harga: Rp 8.000.000</p>
                </li>
                <li>
                    <h3>Tablet</h3>
                    <p>Deskripsi: Tablet dengan layar 10 inci dan dukungan stylus.</p>
                    <p>Harga: Rp 4.000.000</p>
                </li>
                <li>
                    <h3>E-reader</h3>
                    <p>Deskripsi: E-reader dengan layar anti silau dan baterai tahan lama.</p>
                    <p>Harga: Rp 2.000.000</p>
                </li>
            </ul>
        </div>

        <div class="category">
            <h2>Perangkat Audio dan Video</h2>
            <ul>
                <li>
                    <h3>Televisi</h3>
                    <p>Deskripsi: TV 55 inci dengan resolusi 4K dan smart TV.</p>
                    <p>Harga: Rp 7.000.000</p>
                </li>
                <li>
                    <h3>Speaker</h3>
                    <p>Deskripsi: Speaker Bluetooth dengan suara bass yang mendalam.</p>
                    <p>Harga: Rp 1.500.000</p>
                </li>
                <li>
                    <h3>Sistem home theater</h3>
                    <p>Deskripsi: Sistem home theater dengan suara surround 5.1.</p>
                    <p>Harga: Rp 5.000.000</p>
                </li>
                <li>
                    <h3>Pemutar DVD/Blu-ray</h3>
                    <p>Deskripsi: Pemutar DVD dan Blu-ray dengan kemampuan streaming.</p>
                    <p>Harga: Rp 1.200.000</p>
                </li>
                <li>
                    <h3>Headphone dan earphone</h3>
                    <p>Deskripsi: Headphone noise-cancelling untuk pengalaman mendengar yang optimal.</p>
                    <p>Harga: Rp 800.000</p>
                </li>
            </ul>
        </div>
    </div>
</body>
<?= $this->endSection(); ?>