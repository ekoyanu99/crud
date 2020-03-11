<?php
    include "config.php";
    
    $id = val($_GET['id']);

    $sql = "DELETE FROM calon_pegawai WHERE id = '$id'";
    $del = $conn->query($sql);

    if($del) {
        alert('Berhasil!');
        redir('../crud');
    } else {
        alert('Gagal!');
        redir('../crud');
    }
?>