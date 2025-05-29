<?php
// Konfigurasi Sekolah
$school_name = "SMA Islam Nurul Khalil";
$address = "Desa Bataan, Kec. Tenggarang, Kab. Bondowoso";
$phone = "(0332) 123456";
$email = "smanurulkhalil@example.com";
$whatsapp = "6281234567890";
$maps_embed = "https://maps.google.com/maps?q=Desa%20Bataan,%20Tenggarang,%20Bondowoso&t=&z=13&ie=UTF8&iwloc=&output=embed";

// Data Fitur Sekolah
$features = [
    [
        'icon' => 'fa-quran',
        'title' => 'Tahfidz Qur\'an',
        'desc' => 'Program tahfidz terstruktur dengan target hafalan 3 juz'
    ],
    [
        'icon' => 'fa-graduation-cap',
        'title' => 'Berprestasi',
        'desc' => 'Kurikulum unggulan berbasis agama dan sains'
    ],
    [
        'icon' => 'fa-users',
        'title' => 'Fasilitas Lengkap',
        'desc' => 'Laboratorium, perpustakaan, dan asrama tahfidz'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $school_name; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            line-height: 1.6;
            color: #333;
        }

        .header {
            background: #2c5f2d;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        .hero {
            padding: 2rem;
            background: #f8f9fa;
            text-align: center;
        }

        .section {
            padding: 2rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            padding: 1rem 0;
        }

        .card {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .map {
            width: 100%;
            height: 300px;
            background: #eee;
            border-radius: 8px;
            margin: 1rem 0;
        }

        .cta {
            background: #2c5f2d;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .footer {
            background: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background: #2c5f2d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 1rem 0;
        }

        @media (max-width: 768px) {
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <h1><?php echo $school_name; ?></h1>
        <p><?php echo $address; ?></p>
    </header>

    <section class="hero">
        <h2>Selamat Datang di Sekolah Penghafal Qur'an</h2>
        <p>Membentuk Generasi Qur'ani yang Berprestasi dan Berakhlak Mulia</p>
    </section>

    <section class="section">
        <h2>Keunggulan Kami</h2>
        <div class="features">
            <?php foreach ($features as $feature): ?>
                <div class="card">
                    <h3><i class="fas <?php echo $feature['icon']; ?>"></i> <?php echo $feature['title']; ?></h3>
                    <p><?php echo $feature['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section">
        <h2>Lokasi Sekolah</h2>
        <div class="map">
            <iframe src="<?php echo $maps_embed; ?>" 
                    width="100%" 
                    height="100%" 
                    frameborder="0" 
                    style="border:0; border-radius: 8px;" 
                    allowfullscreen>
            </iframe>
        </div>
    </section>

    <section class="cta">
        <h2>Daftar Sekarang!</h2>
        <p>Tahun Ajaran 2024/2025 sedang dibuka</p>
        <a href="https://wa.me/<?php echo $whatsapp; ?>" class="button">
            <i class="fab fa-whatsapp"></i> Hubungi Kami
        </a>
    </section>

    <footer class="footer">
        <p>© 2024 <?php echo $school_name; ?></p>
        <p>Kontak: <?php echo $phone; ?> | Email: <?php echo $email; ?></p>
    </footer>
</body>
</html>