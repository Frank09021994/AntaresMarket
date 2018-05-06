<script type="text/javascript" src="control.js"></script>
<?php
include("conexion.php");
$conexion=conectar();
?>   
<form method="get">    
Seleccione la localidad <br>
    <select name="localidad" id="localidad" onchange="showCmb()">
        <option value="0">Selección</option>
    <?php   
$query =mysqli_query($conexion,"Select * from localidad where id_municipio=".$_POST['municipio']."");
        while($valores=mysqli_fetch_array($query)){
            echo '<option value="'.$valores[id_localidad].'">'.$valores[Nombre_loc].'</option>';
        }
        ?>
</select>
<br>    
</form>
