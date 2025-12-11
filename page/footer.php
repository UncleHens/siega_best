<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer SIEGA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../asset/css/home.css">
</head>

<body>
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="footer-logo text-white">
                        <div>
                            <a class="navbar-brand text-white fw-bold d-flex align-items-center" href="home.php">
                                <img src="../asset/foto/logo.jpg"
                                    alt="Logo UNIKA"
                                    style="width: 45px; height: 45px; object-fit: cover; border-radius: 6px;"
                                    class="me-2">

                                <div class="d-flex flex-column lh-sm">
                                    <span style="font-size: 1.15rem; font-weight: 700;">SIEGA UNIKA</span>
                                    <span style="font-size: 0.85rem; font-weight: 400;">Universitas Katolik Soegijapranata</span>
                                </div>
                            </a>

                        </div>
                    </div>
                    <p class="mb-4">
                        Mewujudkan generasi pemimpin teknologi masa depan melalui inovasi,
                        kreativitas, dan nilai-nilai kemanusiaan.
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-5">
                    <div class="footer-links">
                        <h5>Program Studi</h5>
                        <a href="#">Sistem Informasi</a>
                        <a href="#">Game Technology</a>
                        <a href="#">E-Commerce</a>
                        <a href="#">Akuntansi + SI</a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-5">
                    <div class="footer-links">
                        <h5>Tautan Cepat</h5>
                        <a href="https://pmb.unika.ac.id" target="_blank">Pendaftaran (PMB)</a>
                        <a href="dosen.php">Dosen & Staff</a>
                        <a href="../login/login.php">Admin - Portal</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="footer-links">
                        <h5>Hubungi Kami</h5>
                        <div class="contact-info mb-3">
                            <p><i class="bi bi-geo-alt"></i> Jl. Pawiyatan Luhur IV/1, Bendan Dhuwur, Semarang</p>
                            <p><i class="bi bi-telephone"></i> +62 24 8441555</p>
                            <p><i class="bi bi-envelope"></i> siega@unika.ac.id</p>
                        </div>

                        <div class="mb-4">
                            <h6 class="mb-3" style="color: #ffd700;">Berlangganan Newsletter</h6>
                            <div class="input-group">
                                <input type="email" class="form-control newsletter-input" placeholder="Email Anda">
                                <button class="btn newsletter-btn">Kirim</button>
                            </div>
                        </div>

                        <a href="kontak.php" class="btn btn-footer">
                            <i class="bi bi-chat-left-text me-2"></i>Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center">
                        <p class="mb-0">
                            &copy; <?php echo date('Y'); ?> SIEGA UNIKA Soegijapranata.
                            All Rights Reserved. |
                            <a href="#" class="text-white text-decoration-none">Kebijakan Privasi</a> |
                            <a href="#" class="text-white text-decoration-none">Syarat & Ketentuan</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>