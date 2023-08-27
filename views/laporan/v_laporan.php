<?php
include_once 'views/header.php';
?>

<main>
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="user.php">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form User</li>
            </ol>
        </nav>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="box">
                    <form action="">
                        <div class="row">
                            <div class="col-md-2">
                                <input type="text" name="startdate" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <input type="text" name="enddate" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Filter</button>
                                <a href="" class="btn btn-danger"><i class="fa-solid fa-download"></i> Export</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 70px; text-align: center;">No</th>
                                <th>No. Invoice</th>
                                <th>Tanggal</th>
                                <th style="width: 200px; text-align: right;">Total Harga</th>
                                <th style="width: 200px; text-align: center;">Status Pembayaran</th>
                                <th style="width: 100px; text-align: center;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="width: 70px; text-align: center;">1</td>
                                <td>INV001</td>
                                <td>27 Agustus 2023 15:00:00</td>
                                <td style="width: 200px; text-align: right;">Rp35.000</td>
                                <td style="width: 200px; text-align: center;">Cash</td>
                                <td style="width: 100px; text-align: center;">
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-eye"></i> Lihat</a>
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