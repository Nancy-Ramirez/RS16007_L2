<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Libros</title>
    <?php require_once "menu.php"; ?>
    <?php require_once __DIR__ . '/../Modelos/conexion.php';
        $clib = new conectar();
        $conexion = $clib ->conexion();
        $sql = "SELECT AutorID, PrimerNombre, PrimerApellido
        FROM autores";
        $result=mysqli_query($conexion,$sql);    
?>
</head>
<div class="container">
        <h1>Libros</h1>
        <div class="row">
            <div class="col-sm-4">
                <form id="frmLibros" enctype="multipart/form-data">
                    <label>Titulo del libro</label>
                    <input type="text" class="form-control input-sm" id="titulo_libro" name="titulo_libro">
                    <label>ISBN</label>
                    <input type="text" class="form-control input-sm" id="isbn" name="isbn">
                    <label>Stock</label>
                    <input type="text" class="form-control input-sm" id="stock" name="stock">
                    <label>Autor</label>
                    <select class="form-control input-sm" name="id_autor" id="id_autor">
							<option value="A">Seleccione un Autor</option>
							<?php while($clib=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver[0]?>"><?php echo $ver[1]?></option>
							<?php endwhile; ?>
						</select>
                    <p></p>
                    <span id="btnAgregaLibro" class="btn btn-primary">Agregar</span>
                    <a href=""></a>
                </form>
            </div>
            <div class="col-sm-8">
                <div id="tablaLibroLoad"></div>
            </div>
        </div>
    </div>
<body>
    
</body>
</html>

<script type= "text/javascript">
    function agregarLibro(LibroID){
        $.ajax({
            type: "POST",
            data: "idLib=" + LibroID,
            url: "/Controladores/Libros/obtenerLibro.php",
            success: function(l){
                dato = jQuery.parseJSON(l);
                $('#titulo_libro').val(dato['TituloLibro']);
                $('#isbn').val(dato['ISBN']);
                $('#stock').val(dato['Stock']);
                $('#id_autor').val(dato['AutorID']);
            }
        })
    }
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#tablaLibroLoad').load("Libros/TablaLibros.php");

    $('#btnAgregaLibro').click(function() {
        var formData = new FormData(document.getElementById("frmLibros"));

        $.ajax({
            url: "../Controladores/Libros/AgregarLibro.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,

            success: function(r) {
                    $('#frmLibros')[0].reset();
                    $('#tablaLibroLoad').load("Libros/TablaLibros.php");
            }
        });

    });
});
</script>
