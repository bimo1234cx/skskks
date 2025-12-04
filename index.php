<?php
include 'SleepRecord.php';
session_start();
?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Sistem Reminder Pola Tidur</h2>

    <p>Aplikasi untuk membantu mahasiswa memantau pola tidur harian agar lebih sehat.</p>

    <br>

    <a href="sleep_form.php" class="button">+ Input Data Tidur</a>
    <a href="sleep_list.php" class="button">Riwayat Tidur</a>

    <br><br><hr><br>

    <h3>Ringkasan Pola Tidur Terakhir:</h3>

    <?php
    if(isset($_SESSION['dataTidur']) && count($_SESSION['dataTidur']) > 0) {
        $last = end($_SESSION['dataTidur']);
        echo "<p><strong>Durasi Tidur:</strong> $last->durasi jam</p>";
        echo "<p><strong>Kualitas:</strong> <span class='status-$last->kualitas'>$last->kualitas</span></p>";
    } else {
        echo "<p>Belum ada data tidur yang dimasukkan.</p>";
    }
    ?>
</div>
