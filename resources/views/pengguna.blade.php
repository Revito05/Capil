<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #8cb08f;
        }

        .container {
            margin-top: 20px;
        }

        .navbar {
            background-color: white;
            padding: 15px;
        }

        .table-container {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }

        .btn-add {
            background-color: lightgreen;
            color: white;
        }

        .btn-search {
            background-color: lightblue;
            color: white;
        }

        .btn-edit {
            background-color: lightblue;
            color: white;
        }

        .btn-delete {
            background-color: red;
            color: white;
        }

        .input-search {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid justify-content-center">
                <h2 class="text-center">Capil</h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('grafik') }}">Grafik</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Show Data
                            </a>
                            <ul class="dropdown-menu">
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
                    <a class="nav-link" href="#"><img src="profile-pic.png" alt="Profile" width="30"
                            class="rounded-circle"> Alpha</a>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="container">
            <h1 class="text-white">Pengguna</h1>
            <div class="d-flex mb-3">
                <button class="btn btn-add me-2">Tambah</button>
                <input type="text" class="form-control input-search" placeholder="Search">
                <button class="btn btn-search">Cari</button>
            </div>

            <div class="table-container">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Desa</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>33329892804804</td>
                            <td>0863173263736</td>
                            <td>bambang1</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>334287892477820</td>
                            <td>0873284273484</td>
                            <td>konoha912</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>338428427208202</td>
                            <td>0898329849232</td>
                            <td>wakanda632</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
