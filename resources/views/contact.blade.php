@extends('layouts.app')

@section('content')
    <style>
        /* General Styling */
        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            margin: 0;
        }

        /* Responsive Container */
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

        /* Hero Section */
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

        /* Contact Section */
        .contact-section {
            background: #567d46;
            /* Green background color */
            padding: 50px 20px;
            text-align: center;
            color: #fff;
        }

        .contact-section h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .contact-section p {
            font-size: 1.1em;
            margin-bottom: 20px;
        }

        .contact-form {
            background: #fff;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        button {
            background: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background: #0056b3;
        }

        /* Footer Section */
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

        /* Image List Styling */
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
    </style>

    <div class="container">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="{{ asset('image/p.png') }}" alt="Logo">
                <h2 class="text-green-700 font-bold text-2xl">CAPIL</h2>
            </div>
            <div class="navbar-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('informasi') }}">Informasi</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('grafik') }}">Grafik</a>
                <a href="{{ route('berita') }}">Berita</a>
                <a href="{{ route('visi') }}">visi</a>
            </div>
            <div class="navbar-buttons">
                <a href="#" class="login-btn">Login</a>
                <a href="#" class="signup-btn">Sign up</a>
            </div>
        </nav>
        <!-- Contact Section -->
        <section class="contact-section">
            <h1>Contact Us</h1>
            <p>Kami mempertimbangkan semua perubahan dan memberi Anda komponen yang Anda butuhkan untuk menciptakan sesuatu
                yang sedang terjadi.</p>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Masukkan nama anda">
                    <input type="email" name="email" placeholder="Masukkan email anda">
                </div>
                <input type="text" name="subject" placeholder="Tuliskan sebuah subjek">
                <textarea name="message" placeholder="Tulis pesan anda"></textarea>
                <button type="submit">Kirim</button>
            </form>
        </section>

        <!-- Footer Section -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- Contact Us & Social Links -->
                    <div class="col-md-4 text-center d-flex" style="justify-content: space-around;">
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
