<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Tambah</title>
</head>
<body>
    <h1>Daftar</h1>
    <form action="" method="post">
       <table>
           <tr>
               <th>Nama</th>
               <td>
                   <input type="text" name="nama" placeholder="Nama">
               </td>
           </tr>
           <tr>
               <th>Alamat</th>
               <td>
                   <textarea name="alamat" placeholder="Alamat"></textarea>
               </td>
           </tr>
           <tr>
               <th>Jenis Kelamin</th>
               <td>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-laki</label>
			        <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
               </td>
           </tr>
           <tr>
               <th>Agama</th>
               <td>
                    <label><input type="radio" name="agama" value="Islam">Islam</label>
			        <label><input type="radio" name="agama" value="Kristen">Kristen</label>
                    <label><input type="radio" name="agama" value="Hindu">Hindu</label>
			        <label><input type="radio" name="agama" value="Budha">Budha</label>
                    <label><input type="radio" name="agama" value="Kong Hu Chu">Kong Hu Chu</label>
               </td>
           </tr>
           <tr>
               <th>Pendidikan Terakhir</th>
               <td>
                   <input type="text" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir">
               </td>
           </tr>
           <tr>
               <th>Motto Kerja</th>
               <td>
                   <textarea name="motto_kerja" placeholder="Motto Kerja"></textarea>
               </td>
           </tr>
           <tr>
               <td colspan="2" align="center">
                   <input type="submit" value="Daftar" name="btn">
               </td>
           </tr>
       </table>
    </form>

    <?php
        include "config.php";
        if(isset($_POST['btn'])) {
            $nama = val($_POST['nama']);
            $alamat = val($_POST['alamat']);
            $jenis_kelamin = val($_POST['jenis_kelamin']);
            $agama = val($_POST['agama']);
            $pendidikan_terkhir = val($_POST['pendidikan_terakhir']);
            $motto_kerja = val($_POST['motto_kerja']);
        
            if(empty($nama) || empty($alamat) || empty($jenis_kelamin) || empty($agama) || empty($pendidikan_terkhir) || empty($motto_kerja)) {
                alert('Field tidak boleh kosong!');
            } else {
                $sql = "INSERT into calon_pegawai(nama,alamat,jenis_kelamin,agama,pendidikan_terakhir,motto_kerja) VALUES('$nama','$alamat','$jenis_kelamin','$agama','$pendidikan_terkhir','$motto_kerja')";
                $add = $conn->query($sql);

                if($add) {
                    alert('Berhasil!');
                    redir('../crud');
                } else {
                    alert('Gagal!');
                }
            }
        }
    ?>
</body>
</html>