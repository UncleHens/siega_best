<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aktivitas SIEGA</title>
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
        
        .aktivitas-header {
            background: linear-gradient(135deg, var(--primary), var(--blue-light));
            color: white;
            padding: 60px 0 40px;
            text-align: center;
            margin-bottom: 40px;
            border-bottom: 5px solid var(--secondary);
        }
        
        .aktivitas-header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .aktivitas-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .aktivitas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .aktivitas-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #eaeaea;
        }
        
        .aktivitas-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }
        
        .aktivitas-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-bottom: 3px solid var(--secondary);
        }
        
        .aktivitas-info {
            padding: 25px;
        }
        
        .aktivitas-info h3 {
            font-size: 1.4rem;
            color: var(--primary);
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .aktivitas-date {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        .aktivitas-deskripsi {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .btn-detail {
            display: inline-block;
            background: var(--secondary);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s ease;
            border: none;
        }
        
        .btn-detail:hover {
            background: var(--accent);
            color: white;
            text-decoration: none;
        }
        
        .loading {
            padding: 40px;
            text-align: center;
            font-size: 1.2rem;
            color: var(--primary);
        }
        
        /* Modal Styling */
        .modal-aktivitas .modal-content {
            border-radius: 12px;
            border: none;
        }
        
        .modal-aktivitas .modal-header {
            background: var(--primary);
            color: white;
            border-radius: 12px 12px 0 0;
        }
        
        .btn-close-white {
            filter: invert(1);
        }
        
        .aktivitas-detail-img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .detail-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .detail-date {
            background: var(--light);
            padding: 10px 15px;
            border-radius: 6px;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            .aktivitas-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .aktivitas-header h1 {
                font-size: 2.2rem;
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
    
    // Ambil data aktivitas dari database
    $stmt = $pdo->prepare("SELECT * FROM tb_aktivitas ORDER BY tanggal DESC");
    $stmt->execute();
    $aktivitas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
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
    <div class="aktivitas-header">
        <div class="container">
            <h1>Aktivitas SIEGA</h1>
            <p>Fakultas Ilmu Komputer Universitas Katolik Soegijapranata</p>
            <p>Berbagai kegiatan, konferensi, talkshow, dan acara menarik lainnya untuk pengembangan mahasiswa</p>
        </div>
    </div>

    <!-- Aktivitas Section -->
    <div class="container">
        <div class="aktivitas-grid">
            <?php if(count($aktivitas) > 0): ?>
                <?php foreach($aktivitas as $row): ?>
                    <div class="aktivitas-card">
                        <?php if($row['foto']): ?>
                            <img src="../asset/aktivitas/<?php echo htmlspecialchars($row['foto']); ?>" 
                                 alt="<?php echo htmlspecialchars($row['judul']); ?>" 
                                 class="aktivitas-img"
                                 onerror="this.src='../asset/aktivitas/default.jpg'">
                        <?php else: ?>
                            <div class="aktivitas-img" style="background: var(--primary); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem;">
                                <i class="bi bi-calendar-event" style="font-size: 3rem;"></i>
                            </div>
                        <?php endif; ?>
                        
                        <div class="aktivitas-info">
                            <span class="aktivitas-date">
                                <i class="bi bi-calendar3"></i> <?php echo formatTanggal($row['tanggal']); ?>
                            </span>
                            <h3><?php echo htmlspecialchars($row['judul']); ?></h3>
                            
                            <?php if($row['deskripsi']): ?>
                                <div class="aktivitas-deskripsi">
                                    <?php echo nl2br(htmlspecialchars(substr($row['deskripsi'], 0, 150) . '...')); ?>
                                </div>
                            <?php endif; ?>
                            
                            <a href="detail_aktivitas.php?id=<?php echo $row['id']; ?>" 
                               class="btn-detail"
                               data-bs-toggle="modal" 
                               data-bs-target="#aktivitasModal<?php echo $row['id']; ?>">
                                <i class="bi bi-eye"></i> Lihat Detail
                            </a>
                        </div>
                    </div>

                    <!-- Modal for Aktivitas Detail -->
                    <div class="modal fade modal-aktivitas" id="aktivitasModal<?php echo $row['id']; ?>" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Detail Aktivitas</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <?php if($row['foto']): ?>
                                        <img src="../asset/aktivitas/<?php echo htmlspecialchars($row['foto']); ?>" 
                                             alt="<?php echo htmlspecialchars($row['judul']); ?>" 
                                             class="aktivitas-detail-img"
                                             onerror="this.src='../asset/aktivitas/default.jpg'">
                                    <?php endif; ?>
                                    
                                    <h2 class="detail-title"><?php echo htmlspecialchars($row['judul']); ?></h2>
                                    
                                    <div class="detail-date">
                                        <i class="bi bi-calendar3"></i> 
                                        <?php echo formatTanggal($row['tanggal']); ?>
                                    </div>
                                    
                                    <?php if($row['deskripsi']): ?>
                                        <div class="deskripsi-section">
                                            <h5 class="mb-3">Deskripsi</h5>
                                            <p><?php echo nl2br(htmlspecialchars($row['deskripsi'])); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <div class="loading">
                        <i class="bi bi-calendar-x" style="font-size: 3rem; margin-bottom: 15px; display: block;"></i>
                        <p>Tidak ada aktivitas yang ditemukan.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle image errors
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.aktivitas-img, .aktivitas-detail-img');
            images.forEach(img => {
                img.onerror = function() {
                    this.src = '../asset/aktivitas/default.jpg';
                }
            });
        });
        
        // Smooth scroll for modal links
        document.querySelectorAll('a[data-bs-toggle="modal"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.getAttribute('href');
                if(target.includes('detail_aktivitas.php')) {
                    // For separate detail page
                    window.location.href = target;
                }
                // For modal, let Bootstrap handle it
            });
        });
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>