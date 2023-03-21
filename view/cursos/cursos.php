<?php
    include '../layout/header.php';
    include '../../model/conexion.php';
    $sentencia = $con -> query("SELECT cursos.id, cursos.nombreCurso, cursos.lugarCurso, CONCAT(docentes.primer_nombre, ' ', docentes.segundo_nombre, ' ', docentes.primer_apellido, ' ', docentes.segundo_apellido) AS docente FROM cursos INNER JOIN docentes ON cursos.id_docente = docentes.id_docente");
    $cursos = $sentencia -> fetchALL(PDO::FETCH_OBJ);
?>

<div class="container text-center">
    <h1 class="mt-3 mb-3">LISTA CURSOS</h1>
    <div class="row justify-items-center mb-3">
        <div class="col-md-2 offset-10">
            <a href="registro-curso.php" class="btn btn-success"><b><i class="fa-solid fa-plus"></i> Agregar</b></a>
        </div>
    </div>


    <table id="tabla__cursos" class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th><th>Nombre Curso</th><th>Lugar</th><th>Docente</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table table-dark">
            <?php foreach ($cursos as $curso) {?>
            <tr>
                <td><?php echo $curso->id ?></td>
                <td><?php echo $curso->nombreCurso ?></td>
                <td><?php echo $curso->lugarCurso ?></td>
                <td><?php echo $curso->docente ?></td>
                <td>
                    <a 
                    href="actualizacion-curso.php?id=<?php echo $curso->id?>" type="button" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen"></i></a>
                    <a onclick="eliminarCurso(<?php echo $curso->id ?>)" type="button" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<script>
    jQuery(document).ready(function(){
        $('#tabla__cursos').DataTable({
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, 'All'],
            ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
              }
        });
    });
</script>

<script>
    function eliminarCurso(idCurso){
        Swal.fire({
                title: '¿Estás seguro de eliminar el curso?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {                    
                    var url="../../controller/cursos/eliminar-cursos.php?id="+idCurso;
                    $.ajax({
                        type:'POST',
                        url:url,
                        async:true,
                        success:function(r){

                        }
                    })
                    Swal.fire(
                    'Curso eliminado!',      
                    'Rgistre un nuevo curso',
                    'success'
                    ).then((result2)=>{
                        if (result2.isConfirmed){
                            parent.location.href="cursos.php"
                        }
                    })
                }
            })        
    }
</script>


<?php
    include '../layout/footer.php';
?>