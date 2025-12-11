<?php
include 'connect.php';

// --- FUNGSI UPLOAD GAMBAR ---
function uploadImage($file) {
    $targetDir = "../asset/foto/";
    // Pastikan folder img ada
    if (!file_exists($targetDir)) { mkdir($targetDir, 0777, true); }

    $fileName = basename($file["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array(strtolower($fileType), $allowTypes)){
        // Rename file agar unik (optional, disini pakai time)
        $newFileName = time() . '_' . $fileName;
        $targetFilePath = $targetDir . $newFileName;
        
        if(move_uploaded_file($file["tmp_name"], $targetFilePath)){
            return $newFileName;
        }
    }
    return false;
}

// --- LOGIC DOSEN ---

// 1. Tambah Dosen
if (isset($_POST['simpan_dosen'])) {
    $nama = $_POST['nama'];
    $nidn = $_POST['nidn'];
    $bidang = $_POST['bidang_keahlian'];
    $email = $_POST['email'];
    $wa = $_POST['no_wa'];
    $bio = $_POST['biografi'];
    $pendidikan = $_POST['riwayat_pendidikan'];
    
    $foto = uploadImage($_FILES['foto']);
    if(!$foto) $foto = ''; // Jika tidak upload, kosongkan

    $query = "INSERT INTO tb_dosen (nama, nidn, bidang_keahlian, email, no_wa, foto, biografi, riwayat_pendidikan) 
              VALUES ('$nama', '$nidn', '$bidang', '$email', '$wa', '$foto', '$bio', '$pendidikan')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Dosen Berhasil Ditambah!'); window.location='../admin/dashboard.php?page=dosen';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// 2. Edit Dosen
if (isset($_POST['update_dosen'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nidn = $_POST['nidn'];
    $bidang = $_POST['bidang_keahlian'];
    $email = $_POST['email'];
    $wa = $_POST['no_wa'];
    $bio = $_POST['biografi'];
    $pendidikan = $_POST['riwayat_pendidikan'];
    $foto_lama = $_POST['foto_lama'];

    // Cek apakah user upload foto baru
    if (!empty($_FILES['foto']['name'])) {
        $foto = uploadImage($_FILES['foto']);
    } else {
        $foto = $foto_lama;
    }

    $query = "UPDATE tb_dosen SET 
              nama='$nama', nidn='$nidn', bidang_keahlian='$bidang', 
              email='$email', no_wa='$wa', biografi='$bio', 
              riwayat_pendidikan='$pendidikan', foto='$foto' 
              WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Dosen Berhasil Diupdate!'); window.location='../admin/dashboard.php?page=dosen';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// --- LOGIC AKTIVITAS ---

// 3. Tambah Aktivitas
if (isset($_POST['simpan_aktivitas'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    
    $foto = uploadImage($_FILES['foto']);
    if(!$foto) $foto = '';

    $query = "INSERT INTO tb_aktivitas (judul, deskripsi, tanggal, foto) 
              VALUES ('$judul', '$deskripsi', '$tanggal', '$foto')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Aktivitas Berhasil Ditambah!'); window.location='../admin/dashboard.php?page=aktivitas';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// 4. Edit Aktivitas
if (isset($_POST['update_aktivitas'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $foto_lama = $_POST['foto_lama'];

    if (!empty($_FILES['foto']['name'])) {
        $foto = uploadImage($_FILES['foto']);
    } else {
        $foto = $foto_lama;
    }

    $query = "UPDATE tb_aktivitas SET 
              judul='$judul', deskripsi='$deskripsi', 
              tanggal='$tanggal', foto='$foto' 
              WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Aktivitas Berhasil Diupdate!'); window.location='../admin/dashboard.php?page=aktivitas';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>