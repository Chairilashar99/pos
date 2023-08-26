<?php
include_once 'views/header.php';
?>

<main>
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="item.php">Item</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Item</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <h5 class="mb-2 text-center">Form Item</h5>
                <form action="item.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="">Nama Item</label>
                        <input type="text" class="form-control" name="item-name" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Harga</label>
                        <input type="number" class="form-control" name="price" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Stok</label>
                        <input type="number" class="form-control" name="stock" required />
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Gambar</label>
                        <input type="file" name="image" class="form-control" />
                    </div>

                    <input type="hidden" name="action" value="create" />
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>
                        Simpan</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include_once 'views/footer.php';
?>