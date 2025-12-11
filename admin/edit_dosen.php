<?php 
include '../config/connect.php'; 
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_dosen WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Dosen</title>
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body style="background: #f3f4f6;">
    <div class="login-container" style="max-width: 800px; margin-top: 50px;">
        <div class="login-header">
            <h1>Edit Data Dosen</h1>
        </div>
        <div class="login-body">
            <a href="dashboard.php?page=dosen" class="back-button" style="color: #333; margin-bottom: 20px;">&larr; Kembali</a>
            
            <form action="../config/proses.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <input type="hidden" name="foto_lama" value="<?= $data['foto'] ?>">

                <div class="form-group">
                    <label>Nama Lengkap & Gelar</label>
                    <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
                </div>
                <div class="form-group" style="display:flex; gap: 20px;">
                    <div style="flex:1">
                        <label>NIDN</label>
                        <input type="text" name="nidn" class="form-control" value="<?= $data['nidn'] ?>">
                    </div>
                    <div style="flex:1">
                        <label>Bidang Keahlian / Jabatan</label>
                        <input type="text" name="bidang_keahlian" class="form-control" value="<?= $data['bidang_keahlian'] ?>" required>
                    </div>
                </div>
                <div class="form-group" style="display:flex; gap: 20px;">
                    <div style="flex:1">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>">
                    </div>
                    <div style="flex:1">
                        <label>No WhatsApp</label>
                        <input type="text" name="no_wa" class="form-control" value="<?= $data['no_wa'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Ganti Foto (Biarkan kosong jika tidak diganti)</label>
                    <input type="file" name="foto" class="form-control">
                    <small>Foto saat ini: <?= $data['foto'] ?></small>
                </div>
                <div class="form-group">
                    <label>Biografi Singkat</label>
                    <textarea name="biografi" class="form-control" rows="3"><?= $data['biografi'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Riwayat Pendidikan</label>
                    <textarea name="riwayat_pendidikan" class="form-control" rows="3"><?= $data['riwayat_pendidikan'] ?></textarea>
                </div>
                <button type="submit" name="update_dosen" class="btn-login">Update Data Dosen</button>
            </form>
        </div>
    </div>
</body>
</html>