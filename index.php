<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimum-scale=1.0">    
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
<script type="text/javascript" src="js/ctrl.js"></script>
<link rel="stylesheet" href= "css/bootstrap.min.css"> 
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>   
    
</head>
<body>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Registro</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Elija el tipo de registro</h4>
      </div>
      <div class="modal-body">
        <form method="post">   
         <select name="tipopersona" id="tipopersona" onchange="showFrmRegistro()">
          <option value="0">Selección</option>
          <option value="1"/>Persona</option><br> 
          <option value="2"/>Empresa</option><br> 
         </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </form>
    </div>
 </div>
</div>
<div id="contIndex"></div> 


<input type="button" value="ok" onclick="test()">


 <div><label for='factura'>Está registrado en hacienda?</label> 
S&iacute;<input type='radio' name='rdFact' id='rdFact' value='1' onclick='muestraCeldaRfc()'/>&nbsp;
&nbsp; No<input type='radio' name='rdFact' id='rdFact' value='0' onclick='muestraCeldaRfc()'/>
    </div> <br>
<div id='celdaRFC'></div>




</body>
</html>