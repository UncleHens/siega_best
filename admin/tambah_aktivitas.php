<?php include '../config/connect.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Aktivitas</title>
    <link rel="stylesheet" href="../asset/css/crud.css">
</head>
<body style="background: #f3f4f6;">
    <div class="login-container" style="max-width: 800px; margin-top: 50px;">
        <div class="login-header">
            <h1>Tambah Aktivitas Baru</h1>
        </div>
        <div class="login-body">
            <a href="dashboard.php?page=aktivitas" class="back-button" style="color: #333; margin-bottom: 20px;">&larr; Kembali</a>
            
            <form action="../config/proses.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Judul Kegiatan</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Pelaksanaan</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Thumbnail / Foto Kegiatan</label>
                    <input type="file" name="foto" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi Lengkap</label>
                    <textarea name="deskripsi" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" name="simpan_aktivitas" class="btn-login">Simpan Aktivitas</button>
            </form>
        </div>
    </div>
</body>
</html>