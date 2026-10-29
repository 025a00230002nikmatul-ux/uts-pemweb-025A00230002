<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siomay Kuy - Profil Usaha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Siomay Kuy</h1>
        <p>Siomay Enak, Harga Bersahabat!</p>
    </header>

    <nav>
        <a href="index.php" class="active">Profil</a>
        <a href="katalog.php">Katalog Menu</a>
    </nav>

    <main>
        <section class="profil">
            <h2>Selamat Datang di Siomay Kuy</h2>

            <img
                src="assets/siomaykuy.png"
                alt="Hidangan siomay dengan saus kacang"
                class="gambar-profil"
            >

            <p>
                Siomay Kuy adalah usaha kuliner yang menyediakan
                berbagai pilihan siomay dengan rasa lezat dan
                harga yang terjangkau.
            </p>

            <p>
                Kami menyediakan berbagai varian menu yang cocok
                dinikmati bersama teman maupun keluarga.
            </p>

            <a href="katalog.php" class="tombol">
                Lihat Katalog Menu
            </a>
        </section>

        <section class="keunggulan">
            <h2>Kenapa Memilih Siomay Kuy?</h2>

            <div class="daftar-keunggulan">
                <article>
                    <h3>Rasa Lezat</h3>
                    <p>Siomay nikmat dengan saus kacang yang gurih.</p>
                </article>

                <article>
                    <h3>Harga Terjangkau</h3>
                    <p>Pilihan menu dengan harga yang bersahabat.</p>
                </article>

                <article>
                    <h3>Banyak Pilihan</h3>
                    <p>Tersedia berbagai varian menu siomay.</p>
                </article>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Siomay Kuy | Proyek UTS Pemrograman Web</p>
    </footer>

</body>
</html>
