<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}styles.css">
</head>
<body>
<div class="page-wrapper">
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul class="menu">
                <li>
                    <a href="#">Produk</a>
                    <ul class="submenu">
                        <li><a href="#">Kategori</a></li>
                        <li><a href="#">Daftar Produk</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pengguna</a>
                    <ul class="submenu">
                        <li><a href="#">Grup Pengguna</a></li>
                        <li><a href="#">Daftar Pengguna</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <h1>Selamat Datang di Dashboard</h1>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
    <script src="{{ asset('/') }}script.js"></script>
</body>
</html>