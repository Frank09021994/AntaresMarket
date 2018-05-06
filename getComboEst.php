<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
<script type="text/javascript" src="control.js"></script>
</head>
<body>
<?php
include("conexion.php");
$conexion=conectar();
?>
<form method="get">    
Seleccione el estado  <br>
    <select name="estado" id="estado" onchange="showCmbMun()">
        <option value="0">Selección</option>
     <?php   
    $query =mysqli_query($conexion,"Select * from estado");
        while($valores=mysqli_fetch_array($query)){
            echo '<option value="'.$valores[id_estado].'">'.$valores[nombre_est].'</option>';
        }
        ?>
</select>   
</form>
<div id="comboMunicipio"></div>
<div id="comboLocalidad"></div>
</body>
</html>