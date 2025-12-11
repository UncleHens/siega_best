<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dosen SIEGA</title>
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
    
    // Ambil data dosen dari database
    $stmt = $pdo->prepare("SELECT * FROM tb_dosen ORDER BY nama");
    $stmt->execute();
    $dosen = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <!-- Header Section -->
    <div class="dosen-header">
        <div class="container">
            <h1>Dosen SIEGA</h1>
            <p>Fakultas Ilmu Komputer Universitas Katolik Soegijapranata</p>
            <p>Dosen-dosen berpengalaman dengan kualifikasi akademik yang mumpuni</p>
        </div>
    </div>

    <!-- Dosen Section -->
    <div class="container">
        <div class="dosen-grid">
            <?php if(count($dosen) > 0): ?>
                <?php foreach($dosen as $row): ?>
                    <div class="dosen-card">
                        <img src="../asset/dosen/<?php echo htmlspecialchars($row['foto'] ?? 'default.jpg'); ?>" 
                             alt="<?php echo htmlspecialchars($row['nama']); ?>" 
                             class="dosen-img" 
                             onerror="this.src='dosen/default.jpg'">
                        <div class="dosen-info">
                            <h3><?php echo htmlspecialchars($row['nama']); ?></h3>
                            <?php if($row['nidn']): ?>
                                <span class="nidn">NIDN: <?php echo htmlspecialchars($row['nidn']); ?></span>
                            <?php endif; ?>
                            <?php if($row['bidang_keahlian']): ?>
                                <p class="bidang">Bidang: <?php echo htmlspecialchars($row['bidang_keahlian']); ?></p>
                            <?php endif; ?>
                            <a href="dosen_detail.php?id=<?php echo $row['id']; ?>" 
                               class="btn-detail" 
                               data-bs-toggle="modal" 
                               data-bs-target="#dosenModal<?php echo $row['id']; ?>">
                                <i class="bi bi-person-badge"></i> Lihat Profil
                            </a>
                        </div>
                    </div>

                    <!-- Modal for Dosen Detail -->
                    <div class="modal fade modal-dosen" id="dosenModal<?php echo $row['id']; ?>" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Profil Dosen - <?php echo htmlspecialchars($row['nama']); ?></h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img src="../asset/dosen/<?php echo htmlspecialchars($row['foto'] ?? 'default.jpg'); ?>" 
                                                 alt="<?php echo htmlspecialchars($row['nama']); ?>" 
                                                 class="dosen-detail-img"
                                                 onerror="this.src='dosen/default.jpg'">
                                            <h5 class="mt-3"><?php echo htmlspecialchars($row['nama']); ?></h5>
                                            <?php if($row['nidn']): ?>
                                                <p class="text-muted">NIDN: <?php echo htmlspecialchars($row['nidn']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-8">
                                            <?php if($row['bidang_keahlian']): ?>
                                                <div class="mb-3">
                                                    <h6 class="d-inline-block">Bidang Keahlian</h6>
                                                    <p class="mb-0"><?php echo htmlspecialchars($row['bidang_keahlian']); ?></p>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <div class="dosen-contact">
                                                <h6>Kontak</h6>
                                                <?php if($row['email']): ?>
                                                    <p>
                                                        <i class="bi bi-envelope"></i>
                                                        <span><?php echo htmlspecialchars($row['email']); ?></span>
                                                    </p>
                                                <?php endif; ?>
                                                <?php if($row['no_wa']): ?>
                                                    <p>
                                                        <i class="bi bi-whatsapp"></i>
                                                        <span><?php echo htmlspecialchars($row['no_wa']); ?></span>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                            
                                            <?php if($row['biografi']): ?>
                                                <div class="biografi-section">
                                                    <h6>Biografi</h6>
                                                    <p><?php echo nl2br(htmlspecialchars($row['biografi'])); ?></p>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <?php if($row['riwayat_pendidikan']): ?>
                                                <div class="pendidikan-section">
                                                    <h6>Riwayat Pendidikan</h6>
                                                    <p><?php echo nl2br(htmlspecialchars($row['riwayat_pendidikan'])); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
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
                    <div class="loading">Memuat data dosen...</div>
                    <p class="text-muted">Tidak ada data dosen yang ditemukan.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle image errors
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.onerror = function() {
                    this.src = 'dosen/default.jpg';
                }
            });
        });
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>