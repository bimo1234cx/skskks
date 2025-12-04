<?php
include 'SleepRecord.php';
session_start();
?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Riwayat Pola Tidur</h2>

    <a href="sleep_form.php" class="button">+ Tambah Data Tidur</a>
    <br><br>

    <table>
        <tr>
            <th>Aksi</th>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jam Tidur</th>
            <th>Jam Bangun</th>
            <th>Durasi (Jam)</th>
            <th>Kualitas</th>
        </tr>

        <?php
        if (isset($_SESSION['dataTidur']) && count($_SESSION['dataTidur']) > 0) {
            $no = 1;
            foreach ($_SESSION['dataTidur'] as $id => $data) {
                echo "
                <tr>
                    <td>
                        <a href='delete.php?id=$id' class='button' style='background:#dc3545'>Hapus</a>
                    </td>
                    <td>$no</td>
                    <td>$data->tanggal</td>
                    <td>$data->jamTidur</td>
                    <td>$data->jamBangun</td>
                    <td>$data->durasi</td>
                    <td class='status-$data->kualitas'>$data->kualitas</td>
                </tr>";
                $no++;
            }
        }
        ?>
    </table>

    <br>
    <a href="index.php" class="button">Dashboard</a>
</div>
