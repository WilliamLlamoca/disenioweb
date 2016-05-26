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
        $contrasenia1=htmlspecialchars($_GET['actid']);
        $llave="Conductores";
        $datocodPost=desencripta($contrasenia1,$llave);
        
        $sql = "select * from clientes where codigo='$datocodPost'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array(MYSQLI_BOTH);
                $codigo=$row["codigo"];
                $nombres=$row["nombres"];
                $apellidos=$row["apellidos"];
                $email=$row["email"];
                $url=$row["url"];
                $telefono=$row["telefono"];
                $sexo=$row["sexo"];
                $estadocivil=$row["estadocivil"];
                $codigopostal=$row["codigopostal"];
                $distrito=$row["distrito"];
                $mensaje=$row["mensaje"];
                $motivo=$row["motivo"];
        	$result->free();
               
        
        
        
        
        ?>
        <form action="ActPostBDF.php" method="post">
            <table>
                
                     <tr>
                    <td>
                        *Nombres:
                    </td>
                    <td>
                        <input title="Se necesita un nombre" type="text" name="txtnombres" value="<?=$nombres?>"required autofocus="autofocus">
                     <input type="text" name="codigo" value=<?=$codigo?> style="visibility:hidden" >
                    </td>
                </tr>
                <tr>
                    <td>
                        *Apellidos:
                    </td>
                    <td>
                <input type="text" name="txtapellidos" value="<?=$apellidos?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        *Dirección de correo:
                    </td>
                    <td>
                        <input type="email" name="txtdireccioncorreo" placeholder="name@example.com" value="<?=$email?>"required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Página Web:
                    </td>
                    <td>
                        <input type="text" name="txtpaginaweb" value="<?=$url?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefono:
                    </td>
                    <td>
                        <input type="text" name="txttelefono" value="<?=$telefono?>">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Sexo:
                    </td>
                    <td> 
                        <select required name="sexo">
                            <option value="">Seleccione</option>
                            <?php 
                            
                            if($sexo=="masculino"):
                            echo "<option value=masculino selected>".$sexo."</option>";
                            echo "<option value=femenino>femenino</option>";
                            endif;
                            
                            if($sexo=="femenino"):
                            echo "<option value=masculino >masculino</option>";
                            echo "<option value=femenino selected>".$sexo."</option>";
                            endif;
                                                        
                            ?>
                            
                            
                        </select>
                                                                       
                    <!-- <input type="text" name="sexo" required><br> -->
                    </td>
                </tr>
                
                 <tr>
                    <td>
                    Estado Civil:
                    </td>
                  <td> 
                        <select required name="estadocivil">
                            <option value="">Seleccione</option>
                            <?php 
                            
                            if($estadocivil=="soltero"):
                            echo "<option value=soltero selected>".$estadocivil."</option>";
                            echo "<option value=casado>casado</option>";
                            endif;
                            
                            if($estadocivil=="casado"):
                            echo "<option value=soltero >soltero</option>";
                            echo "<option value=casado selected>".$estadocivil."</option>";
                            endif;
                                                        
                            ?>
                            
                            
                        </select>
                                                                       
                    <!-- <input type="text" name="sexo" required><br> -->
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Codigo Postal:
                    </td>
                    <td>
                        <input type="text" name="txtcodigopostal" value="<?=$codigopostal?>">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Distrito:
                    </td>
                    <td>
                <select name="txtdistrito" value="<?=$distrito?>">
                    <option value="cdolince"> Lince </option>
                    <option value="cdosanjuandelurigancho"> San juan de lurigancho </option>
                    <option value="cdolosolivos"> Los olivos </option>
                    <option value="cdojesusmaria"> Jesus maria </option>
                    <option value="cdoblanco" selected> Seleccione distrito </option>
                    
                </select>
                    </td>
                </tr>
                 <tr>
                    <td>
                        *Motivo del Mensaje:
                    </td>
                    <td>
                        <input type="text" name="txtmensaje"  value="<?=$mensaje?> "required>
                    </td>
                </tr>
                <tr>
                    <td>
                        *Cuerpo del Mensaje:
                    </td>
                    <td>
                        <textarea  name="txtmotivo" rows="4" cols="50"  maxlength="50"  value="<?=$motivo?>" required="required" ></textarea>
                    </td>
                </tr>
                <tr>
                        <td>
                            
                        </td>
                        <td><br>
          *Campos Obligatorios
                        </td>
                    </tr>
                 <tr>
                      <td colspan="2" align="center">
                    <button>Actualizar</button>
                    </td>
                    </tr>
            </table>
            </form>  
    </body>
</html>
