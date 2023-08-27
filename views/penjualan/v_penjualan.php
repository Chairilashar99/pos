<?php
include_once 'views/header.php';
?>

<style>
    .item-box {
        border: 1px solid #d9d9d9;
        border-radius: 8px;
        text-align: center;
        padding: 20px;
    }

    .item-box:hover {
        cursor: pointer;
        border: 1px solid #1ab69d;
    }

    .item-box img {
        margin-bottom: 5px;
    }
</style>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-box mb-3">
                            <img style="height: 75px;" src="assets/images/jeruk.png" alt="" />
                            <div class="item-name">Jeruk</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <form action="">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="background: #f4f4f4; text-align: left">Item</th>
                                <th style="background: #f4f4f4; text-align: center">Harga</th>
                                <th style="background: #f4f4f4; text-align: center; width: 80px;">Qty</th>
                                <th style="background: #f4f4f4; text-align: right">Subtotal</th>
                            </tr>
                        </thead>

                        <tbody id="wrap-itemlist">
                            <tr id="row_1" class="row_item_list" item_id="1">
                                <input type="hidden" name="item_name[]" value="" />
                                <input type="hidden" name="item_id[]" value="" />
                                <input type="hidden" name="price[]" value="" />
                                <td>Jeruk</td>
                                <td style="text-align: center">9000</td>
                                <td style="text-align: center; width: 80px;"><input type="number" name="qty[]" class="form-control" /></td>
                                <td style="text-align: right">18000</td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="3" style="font-weight: bold; text-align:center; background: #f4f4f4;">TOTAL</td>
                                <td colspan="2" style="font-weight: bold; text-align:center; background: #f4f4f4;">Rp <span id="grandtotal">50.000</span></td>
                            </tr>
                        </tfoot>

                    </table>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include_once 'views/footer.php';
?>