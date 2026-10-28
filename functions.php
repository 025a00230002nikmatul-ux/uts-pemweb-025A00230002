<?php
declare(strict_types=1);

// Fungsi untuk mengamankan teks yang ditampilkan di website
function e(string $teks): string
{
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}

// Fungsi untuk mengubah angka menjadi format rupiah
function formatRupiah(int $harga): string
{
    return 'Rp' . number_format($harga, 0, ',', '.');
}

// Fungsi untuk menghitung total seluruh stok menu
function hitungTotalStok(array $daftarMenu): int
{
    $total = 0;

    foreach ($daftarMenu as $menu) {
        $total += $menu['stok'];
    }

    return $total;
}

// Fungsi untuk menghitung nilai seluruh stok menu
function hitungNilaiStok(array $daftarMenu): int
{
    $total = 0;

    foreach ($daftarMenu as $menu) {
        $total += $menu['harga'] * $menu['stok'];
    }

    return $total;
}
