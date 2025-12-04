<?php
session_start();
include 'SleepRecord.php';

// kalau array session belum ada, buat dulu
if (!isset($_SESSION['dataTidur'])) {
    $_SESSION['dataTidur'] = [];
}

if (isset($_POST['submit'])) {
    $record = new SleepRecord($_POST['tanggal'], $_POST['jamTidur'], $_POST['jamBangun']);
    $_SESSION['dataTidur'][] = $record;

    // setelah simpan, pindah ke halaman riwayat
    header("Location: sleep_list.php");
    exit();
}
?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Input Data Tidur</h2>

    <form method="POST">
        Tanggal: <input type="date" name="tanggal" required><br><br>
        Jam Tidur: <input type="time" name="jamTidur" required><br><br>
        Jam Bangun: <input type="time" name="jamBangun" required><br><br>

        <button type="submit" name="submit" class="button save-btn">Simpan</button>
    </form>

    <br>
    <a href="sleep_list.php" class="button">Lihat Riwayat Tidur</a>
</div>
