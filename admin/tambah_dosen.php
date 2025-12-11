<?php include '../config/connect.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Dosen</title>
    <link rel="stylesheet" href="../asset/css/crud.css">
</head>
<body style="background: #f3f4f6;"> <div class="login-container" style="max-width: 800px; margin-top: 50px;">
        <div class="login-header">
            <h1>Tambah Data Dosen</h1>
        </div>
        <div class="login-body">
            <a href="dashboard.php?page=dosen" class="back-button" style="color: #333; margin-bottom: 20px;">&larr; Kembali</a>
            
            <form action="../config/proses.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Lengkap & Gelar</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group" style="display:flex; gap: 20px;">
                    <div style="flex:1">
                        <label>NIDN</label>
                        <input type="text" name="nidn" class="form-control">
                    </div>
                    <div style="flex:1">
                        <label>Bidang Keahlian / Jabatan</label>
                        <input type="text" name="bidang_keahlian" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" style="display:flex; gap: 20px;">
                    <div style="flex:1">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div style="flex:1">
                        <label>No WhatsApp</label>
                        <input type="text" name="no_wa" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label>Biografi Singkat</label>
                    <textarea name="biografi" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Riwayat Pendidikan</label>
                    <textarea name="riwayat_pendidikan" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" name="simpan_dosen" class="btn-login">Simpan Data Dosen</button>
            </form>
        </div>
    </div>
</body>
</html>