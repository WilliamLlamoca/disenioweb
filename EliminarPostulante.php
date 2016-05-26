<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'menuopciones.php';
        require("conexion.php");
        require("funciones.php");
                   
        
        ?>
        <FORM ACTION="EliminarPostulante.php" method="post"> 
        Código de Cliente: <input type="text" name="eliminar" required><br>
        <button>Eliminar</button>
        </form>
        
            <?php
        if(isset($_POST['eliminar'])):
            $contrasenia1= $_POST['eliminar'];
        
     /*   $CADENA="delete * from clientes WHERE codigo='".$contrasenia1."'";
		$CONSULTA=MYSQL_QUERY($CADENA);
		//PREGUNTA SI EL RESULTADO DE LA CONSULTA TUVO EXITO
		IF($CONSULTA)
			ECHO "EL CLIENTE SE ELIMINO CORRECTAMENTE";
					ELSE
				ECHO "EL CLIENTE NO SE ELIMINO";
      
      * 
      *           
        
            printf("Registro Eliminado Satisfactoriamente<Br>");
        endif;
        ?>*/
       // <?php //Ejemplo curso PHP aprenderaprogramar.com
//$link = mysqli_connect("sql203.byethost7.com", "b7_10356956", "*****");
//mysqli_select_db($link, "b7_10356956_mibasededatos");
mysqli_query($mysqli, "DELETE FROM clientes WHERE codigo='".$contrasenia1."'");
mysqli_close($mysqli); // Cerramos la conexion con la base de datos
echo 'Se ha ejecutado la consulta sobre la base de datos';
endif;
?>
    </body>
</html>
