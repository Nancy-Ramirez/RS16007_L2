<?php
require_once "../../Modelos/conexion.php";
$cvn = new conectar();
$conexion = $cvn ->conexion();
$sql = "SELECT
        lib.TituloLibro,
        ISBN,
        Stock,
        AutorID
        FROM libros as lib
        group by lib.LibroID";
$result = mysqli_query($conexion, $sql);
?>

<table class = "table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Libros</label></caption>
    <tr>
        <td>Titulo del libro</td>
        <td>ISBN</td>
        <td>Stock</td>
        <td>Autor</td>
    </tr>
    <?php while ($libr = mysqli_fetch_row($result)) :?>
        <tr>
            <td><?php echo $libr[0]; ?></td>
            <td><?php echo $libr[1]; ?></td>
            <td><?php echo $libr[2]; ?></td>
            <td><?php echo $libr[3]; ?></td>
        </tr>
    <?php endwhile;?>
</table>