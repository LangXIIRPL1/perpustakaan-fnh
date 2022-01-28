<!-- Proses Update -->
<?php
  $id      = $_POST['id_petugas'];
  $nama              = $_POST['nama'];
  $jabatan           = $_POST['jabatan'];
  $tlp               = $_POST['tlp'];
  $alamat            = $_POST['alamat'];
  $username          = $_POST['username'];
  $password          = $_POST['password'];
  
  $options = [
    'cost' => 12,
];
$password_enkript = password_hash($password, PASSWORD_BCRYPT, $options);

    $query_update = mysqli_query($konek,"UPDATE petugas SET id_petugas = '$id', 
                                                            nama = '$nama',
                                                            jabatan = '$jabatan',
                                                            tlp = '$tlp', 
                                                            alamat = '$alamat', 
                                                            username = '$username', 
                                                            password = '$password_enkript' 
                                                            WHERE id_petugas = '$id'");

if($query_update)
{
    ?>
    <script>
        alert('data di simpan');
        window.location.href='?page=petugas';
    </script>
    }
else
{
    ?>
    <script>
        alert('data di gagal simpan');
        window.location.href='?page=petugas';
    </script>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>