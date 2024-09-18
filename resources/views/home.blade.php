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

    <div class="container-fluid">
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

        <!-- Hero Section -->
        <section class="hero text-center bg-light py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <img src="{{ asset('image/p.png') }}" alt="Illustration" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-10 col-lg-6 text-md-start">
                        <h1>Kami Harap Dengan Layanan Dukcapil Ini Dapat Mempermudah Masyarakat</h1>
                        <p class="lead">Pelayanan kependudukan dan pencatatan sipil</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Services Section -->
    <section class="temp py-5">
        <div class="container-fluid">
            <div class="row text-center p-5">
                <ul style="list-style: none; padding: 0; display: flex; gap: 20px; overflow-x: auto;">
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo1.png') }}" alt="Gallery Image 1"
                            style="max-width: 200px; border-radius: 8px;">
                    </li>
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo2.png') }}" alt="Gallery Image 2"
                            style="max-width: 200px; border-radius: 8px;">
                    </li>
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo3.png') }}" alt="Gallery Image 3"
                            style="max-width: 200px; border-radius: 8px;">
                    </li>
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo4.png') }}" alt="Gallery Image 4"
                            style="max-width: 200px; border-radius: 8px;">
                    </li>
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo5.png') }}" alt="Gallery Image 5"
                            style="max-width: 200px; border-radius: 8px;">
                    </li>
                    <li style="text-align: center;">
                        <img src="{{ asset('image/logo6.png') }}" alt="Gallery Image 6"
                            style="max-width: 200px; border-radius: 8px;">
                    </li>
                </ul>

                <!-- New Text Section -->
                <div class="w-100 mt-4 mb-4">
                    <h4 class="text-center">Pelayanan Masyarakat Yang Prima Simbol Kinerja Pemerintahan Yang Sempurna</h4>
                </div>
                <!-- Service Cards -->
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                        <div class="card shadow-sm h-100"
                            style="width: autorem; height: autorem; display: flex; align-items: center; justify-content: center;">
                            <div class="row p-3">
                                <div class="col-3">
                                    <img src="{{ asset('image/people2.png') }}" class="rounded mx-auto d-block"
                                        alt="...">
                                </div>
                                <div class="col-9">
                                    <h3 class="card-title mt-2">Pelayanan</h3>
                                </div>
                                <p class="card-text">Fitur pelayanan yang diharapkan dapat melayani anda untuk menggunakan
                                    layanan pada Web Capil</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                        <div class="card shadow-sm h-100"
                            style="width: autorem; height: autorem; display: flex; align-items: center; justify-content: center;">
                            <div class="row p-3">
                                <div class="col-3">
                                    <img src="{{ asset('image/people2.png') }}" class="rounded mx-auto d-block"
                                        alt="...">
                                </div>
                                <div class="col-9">
                                    <h3 class="card-title mt-2">Alamat Lembaga</h3>
                                </div>
                                <p class="card-text">Pada fitur ini anda dapat melihat detail lokasi pada instansi dukcapil
                                    daerah konoha</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                        <div class="card shadow-sm h-100"
                            style="width: autorem; height: autorem; display: flex; align-items: center; justify-content: center;">
                            <div class="row p-3">
                                <div class="col-3">
                                    <img src="{{ asset('image/people2.png') }}" class="rounded mx-auto d-block"
                                        alt="...">
                                </div>
                                <div class="col-9">
                                    <h3 class="card-title mt-2">Profil Pemerintah</h3>
                                </div>
                                <p class="card-text">Pada fitur ini anda dapat melihat visi misi dan struktur organisasi
                                    dari instansi dukcapil daerah konoha</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Graphs Section -->
    <section class="graphs py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Grafik Penduduk</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            Pie Chart
                        </div>
                        <div class="card-body">
                            <div id="pie_chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Information Section -->
    <section class="info py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('image/logo8.png') }}" alt="Illustration" class="img-fluid">
            </div>
            <div class="col-md-6 text-md-start">
                <h1>Tentang Website</h1>
                <p class="lead">Merupakan salah satu Website Umum Sistem Pemerintah Nasional yang diperuntukan
                    bagi Pemerintah Tingkat Desa/Kelurahan dalam meningkatkan keterpaduan dan efisiensi sistem guna
                    mewujudkan Tata Kelola Pemerintahan yang bersih, efektif, transparan, dan akuntabel serta pelayanan
                    publik yang berkualitas dan terpercaya.</p>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news py-5 bg-light">
        <div class="container mt-5">
            <h2 class="text-center">Berita</h2>
            <p class="text-center">dibawah ini adalah berita terkini yang terjadi saat ini</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/desa.png') }}" class="card-img-top card-img-square"
                            alt="News Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Seorang nenek terlihat sangat dipermudah dengan menggunakan layanan
                                Capil</h5>
                            <a href="#" class="btn btn-primary">Read more →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/laptop.png') }}" class="card-img-top card-img-square"
                            alt="News Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Meningkatnya angka pengangguran di Indonesia</h5>
                            <a href="#" class="btn btn-primary">Read more →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/pasport.png') }}" class="card-img-top card-img-square"
                            alt="News Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Ketentuan Surat Keterangan Keimigrasian</h5>
                            <a href="#" class="btn btn-primary">Read more →</a>
                        </div>
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
