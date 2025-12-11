<?php 
include '../config/connect.php'; 
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_aktivitas WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Aktivitas</title>
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body style="background: #f3f4f6;">
    <div class="login-container" style="max-width: 800px; margin-top: 50px;">
        <div class="login-header">
            <h1>Edit Aktivitas</h1>
        </div>
        <div class="login-body">
            <a href="dashboard.php?page=aktivitas" class="back-button" style="color: #333; margin-bottom: 20px;">&larr; Kembali</a>
            
            <form action="../config/proses.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <input type="hidden" name="foto_lama" value="<?= $data['foto'] ?>">

                <div class="form-group">
                    <label>Judul Kegiatan</label>
                    <input type="text" name="judul" class="form-control" value="<?= $data['judul'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Pelaksanaan</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Ganti Thumbnail (Biarkan kosong jika tidak diganti)</label>
                    <input type="file" name="foto" class="form-control">
                    <small>File saat ini: <?= $data['foto'] ?></small>
                </div>
                <div class="form-group">
                    <label>Deskripsi Lengkap</label>
                    <textarea name="deskripsi" class="form-control" rows="5" required><?= $data['deskripsi'] ?></textarea>
                </div>
                <button type="submit" name="update_aktivitas" class="btn-login">Update Aktivitas</button>
            </form>
        </div>
    </div>
</body>
</html>