<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_SESSION['dataTidur'][$id])) {
        unset($_SESSION['dataTidur'][$id]);
        $_SESSION['dataTidur'] = array_values($_SESSION['dataTidur']); // rapikan indeks
    }
}

header("Location: sleep_list.php");
exit();
?>
