# Siomay Kuy — Katalog Menu UMKM

## 1. Identitas Mahasiswa

- **Nama:** Nikmatul Khoiriyah
- **NIM:** 025A00230002
- **Kelas:** A2-3A
- **Mata Kuliah:** Pemrograman Web

## 2. Deskripsi Proyek

Siomay Kuy merupakan website sederhana untuk memperkenalkan usaha kuliner siomay. Website ini memiliki halaman profil dan halaman katalog yang menampilkan daftar menu, kategori, harga, serta stok.

Website ini dibuat menggunakan PHP, HTML, dan CSS. Data menu disimpan dalam array PHP sehingga informasi dapat ditampilkan secara dinamis tanpa menggunakan database.

## 3. Teknologi yang Digunakan

- HTML
- CSS
- PHP
- Git dan GitHub

## 4. Struktur File

- `index.php` — Menampilkan halaman profil Siomay Kuy.
- `katalog.php` — Menampilkan daftar menu dan ringkasan stok.
- `data.php` — Menyimpan data menu dalam array PHP.
- `functions.php` — Berisi fungsi-fungsi yang digunakan dalam website.
- `style.css` — Mengatur tampilan website.
- `assets/` — Menyimpan gambar website.
- `screenshots/` — Menyimpan screenshot halaman website.
- `.gitignore` — Mengatur file yang tidak perlu dilacak oleh Git.

## 5. Fitur Website

1. Menampilkan profil usaha Siomay Kuy.
2. Menampilkan delapan jenis menu.
3. Menampilkan kategori, harga, dan stok menu.
4. Menampilkan status ketersediaan menu.
5. Menampilkan ringkasan jumlah menu, total stok, nilai stok, dan harga tertinggi.
6. Memiliki tampilan website yang diatur menggunakan CSS.

## 6. Fungsi PHP yang Digunakan

- `e()` — Mengamankan teks yang ditampilkan pada website.
- `formatRupiah()` — Memformat angka menjadi mata uang rupiah.
- `hitungTotalStok()` — Menghitung total stok menu.
- `hitungNilaiStok()` — Menghitung nilai seluruh stok menu.

## 7. Fungsi Bawaan PHP

- `count()` — Menghitung jumlah data.
- `array_filter()` — Menyaring data menu yang masih tersedia.
- `array_column()` — Mengambil data harga dari array menu.
- `max()` — Mencari harga tertinggi.

Selain itu, `foreach` digunakan untuk menampilkan data menu, sedangkan `if` dan `else` digunakan untuk menentukan status ketersediaan menu.

## 8. Cara Menjalankan Website

1. Buka aplikasi Laragon.
2. Klik **Start All**.
3. Pastikan folder proyek berada di dalam folder `www` Laragon.
4. Buka browser.
5. Masukkan alamat berikut:

   `http://localhost/uts-pemweb-025A00230002/`

6. Klik menu **Katalog Menu** untuk melihat daftar menu dan ringkasan stok.

## 9. Screenshot Website

Screenshot website disimpan dalam folder `screenshots/`.

- `screenshots/profil.png` — Screenshot halaman profil.
- `screenshots/katalog.png` — Screenshot halaman katalog menu.

## 10. Sumber dan Bantuan

- Dokumentasi PHP: https://www.php.net/docs.php
- Dokumentasi HTML: https://developer.mozilla.org/en-US/docs/Web/HTML
- Dokumentasi CSS: https://developer.mozilla.org/en-US/docs/Web/CSS

**Bantuan AI:** ChatGPT digunakan sebagai alat bantu untuk memahami materi, menyusun kode, dan menyusun dokumentasi proyek. Kode dan hasil akhir diperiksa serta disesuaikan selama proses pengerjaan.

---

Proyek ini dibuat untuk memenuhi tugas Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web.