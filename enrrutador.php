

<!-- LLAMAR PAGINAS -->
<?php
$opcion="inicio";
if(!isset($_GET['opcion']))
{
    //LLAMAR INFORMACION PAGINA INICIAL
    include("vista/pagina/home.php");

    }//FIN INICIO
 else{       


    if($_GET["opcion"]=='regis')
    {
        //LLAMAR FORMULARIO LOGIN
        include("vista/formulario/regis/frm_ins_regis.php");
    }//FIN HOME



    if($_GET["opcion"]=='inicio')
    {
        //LLAMAR FORMULARIO LOGIN
        include("vista/pagina/home.php");
    }//FIN HOME
      



    if($_GET["opcion"]=='login')
    {
        //LLAMAR FORMULARIO LOGIN
        include("vista/formulario/regis/frm_ins_login.php");
    }//FIN HOME


    //menu

    if($_GET["opcion"]=='nosotros')
    {
        //LLAMAR FORMULARIO LOGIN
        include("vista/formulario/regis/frm_ins_login.php");
    }//FIN HOME
    

  

    if($_GET["opcion"]=='contac')
    {
        //LLAMAR FORMULARIO LOGIN
        include("vista/formulario/regis/frm_ins_login.php");
    }//FIN HOME
    

    
      
    
    if($_GET["opcion"]=='inicioses')
    {
        //LLAMAR FORMULARIO LOGIN
        include("vista/pagina/inicioses.php");
    }//FIN HOME


    if($_GET["opcion"]=='catalogo')
    {
        //LLAMAR FORMULARIO LOGIN
        include("vista/pagina/catalogo.php");
    }//FIN HOME

           
    }

    if($_GET["opcion"]=='diagrama')
    {
        //LLAMAR FORMULARIO LOGIN
        include("vista/pagina/diagrama.php");
    }//FIN HOME


    
    if($_GET["opcion"]=='contactanos')
    {
        //LLAMAR FORMULARIO LOGIN
        include("vista/pagina/contacto.php");
    }//FIN HOME

    
    ?>



