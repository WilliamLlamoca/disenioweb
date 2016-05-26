<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta Postulante</title>
                <link rel="stylesheet" type="text/css" href="css/hoja_estilo.css">
    </head>
    
   

    <body>
         <?php
   
        include 'menuopciones.php';
 
        ?>
        
        <FORM ACTION="ConsultarPostulante.php" method="post"> 
        Código a Buscar: <input type="text" name="consulta" required><br>
        <button>Buscar</button>
        </form>
 
  <?php
   
        
        require("conexion.php");
        require("funciones.php");
               
                
         if(isset($_POST['consulta'])):
             
            $contrasenia1= $_POST['consulta'];
              
        
        $datobusqueda=$contrasenia1;$sql = "select * from clientes where codigo=$contrasenia1";
        $result = $mysqli->query($sql);
            printf("<h1>Diseño Web</h1><Br>");
            printf("Año 2015<Br><br>");
            printf("Cliente Encontrado:<Br><Br>");
            printf("<table border=1 id=postulante>");
            printf("<caption id=postulante>Detalle del usuario</caption>");
            printf("<tr>");
            printf("<th>");
            printf("Codigo");
            printf("</th>");
            printf("<th>");
            printf("Nombres");
            printf("</th>");
            printf("<th>");
            printf("apellidos");
            printf("</th>");
            printf("<th>");
            printf("email");
            printf("</th>");  
            printf("<th>");
            printf("url");
            printf("</th>");
            printf("<th>");
            printf("telefono");
            printf("</th>");
            printf("<th>");
            printf("sexo");
            printf("</th>");
            printf("<th>");
            printf("estadocivil");
            printf("</th>");
            printf("<th>");
            printf("codigopostal");
            printf("</th>");
            printf("<th>");
            printf("distrito");
            printf("</th>");
            printf("<th>");
            printf("mensaje");
            printf("</th>");
            printf("<th>");
            printf("motivo");
            printf("</th>");
        
            printf("</tr>");
            while ($row = mysqli_fetch_array($result)):
                   Mostrardatos($row);
            endwhile;
            printf("</table>");
            mysqli_free_result($result);
     
        
        
        endif;
    
        
        // put your code here
        ?>
       
    </body>
</html>
