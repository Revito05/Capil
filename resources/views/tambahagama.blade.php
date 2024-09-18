<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Agama</title>
    <style>
        body {
            background-color: #66a368; /* Background color for the form section */
        }
        .form-container {
            margin-top: 50px;
            text-align: center;
        }
        .btn-save {
            background-color: #74c085;
            color: black;
        }
        .btn-cancel {
            background-color: #70d3e5;
            color: black;
        }
        .navbar-brand h2 {
            display: inline-block;
            margin-left: 10px;
            font-size: 1.5rem;
            color: #7bb168;
        }
        .navbar {
            background-color: #f5f5f5;
            padding: 15px;
        }
        .dropdown-menu {
            min-width: 150px;
        }
        .user-info {
            display: flex;
            align-items: center;
        }
        .user-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/p.png') }}" alt="Logo" width="50">
            <h2 class="text-green-700 font-bold">CAPIL</h2>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Grafik</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Show Data
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Data Penduduk</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Pusat
                    </a>

                    <ul class="dropdown-menu">
                        <li class="d-flex"><a class="dropdown-item col" href="#">Agama</a><a
                                class="dropdown-item col" href="#">Pekerjaan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="d-flex"><a class="dropdown-item col" href="#">Desa</a><a
                                class="dropdown-item col" href="#">Pengguna</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="d-flex"><a class="dropdown-item col" href="#">Dokumen</a><a
                                class="dropdown-item col" href="#">Pendidikan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="d-flex"><a class="dropdown-item col" href="#">Jenis Kelamin</a><a
                                class="dropdown-item col" href="#">Penduduk</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="d-flex"><a class="dropdown-item col" href="#">Kartu Keluarga</a><a
                                class="dropdown-item col" href="#">Roles</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="d-flex"><a class="dropdown-item col" href="#">Kewarganegaraan</a><a
                                class="dropdown-item col" href="#">Status</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="d-flex"><a class="dropdown-item col" href="#">Layanan</a><a
                                class="dropdown-item col" href="#">Status Perkawinan</a></li>
                    </ul>
                </li>
            </ul>
            
            <div class="user-info">
                <span>Alpha</span>
                <img src="{{ asset('image/p.png') }}" alt="Logo" width="50">
            </div>
        </div>
    </div>
</nav>

<!-- Form Section -->
<div class="container form-container">
    <h1 class="text-white mb-4">Tambah Agama</h1>
    <div class="card">

    <form>
        <div class="mb-3">
            <input type="text" class="form-control" id="agamaInput" placeholder="Nama agama">
        </div>
        <div class="d-flex justify-content-center gap-3">
            <button type="submit" class="btn btn-save btn-lg px-4">Simpan</button>
            <button type="button" class="btn btn-cancel btn-lg px-4">Batal</button>
        </div>
    </form>
</div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
