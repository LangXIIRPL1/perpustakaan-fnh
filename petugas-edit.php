<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <center><h2>Form Edit Data Petugas</h2></center>
        <!-- Proses query untuk menampilkan data yang mau di edit -->
        <?php
            $id = $_GET['id'];
            $query = mysqli_query($konek,"SELECT * FROM petugas WHERE id_petugas = '$id'");
            foreach ($query as $row) {
        ?>
        <!-- -------------------------------------------------- -->
        <form action="?page=petugas-edit-proses" method="POST">
            <!-- tambahkan input hidden untuk menyisipkan id petugas yg mau diedit, dibutuhkan pada saat edit proses query -->
            <input value="<?php echo $row['id_petugas'] ?>" class="form-control" type="hidden" name="id_petugas">
            <!-- --------------------------------------------------------------------------------------------------------- -->
        
            <div class="form-group mt-2">
            <label for="">Nama</label>
                <input value="<?php echo $row['nama'] ?>" class="form-control" type="text" name="nama" placeholder="nama" required>
            </div>
            <div class="form-group mt-2">
            <label for="">Jabatan</label>
                <input value="<?php echo $row['jabatan'] ?>" class="form-control" type="text" name="jabatan" placeholder="Jabatan" required>
            </div>
            <div class="form-group mt-2">
            <label for="">Nomor telepon</label>
                <input value="<?php echo $row['tlp'] ?>" class="form-control" type="text" name="tlp" placeholder="Telepon" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"><?php echo $row["alamat"]?></textarea>
            </div>
            <div class="form-group mt-2">
            <label for="">username</label>
                <input value="<?php echo $row['username'] ?>" class="form-control" type="text" name="username" placeholder="username" required>
            </div>
            <div class="form-group mt-2">
            <label for="">password</label>
                <input value="<?php echo $row['password'] ?>" class="form-control" type="text" name="password" placeholder="username" required>
            </div>
            <br>
            <center>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </center>
            <br>
        </form>
        <?php
        }
        ?>
    </div>
    <div class="col-3"></div>
</div>