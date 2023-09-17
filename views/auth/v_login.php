<?php
include_once 'views/header.php';
?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <?php
                if ($status == 'success') {
                    echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
                } else if ($status == 'error') {
                    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
                }
                ?>


                <form action="login.php" method="POST">
                    <h1 class="h3 mb-3 fw-normal">Silahkan masuk</h1>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <input type="hidden" name="action" value="doLogin">
                    <button class="btn btn-primary w-100 py-2" type="submit"><i class="fa-solid fa-right-to-bracket"></i> Sign in</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include_once 'views/footer.php';
?>