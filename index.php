<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    <h1>Toko Sinau Crypto</h1>
    <a href="tambah.php">Daftar</a>
    <table border="1px" width="800px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Pendidikan Terakhir</th>
            <th>Motto Kerja</th>
            <th>Opsi</th>

            <!-- id	nama	alamat	jenis_kelamin	agama	pendidikan_terakhir	motto_kerja	 -->
        </tr>
        <?php
            include "config.php";
            $sql = "SELECT * FROM calon_pegawai"; // * artinya menampilkan semua data yang ada
            $data = $conn->query($sql);
            $no = 1;
            while($dt = $data->fetch_array()) :
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $dt['nama']; ?></td>
            <td><?= $dt['alamat']; ?></td>
            <td><?= $dt['jenis_kelamin']; ?></td>
            <td><?= $dt['agama']; ?></td>
            <td><?= $dt['pendidikan_terakhir']; ?></td>
            <td><?= $dt['motto_kerja']; ?></td>
            <td align="center">
                <a onclick="return confirm('Yakin?')" href="hapus.php?id=<?= $dt['id']; ?>">Hapus</a>
                |
                <a href="edit.php?id=<?= $dt['id']; ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>