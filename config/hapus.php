<?php
include 'connect.php';

if (isset($_GET['type']) && isset($_GET['id'])) {
    $type = $_GET['type'];
    $id = $_GET['id'];

    if ($type == 'dosen') {
        $query = "DELETE FROM tb_dosen WHERE id='$id'";
        $redirect = "../admin/dashboard.php?page=dosen";
    } elseif ($type == 'aktivitas') {
        $query = "DELETE FROM tb_aktivitas WHERE id='$id'";
        $redirect = "../admin/dashboard.php?page=aktivitas";
    }

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='$redirect';</script>";
    } else {
        echo "Gagal menghapus data.";
    }
}
?>