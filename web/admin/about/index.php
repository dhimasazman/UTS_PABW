<?php
include_once("../config.php");

?>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
<!-- 
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Tentang</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='about/create.php?page=tentang' class="btn btn-info"><i class="fas fa-plus"></i>Tambah Tentang</a>
                        <!-- </div> -->
                        <!-- /.card-tools -->
                    <!-- </div> -->

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Content</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT * FROM tb_tentang ORDER BY id DESC");
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['judul'] ?></td>
                                    <td><?= $data['content'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href='about/edit.php?id=<?= $data['id'] ?>&page=tentang'>Edit</a>
                                        <a class="btn btn-danger" onclick='return confirmDelete()' href='about/delete.php?id=<?= $data['id'] ?>&page=tentang'>Hapus</a>
                                    </td>
                                </tr><?php } ?>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>