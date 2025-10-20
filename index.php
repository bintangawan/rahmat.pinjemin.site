<!DOCTYPE html>
<html>
<head>
    <title>Layout Mockup Dengan Semantik HTML</title>
    <link rel="stylesheet" href="css/modul3.css">
</head>
<body>
    <div id="wrapper">
        <div id="container">
            <header>
                <h1>RAHMAT GUEST HOUSE</h1>
                <p>Kenyamanan dan ketenangan menginap di jantung kota Medan</p>
            </header>
            
            <nav>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="#">Kamar & Fasilitas</a></li>
                    <li><a href="#">Profil</a>
                        <ul class="submenu">
                            <li><a href="#">Hubungi Kami</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="lihat-produk">LIHAT KAMAR</div>
            </nav>

            <article>
                <div class="single">
                    <div class="logo-section">
                        <img src="images/gambar1.jpg" alt="Tampilan Rahmat Guest House">
                    </div>
                    <h2>Penginapan Nyaman di Tengah Kota Medan</h2>
                    <p>Rahmat Guest House menghadirkan suasana hangat dan tenang di pusat kota Medan. Dilengkapi dengan fasilitas modern seperti Wi-Fi gratis, AC di setiap kamar, serta layanan resepsionis 24 jam, penginapan ini cocok untuk pelancong bisnis maupun keluarga yang ingin beristirahat dengan nyaman tanpa harus jauh dari pusat aktivitas kota.</p>
                    <div class="more"><a href="detail.php?id=1">Baca selengkapnya</a></div>
                </div>

                <div class="single">
                    <div class="logo-section">
                        <img src="images/gambar2.jpg" alt="Fasilitas Ruang Bersantai">
                    </div>
                    <h2>Fasilitas Lengkap untuk Ketenangan Anda</h2>
                    <p>Rahmat Guest House menyediakan berbagai fasilitas penunjang seperti area lounge bersantai, parkir luas, dapur bersama, serta layanan laundry harian. Setiap ruangan dirancang dengan interior minimalis modern yang menghadirkan kenyamanan dan kesan bersih bagi setiap tamu yang menginap di sini.</p>
                    <div class="more"><a href="detail.php?id=2">Baca selengkapnya</a></div>
                </div>

                <div class="single">
                    <div class="logo-section">
                        <img src="images/gambar3.jpg" alt="Tampilan Kamar Tamu">
                    </div>
                    <h2>Suasana Homey dengan Pelayanan Terbaik</h2>
                    <p>Dengan motto “Tamu Adalah Keluarga”, Rahmat Guest House berkomitmen memberikan pelayanan terbaik dan pengalaman menginap yang tak terlupakan. Para tamu dapat menikmati sarapan pagi khas Nusantara, ruang santai terbuka, serta layanan antar-jemput ke bandara dengan harga terjangkau.</p>
                    <div class="more"><a href="detail.php?id=3">Baca selengkapnya</a></div>
                </div>
            </article>

            <aside>
                <div class="widget">
                    <h2>Berita Populer</h2>
                    <ul>
                        <li><a href="#">Promo Akhir Tahun: Menginap 3 Malam Bayar 2</a></li>
                        <li><a href="#">Rahmat Guest House Raih Penghargaan “Best Budget Stay”</a></li>
                        <li><a href="#">Kunjungi Medan dan Nikmati Pengalaman Unik Bersama Kami</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h2>Artikel Populer</h2>
                    <ul>
                        <li><a href="#">Tips Memilih Guest House Nyaman di Medan</a></li>
                        <li><a href="#">5 Tempat Wisata Dekat Rahmat Guest House</a></li>
                        <li><a href="#">Menikmati Liburan Hemat Tanpa Kurang Kenyamanan</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h2>Berita Selanjutnya</h2>
                    <ul>
                        <li><a href="#">Rencana Perluasan Cabang Rahmat Guest House</a></li>
                        <li><a href="#">Kolaborasi dengan Travel Lokal untuk Paket Liburan</a></li>
                        <li><a href="#">Cuaca Cerah, Saatnya Staycation di Medan</a></li>
                    </ul>
                </div>
            </aside>

            <footer>
                <div class="column">
                    <h2>LAYANAN</h2>
                    <p>Booking Online<br>
                    Sewa Harian & Mingguan<br>
                    Antar Jemput Bandara<br>
                    Layanan Laundry<br>
                    Sarapan Pagi<br>
                    Konsultasi Wisata<br>
                    Diskon Group Booking<br>
                    Dukungan Customer Service</p>
                </div>
                <div class="column">
                    <h2>Jam Operasional</h2>
                    <p>Setiap Hari : 07.00 - 22.00 WIB<br>
                    Resepsionis : 24 Jam<br>
                    Email : <a href="#">info@rahmatguesthouse.com</a></p>
                </div>
                <div class="column">
                    <h2>Kantor Pusat</h2>
                    <p>Jl. Sisingamangaraja No.45, Medan<br>
                    Tel : +62-812-3456-7890<br>
                    Email : rahmatguesthouse@gmail.com</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
