<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak SIEGA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../asset/css/dosen-kontak.css">
    <style>
        :root {
            --primary: #0A2463;
            --secondary: #FFA500;
            --accent: #FF6B35;
            --dark: #1A1A2E;
            --light: #F8F9FA;
            --gray: #6C757D;
            --white: #FFFFFF;
            --blue-light: #1E3A8A;
        }
        
        body {
            background: #faf0e6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Database Connection & Form Handling -->
    <?php
    $host = 'localhost';
    $dbname = 'siega_uas';
    $username = 'root';
    $password = '';
    
    $success = false;
    $error = '';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $nama = $_POST['nama'] ?? '';
            $no_wa = $_POST['no_wa'] ?? '';
            $pesan = $_POST['pesan'] ?? '';
            
            if (empty($nama) || empty($pesan)) {
                $error = "Nama dan pesan harus diisi!";
            } else {
                $stmt = $pdo->prepare("INSERT INTO tb_pesan (nama_pengirim, no_wa, pesan) VALUES (?, ?, ?)");
                $stmt->execute([$nama, $no_wa, $pesan]);
                $success = true;
            }
        } catch(PDOException $e) {
            $error = "Terjadi kesalahan: " . $e->getMessage();
        }
    }
    ?>

    <!-- Header Section -->
    <div class="kontak-header">
        <div class="container">
            <h1>Kontak SIEGA</h1>
            <p>Fakultas Ilmu Komputer Universitas Katolik Soegijapranata</p>
            <p>Hubungi kami untuk informasi lebih lanjut tentang program studi SIEGA</p>
        </div>
    </div>

    <!-- Kontak Container -->
    <div class="container">
        <div class="kontak-container">
            <!-- Success/Error Messages -->
            <?php if($success): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    Pesan berhasil dikirim! Terima kasih atas pesan Anda.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php elseif($error): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <?php echo htmlspecialchars($error); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <!-- Map Section -->
            <div class="kontak-section">
                <h2>Lokasi Kampus</h2>
                <div class="map-container">
                    <iframe
                        src="https://maps.google.com/maps?q=Universitas+Katolik+Soegijapranata+Semarang&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="400"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
                <p class="text-center mt-3">
                    <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                    Jl. Pawiyatan Luhur IV/1, Bendan Dhuwur, Semarang, Jawa Tengah 50234
                </p>
            </div>

            <div class="row g-5">
                <!-- Form Section -->
                <div class="col-lg-6">
                    <div class="kontak-form">
                        <h2>Kirim Pesan</h2>
                        <form method="POST" action="">
                            <div class="mb-3">
                                <input type="text" 
                                       class="form-control" 
                                       name="nama" 
                                       placeholder="Nama Lengkap *" 
                                       required
                                       value="<?php echo htmlspecialchars($_POST['nama'] ?? ''); ?>">
                            </div>
                            <div class="mb-3">
                                <input type="tel" 
                                       class="form-control" 
                                       name="no_wa" 
                                       placeholder="Nomor WhatsApp"
                                       value="<?php echo htmlspecialchars($_POST['no_wa'] ?? ''); ?>">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" 
                                          name="pesan" 
                                          rows="5" 
                                          placeholder="Tulis pesan Anda di sini... *" 
                                          required><?php echo htmlspecialchars($_POST['pesan'] ?? ''); ?></textarea>
                            </div>
                            <button type="submit" class="btn-kontak">
                                <i class="bi bi-send-fill me-2"></i> Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info Section -->
                <div class="col-lg-6">
                    <div class="kontak-info">
                        <h4>Informasi Kontak</h4>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="info-content">
                                <h5>Alamat Kampus</h5>
                                <p>Jl. Pawiyatan Luhur IV/1, Bendan Dhuwur,<br>Semarang, Jawa Tengah 50234</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="info-content">
                                <h5>Telepon</h5>
                                <p>+62 24 844 1555<br>+62 24 844 5665</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h5>Email</h5>
                                <p>siega@unika.ac.id<br>info@unika.ac.id</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div class="info-content">
                                <h5>Jam Operasional</h5>
                                <p>Senin - Jumat: 08:00 - 16:00 WIB<br>Sabtu: 08:00 - 12:00 WIB</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-globe"></i>
                            </div>
                            <div class="info-content">
                                <h5>Website</h5>
                                <p>www.unika.ac.id<br>siega.unika.ac.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto dismiss alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>