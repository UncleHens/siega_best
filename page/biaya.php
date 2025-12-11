<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biaya Kuliah SIEGA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../asset/css/home.css">
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

    <!-- Header Section -->
    <div class="biaya-header">
        <div class="container">
            <h1>Biaya Kuliah SIEGA</h1>
            <p>Fakultas Ilmu Komputer Universitas Katolik Soegijapranata</p>
            <p>Investasi pendidikan berkualitas untuk masa depan yang cerah</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="biaya-content">
            <h2>Rincian Biaya Kuliah per Semester</h2>
            
            <!-- Table Section -->
            <div class="table-container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Program Studi</th>
                            <th>Beasiswa Prestasi</th>
                            <th>Reguler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Sistem Informasi
                                <span class="price-badge">Most Popular</span>
                            </td>
                            <td class="prestasi">
                                <i class="bi bi-tag-fill me-2"></i>
                                Rp 11.900.000
                            </td>
                            <td class="reguler">
                                <i class="bi bi-currency-dollar me-2"></i>
                                Rp 18.000.000
                            </td>
                        </tr>

                        <tr>
                            <td>Game Technology</td>
                            <td class="prestasi">
                                <i class="bi bi-tag-fill me-2"></i>
                                Rp 11.900.000
                            </td>
                            <td class="reguler">
                                <i class="bi bi-currency-dollar me-2"></i>
                                Rp 18.000.000
                            </td>
                        </tr>

                        <tr>
                            <td>E-Commerce</td>
                            <td class="prestasi">
                                <i class="bi bi-tag-fill me-2"></i>
                                Rp 11.900.000
                            </td>
                            <td class="reguler">
                                <i class="bi bi-currency-dollar me-2"></i>
                                Rp 18.000.000
                            </td>
                        </tr>

                        <tr class="highlight-row">
                            <td>Akuntansi + Sistem Informasi</td>
                            <td class="prestasi">
                                <i class="bi bi-award-fill me-2"></i>
                                Rp 16.900.000
                            </td>
                            <td class="reguler">
                                <i class="bi bi-currency-dollar me-2"></i>
                                Rp 23.000.000
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Info Box -->
            <div class="info-box">
                <h4><i class="bi bi-info-circle-fill me-2"></i>Informasi Penting</h4>
                <ul>
                    <li>Biaya di atas adalah per semester (6 bulan)</li>
                    <li>Beasiswa prestasi diberikan berdasarkan hasil seleksi masuk</li>
                    <li>Biaya sudah termasuk SPP, uang praktikum, dan fasilitas kampus</li>
                    <li>Pembayaran dapat dicicil sesuai ketentuan yang berlaku</li>
                    <li>Tersedia beasiswa tambahan untuk mahasiswa berprestasi</li>
                </ul>
            </div>

            <!-- CTA Section -->
            <div class="cta-section">
                <h3>Siap Menjadi Bagian dari SIEGA?</h3>
                <p>Bergabunglah dengan ribuan mahasiswa yang telah memilih SIEGA sebagai tempat mengembangkan potensi di bidang teknologi informasi. Daftarkan diri Anda sekarang dan raih masa depan yang lebih cerah!</p>
                <a href="https://pmb.unika.ac.id" target="_blank" class="btn-pmb">
                    <i class="bi bi-pencil-square"></i>
                    Daftar Sekarang di PMB Unika
                </a>
                <p class="mt-3 text-muted">
                    <small><i class="bi bi-clock-history me-1"></i> Pendaftaran dibuka hingga kuota terpenuhi</small>
                </p>
            </div>

            <!-- Payment Options -->
            <div class="payment-options">
                <h3><i class="bi bi-credit-card-2-front me-2"></i>Metode Pembayaran</h3>
                <p class="text-center mb-4">Kami menyediakan berbagai metode pembayaran untuk kenyamanan Anda</p>
                
                <div class="payment-grid">
                    <div class="payment-card">
                        <div class="payment-icon">
                            <i class="bi bi-bank"></i>
                        </div>
                        <h5>Transfer Bank</h5>
                        <p>BCA, Mandiri, BNI, BRI</p>
                    </div>
                
                    
                    <div class="payment-card">
                        <div class="payment-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h5>E-Wallet</h5>
                        <p>OVO, GoPay, Dana, LinkAja</p>
                    </div>
                    
                    <div class="payment-card">
                        <div class="payment-icon">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h5>Tunai</h5>
                        <p>Langsung di Keuangan Kampus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add hover effect to table rows
        document.addEventListener('DOMContentLoaded', function() {
            const tableRows = document.querySelectorAll('.table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.05)';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                    this.style.boxShadow = '';
                });
            });
        });
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>