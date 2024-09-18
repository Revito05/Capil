<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agama </title>
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
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                    <img src="{{ asset('image/p.png') }}" alt="Logo" width="50">
                    <h2 class="text-green-700 font-bold">CAPIL</h4>
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


        {{-- <!-- Navbar -->
        {{-- <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('image/p.png') }}" alt="Logo" width="50">
                <h2 class="text-green-700 font-bold text-2xl">CAPIL</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Grafik</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Show Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Data Penduduk</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="nav-link" href="#"><img src="profile-pic.png" alt="Profile" width="30"
                        class="rounded-circle"> Alpha</a>
                </ul>
            </div>
        </div>
    </nav> --}}

        <!-- Content -->
        <div class="container">
            <h1 class="text-white">Agama</h1>
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
                            <th>Agama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kristen Protestan</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Katolik</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Islam</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Hindu</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Budha</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Konghucu</td>
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
