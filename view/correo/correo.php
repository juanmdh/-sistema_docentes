<?php
    include '../layout/header.php';
?>
<div class="container  mt-5 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Envío Correo</h1>
                    </div>
                    <div class="card-body justify-content-center">
                    <form action="../../controller/correo/correo.php" method="POST" class="needs-validation" novalidate>
                        <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-floating mt-3">
                                        <input type="text" name="asunto" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Asunto</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mt-3">
                                        <input type="email" name="correo" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Correo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mt-3">
                                        <input type="email" name="destinatario" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Destinatario</label>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-floating mt-3">
                                        <textarea style="height: 100px;" type="text" name="mensaje" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required></textarea>
                                        <label for="floatingInputGrid">Mensaje</label>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-3">
                                    <div class="col-5">
                                        <button type="submit" class="btn btn-outline-success">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php
include '../layout/footer.php';
?>