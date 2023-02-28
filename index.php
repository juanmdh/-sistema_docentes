<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="assets/img/icono.png">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>
<body>

    <div class="containter justify-content-center">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Inicio Sesión</h1>
                    </div>
                    <div class="card-body justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <img src="assets/img/icono.png" class="rounded mx-auto d-block" height="200" width="200">
                            </div>
                        </div>
                        <form class="needs-validation" method="POST" action="controller/login.php" novalidate>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Correo Electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="contrasena" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Contraseña</label>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-5" align="center">
                                    <button type="submit" class="btn btn-outline-primary">Iniciar Sesión</button>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-2">
                                <div class="col-6 text-center">
                                    <a style="color:black" href="views/register/registro.php">Registrarse</a>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/validacion.js"></script>
</body>
</html>