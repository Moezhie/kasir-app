<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total = $_POST['total'];
    $tanggal = date('Y-m-d');
    $user_id = $_SESSION['user_id'] ?? 1; // Ganti dengan user_id dari session

    $sql = "INSERT INTO transaksi (user_id, total, tanggal) VALUES ('$user_id', '$total', '$tanggal')";
    if (mysqli_query($conn, $sql)) {
        // Kosongkan keranjang
        echo "<script>localStorage.removeItem('keranjang'); window.location='cetak_struk.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
