<?php
     if (isset($_SESSION['status'])) {
?>
<center><h1 class="mt-4 mb-3">Data Petugas</h1></center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#tambahpetugas">
  Tambah Data
</button>
<table class="table table-dark">
    <tr class="text-center">
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>No Telp</th>
        <th>Alamat</th>
        <th>Username</th>
        <th>Password</th>
        <th>--Action--</th>
    </tr>
    <?php
        $query = mysqli_query($konek,"SELECT * FROM petugas");
        $no = 1;
        foreach ($query as $row) {
    ?>
    <tr style="font-size: 11px; table-layout: fixed">
        <td align="center" valign="middle"><?php echo $no; ?></td>
        <td align="center" valign="middle"><?php echo $row['nama']; ?></td>
        <td align="center" valign="middle"><?php echo $row['jabatan']; ?></td>
        <td align="center" valign="middle"><?php echo $row['tlp']; ?></td>
        <td align="center" valign="middle"><?php echo $row['alamat']; ?></td>
        <td align="center" valign="middle"><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>

        <td align="center" valign="middle">
            <a href="?page=petugas-delete&delete=&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </a>
            <a href="?page=petugas-edit&edit=&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
            </a>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>

<!-- Modal -->
<div class="modal fade" id="tambahpetugas" tabindex="-1" aria-labelledby="tambahpetugasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tambahpetugasLabel">Form Tambah Anggota</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="?page=petugas-insert" method="post">
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" name="jabatan" required>
                        <option value="">--Pilih Jabatan--</option>
                        <option value="">Kepala Perpustakaan</option>
                        <option value="">Pustakawan</option>
                    </select>
                </div>
                
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="tlp" placeholder="Nomor Telepon">
                </div>
                <div class="form-group mt-2">
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"></textarea>
                </div>
                <div class="form-group mt-2">
                    <textarea name="username" class="form-control" placeholder="username"></textarea>
                </div>
                <div class="form-group mt-2">
                    <textarea name="password" class="form-control" placeholder="password"></textarea>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </form>
        </div>
        </div>
    </div>
</div>

<?php
}
?>