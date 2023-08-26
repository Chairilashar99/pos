<?php
include_once 'views/header.php';
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <a href="item.php?mode=create" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i>
                        Tambah</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 70px; text-align:center">No</th>
                                <th style="width: 150px; text-align:center">Gambar</th>
                                <th>Nama Item</th>
                                <th>Harga</th>
                                <th style="width: 100px; text-align:center">Stok</th>
                                <th style="width: 200px; text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 70px; text-align:center">1</td>
                                <td style="width: 150px; text-align:center"><img style="width: 100px" src="assets/images/jeruk.png" alt="">
                                </td>
                                <td>Jeruk</td>
                                <td>Rp35.000</td>
                                <td style="width: 100px; text-align:center">45</td>
                                <td style="width: 200px; text-align:center">
                                    <a href="item.php?mode=edit" class="btn btn-danger btn-sm"><i class="fa-solid fa-pen-to-square"></i>
                                        Ubah</a>
                                    <form action="" method="POST" style="display: inline;" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 70px; text-align:center">2</td>
                                <td style="width: 150px; text-align:center"><img style="width: 100px" src="assets/images/brokoli.png" alt="">
                                </td>
                                <td>Brokoli</td>
                                <td>Rp20.000</td>
                                <td style="width: 100px; text-align:center">90</td>
                                <td style="width: 200px; text-align:center">
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-pen-to-square"></i>
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