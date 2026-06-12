<?php
// Memulai sesi hanya jika belum dimulai sebelumnya
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar">
    <div class="logo">
        <a href="/index.php" style="color: inherit; text-decoration: none;">
            <h2>Panem Cinema</h2>
        </a>
    </div>
    <div class="nav-links">
        <a href="/index.php">Beranda</a>
        
        <?php if (isset($_SESSION['user_id'])): ?>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <a href="/admin/dashboard.php">Dashboard</a>
            <?php endif; ?>
            
            <span style="color: #94a3b8; margin-left: 20px;">
                Halo, <strong class="text-orange"><?= htmlspecialchars($_SESSION['username']); ?></strong>
            </span>
            <a href="/auth/logout.php" style="color: #ef4444; margin-left: 10px;">Keluar</a>
            
        <?php else: ?>
            <a href="/auth/login.php">Masuk</a>
            <a href="/auth/register.php" class="btn btn-outline" style="padding: 5px 15px; margin-left: 10px;">Daftar</a>
        <?php endif; ?>
    </div>
</nav>