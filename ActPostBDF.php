<?php

        include 'menuopciones.php';
        require("conexion.php");
        require("funciones.php");
        

        
if(isset($_POST['txtapellidos'])) :
        
    
        $codigo=$_POST['codigo'];
                $nombres=$_POST['txtnombres'];
                $apellidos=$_POST['txtapellidos'];
                $email=$_POST['txtdireccioncorreo'];
                $url=$_POST['txtpaginaweb'];
                $telefono=$_POST['txttelefono'];
                $sexo=$_POST['sexo'];
                $estadocivil=$_POST['estadocivil'];
                $codigopostal=$_POST['txtcodigopostal'];
                $distrito=$_POST['txtdistrito'];
                $mensaje=$_POST['txtmensaje'];
                $motivo=$_POST['txtmotivo'];
                $espacio=" ";
        
        $sqlInser="update clientes set nombres='$nombres', apellidos='$apellidos', email='$email', url='$url', telefono='$telefono',sexo='$sexo', estadocivil='$estadocivil', codigopostal='$codigopostal', distrito='$distrito', mensaje='$mensaje' , motivo='$motivo' where codigo='$codigo'";
        mysql_query($sqlInser);
                
         if ($mysqli->query($sqlInser) === TRUE):
            printf ("Registro Actualizado Correctamente<br>");
            printf($nombres.$espacio.$apellidos.$espacio.$email.$espacio.$url.$espacio.$telefono.$espacio.$sexo.$espacio.$estadocivil.$espacio.$codigopostal.$espacio.$distrito.$espacio.$mensaje.$espacio.$motivo);
         else:
            echo "Error: " . $sqlInser . "<br>" . $mysqli->error;
        endif;
        $mysqli->close();       
              
        endif;
        
        ?>
       

