<?php


switch($_POST['tpoReg']){
    case 0:
       echo "";
    break;    
        
    case 1:
        echo "<form action='insertar_cliente2.php' method='post' name='form'>
<h1>REGISTRO PERSONA FISICA</h1>

<div><label for='nombre'>Nombre:</label><br>
<input type='text' name='nombre' id='nombre' placeholder='Nombre(s)' required/>
    </div> <br>

<div><label for='apppat'>Apellido Paterno:</label><br>
<input type='text' name='apppat' id='apppat' placeholder='Apellido Paterno' required/>
    </div> <br>

<div><label for='appmat'>Apellido Materno:</label><br>
<input type='text' name='appmat' id='appmat' placeholder='Apellido Materno' required/>
    </div> <br>
    
    <div><label for='curp'>Clave Unica de Registro de Poblacion (CURP):</label><br>
<input type='text' name='curp' id='curp' placeholder='CURP' required/>
    </div> <br>

        <div><label for='telefono'>Teléfono:</label><br>
<input type='text' name='telefono' id='telefono' placeholder='Telefono' required/>
    </div> <br>
    
    <div><label for='email'>E-mail:</label><br>
<input type='email' name='email' id='email' placeholder='ejemplo@ejemplo.com' required/>
    </div> <br>

        <div><label for='factura'>Factura:</label><br>
<input type='text' name='factura' id='factura' placeholder='Factura'/>
    </div> <br>

            <div><label for='rfc'>Registro Federal de Contribuyente (RFC):</label><br>
<input type='text' name='rfc' id='rfc' placeholder='RFC'/>
    </div> <br>";

include("conexion.php");
$conexion=conectar();

echo "<form method='get'>    
Seleccione el estado  <br>
    <select name='estado' id='estado' onchange='showCmbMun()'>
        <option value='0'>Selección</option>";
    $query =mysqli_query($conexion,"Select * from estado");
        while($valores=mysqli_fetch_array($query)){
            echo '<option value="'.$valores[id_estado].'">'.$valores[nombre_est].'</option>';
        }
echo "</select>   
</form>
<div id='comboMunicipio'></div>
<div id='comboLocalidad'></div>";

echo "<div><label for='user'><strong>USUARIO</strong></label><br>
<input type='text' name='user' id='user' placeholder='Usuario para iniciar sesión' required/>
</div> <br>
    
    
<div><label for='pass'><strong>CONTRASE&Ntilde;A</strong></label><br>
<input type='password' name='pass' id='pass' placeholder='Password para iniciar sesión' required/>
</div> <br>
      
    <div><input type='submit' value='Registrar'/>
    </div> <br>

    <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Registro</button>
</form>";
 break;    
        
    case 2:
        
    break;
}    
?>