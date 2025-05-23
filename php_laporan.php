<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];

    $sql = "SELECT * FROM transaksi WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
    $result = mysqli_query($conn, $sql);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="laporan.csv"');

    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'User ID', 'Total', 'Tanggal']);

    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, [$row['id'], $row['user_id'], $row['total'], $row['tanggal']]);
    }

    fclose($output);
    exit;
}
?>
