<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SISANJAW - Sistem Informasi Pemesanan WarJAW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 40px;
            line-height: 1.6;
            background-color: #f9fafb;
            color: #1f2937;
        }
        h1, h2, h3 {
            color: #111827;
        }
        h1 {
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 10px;
        }
        ul {
            margin-left: 20px;
        }
        code {
            background-color: #e5e7eb;
            padding: 3px 6px;
            border-radius: 4px;
        }
        pre {
            background-color: #111827;
            color: #f9fafb;
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto;
        }
        .section {
            margin-bottom: 40px;
        }
        .footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>

    <h1>SISANJAW</h1>
    <h3>Sistem Informasi Pemesanan WarJAW</h3>
    <p><strong>Fakultas Teknik Universitas Sebelas Maret</strong></p>

    <div class="section">
        <h2>Deskripsi</h2>
        <p>
            SISANJAW (Sistem Informasi Pemesanan WarJAW) merupakan aplikasi berbasis web 
            yang dikembangkan untuk mendukung proses pemesanan makanan di WarJAW (Warung Jawa), 
            yaitu kantin Fakultas Teknik Universitas Sebelas Maret.
        </p>
        <p>
            Sistem ini bertujuan untuk mempermudah proses pemesanan, mengurangi antrean, 
            serta membantu pengelolaan data pesanan dan transaksi secara terstruktur.
        </p>
    </div>

    <div class="section">
        <h2>Fitur Utama</h2>
        <ul>
            <li>Autentikasi pengguna (Login & Register)</li>
            <li>Manajemen data menu makanan</li>
            <li>Pemesanan makanan secara online</li>
            <li>Manajemen pesanan</li>
            <li>Manajemen transaksi</li>
            <li>Dashboard admin</li>
        </ul>
    </div>

    <div class="section">
        <h2>Teknologi yang Digunakan</h2>
        <ul>
            <li>Laravel</li>
            <li>MySQL</li>
            <li>Blade Template Engine</li>
            <li>Tailwind CSS</li>
            <li>Vite</li>
        </ul>
    </div>

    <div class="section">
        <h2>Cara Menjalankan Project</h2>

        <h3>1. Clone Repository</h3>
        <pre><code>git clone https://github.com/username/sisanjaw.git
cd sisanjaw</code></pre>

        <h3>2. Install Dependency</h3>
        <pre><code>composer install
npm install</code></pre>

        <h3>3. Konfigurasi Environment</h3>
        <pre><code>cp .env.example .env</code></pre>
        <p>Sesuaikan konfigurasi database pada file <code>.env</code>.</p>

        <h3>4. Generate Application Key</h3>
        <pre><code>php artisan key:generate</code></pre>

        <h3>5. Migrasi Database</h3>
        <pre><code>php artisan migrate</code></pre>

        <h3>6. Jalankan Server</h3>
        <pre><code>php artisan serve
npm run dev</code></pre>

        <p>Akses melalui: <code>http://127.0.0.1:8000</code></p>
    </div>

    <div class="footer">
        <h2>Developer</h2>
        <p>
            Abimanyu Putra<br>
            Teknik Elektro – Universitas Sebelas Maret
        </p>
    </div>

</body>
</html>
