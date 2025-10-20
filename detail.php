<?php
// Data artikel dalam array
$articles = [
    1 => [
        'title' => 'Tren Alat Tulis Modern 2025',
        'image' => 'images/gambar1.jpg',
        'date' => '20 Oktober 2025',
        'author' => 'Bayu Azi Ramadan',
        'category' => 'Inovasi Produk',
        'content' => 'Perkembangan dunia alat tulis kini tak hanya berfokus pada fungsi, tetapi juga estetika dan kenyamanan. Produk seperti pena ergonomis, buku catatan ramah lingkungan, dan highlighter pastel menjadi favorit di kalangan pelajar dan profesional muda. Stationery Bayu hadir menghadirkan berbagai produk berkualitas yang dirancang untuk menunjang efisiensi belajar dan kerja sehari-hari.

Selain itu, tren penggunaan alat tulis hybrid semakin meningkat, seperti pena digital dan notebook pintar. Kombinasi antara teknologi dan desain elegan ini menjadi identitas baru bagi industri stationery modern di Indonesia.',
        'tags' => ['Stationery', 'Tren 2025', 'Alat Tulis', 'Inovasi']
    ],
    2 => [
        'title' => 'Kreasi DIY dengan Alat Tulis Unik',
        'image' => 'images/gambar2.jpg',
        'date' => '19 Oktober 2025',
        'author' => 'Bayu Azi Ramadan',
        'category' => 'Kreativitas',
        'content' => 'Kegiatan DIY (Do It Yourself) menjadi cara seru untuk menyalurkan ide kreatif menggunakan alat tulis yang unik. Dengan memanfaatkan washi tape, spidol brush, dan sticky notes warna-warni, pengguna dapat menciptakan jurnal, scrapbook, hingga kartu ucapan personal dengan gaya khas mereka.

Stationery Bayu menyediakan berbagai paket DIY lengkap untuk pelajar, mahasiswa, dan pekerja kreatif yang ingin berekspresi dengan mudah. Setiap produk kami dirancang agar aman, ramah lingkungan, dan menyenangkan untuk digunakan.',
        'tags' => ['DIY', 'Stationery', 'Kreatif', 'Journaling']
    ],
    3 => [
        'title' => 'Transformasi Digital dalam Dunia Stationery',
        'image' => 'images/gambar3.jpg',
        'date' => '18 Oktober 2025',
        'author' => 'Bayu Azi Ramadan',
        'category' => 'Teknologi',
        'content' => 'Era digital turut mengubah cara kita menulis dan mencatat. Smart pen dan tablet tulis menjadi inovasi baru yang menggabungkan kenyamanan menulis manual dengan kepraktisan digital. Dengan teknologi ini, pengguna dapat menyimpan catatan secara otomatis ke cloud, membuat proses belajar dan kerja menjadi lebih efisien.

Stationery Bayu mendukung transformasi digital ini melalui produk-produk hybrid yang memadukan desain klasik dan fitur modern, agar pengalaman menulis tetap alami sekaligus terintegrasi dengan dunia digital.',
        'tags' => ['Smart Pen', 'Teknologi', 'Digitalisasi', 'Hybrid Stationery']
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
    <title><?php echo $article['title']; ?> - Stationery Bayu</title>
    <link rel="stylesheet" href="css/modul3.css">
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
    <div id="wrapper">
        <div id="container">
            <header>
                <h1>STATIONERY BAYU</h1>
                <p>Inovasi alat tulis untuk produktivitas dan kreativitas Anda</p>
            </header>
            
            <nav>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="#">Katalog</a></li>
                    <li><a href="#">Profil</a>
                        <ul class="submenu">
                            <li><a href="#">Kontak Kami</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="lihat-produk">LIHAT PRODUK</div>
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
                            <li><a href="detail.php?id=1">Tren Alat Tulis Modern 2025</a></li>
                            <li><a href="detail.php?id=2">Kreasi DIY dengan Alat Tulis Unik</a></li>
                            <li><a href="detail.php?id=3">Transformasi Digital dalam Dunia Stationery</a></li>
                        </ul>
                    </div>

                    <div class="widget">
                        <h2>Kategori</h2>
                        <ul>
                            <li><a href="#">Inovasi Produk</a></li>
                            <li><a href="#">Kreativitas</a></li>
                            <li><a href="#">Teknologi</a></li>
                        </ul>
                    </div>
                </aside>
            </div>

            <footer>
                <div class="column">
                    <h2>LAYANAN</h2>
                    <p>Pemesanan Online<br>
                    Custom Alat Tulis<br>
                    Pengiriman Cepat<br>
                    Diskon Pelajar<br>
                    Konsultasi Produk<br>
                    Program Reseller<br>
                    Layanan Garansi<br>
                    Dukungan Teknis</p>
                </div>
                <div class="column">
                    <h2>Jam Operasional</h2>
                    <p>Senin - Jumat : 08.00 - 17.00 WIB<br>
                    Sabtu : 09.00 - 15.00 WIB<br>
                    Email : <a href="#">support@stationerybayu.com</a></p>
                </div>
                <div class="column">
                    <h2>Kantor Pusat</h2>
                    <p>Jl. Medan Johor No.45, Medan<br>
                    Tel : +62-813-4567-8900<br>
                    Email : info@stationerybayu.com</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
