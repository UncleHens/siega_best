<?php
include '../config/connect.php';

// Cek halaman apa yang sedang diakses (Default: dosen)
$page = isset($_GET['page']) ? $_GET['page'] : 'dosen';
$search = isset($_GET['search']) ? $_GET['search'] : '';

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Staff - Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../asset/css/dashboard.css">
</head>

<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                PORTAL STAFF
            </div>
            <ul class="sidebar-menu">
                <li>
                    <a href="dashboard.php?page=dosen" class="<?= $page == 'dosen' ? 'active' : '' ?>">
                        <i class="fa-solid fa-users"></i> Kelola Dosen
                    </a>
                </li>
                <li>
                    <a href="dashboard.php?page=aktivitas" class="<?= $page == 'aktivitas' ? 'active' : '' ?>">
                        <i class="fa-regular fa-calendar-days"></i> Kelola Aktivitas
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../login/logout.php">
                    <i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 10px;"></i> Logout
                </a>
            </div>
        </aside>

        <main class="main-content">

            <header class="top-header">
                <h2>
                    <?php
                    if ($page == 'dosen') echo "Manajemen Data Dosen";
                    else echo "Manajemen Aktivitas & Galeri";
                    ?>
                </h2>
                <div class="user-profile">
                    <div class="user-info">
                        <strong>Admin Staff</strong>
                        <small>Administrator</small>
                    </div>
                    <div class="user-avatar">AD</div>
                </div>
            </header>

            <div class="content-wrapper">
                <div class="card">

                    <div class="toolbar">
                        <div class="search-wrapper">
                            <i class="fa-solid fa-magnifying-glass search-icon"></i>

                            <input type="text" id="searchInput" class="search-input"
                                placeholder="Cari <?= $page == 'dosen' ? 'Nama / NIDN...' : 'Aktivitas...' ?>">

                            <i class="fa-solid fa-xmark clear-btn" id="clearBtn" onclick="clearSearch()"></i>
                        </div>

                        <a href="tambah_<?= $page ?>.php" class="btn-add">
                            <i class="fa-solid fa-plus"></i> Tambah <?= $page == 'dosen' ? 'Dosen' : 'Aktivitas' ?>
                        </a>
                    </div>

                    <?php if ($page == 'dosen'): ?>
                        <div class="table-responsive">
                            <table class="custom-table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th width="80">FOTO</th>
                                        <th>NAMA LENGKAP</th>
                                        <th>NIDN</th>
                                        <th>JABATAN / KEAHLIAN</th>
                                        <th width="100">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM tb_dosen";
                                    if ($search) {
                                        $query .= " WHERE nama LIKE '%$search%' OR nidn LIKE '%$search%'";
                                    }
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)):
                                    ?>
                                        <tr>
                                            <td>
                                                <img src="../asset/foto/<?= !empty($row['foto']) ? $row['foto'] : 'default.jpg' ?>" class="table-avatar" alt="Foto">
                                            </td>
                                            <td>
                                                <strong><?= $row['nama'] ?></strong>
                                            </td>
                                            <td><?= $row['nidn'] ? $row['nidn'] : '-' ?></td>
                                            <td>
                                                <span class="badge"><?= $row['bidang_keahlian'] ?></span>
                                            </td>
                                            <td>
                                                <div class="action-buttons">
                                                    <a href="edit_dosen.php?id=<?= $row['id'] ?>" class="btn-icon edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                                    <a href="../config/hapus.php?type=dosen&id=<?= $row['id'] ?>" class="btn-icon delete" onclick="return confirm('Yakin hapus data ini?')"><i class="fa-regular fa-trash-can"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>

                    <?php if ($page == 'aktivitas'): ?>
                        <div class="table-responsive">
                            <table class="custom-table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th width="120">THUMBNAIL</th>
                                        <th>JUDUL KEGIATAN</th>
                                        <th>TANGGAL</th>
                                        <th>DESKRIPSI SINGKAT</th>
                                        <th width="120">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM tb_aktivitas";
                                    if ($search) {
                                        $query .= " WHERE judul LIKE '%$search%'";
                                    }
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)):
                                    ?>
                                        <tr>
                                            <td>
                                                <img src="../asset/foto/<?= !empty($row['foto']) ? $row['foto'] : 'default_activity.jpg' ?>" class="table-thumbnail" alt="Thumb">
                                            </td>
                                            <td>
                                                <strong><?= $row['judul'] ?></strong>
                                            </td>
                                            <td><?= $row['tanggal'] ?></td>
                                            <td><?= substr($row['deskripsi'], 0, 50) ?>...</td>
                                            <td>
                                                <div class="action-buttons">
                                                    <a href="edit_aktivitas.php?id=<?= $row['id'] ?>" class="btn-icon edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                                    <a href="../config/hapus.php?type=aktivitas&id=<?= $row['id'] ?>" class="btn-icon delete" onclick="return confirm('Yakin hapus data ini?')"><i class="fa-regular fa-trash-can"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </main>
    </div>
    <script>
    // FUNGSI LIVE SEARCH & CLEAR
    const searchInput = document.getElementById('searchInput');
    const clearBtn = document.getElementById('clearBtn');
    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tr'); // Ambil semua baris

    // 1. Event saat mengetik (Live Search)
    searchInput.addEventListener('keyup', function() {
        const filter = searchInput.value.toLowerCase();
        
        // Tampilkan/Sembunyikan tombol X
        if (filter.length > 0) {
            clearBtn.style.display = 'block';
        } else {
            clearBtn.style.display = 'none';
        }

        // Loop semua baris tabel (mulai index 1 untuk skip Header)
        for (let i = 1; i < rows.length; i++) {
            let cells = rows[i].getElementsByTagName('td');
            let match = false;

            // Cek setiap kolom dalam baris tersebut
            for (let j = 0; j < cells.length; j++) {
                if (cells[j]) {
                    let textValue = cells[j].textContent || cells[j].innerText;
                    if (textValue.toLowerCase().indexOf(filter) > -1) {
                        match = true;
                        break; // Jika ketemu di salah satu kolom, stop loop kolom
                    }
                }
            }

            // Tampilkan atau sembunyikan baris
            if (match) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    });

    // 2. Fungsi Tombol Clear (X)
    function clearSearch() {
        searchInput.value = ''; // Kosongkan input
        clearBtn.style.display = 'none'; // Sembunyikan tombol X
        
        // Tampilkan kembali semua baris
        for (let i = 1; i < rows.length; i++) {
            rows[i].style.display = "";
        }
        searchInput.focus(); // Kembalikan kursor ke input
    }
</script>
</body>

</html>