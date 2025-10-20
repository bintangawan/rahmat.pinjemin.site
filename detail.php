<?php
// Data artikel dalam array
$articles = [
    1 => [
        'title' => 'Penginapan Nyaman di Tengah Kota Medan',
        'image' => 'images/gambar1.jpg',
        'date' => '20 Oktober 2025',
        'author' => 'Rahmat Wahyudin',
        'category' => 'Fasilitas & Layanan',
        'content' => 'Rahmat Guest House menghadirkan suasana penginapan yang tenang dan nyaman di jantung kota Medan. Setiap kamar dirancang dengan interior minimalis modern, dilengkapi dengan AC, televisi, Wi-Fi gratis, serta kamar mandi pribadi yang bersih. Kami menyediakan berbagai tipe kamar sesuai kebutuhan tamu, mulai dari standar hingga keluarga.

Selain itu, lokasi kami yang strategis membuat Rahmat Guest House menjadi pilihan ideal bagi wisatawan maupun pelancong bisnis. Hanya beberapa menit dari pusat perbelanjaan dan kuliner terkenal, Anda dapat menikmati kenyamanan tanpa meninggalkan kepraktisan.',
        'tags' => ['Guest House', 'Medan', 'Penginapan', 'Fasilitas']
    ],
    2 => [
        'title' => 'Fasilitas Lengkap untuk Ketenangan Anda',
        'image' => 'images/gambar2.jpg',
        'date' => '19 Oktober 2025',
        'author' => 'Rahmat Wahyudin',
        'category' => 'Pelayanan',
        'content' => 'Rahmat Guest House tidak hanya menyediakan tempat menginap, tetapi juga pengalaman yang menenangkan. Tamu dapat menikmati area lounge bersantai, dapur umum, layanan laundry, serta parkir luas yang aman. Kami juga menyediakan layanan antar-jemput bandara untuk memberikan kemudahan bagi tamu yang datang dari luar kota.

Setiap layanan kami dijalankan oleh staf profesional yang ramah dan siap membantu selama 24 jam. Dengan lingkungan yang bersih dan pelayanan hangat, Rahmat Guest House menjamin setiap tamu merasa seperti di rumah sendiri.',
        'tags' => ['Fasilitas', 'Pelayanan', 'Kenyamanan', 'Medan']
    ],
    3 => [
        'title' => 'Suasana Homey dengan Pelayanan Terbaik',
        'image' => 'images/gambar3.jpg',
        'date' => '18 Oktober 2025',
        'author' => 'Rahmat Wahyudin',
        'category' => 'Pengalaman Tamu',
        'content' => 'Kami percaya bahwa kenyamanan dimulai dari pelayanan yang tulus. Di Rahmat Guest House, setiap tamu diperlakukan seperti keluarga. Kami menyediakan sarapan pagi khas Nusantara, layanan kebersihan harian, serta ruang terbuka hijau yang menambah kesejukan suasana.

Bagi tamu yang ingin menjelajahi kota Medan, kami juga menyediakan rekomendasi destinasi wisata dan kuliner lokal terbaik. Dengan kombinasi kenyamanan, keramahan, dan lokasi strategis, Rahmat Guest House menjadi pilihan tepat untuk tempat singgah Anda di Medan.',
        'tags' => ['Hospitality', 'Guest Experience', 'Layanan', 'Travel']
    ]
];

// Ambil ID artikel dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Cek apakah artikel ada
if (!isset($articles[$id])) {
    $id = 1; // Default ke artikel pertama jika tidak ditemukan
}

$article = $articles[$id];
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $article['title']; ?> - Rahmat Guest House</title>
    <link rel="stylesheet" href="css/modul3.css">
    <link rel="stylesheet" href="css/detail.css">
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

            <div id="content-wrapper">
                <article class="detail-article">
                    <div class="article-header">
                        <h1><?php echo $article['title']; ?></h1>
                        <div class="article-meta">
                            <span class="date">📅 <?php echo $article['date']; ?></span>
                            <span class="author">✍️ <?php echo $article['author']; ?></span>
                            <span class="category">📁 <?php echo $article['category']; ?></span>
                        </div>
                    </div>

                    <div class="article-image">
                        <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
                    </div>

                    <div class="article-content">
                        <?php 
                        $paragraphs = explode("\n\n", $article['content']);
                        foreach ($paragraphs as $paragraph) {
                            if (trim($paragraph) != '') {
                                echo "<p>" . nl2br(trim($paragraph)) . "</p>";
                            }
                        }
                        ?>
                    </div>

                    <div class="article-tags">
                        <strong>Tags:</strong>
                        <?php foreach ($article['tags'] as $tag): ?>
                            <span class="tag"><?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>

                    <div class="article-navigation">
                        <?php if ($id > 1): ?>
                            <a href="detail.php?id=<?php echo ($id - 1); ?>" class="nav-button prev">← Artikel Sebelumnya</a>
                        <?php endif; ?>
                        
                        <a href="index.php" class="nav-button home">Kembali ke Beranda</a>
                        
                        <?php if ($id < count($articles)): ?>
                            <a href="detail.php?id=<?php echo ($id + 1); ?>" class="nav-button next">Artikel Selanjutnya →</a>
                        <?php endif; ?>
                    </div>
                </article>

                <aside>
                    <div class="widget">
                        <h2>Artikel Lainnya</h2>
                        <ul>
                            <?php foreach ($articles as $aid => $art): ?>
                                <?php if ($aid != $id): ?>
                                    <li><a href="detail.php?id=<?php echo $aid; ?>"><?php echo $art['title']; ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="widget">
                        <h2>Berita Populer</h2>
                        <ul>
                            <li><a href="detail.php?id=1">Penginapan Nyaman di Tengah Kota Medan</a></li>
                            <li><a href="detail.php?id=2">Fasilitas Lengkap untuk Ketenangan Anda</a></li>
                            <li><a href="detail.php?id=3">Suasana Homey dengan Pelayanan Terbaik</a></li>
                        </ul>
                    </div>

                    <div class="widget">
                        <h2>Kategori</h2>
                        <ul>
                            <li><a href="#">Fasilitas & Layanan</a></li>
                            <li><a href="#">Pelayanan</a></li>
                            <li><a href="#">Pengalaman Tamu</a></li>
                        </ul>
                    </div>
                </aside>
            </div>

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
