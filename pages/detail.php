<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Film - Panem Cinema</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <h2>Panem Cinema</h2>
        </div>
        <div class="nav-links">
            <a href="../index.php">Beranda</a>
            <a href="../admin/dashboard.php">Dashboard</a>
            <a href="../auth/login.php">Login</a>
        </div>
    </nav>

    <div class="hero-detail hero-banner-main" style="background-image: linear-gradient(to top, #0b0f19, rgba(11, 15, 25, 0.4)), url('../assets/img/bannet_cf.jpg');">
        <div style="z-index: 10;">
            <span style="background: #ea580c; padding: 2px 8px; border-radius: 4px; font-size: 0.8rem;">AKSI</span>
            <span
                style="background: #374151; padding: 2px 8px; border-radius: 4px; font-size: 0.8rem; margin-left: 5px;">2014</span>
            <h1 style="font-size: 3rem; margin: 10px 0;">The Hunger Games: Mockingjay Part 1</h1>
            <p style="color: #f97316;">★★★★☆ <span style="color: #94a3b8;">RATA-RATA RATING: 4.5/5</span></p>
            <p style="max-width: 700px; margin-top: 15px;">Katniss Everdeen dengan enggan menjadi simbol pemberontakan
                massal melawan Capitol yang otokratis. Saat perang yang akan menentukan nasib Panem meningkat, Katniss
                harus memutuskan siapa yang bisa dia percayai.</p>
        </div>
    </div>

    <div style="padding: 50px;">
        <h3 style="border-left: 3px solid #ea580c; padding-left: 10px; margin-bottom: 20px;">Pemeran Pemberontakan</h3>
        <div class="cast-grid">
            <div class="cast-card">
                <img src="../assets/img/katnis.png" alt="Katniss Everdeen" class="cast-photo">
                <h5>Katniss Everdeen</h5>
                <p class="text-muted" style="font-size: 0.8rem;">Sang Mockingjay</p>
            </div>
            <div class="cast-card">
                <img src="../assets/img/peeta.png" alt="Peeta Mellark" class="cast-photo">
                <h5>Peeta Mellark</h5>
                <p class="text-muted" style="font-size: 0.8rem;">Tawanan Capitol</p>
            </div>
            <div class="cast-card">
                <img src="../assets/img/President_Snow.webp" alt="President Snow" class="cast-photo">
                <h5>President Snow</h5>
                <p class="text-muted" style="font-size: 0.8rem;">Antagonis</p>
            </div>
        </div>
    </div>

    <div style="padding: 0 50px 50px 50px;">
        <div class="review-header-section">
            <h3 style="border-left: 3px solid #ea580c; padding-left: 10px;">Ulasan Arsip</h3>
            <a href="#" class="text-orange" style="font-size: 0.85rem; font-weight: bold; letter-spacing: 1px; text-transform: uppercase;">Tulis Ulasan</a>
        </div>

        <div class="reviews-list">
            <div class="review-card">
                <div class="review-user-info">
                    <div class="reviewer-profile">
                        <div class="avatar bg-orange">DC</div>
                        <div>
                            <h5 style="margin: 0;">District_Citizen_12</h5>
                            <p class="text-muted" style="font-size: 0.8rem; margin: 0;">2 hari yang lalu</p>
                        </div>
                    </div>
                    <div class="stars">★★★★★</div>
                </div>
                <p style="font-size: 0.95rem; color: #cbd5e1;">Kesimpulan yang memukau secara visual, berhasil menangkap suasana suram sekaligus harapan dari sebuah pemberontakan dengan sempurna. Penampilan aktornya sangat menonjol.</p>
            </div>

            <div class="review-card">
                <div class="review-user-info">
                    <div class="reviewer-profile">
                        <div class="avatar bg-gray">CA</div>
                        <div>
                            <h5 style="margin: 0;">Capitol_Archivist</h5>
                            <p class="text-muted" style="font-size: 0.8rem; margin: 0;">1 minggu yang lalu</p>
                        </div>
                    </div>
                    <div class="stars">★★★★☆</div>
                </div>
                <p style="font-size: 0.95rem; color: #cbd5e1;">Alurnya sedikit melambat dibandingkan paruh pertama, namun intrik politik dan perkembangan karakternya membuat arsip ini wajib ditonton bagi para pelajar sejarah Panem.</p>
            </div>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>

