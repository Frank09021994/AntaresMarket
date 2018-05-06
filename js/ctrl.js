/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var xhr;
function creaObjeto() {
    if (window.ActiveXobject) {
        xhr = new ActiveXobject("Microsoft.XMLHttp");
    } else if ((window.XMLHttpRequest) || (typeof XMLHttpRequest) !== undefined) {
        xhr = new XMLHttpRequest();
    } else {
        alert("Su navegador no soporta AJAX");
        return;
    }
}//crearObjeto
function showCmbMun() {
    var est = document.getElementById("estado").value;
    verificaMuestraLocalidad(1);
    creaObjeto();
    xhr.open("POST", "getComboMun.php", true);
    xhr.onreadystatechange = verificaMuestraMun;
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send("estado="+est);
}

function verificaMuestraMun() {
    if (xhr.readyState === 4) {
        document.getElementById("comboMunicipio").innerHTML = xhr.responseText;
    }
}

function showCmbLoc() {
    creaObjeto();
    xhr.open("POST", "getComboLoc.php", true);
    xhr.onreadystatechange = verificaMuestraLocalidad;
    var mun = document.getElementById("municipio").value;
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send("municipio="+mun);
}

function verificaMuestraLocalidad(op) {
    if(op===1){
        document.getElementById("comboLocalidad").innerHTML = "";
        }else{
    if (xhr.readyState === 4) {
        document.getElementById("comboLocalidad").innerHTML = xhr.responseText;
    }
    }        
}

function showFrmRegistro() {
    creaObjeto();
    var tpoReg = document.getElementById("tipopersona").value;
    xhr.open("POST", "frmRegistro.php", true);
    xhr.onreadystatechange = verificaMuestraContIndex;
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send("tpoReg="+tpoReg);
    alert("tpoReg="+tpoReg);
}


function verificaMuestraContIndex() {
    if (xhr.readyState === 4) {
        alert("3");
        document.getElementById("contIndex").innerHTML = xhr.responseText;
    }        
}




function muestraCeldaRfc() {
    var haveRFC = document.getElementById("rdFact").value;
    alert(haveRFC);
    if(haveRFC===1){
document.getElementById("celdaRFC").innerHTML = "<div><label for='rfc'>RFC:</label> <input type='text' name='rfc' id='rfc' placeholder='Registro Federal de Contribuyente'/></div> <br>";
        }else{
        document.getElementById("celdaRFC").innerHTML = "";
    }        
}




function test(){
        alert("2333322");
}