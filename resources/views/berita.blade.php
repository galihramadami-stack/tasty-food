<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food | Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
        }

        .hero-news {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1490818387583-1baba5e638af?q=80&w=1500');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            color: white;
        }

        .card-news {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
            height: 100%;
            overflow: hidden;
        }

        .card-news:hover {
            transform: translateY(-10px);
        }

        .card-news img {
            height: 200px;
            object-fit: cover;
        }

        .btn-black {
            background: #000;
            color: #fff;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 12px;
            border: none;
        }

        .link-selengkapnya {
            color: #f39c12;
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            cursor: pointer;
        }

        /* Style Footer Modern */
        .footer-link {
            color: #6c757d;
            text-decoration: none;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .footer-link:hover {
            color: #fff;
            padding-left: 5px;
        }

        .social-box {
            width: 40px;
            height: 40px;
            background: #222;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
            transition: 0.3s;
        }

        .social-box:hover {
            background: #fff;
            color: #000;
            transform: translateY(-3px);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100 mt-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#">TASTY FOOD</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/tentang') }}">TENTANG</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ url('/berita') }}">BERITA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/galeri') }}">GALERI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">KONTAK</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="hero-news">
        <div class="container">
            <h1 class="display-3 fw-bold">BERITA KAMI</h1>
        </div>
    </header>

    <section class="py-5 my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=800"
                        class="img-fluid rounded-5 shadow-lg" alt="Main News">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mt-4">APA SAJA MAKANAN KHAS NUSANTARA?</h2>
                    <p class="text-muted my-4">Indonesia memiliki keberagaman kuliner yang tak terhitung jumlahnya. Dari
                        Sabang sampai Merauke, setiap daerah memiliki cita rasa unik menggunakan rempah asli.</p>
                    <a href="#daftar-berita" class="btn btn-black text-white text-decoration-none">BACA SELENGKAPNYA</a>
                </div>
            </div>
        </div>
    </section>

    <section id="daftar-berita" class="py-5 bg-light">
        <div class="container">
            <h3 class="fw-bold mb-5">BERITA LAINNYA</h3>
            <div class="row g-4">
                @php
                $berita = [
                ['img' => 'photo-1504674900247-0877df9cc836', 'title' => 'Rahasia Bumbu Rendang'],
                ['img' => 'photo-1540189549336-e6e99c3679fe', 'title' => 'Salad Segar Ala Resto'],
                ['img' => 'photo-1572656631137-7935297eff55', 'title' => 'Soto Ayam Hangat'],
                ['img' => 'photo-1603133872878-684f208fb84b', 'title' => 'Nasi Goreng Spesial'],
                ['img' => 'photo-1476514525535-07fb3b4ae5f1', 'title' => 'Sate Ayam Madura'],
                ['img' => 'photo-1473093226795-af9932fe5856', 'title' => 'Pasta Italia Autentik'],
                ['img' => 'photo-1565299624946-b28f40a0ae38', 'title' => 'Pizza Tungku Arang'],
                ['img' => 'photo-1482049016688-2d3e1b311543', 'title' => 'Sandwich Sehat'],
                ];
                @endphp

                @foreach($berita as $key => $item)
                <div class="col-md-6 col-lg-3">
                    <div class="card card-news">
                        <img src="https://images.unsplash.com/{{ $item['img'] }}?q=80&w=500" class="card-img-top"
                            alt="News">
                        <div class="card-body p-4">
                            <h5 class="fw-bold text-uppercase" style="font-size: 1rem;">{{ $item['title'] }}</h5>
                            <p class="text-muted small">Mengenal lebih jauh tentang teknik memasak dan bahan berkualitas
                                tinggi...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="link-selengkapnya" data-bs-toggle="modal"
                                    data-bs-target="#modalBerita{{ $key }}">
                                    baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalBerita{{ $key }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content border-0 rounded-4">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-5 pt-0">
                                <img src="https://images.unsplash.com/{{ $item['img'] }}?q=80&w=1000"
                                    class="img-fluid rounded-4 mb-4" alt="Detail">
                                <h2 class="fw-bold">{{ $item['title'] }}</h2>
                                <p class="text-muted mt-3" style="line-height: 1.8;">
                                    Ini adalah penjelasan lengkap mengenai <strong>{{ $item['title'] }}</strong>. Kami
                                    membahas cara mengolah bahan agar nutrisinya tetap terjaga dan cita rasanya maksimal
                                    untuk keluarga Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <footer class="bg-black text-white py-5 mt-5">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-lg-4 col-md-12">
                    <h4 class="fw-bold mb-4 italic" style="letter-spacing: -1px;">Tasty Food</h4>
                    <p class="text-secondary pe-lg-5" style="font-size: 0.9rem; line-height: 1.8;">
                        Tempat terbaik untuk mengeksplorasi dunia kuliner nusantara dan internasional dengan ulasan
                        mendalam dari para ahli masak.
                    </p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="social-box"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-box"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <h6 class="fw-bold text-uppercase mb-4" style="font-size: 0.85rem; letter-spacing: 1px;">User
                        fullinks</h6>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="#" class="footer-link">Blog</a></li>
                        <li class="mb-3"><a href="#" class="footer-link">Hewan</a></li>
                        <li class="mb-3"><a href="#" class="footer-link">Galeri</a></li>
                        <li class="mb-3"><a href="#" class="footer-link">Testimonial</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6">
                    <h6 class="fw-bold text-uppercase mb-4" style="font-size: 0.85rem; letter-spacing: 1px;">Privacy
                    </h6>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="#" class="footer-link">Karir</a></li>
                        <li class="mb-3"><a href="#" class="footer-link">Tentang Kami</a></li>
                        <li class="mb-3"><a href="#" class="footer-link">Kontak Kami</a></li>
                        <li class="mb-3"><a href="#" class="footer-link">Servis</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h6 class="fw-bold text-uppercase mb-4" style="font-size: 0.85rem; letter-spacing: 1px;">Contact
                        Info</h6>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-3 text-secondary" style="font-size: 0.9rem;">
                            <i class="bi bi-envelope-fill me-3 text-white"></i> tastyfood@gmail.com
                        </li>
                        <li class="d-flex align-items-center mb-3 text-secondary" style="font-size: 0.9rem;">
                            <i class="bi bi-telephone-fill me-3 text-white"></i> +62 8528446317
                        </li>
                        <li class="d-flex align-items-start text-secondary" style="font-size: 0.9rem;">
                            <i class="bi bi-geo-alt-fill me-3 text-white"></i> Kota Bandung, Jawa Barat
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-top border-dark mt-5 pt-4 text-center">
                <p class="text-secondary mb-0" style="font-size: 0.8rem; letter-spacing: 1px;">
                    COPYRIGHT ©2026 ALL RIGHTS RESERVED
                </p>
            </div>
        </div>
    </footer>

    <style>
        /* Tambahan CSS khusus agar footer terlihat mahal */
        .footer-link {
            color: #6c757d;
            /* text-secondary */
            text-decoration: none;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .footer-link:hover {
            color: #fff;
            padding-left: 5px;
        }

        .social-box {
            width: 40px;
            height: 40px;
            background: #222;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
            transition: 0.3s;
        }

        .social-box:hover {
            background: #fff;
            color: #000;
            transform: translateY(-3px);
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>