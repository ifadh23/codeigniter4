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
}

.category {
margin-bottom: 20px;
}

.category h2 {
color: #007BFF;
border-bottom: 2px solid #007BFF;
padding-bottom: 5px;
}

ul {
list-style-type: none;
padding: 0;
}
</style>

<body>
    <div class="container">
            <h1>Kategori Barang Elektronik</h1>
            <div class="category">
                <h2>Perangkat Komputer</h2>
                <ul>
                    <li>Laptop</li>
                    <li>Desktop</li>
                    <li>Monitor</li>
                    <li>Printer</li>
                    <li>Perangkat penyimpanan (hard disk, SSD)</li>
                </ul>
            </div>
            <div class="category">
                <h2>Perangkat Mobile</h2>
                <ul>
                    <li>Smartphone</li>
                    <li>Tablet</li>
                    <li>E-reader</li>
                </ul>
            </div>
            <div class="category">
                <h2>Perangkat Audio dan Video</h2>
                <ul>
                    <li>Televisi</li>
                    <li>Speaker</li>
                    <li>Sistem home theater</li>
                    <li>Pemutar DVD/Blu-ray</li>
                    <li>Headphone dan earphone</li>
                </ul>
            </div>
            <div class="category">
                <h2>Perangkat Rumah Tangga</h2>
                <ul>
                    <li>Kulkas</li>
                    <li>Mesin cuci</li>
                    <li>Microwave</li>
                    <li>Oven listrik</li>
                    <li>Vacuum cleaner</li>
                </ul>
            </div>
            <div class="category">
                <h2>Perangkat Gaming</h2>
                <ul>
                    <li>Konsol game (PlayStation, Xbox, Nintendo Switch)</li>
                    <li>Aksesori gaming (controller, headset)</li>
                    <li>PC gaming</li>
                </ul>
            </div>
            <div class="category">
                <h2>Perangkat Wearable</h2>
                <ul>
                    <li>Smartwatch</li>
                    <li>Fitness tracker</li>
                    <li>Kacamata pintar</li>
                </ul>
            </div>
            <div class="category">
                <h2>Perangkat Jaringan</h2>
                <ul>
                    <li>Router</li>
                    <li>Modem</li>
                    <li>Switch</li>
                </ul>
            </div>
            <div class="category">
                <h2>Perangkat Keamanan</h2>
                <ul>
                    <li>Kamera pengawas (CCTV)</li>
                    <li>Alarm rumah</li>
                    <li>Sistem keamanan pintar</li>
                </ul>
            </div>
            <div class="category">
                <h2>Perangkat Otomotif</h2>
                <ul>
                    <li>GPS navigator</li>
                    <li>Sistem audio mobil</li>
                    <li>Dashcam</li>
                </ul>
            </div>
            <div class="category">
                <h2>Perangkat Kesehatan</h2>
                <ul>
                    <li>Timbangan digital</li>
                    <li>Monitor tekanan darah</li>
                    <li>Alat pengukur gula darah</li>
                </ul>
            </div>
        </div>
</body>

<?= $this->endSection(); ?>