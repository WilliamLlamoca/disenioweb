<?php
        
        include 'menuopciones.php';
        require("conexion.php");
        require("funciones.php");
        

        
if(isset($_POST['txtapellidos'])) :
        
        $apellidos= $_POST['txtapellidos'];
        $nombres= $_POST['txtnombres'];
        $email= $_POST['txtdireccioncorreo'];
        $url= $_POST['txtpaginaweb'];
        $telefono= $_POST['txttelefono'];
        $sexo=$_POST['rbsexo'];
        $estadocivil=$_POST['rbestadocivil'];
        $codigopostal=$_POST['txtcodigopostal'];
        $distrito=$_POST['txtdistrito'];
        $mensaje=$_POST['txtmensaje'];
        $motivo=$_POST['txtmotivo'];
        $espacio=" ";
        
        $sqlInser="insert INTO  clientes(codigo,nombres,apellidos,email, url, telefono,sexo,estadocivil,codigopostal,distrito,mensaje,motivo)values(null,'$nombres','$apellidos','$email','$url','$telefono','$sexo','$estadocivil','$codigopostal','$distrito','$mensaje','$motivo')";
        mysql_query($sqlInser);
                
         if ($mysqli->query($sqlInser) === TRUE):
            printf ("Registro Creado<br>");
            printf($nombres.$espacio.$apellidos.$espacio.$email.$url.$espacio.$telefono.$espacio.$sexo.$espacio);
         else:
            echo "Error: " . $sqlInser . "<br>" . $mysqli->error;
        endif;
        $mysqli->close();       
              
        endif;
        
        ?>
       
