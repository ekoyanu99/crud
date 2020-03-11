<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Edit</title>
</head>
<body>
    <?php
        include "config.php";

        $id = val($_GET['id']);
        
        $sql = "SELECT * FROM calon_pegawai WHERE id = '$id'";

        $data = $conn->query($sql);
        $dt = $data->fetch_array();
    ?>
    <h1>Edit Data</h1>
    <form action="" method="post">
       <table>
           <tr>
               <th>Nama</th>
               <td>
                   <input type="text" name="nama" placeholder="Nama" value="<?= $dt['nama']; ?>">
               </td>
           </tr>
           <tr>
               <th>Alamat</th>
               <td>
                   <textarea name="alamat" placeholder="Alamat"><?= $dt['alamat']; ?></textarea>
               </td>
           </tr>
           <tr>
               <th>Jenis Kelamin</th>
               <td>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" <? echo ($jenis_kelamin=='Laki-Laki')?'checked':'' ?>Laki-laki</label>
			        <label><input type="radio" name="jenis_kelamin" value="Perempuan" <? echo ($jenis_kelamin=='Perempuan')?'checked':'' ?>Perempuan</label>
               </td>
           </tr>
           <tr>
               <th>Agama</th>
               <td>
                    <label><input type="radio" name="agama" value="Islam" <? echo ($agama=='Islam')?'checked':'' ?>Islam</label>
			        <label><input type="radio" name="agama" value="Kristen" <? echo ($agama=='Kristen')?'checked':'' ?>Kristen</label>
                    <label><input type="radio" name="agama" value="Hindu"Hindu <? echo ($agama=='Hindu')?'checked':'' ?></label>
			        <label><input type="radio" name="agama" value="Budha" <? echo ($agama=='Budha')?'checked':'' ?>Budha</label>
                    <label><input type="radio" name="agama" value="Kong Hu Chu" <? echo ($agama=='Kong Hu Chu')?'checked':'' ?>Kong Hu Chu</label>
               </td>
           </tr>
           <tr>
               <th>Pendidikan Terakhir</th>
               <td>
                   <input type="text" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" value="<?= $dt['pendidikan_terakhir']; ?>">
               </td>
           </tr>
           <tr>
               <th>Motto Kerja</th>
               <td>
                   <textarea name="motto_kerja" placeholder="Motto Kerja"><?= $dt['motto_kerja']; ?></textarea>
               </td>
           </tr>
           <tr>
               <td colspan="2" align="center">
                   <input type="submit" value="Edit" name="btn">
               </td>
           </tr>
       </table>
    </form>

    <?php
        if(isset($_POST['btn'])) {
            $nama = val($_POST['nama']);
            $alamat = val($_POST['alamat']);
            $jenis_kelamin = val($_POST['jenis_kelamin']);
            $agama = val($_POST['agama']);
            $pendidikan_terakhir = val($_POST['pendidikan_terakhir']);
            $motto_kerja = val($_POST['motto_kerja']);

            if(empty($nama) || empty($alamat) || empty($jenis_kelamin) || empty($agama) || empty($pendidikan_terakhir) || empty($motto_kerja)) {
                alert('Field tidak boleh kosong!');
            } else {
                $sql = "UPDATE calon_pegawai SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', agama = '$agama', pendidikan_terakhir = '$pendidikan_terakhir', motto_kerja = '$motto_kerja' WHERE id = '$id'";
                $edit = $conn->query($sql);

                if($edit) {
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