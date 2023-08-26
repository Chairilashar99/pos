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

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="box">
                    <h5 class="mb-2 text-center">Form User</h5>
                    <form action="item.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Nama User</label>
                            <input type="text" class="form-control" name="user_name" required />
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required />
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password" required />
                        </div>

                        <input type="hidden" name="action" value="create" />
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>
                            Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once 'views/footer.php';
?>