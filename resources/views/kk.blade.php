<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Keluarga</title>
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


        <!-- Content -->
        <div class="container">
            <h1 class="text-white">Kartu Keluarga</h1>
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
                            <th>Nomer KK</th>
                            <th>Alamat</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Kode Pos</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>33878327832238</td>
                            <td>Jl.Kemayoran no.76</td>
                            <td>012</td>
                            <td>006</td>
                            <td>52623</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>33873178237383</td>
                            <td>Jl.Wakanda no.11</td>
                            <td>002</td>
                            <td>038</td>
                            <td>52732</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>33275723672723</td>
                            <td>Jl.Konoha no.55</td>
                            <td>005</td>
                            <td>037</td>
                            <td>52426</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>33573263763898</td>
                            <td>Jl.Merak no.8</td>
                            <td>016</td>
                            <td>001</td>
                            <td>52623</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>333272387328732</td>
                            <td>Jl.Merpati no.29</td>
                            <td>001</td>
                            <td>009</td>
                            <td>52734</td>
                            <td>
                                <button class="btn btn-edit btn-sm">Edit</button>
                                <button class="btn btn-delete btn-sm">Delete</button>
                            </td>
                        </tr>
                        < </tbody>
                </table>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
