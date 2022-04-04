<!DOCTYPE html>
<html lang="es">
<head>
  <title>Sistema domótico </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Domotica</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dispositivos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ayuda</a>
      </li>    
    </ul>
  </div>  
</nav>





<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-6">
      <h2>Habitación</h2>

      <div >
        Luz
        <br>
     <button style= "height: 60px ; width: 60px" onclick="encender()" type="button" class="btn btn-success">ON</button>

     <button style= "height: 60px ; width: 60px" onclick="apagar()" type="button" class="btn btn-danger">OFF</button>
         
  <img id="foco" class="img-thumbnail" style=" width: 80px; height: 80px; margin-left:10px"src="img/foco_apagado.jpg" alt="foco_apagado" >








<script>
function encender() {
   document.getElementById("foco").src ="img/foco_encendido.jpg";
window.location.href = 'enciende.php?'
window.location.href = 'index.php?'


}

function apagar() {
  document.getElementById("foco").src = "img/foco_apagado.jpg";
   window.location.href = 'apaga.php?'
window.location.href = 'index.php?'






}
</script>

     <br>
     <br>
     Ventilador
     <br>
     <button style= "height: 60px ; width: 60px" onclick="encenderr()" type="button" class="btn btn-success">ON</button>
     <button style= "height: 60px ; width: 60px" onclick="apagarr()" type="button" class="btn btn-danger">OFF</button>
<img id="ventilador" class="img-thumbnail" style=" width: 80px; height: 80px;  margin-left:10px"src="img/ventilador_apagado.jpg"   alt="img_ventilador">

<script>
function encenderr() {
   document.getElementById("ventilador").src ="img/ventilador_encendido.jpg";




const Http = new XMLHttpRequest();
const url='http://192.168.1.7/control.php?valor=1';
Http.open("GET", url);
Http.send();




}

function apagarr() {
  document.getElementById("ventilador").src = "img/ventilador_apagado.jpg";

const Http = new XMLHttpRequest();
const url='http://192.168.1.7/control.php?valor=2';;
Http.open("GET", url);
Http.send();


 


}
</script>





     <br>
     <br>
     Laser
     <br>
     <button style= "height: 60px ; width: 60px" onclick="encenderrr()" type="button" class="btn btn-success">ON</button>
     <button style= "height: 60px ; width: 60px" onclick="apagarrr()" type="button" class="btn btn-danger">OFF</button>
      



<img id="laser" class="img-thumbnail" style=" width: 80px; height: 80px;  margin-left:10px"src="img/laser_apagado.jpg"   alt="img_laser">

<script>
function encenderrr() {
   document.getElementById("laser").src ="img/laser_encendido.jpg";
   const Http = new XMLHttpRequest();
const url='http://192.168.1.7/control.php?valor=3';;
Http.open("GET", url);
Http.send();



}

function apagarrr() {
  document.getElementById("laser").src = "img/laser_apagado.jpg";

  const Http = new XMLHttpRequest();
const url='http://192.168.1.7/control.php?valor=4';;
Http.open("GET", url);
Http.send();

}
</script>

      </div>

      <p>Los estados de los dispositivos se han iniciado correctamente</p>
      


      <h3>Comedor</h3>

    
    <button style= "height: 60px ; width: 60px" onclick="on()" type="button" class="btn btn-success">ON</button>
     <button style= "height: 60px ; width: 60px" onclick="off()" type="button" class="btn btn-danger">OFF</button>
       


  <img id="foco_comedor" class="img-thumbnail" style=" width: 80px; height: 80px; margin-left:10px"src="img/foco_apagado.jpg" alt="foco_apagado" >



<script>
function on() {
   document.getElementById("foco_comedor").src ="img/foco_encendido.jpg";

    const Http = new XMLHttpRequest();
    const url='http://192.168.1.10/off';
    Http.open("GET", url);
    Http.send();

}

function off() {
  document.getElementById("foco_comedor").src = "img/foco_apagado.jpg";
 const Http = new XMLHttpRequest();
const url='http://192.168.1.10/on';
Http.open("GET", url);
Http.send();




}
</script>






            <br>
     <br>
 <h3>Reproductor de música  </h3>

 <input id="music" class="form-control" type="text" placeholder="Default input" aria-label="buscar">
  
<img style="height: 60px ; width: 60px"id="anterior" onclick="izquierda2()" src="img/izquierda.jpg" alt="anterior" >

<img  style="height: 60px ; width: 60px"   id="play" src="img/play.jpg" alt="stop" >

<img style="height: 60px ; width: 60px" id="siguiente" onclick="derecha2()" src="img/derecha.jpg" alt="siguiente" >
    


