<?php
    include '../layout/header.php';
?>

<div class="container text-center">
    <h1 class="mt-3 mb-3">LISTA CURSOS</h1>
    <div class="row justify-items-center mb-3">
        <div class="col-md-2 offset-10">
            <a href="" class="btn btn-success"><b><i class="fa-solid fa-plus"></i> Agregar</b></a>
        </div>
    </div>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th><th>Nombre Curso</th><th>Lugar</th><th>Docente</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table table-dark">
            <tr>
                <td>1</td>
                <td>ANGULAR</td>
                <td>LIMA</td>
                <td>JUAN PEREZ</td>
                <td>
                    <a href="" type="button" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen"></i></a>
                    <a href="" type="button" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
    include '../layout/footer.php';
?>