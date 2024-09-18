@extends('layouts.app')

@section('content')
    <style>
        .container {
            width: 100%;
            margin: 0;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        @media (min-width: 1400px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1536px;
            }
        }

        .image-list-horizontal {
            display: flex;
            overflow-x: auto;
            padding: 20px 0;
        }

        .image-list-horizontal-item {
            flex: 0 0 auto;
            margin-right: 15px;
            text-align: center;
        }

        .image-list-horizontal-item img {
            max-width: 200px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .temp {
            background-color: #e0f2f1;
        }

        /* General Styling */
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
        }

        .navbar-logo {
            display: flex;
            align-items: center;
        }

        .navbar-logo img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar-links a {
            margin-left: 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .navbar-buttons a {
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
        }

        .login-btn {
            background-color: #4CAF50;
            color: white;
        }

        .signup-btn {
            background-color: #007BFF;
            color: white;
        }

        .hero {
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .hero p {
            font-size: 1.25rem;
            color: #555;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 40px 0;
        }

        .footer a {
            color: #bdc3c7;
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }

        .footer h5 {
            font-size: 16px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer .social-icons {
            margin-bottom: 20px;
        }

        .footer .social-icons a {
            margin: 0 10px;
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #34495e;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer .social-icons a:hover {
            background-color: #1abc9c;
        }

        .footer input[type="email"] {
            padding: 10px;
            border: none;
            border-radius: 4px;
            width: 80%;
        }

        .footer .email-btn:hover {
            background-color: #16a085;
        }

        li {
            list-style: none;
        }

        /* Style untuk mobile */
        @media (max-width: 768px) {
            .navbar-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 0;
                background-color: #f8f9fa;
                width: 100%;
                text-align: center;
            }

            .navbar-links.active {
                display: flex;
            }

            .navbar-buttons {
                display: none;
            }

            /* Style hamburger icon */
            .hamburger {
                display: block;
                cursor: pointer;
                width: 30px;
                height: 30px;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }

            .hamburger div {
                width: 100%;
                height: 3px;
                background-color: #333;
            }

            .card-img-square {
                width: 100%;
                height: 300px;
                object-fit: cover;
            }

            .card {
                height: 100%;
            }

            .card-img-square {
                width: 100%;
                height: 300px;
                object-fit: cover;
            }

            .card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100%;
            }

            .card-title {
                margin-bottom: 20px;
            }

            .btn-primary {
                margin-top: auto;
            }
        }
    </style>

<div class="container-fluid p-0">

        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="{{ asset('image/p.png') }}" alt="Logo">
                <h2 class="text-green-700 font-bold text-2xl">CAPIL</h2>
            </div>

            <!-- Hamburger icon for mobile -->
            <div class="hamburger" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="navbar-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('informasi') }}">Informasi</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('grafik') }}">Grafik</a>
                <a href="{{ route('pembuatan') }}">Pembutan</a>
                <a href="{{ route('berita') }}">Berita</a>
                <a href="{{ route('visi') }}">visi</a>
            </div>

            <div class="navbar-buttons">
                <a href="#" class="login-btn">Login</a>
                <a href="#" class="signup-btn">Sign up</a>
            </div>
        </nav>

        <script>
            // Toggle menu for mobile
            function toggleMenu() {
                const navbarLinks = document.querySelector('.navbar-links');
                navbarLinks.classList.toggle('active');
            }
        </script>


    </div>

    <!-- Services Section -->
    <section class="temp py-5">
        <div class="container-fluid">
            <div class="w-100 mt-4 mb-4">
                <h4 class="text-center">Pembuatan E-KTP</h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm p-4">
                        <form action="{{ route('pembuatan') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Nama</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nama"
                                    required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="no_kk">No. Kartu Keluarga</label>
                                <input type="text" id="no_kk" name="no_kk" class="form-control"
                                    placeholder="Contoh: 63523882xxxxx" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nik">NIK </label>
                                <input type="text" id="nik" name="nik" class="form-control"
                                    placeholder="Contoh: 337xxxxxxxxxxx" required>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="birth_date">Tanggal Lahir</label>
                                    <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="birth_place">Tempat Lahir</label>
                                    <input type="text" id="birth_place" name="birth_place" class="form-control"
                                        placeholder="Tempat Lahir" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="job">Pekerjaan</label>
                                <input type="text" id="job" name="job" class="form-control"
                                    placeholder="Pekerjaan Sesuai KK" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" id="address" name="address" class="form-control"
                                    placeholder="Alamat Sesuai Kartu Keluarga" required>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="kel">Kel/Desa</label>
                                    <input type="text" id="kel" name="kel" class="form-control"
                                        placeholder="Kel" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="rt">RT</label>
                                    <input type="text" id="rt" name="rt" class="form-control"
                                        placeholder="RT" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="rw">RW</label>
                                    <input type="text" id="rw" name="rw" class="form-control"
                                        placeholder="RW" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" id="kecamatan" name="kecamatan" class="form-control"
                                    placeholder="Kecamatan" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="status">Status Pernikahan</label>
                                <select id="status" name="status" class="form-control" required>
                                    <option value="" disabled selected>-- Status Pernikahan --</option>
                                    <option value="belum_menikah">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                    <option value="cerai">Cerai</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="gender">Jenis Kelamin</label>
                                <select id="gender" name="gender" class="form-control" required>
                                    <option value="laki_laki">Laki - Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="agama">Agama</label>
                                <select id="agama" name="agama" class="form-control" required>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="golongan_darah">Golongan Darah</label>
                                <select id="golongan_darah" name="golongan_darah" class="form-control" required>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="ab">AB</option>
                                    <option value="o">O</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                <select id="kewarganegaraan" name="kewarganegaraan" class="form-control" required>
                                    <option value="wni">WNI</option>
                                    <option value="wna">WNA</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-danger">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Contact Us & Social Links -->
                {{-- <div class="col-4 justify-content-center"> --}}
                <h5>Contact Us</h5>
                {{-- </div> --}}
                <div class="col-md-4 text-center d-flex "style="justify-content: space-around;">
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo1.png') }}" alt="Gallery Image 1"
                            style="max-width: 40px; border-radius: 50%;">
                    </li>
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo2.png') }}" alt="Gallery Image 2"
                            style="max-width: 40px; border-radius: 50%;">
                    </li>
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo3.png') }}" alt="Gallery Image 3"
                            style="max-width: 40px; border-radius: 50%;">
                    </li>
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo4.png') }}" alt="Gallery Image 4"
                            style="max-width: 40px; border-radius: 50%;">
                    </li>
                </div>

                <!-- Company Links -->
                <div class="col-md-2">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>

                <!-- Support Links -->
                <div class="col-md-2">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Legal</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Status</a></li>
                    </ul>
                </div>

                <!-- Stay Up to Date -->
                <div class="col-md-4">
                    <h5>Stay up to date</h5>
                    <form action="#">
                        <div class="d-flex">
                            <input type="email" placeholder="Your email address">
                            <a href="#" class="email-btn"><i class="fas fa-paper-plane"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    </div>
@endsection