<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lista de Reproducción</button>
   
<button type="button" id= "actualizar" onclick="actualizar()" class="btn btn-primary">actualizar</button>

<button type="button" id= "apagarpc" onclick="apagarpc()" class="btn btn-primary">Apagar</button>

<button type="button" id= "ledrojo" onclick="ledrojo()" class="btn btn-primary">Led</button>
<button type="button" id= "ledrojooff" onclick="ledrojooff()" class="btn btn-primary">Ledoff</button>

<script>

function ledrojo() {
  

  const Http = new XMLHttpRequest();
  const url='http://192.168.1.7/control.php?valor=9';
  Http.open("GET", url);
  Http.send();

}

function ledrojooff() {
  

  const Http = new XMLHttpRequest();
  const url='http://192.168.1.7/control.php?valor=11';
  Http.open("GET", url);
  Http.send();

}


  function apagarpc() {
  

    const Http = new XMLHttpRequest();
    const url='http://192.168.1.7/control.php?valor=10';
    Http.open("GET", url);
    Http.send();

}
</script>

<script>




document.getElementById("actualizar").addEventListener("click",actualizar );





function actualizar() {
  var exec = require('ls').exec, child;

child = exec('ls',
    function (error, stdout, stderr) {
        console.log('stdout: ' + stdout);
        console.log('stderr: ' + stderr);
        if (error !== null) {
             console.log('exec error: ' + error);
        }
    });
 child();
}

</script>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Lista de Reproducción</h4>
      </div>
      <div class="modal-body">
      <div class="container-fluid bd-example-row">

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button">Button</button>
  </div>

<textarea name="" id="lista" cols="90" rows="10">

</textarea>
</div>
    
    
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


    </div>



<script>
    var file = 'musica/archivo.txt';
   var archivoTxt = new XMLHttpRequest();
   var array= []; 
   archivoTxt.open("GET", file, false);
   archivoTxt.onreadystatechange = function ()
    {
        if(archivoTxt.readyState === 4)
        {
            if(archivoTxt.status === 200 || archivoTxt.status == 0)
            {
              
                var allText = archivoTxt.responseText;
             

                document.getElementById("lista").innerHTML =  allText.split(" ");
               
                    for( i = 1 ; i < allText.lengt ; i ++){
                         
                    }
              
            }
        }
    }


 

archivoTxt.send(null);
</script>







<script>
var cont=0; 
var x = 1 ; 


document.getElementById("play").addEventListener("click",play );


function play() {
  if (cont == 0){
    dato = document.getElementById("music").value;
   document.getElementById("play").src ="img/stop.jpg";   

 


   
   cont = 1;

   const Http = new XMLHttpRequest();
const url='http://192.168.1.7/control.php?valor=5&musica="'+dato+'" ';
Http.open("GET", url);
Http.send();


  }else{
  document.getElementById("play").src = "img/play.jpg";

cont =0;

const Http = new XMLHttpRequest();
const url='http://192.168.1.7/control.php?valor=6';
Http.open("GET", url);
Http.send();

 

  }
}


function derecha(){
  x++; 
document.getElementById("siguiente").src ="img/derecha.jpg";

console.log(x);

const Http = new XMLHttpRequest();
const url='http://192.168.1.7/control.php?valor=7&next="'+x+'" ';

Http.open("GET", url);
Http.send();




}







function derecha2(){


document.getElementById("siguiente").src ="img/derecha2.jpg";

setTimeout('derecha()',1000);

}


function izquierda(){
  x--; 
document.getElementById("anterior").src ="img/izquierda.jpg";

console.log(x);
 const Http = new XMLHttpRequest();
 const url='http://192.168.1.7/control.php?valor=8&next="'+x+'" ';
Http.open("GET", url);
Http.send();


}

function izquierda2(){
document.getElementById("anterior").src ="img/izquierda2.jpg";
setTimeout('izquierda()',1000);
}




</script>










    <div class="col-sm-6">
    <h2>Cámara1</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <img style="-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 25%);"
      src="http://192.168.1.7:8081/">
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>  
    
      <br>
    <h2>Clima</h2>
      

      <div ><!-- weather widget start --><a target="_blank" href="https://hotelmix.es/weather/mapasingue-279814"><img src="https://w.bookcdn.com/weather/picture/32_279814_1_4_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=582&anc_id=6956" alt="booked.net"/></a><!-- weather widget end -->
      </div>


      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
     
      
     
      
    </div>

  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Todos los derechos reservados</p>
</div>



</body>
</html>
