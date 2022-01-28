<?php
//Proses Delete
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($konek,"DELETE FROM petugas WHERE id_petugas = '$id'");
    
    if($query_delete){
        ?>
            <script>
                alert("Data Berhasil Di Delete");
                window.location.href='dashboard.php?page=petugas';
            </script>
        <?php
       
    }
}
////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>