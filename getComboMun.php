
<script type="text/javascript" src="control.js"></script>
<?php
if($_POST['estado']!=0){
include("conexion.php");
$conexion=conectar();
?>   
<form method="get">    
Seleccione el municipio  <br>
    <select name="municipio" id="municipio" onchange="showCmbLoc()">
        <option value="0">Selección</option>
     <?php   
    $query =mysqli_query($conexion,"Select * from municipio where id_estado=".$_POST['estado']."");
        while($valores=mysqli_fetch_array($query)){
            echo '<option value="'.$valores[id_municipio].'">'.$valores[Nombre_mun].'</option>';
        }
        ?>
</select>  
</form>
<?php
    }else{
    echo "   ";
}
?>