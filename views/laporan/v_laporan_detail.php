<?php
include_once 'views/header.php';
?>

<main>
    <div class="container">

        <nav aria-label="breadcrumb" class="mb-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="laporan.php">Laporan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Laporan Penjualan Detail</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <h5 class="text-center mb-4">History Penjualan</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No Invoice</label>
                                <input type="text" class="form-control" name="invoice_no" value="INV001" disabled />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Transaksi</label>
                                <input type="text" class="form-control" name="transaction_date" value="27-Agustus-2023 15:00:00" disabled />
                            </div>
                        </div>
                    </div>
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
                                <th>Nama Item</th>
                                <th style="width: 70px; text-align: center;">Qty</th>
                                <th style="width: 100px; text-align: right;">Harga</th>
                                <th style="width: 100px; text-align: right;">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 70px; text-align: center;">1</td>
                                <td>Jeruk</td>
                                <td style="width: 70px; text-align: center;">3</td>
                                <td style="width: 100px; text-align: right;">Rp9.000</td>
                                <td style="width: 100px; text-align: right;">Rp27.000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td style="text-align: center;" colspan="3"><strong>TOTAL</strong></td>
                                <td style="text-align: right;" colspan="2"><strong>Rp27.000</strong></td>
                            </tr>
                        </tfoot>
                    </table>

                    <a href="laporan.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>

    </div>
</main>

<?php
include_once 'views/footer.php';
?>