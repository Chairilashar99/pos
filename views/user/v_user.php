<?php
include_once 'views/header.php';
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <a href="user.php?mode=create" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i>
                        Tambah</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 70px; text-align: center;">No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th style="width: 200px; text-align: center;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="width: 70px; text-align: center;">1</td>
                                <td>Chairil Ashar</td>
                                <td>chairil@gmail.com</td>
                                <td style="width: 200px; text-align: center;">
                                    <a href="user.php?mode=edit" class="btn btn-danger btn-sm"><i class="fa-solid fa-pen-to-square"></i>
                                        Ubah</a>
                                    <form action="" method="POST" style="display: inline;" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once 'views/footer.php';
?>