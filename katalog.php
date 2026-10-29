<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';

// Menghitung ringkasan menu
$totalMenu = count($daftarMenu);
$totalStok = hitungTotalStok($daftarMenu);
$nilaiStok = hitungNilaiStok($daftarMenu);

// Mengambil menu yang stoknya masih tersedia
$menuTersedia = array_filter(
    $daftarMenu,
    fn(array $menu): bool => $menu['stok'] > 0
);

$jumlahTersedia = count($menuTersedia);

// Mengambil semua harga menu
$daftarHarga = array_column($daftarMenu, 'harga');

// Menghitung harga tertinggi
$hargaTertinggi = max($daftarHarga);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Menu - Siomay Kuy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Siomay Kuy</h1>
        <p>Siomay Enak, Harga Bersahabat!</p>
    </header>

    <nav>
        <a href="index.php">Profil</a>
        <a href="katalog.php" class="active">Katalog Menu</a>
    </nav>

    <main>
        <section class="katalog">
            <h2>Katalog Menu Siomay</h2>
            <p>Pilih menu favoritmu dari Siomay Kuy!</p>

            <div class="daftar-menu">
                <?php foreach ($daftarMenu as $menu): ?>
                    <article class="kartu-menu">
                        <h3><?= e($menu['nama']) ?></h3>

                        <p>
                            Kategori:
                            <?= e($menu['kategori']) ?>
                        </p>

                        <p class="harga">
                            <?= formatRupiah($menu['harga']) ?>
                        </p>

                        <p>
                            Stok:
                            <?= e((string) $menu['stok']) ?>
                        </p>

                        <?php if ($menu['stok'] > 0): ?>
                            <span class="status-tersedia">
                                Tersedia
                            </span>
                        <?php else: ?>
                            <span class="status-habis">
                                Stok Habis
                            </span>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="ringkasan">
                <h2>Ringkasan Menu</h2>

                <p>
                    Total jenis menu:
                    <strong><?= $totalMenu ?> menu</strong>
                </p>

                <p>
                    Menu tersedia:
                    <strong><?= $jumlahTersedia ?> menu</strong>
                </p>

                <p>
                    Total seluruh stok:
                    <strong><?= $totalStok ?> item</strong>
                </p>

                <p>
                    Total nilai stok:
                    <strong><?= formatRupiah($nilaiStok) ?></strong>
                </p>

                <p>
                     Harga menu tertinggi:
                    <strong><?= formatRupiah($hargaTertinggi) ?></strong>
                </p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Siomay Kuy | Proyek UTS Pemrograman Web</p>
    </footer>

</body>
</html>
