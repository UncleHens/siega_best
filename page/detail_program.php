<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Program Studi - SIEGA</title>
    <link rel="stylesheet" href="../asset/css/home.css" />
    <style>
        /* Custom Styles for Detail Program Page */
        :root {
            --primary-blue: #0A2463;
            --secondary-yellow: #FFA500;
            --accent-orange: #FF6B35;
            --dark-navy: #1A1A2E;
            --light-gray: #F8F9FA;
            --text-gray: #6C757D;
            --white: #FFFFFF;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #faf0e6;
        }
        
        .detail-header {
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-navy));
            color: white;
            padding: 80px 0 60px;
            position: relative;
            overflow: hidden;
        }
        
        .detail-header::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 6px;
            transition: all 0.3s ease;
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            text-decoration: none;
        }
        
        .program-badge {
            display: inline-block;
            padding: 8px 20px;
            background: var(--secondary-yellow);
            color: var(--dark-navy);
            border-radius: 30px;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        
        .detail-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .program-info {
            background: white;
            border-radius: 12px;
            padding: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin: -40px auto 60px;
            position: relative;
            z-index: 10;
        }
        
        .program-title {
            color: var(--primary-blue);
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .program-tagline {
            font-size: 1.2rem;
            color: var(--text-gray);
            margin-bottom: 40px;
            line-height: 1.6;
        }
        
        .section-title {
            color: var(--primary-blue);
            font-size: 1.8rem;
            margin: 50px 0 25px;
            padding-bottom: 15px;
            border-bottom: 3px solid var(--secondary-yellow);
            font-weight: 600;
        }
        
        .activities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 30px 0 50px;
        }
        
        .activity-card {
            background: var(--light-gray);
            border-radius: 10px;
            padding: 25px;
            transition: transform 0.3s ease;
            border-left: 4px solid var(--accent-orange);
        }
        
        .activity-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .activity-card h4 {
            color: var(--primary-blue);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .activity-card p {
            color: var(--text-gray);
            line-height: 1.6;
        }
        
        .career-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin: 30px 0 50px;
        }
        
        .career-card {
            background: white;
            border: 2px solid var(--primary-blue);
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .career-card:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-5px);
        }
        
        .career-card:hover h4,
        .career-card:hover p {
            color: white;
        }
        
        .career-card h4 {
            color: var(--primary-blue);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        
        .career-card p {
            color: var(--text-gray);
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .icon-box {
            width: 60px;
            height: 60px;
            background: var(--secondary-yellow);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.5rem;
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
            background: var(--light-gray);
            border-radius: 10px;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            display: block;
        }
        
        .stat-label {
            color: var(--text-gray);
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        .btn-yellow, .btn-outline {
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
            border: none;
        }
        
        .btn-yellow {
            background: var(--secondary-yellow);
            color: var(--dark-navy);
        }
        
        .btn-yellow:hover {
            background: var(--accent-orange);
            color: white;
            text-decoration: none;
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
        }
        
        .btn-outline:hover {
            background: var(--primary-blue);
            color: white;
            text-decoration: none;
        }
        
        .program-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid #eee;
        }
        
        @media (max-width: 768px) {
            .program-info {
                padding: 30px 20px;
                margin: -20px auto 40px;
            }
            
            .program-title {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .activities-grid,
            .career-grid {
                grid-template-columns: 1fr;
            }
            
            .stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <?php
    // Get program parameter from URL
    $program = isset($_GET['program']) ? $_GET['program'] : 'sistem-informasi';
    
    // Define program data
    $programs = [
        'sistem-informasi' => [
            'title' => 'Sistem Informasi',
            'tagline' => 'Enterprise Systems & Big Data',
            'badge' => 'Terakreditasi A',
            'description' => 'Program Sistem Informasi mempersiapkan mahasiswa untuk menjadi profesional di bidang teknologi informasi dengan fokus pada pengembangan sistem informasi perusahaan, analisis data, dan transformasi digital.',
            'what_we_do' => [
                [
                    'title' => 'Pengembangan Sistem Perusahaan',
                    'description' => 'Mempelajari analisis, desain, dan implementasi sistem informasi untuk mendukung operasi bisnis perusahaan.'
                ],
                [
                    'title' => 'Big Data & Analytics',
                    'description' => 'Belajar mengolah data besar (big data) untuk menghasilkan insight bisnis yang berharga.'
                ],
                [
                    'title' => 'Transformasi Digital',
                    'description' => 'Mempelajari strategi dan implementasi transformasi digital dalam organisasi.'
                ],
                [
                    'title' => 'Project Management',
                    'description' => 'Mengelola proyek IT dari perencanaan hingga implementasi dan evaluasi.'
                ]
            ],
            'careers' => [
                ['title' => 'System Analyst', 'desc' => 'Menganalisis kebutuhan sistem dan merancang solusi IT'],
                ['title' => 'Data Analyst', 'desc' => 'Mengolah data untuk mendukung pengambilan keputusan bisnis'],
                ['title' => 'IT Consultant', 'desc' => 'Memberikan konsultasi strategi teknologi informasi'],
                ['title' => 'Business Intelligence Specialist', 'desc' => 'Mengembangkan sistem untuk analisis data bisnis'],
                ['title' => 'ERP Specialist', 'desc' => 'Mengimplementasikan dan mengelola sistem ERP'],
                ['title' => 'IT Project Manager', 'desc' => 'Mengelola proyek pengembangan sistem informasi']
            ],
            'stats' => [
                ['number' => '95%', 'label' => 'Lulusan Bekerja < 6 Bulan'],
                ['number' => '50+', 'label' => 'Perusahaan Mitra'],
                ['number' => '4', 'label' => 'Sertifikasi Internasional']
            ]
        ],
        
        'game-technology' => [
            'title' => 'Game Technology',
            'tagline' => 'Virtual Reality, Augmented Reality & Game Dev',
            'badge' => 'Program Unggulan',
            'description' => 'Program Game Technology mempersiapkan mahasiswa menjadi pengembang game profesional dengan keahlian dalam VR/AR, game design, dan pengembangan aplikasi interaktif.',
            'what_we_do' => [
                [
                    'title' => 'Game Development',
                    'description' => 'Mempelajari pembuatan game dari konsep hingga produksi menggunakan engine modern.'
                ],
                [
                    'title' => 'VR/AR Development',
                    'description' => 'Mengembangkan aplikasi Virtual Reality dan Augmented Reality untuk berbagai industri.'
                ],
                [
                    'title' => 'Game Design',
                    'description' => 'Merancang gameplay, level design, dan user experience untuk game yang menarik.'
                ],
                [
                    'title' => '3D Modeling & Animation',
                    'description' => 'Membuat asset 3D dan animasi untuk game dan aplikasi interaktif.'
                ]
            ],
            'careers' => [
                ['title' => 'Game Developer', 'desc' => 'Mengembangkan game untuk berbagai platform'],
                ['title' => 'VR/AR Developer', 'desc' => 'Membuat aplikasi realitas virtual dan augmented'],
                ['title' => 'Game Designer', 'desc' => 'Merancang gameplay dan mekanik game'],
                ['title' => '3D Artist', 'desc' => 'Membuat model 3D dan animasi untuk game'],
                ['title' => 'Game Tester', 'desc' => 'Menguji kualitas dan gameplay game'],
                ['title' => 'Technical Artist', 'desc' => 'Menjembatani seni dan teknologi dalam produksi game']
            ],
            'stats' => [
                ['number' => '30+', 'label' => 'Game Telah Dikembangkan'],
                ['number' => '15', 'label' => 'Studio Game Mitra'],
                ['number' => '100%', 'label' => 'Praktik Hands-on']
            ]
        ],
        
        'e-commerce' => [
            'title' => 'E-Commerce',
            'tagline' => 'Digital Business Strategy & Startup',
            'badge' => 'Program Inovatif',
            'description' => 'Program E-Commerce mempersiapkan mahasiswa menjadi entrepreneur digital dan profesional di bidang bisnis online dengan pemahaman mendalam tentang teknologi dan strategi pemasaran digital.',
            'what_we_do' => [
                [
                    'title' => 'Digital Marketing',
                    'description' => 'Mempelajari strategi pemasaran digital, SEO, social media marketing, dan content marketing.'
                ],
                [
                    'title' => 'E-Commerce Development',
                    'description' => 'Membangun dan mengelola platform e-commerce dari nol hingga sukses.'
                ],
                [
                    'title' => 'Startup Development',
                    'description' => 'Mempelajari cara membangun dan mengembangkan startup digital.'
                ],
                [
                    'title' => 'Data-Driven Business',
                    'description' => 'Menggunakan data analitik untuk pengambilan keputusan bisnis.'
                ]
            ],
            'careers' => [
                ['title' => 'E-Commerce Specialist', 'desc' => 'Mengelola platform dan strategi e-commerce'],
                ['title' => 'Digital Marketer', 'desc' => 'Merencanakan dan menjalankan kampanye pemasaran digital'],
                ['title' => 'Social Media Manager', 'desc' => 'Mengelola kehadiran brand di media sosial'],
                ['title' => 'Startup Founder', 'desc' => 'Memulai dan mengembangkan bisnis digital'],
                ['title' => 'UX Designer E-Commerce', 'desc' => 'Mendesain pengalaman pengguna untuk platform belanja online'],
                ['title' => 'Business Analyst Digital', 'desc' => 'Menganalisis data untuk strategi bisnis digital']
            ],
            'stats' => [
                ['number' => '25+', 'label' => 'Startup Telah Dibangun'],
                ['number' => '40', 'label' => 'Brand Mitra E-Commerce'],
                ['number' => '85%', 'label' => 'Mahasiswa Magang di Perusahaan Digital']
            ]
        ],
        
        'akuntansi-si' => [
            'title' => 'Akuntansi + SI',
            'tagline' => 'Fintech & Information Systems Audit',
            'badge' => 'Program Hybrid',
            'description' => 'Program Akuntansi dengan Sistem Informasi memberikan kompetensi ganda di bidang akuntansi dan teknologi informasi, mempersiapkan lulusan untuk karir di era fintech dan audit sistem informasi.',
            'what_we_do' => [
                [
                    'title' => 'Fintech Development',
                    'description' => 'Mempelajari pengembangan teknologi finansial dan aplikasi perbankan digital.'
                ],
                [
                    'title' => 'Information Systems Audit',
                    'description' => 'Melakukan audit sistem informasi dan manajemen risiko teknologi.'
                ],
                [
                    'title' => 'Accounting Information Systems',
                    'description' => 'Mendesain dan mengimplementasikan sistem informasi akuntansi.'
                ],
                [
                    'title' => 'Blockchain for Finance',
                    'description' => 'Mempelajari penerapan blockchain dalam sektor keuangan.'
                ]
            ],
            'careers' => [
                ['title' => 'Fintech Specialist', 'desc' => 'Mengembangkan dan mengelola teknologi finansial'],
                ['title' => 'IT Auditor', 'desc' => 'Melakukan audit sistem informasi dan keamanan data'],
                ['title' => 'Accounting System Analyst', 'desc' => 'Menganalisis dan merancang sistem akuntansi'],
                ['title' => 'Financial Data Analyst', 'desc' => 'Menganalisis data keuangan untuk insight bisnis'],
                ['title' => 'Risk Management Specialist', 'desc' => 'Mengelola risiko teknologi dalam institusi keuangan'],
                ['title' => 'Blockchain Consultant', 'desc' => 'Menerapkan solusi blockchain untuk bisnis']
            ],
            'stats' => [
                ['number' => '100%', 'label' => 'Kompetensi Ganda'],
                ['number' => '30', 'label' => 'Bank & Fintech Mitra'],
                ['number' => '4', 'label' => 'Sertifikasi Profesi']
            ]
        ]
    ];
    
    // Get current program data
    $current_program = isset($programs[$program]) ? $programs[$program] : $programs['sistem-informasi'];
    ?>
    
    <div class="detail-header">
        <div class="detail-content">
            <a href="home.php" class="back-btn">
                ← Kembali ke Beranda
            </a>
            <span class="program-badge"><?php echo $current_program['badge']; ?></span>
            <h1 class="program-title"><?php echo $current_program['title']; ?></h1>
            <p class="program-tagline"><?php echo $current_program['tagline']; ?></p>
        </div>
    </div>
    
    <div class="detail-content">
        <div class="program-info">
            <h2>Tentang Program</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #333; margin: 20px 0 40px;">
                <?php echo $current_program['description']; ?>
            </p>
            
            <!-- Statistics -->
            <div class="stats">
                <?php foreach ($current_program['stats'] as $stat): ?>
                <div class="stat-item">
                    <span class="stat-number"><?php echo $stat['number']; ?></span>
                    <span class="stat-label"><?php echo $stat['label']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Apa yang Kami Lakukan -->
            <h2 class="section-title">Apa yang Kami Lakukan</h2>
            <p style="color: var(--text-gray); margin-bottom: 30px;">
                Berikut adalah kegiatan utama yang akan kamu pelajari selama kuliah:
            </p>
            
            <div class="activities-grid">
                <?php foreach ($current_program['what_we_do'] as $activity): ?>
                <div class="activity-card">
                    <h4><?php echo $activity['title']; ?></h4>
                    <p><?php echo $activity['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Prospek Karir -->
            <h2 class="section-title">Prospek Karir Setelah Lulus</h2>
            <p style="color: var(--text-gray); margin-bottom: 30px;">
                Lulusan program ini dapat bekerja sebagai:
            </p>
            
            <div class="career-grid">
                <?php foreach ($current_program['careers'] as $career): ?>
                <div class="career-card">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                    </div>
                    <h4><?php echo $career['title']; ?></h4>
                    <p><?php echo $career['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Additional Info -->
            <h2 class="section-title">Mengapa Memilih Program Ini?</h2>
            <ul style="color: #333; line-height: 1.8; font-size: 1.1rem; padding-left: 20px; margin-bottom: 40px;">
                <li style="margin-bottom: 10px;">Kurikulum berbasis industri yang selalu diperbarui</li>
                <li style="margin-bottom: 10px;">Dosen praktisi dengan pengalaman dunia kerja</li>
                <li style="margin-bottom: 10px;">Fasilitas laboratorium dengan teknologi terbaru</li>
                <li style="margin-bottom: 10px;">Program magang di perusahaan ternama</li>
                <li style="margin-bottom: 10px;">Komunitas alumni yang aktif mendukung karir</li>
            </ul>
            
            <!-- CTA Buttons -->
            <div style="text-align: center; margin: 50px 0 30px;">
                <a href="kontak.php" class="btn-yellow" style="margin-right: 15px;">
                    <i class="bi bi-chat-dots"></i> Konsultasi Sekarang
                </a>
                <a href="dosen.php" class="btn-outline">
                    <i class="bi bi-people"></i> Kenali Dosen Kami
                </a>
            </div>
            
            <!-- Program Navigation -->
            <div class="program-nav">
                <div>
                    <p style="color: var(--text-gray); margin-bottom: 10px;">Program Lainnya:</p>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <a href="detail_program.php?program=sistem-informasi" 
                           class="btn-outline" 
                           style="padding: 8px 16px; font-size: 0.9rem;">
                            Sistem Informasi
                        </a>
                        <a href="detail_program.php?program=game-technology" 
                           class="btn-outline" 
                           style="padding: 8px 16px; font-size: 0.9rem;">
                            Game Technology
                        </a>
                        <a href="detail_program.php?program=e-commerce" 
                           class="btn-outline" 
                           style="padding: 8px 16px; font-size: 0.9rem;">
                            E-Commerce
                        </a>
                        <a href="detail_program.php?program=akuntansi-si" 
                           class="btn-outline" 
                           style="padding: 8px 16px; font-size: 0.9rem;">
                            Akuntansi + SI
                        </a>
                    </div>
                </div>
                
                <div style="text-align: right;">
                    <a href="aktivitas.php" class="btn-yellow" style="display: inline-flex; align-items: center; gap: 8px;">
                        <i class="bi bi-calendar-event"></i> Lihat Aktivitas Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <?php include 'footer.php'; ?>
</body>
</html>