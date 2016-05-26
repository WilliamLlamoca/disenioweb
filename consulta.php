<!DOCTYPE html>
<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['usuario'])) 
{
  header('Location: procesa.php'); 
  exit();
}
 ?>
<h1>Bienvenido: <?php echo $_SESSION['usuario']; ?></h1>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Clientes</title>
        
        <link rel="stylesheet" type="text/css" href="hoja_estilo.css">
        
    </head>
    <body>
        
        <?php
        include 'menuopciones.php';
        require("conexion.php");
        require("funciones.php");
        
           $sql = "select * from clientes";
        $result = $mysqli->query($sql);
                //or die ('Ha fallado la conexión: '.mysql_error($sql));
      
                mostrar_cabecera_tabla();
            
            
            while ($row = mysqli_fetch_array($result)):
                   Mostrardatos($row);
            endwhile;
            printf("</table>");
            mysqli_free_result($result);
     
        
        
        ?>
    </body>
</html>

  
  <a href="cerrarsesion.php">Cerrar Sesión</a>
  

 

