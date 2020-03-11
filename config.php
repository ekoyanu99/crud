<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "pendaftaran_pegawai";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_errno) {
        echo "Koneksi gagal". $conn->connect_error;
    }

    function alert($a) {
        echo "<script>
                alert('".$a."');
        </script>>";
    }

    function redir($r) {
        echo "<script>
                document.location = '".$r."'
        </script>";
    }

    function val($v) {
        global $conn;
        return $conn->real_escape_string($v);
    }
?>