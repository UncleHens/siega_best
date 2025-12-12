<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Aktivitas - SIEGA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
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
        
        .detail-header {
            background: linear-gradient(135deg, var(--primary), var(--blue-light));
            color: white;
            padding: 50px 0 30px;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }
        
        .detail-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(30%, -30%);
        }
        
        .detail-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(-30%, 30%);
        }
        
        .back-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 8px 20px;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            color: white;
            text-decoration: none;
        }
        
        .detail-content {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
        }
        
        .detail-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 30px;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .detail-title {
            color: var(--primary);
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.3;
        }
        
        .detail-date {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--primary);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        .detail-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 30px;
        }
        
        .detail-section {
            margin-bottom: 40px;
        }
        
        .detail-section h4 {
            color: var(--primary);
            border-bottom: 3px solid var(--secondary);
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .img-placeholder {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, var(--primary), var(--blue-light));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 30px;
        }
        
        .img-placeholder i {
            font-size: 4rem;
            opacity: 0.8;
        }
        
        @media (max-width: 768px) {
            .detail-header {
                padding: 30px 0 20px;
            }
            
            .detail-content {
                padding: 25px;
            }
            
            .detail-title {
                font-size: 1.8rem;
            }
            
            .detail-img, .img-placeholder {
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Database Connection -->
    <?php
    $host = 'localhost';
    $dbname = 'siega_uas';
    $username = 'root';
    $password = '';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Koneksi database gagal: " . $e->getMessage());
    }
    
    // Ambil ID dari parameter URL
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    
    // Query data aktivitas berdasarkan ID
    $stmt = $pdo->prepare("SELECT * FROM tb_aktivitas WHERE id = ?");
    $stmt->execute([$id]);
    $aktivitas = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Jika tidak ditemukan, redirect atau tampilkan pesan
    if(!$aktivitas) {
        header('Location: aktivitas.php');
        exit();
    }
    
    // Format tanggal ke Indonesia
    function formatTanggal($tanggal) {
        $bulan = array(
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );
        $date = new DateTime($tanggal);
        return $date->format('j') . ' ' . $bulan[(int)$date->format('m') - 1] . ' ' . $date->format('Y');
    }
    ?>

    <!-- Header Section -->
    <div class="detail-header">
        <div class="container position-relative" style="z-index: 1;">
            <a href="aktivitas.php" class="back-btn">
                <i class="bi bi-arrow-left"></i> Kembali ke Daftar Aktivitas
            </a>
            <h1 class="display-5 fw-bold">Detail Aktivitas</h1>
            <p class="lead">Fakultas Ilmu Komputer Universitas Katolik Soegijapranata</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="detail-content">
            <?php if($aktivitas['foto']): ?>
                <img src="../asset/aktivitas/<?php echo htmlspecialchars($aktivitas['foto']); ?>" 
                     alt="<?php echo htmlspecialchars($aktivitas['judul']); ?>" 
                     class="detail-img"
                     onerror="this.style.display='none'; document.getElementById('imgPlaceholder').style.display='flex';">
            <?php endif; ?>
            
            <?php if(!$aktivitas['foto']): ?>
                <div id="imgPlaceholder" class="img-placeholder">
                    <i class="bi bi-calendar-event"></i>
                </div>
            <?php endif; ?>
            
            <div class="detail-date">
                <i class="bi bi-calendar3"></i> 
                <?php echo formatTanggal($aktivitas['tanggal']); ?>
            </div>
            
            <h1 class="detail-title"><?php echo htmlspecialchars($aktivitas['judul']); ?></h1>
            
            <?php if($aktivitas['deskripsi']): ?>
                <div class="detail-section">
                    <h4>Deskripsi Kegiatan</h4>
                    <div class="detail-description">
                        <?php echo nl2br(htmlspecialchars($aktivitas['deskripsi'])); ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <div class="mt-5 pt-4 border-top">
                <a href="aktivitas.php" class="btn btn-primary">
                    <i class="bi bi-arrow-left"></i> Lihat Aktivitas Lainnya
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle image errors
        document.addEventListener('DOMContentLoaded', function() {
            const img = document.querySelector('.detail-img');
            if(img) {
                img.onerror = function() {
                    this.style.display = 'none';
                    const placeholder = document.getElementById('imgPlaceholder');
                    if(placeholder) placeholder.style.display = 'flex';
                }
            }
        });
        
        // Share functionality
        function shareAktivitas() {
            if(navigator.share) {
                navigator.share({
                    title: document.querySelector('.detail-title').textContent,
                    text: 'Lihat aktivitas menarik dari SIEGA',
                    url: window.location.href
                })
                .then(() => console.log('Berbagi berhasil'))
                .catch((error) => console.log('Error sharing:', error));
            } else {
                // Fallback untuk browser yang tidak mendukung Web Share API
                alert('Browser tidak mendukung fitur berbagi. Silakan salin URL secara manual.');
            }
        }
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>