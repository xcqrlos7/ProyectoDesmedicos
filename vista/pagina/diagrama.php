<?php

    include('diagrama_menu.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagrama de datos</title>
</head>
<body>
    
<div class="diagrama" style="width: 80%; margin-left: auto; margin-right: auto;">   

      <div class="portada" style="display: flex;">

        <img src="./imagenes/Proyect(actualizado).png" width="800px" heigth="400px" style="margin-top: 100px;
margin-left: 0px;
margin-right: 0px;" alt="">

<p class="text" style="background: -webkit-linear-gradient(right,  #3973ac , #fff);"> Este es el diagrama de datos echo por dia, en el que se puede ver
como esta distribuido la empresa de Desmedicos. En el diagrama podemos ver como los administradores administran el inventario suministrado por el departamento de compras, que a su vez negocia con provedores
, tambien como el inventario es manipulado por areas o mas especificamente por empleados, tambien como las areas generan productos, que luego son vendidos por el departamento de compras.
<br><br><br>
<button type="button" style="margin-left: 135px;" class="btn btn-outline-dark"><a href="./docs/Proyect(actualizado).dia~" download="Diagrama">Descargalo aquí</a> </button>

          </p>


      </div>
      <br><br><br><br>
      <hr style="height: 05px;  background-color: rgb(0,0,0); width: 100%; margin-bottom: 70px; border-radius: 5px; border-bottom-color: rgb(0,0,0) ;  ">

    
      <div class="block_cat" >
      <object class="pdfview" type="application/pdf" data="./docs/ArchiVer.pdf" style="margin-top: 100px; width: 800px; heigth: 700px;"></object>

       <br>
       <p style="margin-top: 150px;"> En este PDF, podras ver los 
          flujos de trabajo paso a paso, tanto concernientes a los factores 
          de negocio como operacionales de todos los componentes del proceso, ademas podras ver la mision
          , los objetivos, y ver la vision a futuro de Desmedicos S.A.S.  
          </p>

          <h1 style="margin-top: 250px;"><a href="./docs/ArchiVer.pdf" download="pdf">Click aqui para descargar el pdf</a> </h1>

      </div> <br><br><br><br> <hr style="height: 05px;  background-color: rgb(0,0,0); width: 100%; margin-bottom: 70px; border-radius: 5px; border-bottom-color: rgb(0,0,0) ;  ">
      <br><br><br><br>
      


  </div><br><br><br><br><br><br>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

*
    {
      font-family: 'Comfortaa', cursive;
    }

    .portada p
    {
      width: 500px;
        height: 600px;
        background-color:   #cad6e1 ;
        margin-top: 10%;
        margin-left: 15%;
        padding: 40px;
        float: right;
        
    }

    .portada img
    {
      
    }

  

    
    .blocks_cont span
    {

      color:  #3f98ec ;
      font-family: 'Comfortaa', cursive;

    }

    .block_cat
    {
      margin-top: 100px;
      display: flex;

    }
    .block_cat p
    {
      width: 40%;
      font-size: 20px;
      margin-right: 150px;
      margin-left: 100px;
      
    }

    .block_cat h1
    {
      margin-top: 150px;
      color: #3f98ec;
      
    }

    .block_cat img
    {
      
      
    }



    .block_dia
    {
      display: flex;
    }


    .block_dia p
    {
      width: 40%;
      font-size: 20px;
      margin-right: 150px;
      margin-left: 100px;
      
    }

    .block_dia h1
    {
      margin-top: 150px;
      float: right;
      color: #3f98ec;
    
      
    }

    .block_dia img
    {
      width: 35%;
      margin: 10px;
      margin-left: 0;
      height: 400px;
      border: 3px;
      border-color: #9dcfff;
      border-top-style: solid;
      border-top-width: 3px;
      border-left-width: 3px;
      border-left-style: solid;
      border-bottom-width: 3px;
      border-bottom-style: solid;
      border-right-width: 3px;
      border-right-style: solid;
      padding: 10px;
      float: left;

      
    }
      

    </style>






</body>
</html>