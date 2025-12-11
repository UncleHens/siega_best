<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIEGA UNIKA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../asset/css/home.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background: #a0522d">
        <div class="container">

            <!-- NAVBAR BRAND WITH LOGO -->
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


            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list text-white" style="font-size: 1.8rem;"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="home.php"><i class="bi bi-house-door me-1"></i> Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="tentang.php"><i class="bi bi-info-circle me-1"></i> Tentang</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="dosen.php"><i class="bi bi-people me-1"></i> Dosen</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#"><i class="bi bi-calendar-event me-1"></i> Aktivitas</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="biaya.php"><i class="bi bi-cash-coin me-1"></i> Biaya</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="kontak.php"><i class="bi bi-telephone me-1"></i> Kontak</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="https://pmb.unika.ac.id" target="_blank" class="btn btn-custom px-4">
                            <i class="bi bi-pencil-square me-2"></i>Daftar Sekarang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname.split('/').pop();
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active-link');
                }
            });
        });
    </script>

</body>

</html>