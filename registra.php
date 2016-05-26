        <?php
        //$codigo=$_POST['codigo'];
        $nombres=$_POST['txtnombres'];
        $apellidos=$_POST['txtapellidos'];
        $direccioncorreo=$_POST['txtdireccioncorreo'];
        $paginawweb=$_POST['txtpaginaweb'];
        $telefono=$_POST['txttelefono'];
        $sexo=$_POST['rbsexo'];
        $estadocivil=$_POST['rbestadocivil'];
        $codigopostal=$_POST['txtcodigopostal'];
        $distrito=$_POST['txtdistrito'];
        $mensaje=$_POST['txtmensaje'];
        $motivo=$_POST['txtmotivo'];
      
        $servidor='localhost';
        $usuario='root';
        $clave='';
        
        $conexion=@mysql_connect($servidor,$usuario,$clave);
        
        if ($conexion)
        {
            $data=  mysql_select_db('disenoweb',$conexion);
            if($data)
            {
                $cadena="insert into clientes (nombres,apellidos,email,url,telefono,sexo,estadocivil,codigopostal,distrito,mensaje,motivo)
                    values('".$nombres."','".$apellidos."','".$direccioncorreo."','".$paginawweb."','".$telefono."','".$sexo."','".$estadocivil."','".$codigopostal."','".$distrito."','".$mensaje."','".$motivo."')";
                        $consulta=mysql_query($cadena);
                            if($consulta)
                            echo "los datos se grabaron correctamente";
 else 
          echo "los datos no grabaron";
 }
 
 
 else
     echo "la conexion a la base de datos no tuvo exito";
            }
            else
            {
                echo "la conexion no ha tenido exito<br>";
                echo "número del error:".mysql_errno()."<br>";
                echo "descripcion del error:".mysql_error();
        
            }
        ?>
        <br>
    <center>
        <a href="contactar.html">regresar</a>
    </center>
       
