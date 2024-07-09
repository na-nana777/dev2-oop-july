<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card w-50 border-0 mx-auto">
            <div class="card-header border-0 bg-white">
                <div class="card-title text-center" >
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-10">
                            <h1 class="display-3 text-primary fw-bold text-start">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>
                            </div>
                        </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                            <div class="col-2">
                                <label for="username" class="form-label">Username</label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                            </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="col-10">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <input type="submit" value="Lobin" name="btn_login" class="btn btn-primary w-100 text-light">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col"></div>
                        <div class="col-10 text-center">
                        <button type="btn" class="btn btn-danger text-light" data-bs-toggle="modal" data-bs-target="#create-account">Create Account</button>
                        <?php include "create-account.php"; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>