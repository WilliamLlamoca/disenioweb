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
        // put your code here
        ?>
        <FORM ACTION="RegPostBD.php" method="post"> 
            <table>
                
                     <tr>
                    <td>
                        *Nombres:
                    </td>
                    <td>
                <input title="Se necesita un nombre" type="text" name="txtnombres" required autofocus="autofocus">
                    </td>
                </tr>
                <tr>
                    <td>
                        *Apellidos:
                    </td>
                    <td>
                <input type="text" name="txtapellidos" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        *Dirección de correo:
                    </td>
                    <td>
                <input type="email" name="txtdireccioncorreo" placeholder="name@example.com" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Página Web:
                    </td>
                    <td>
                <input type="text" name="txtpaginaweb">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefono:
                    </td>
                    <td>
                <input type="text" name="txttelefono">
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                        Sexo:
                    <td>
                       Masculino : <input type="radio" name="rbsexo" value="masculino" checked>
                       Femenino  : <input type="radio" name="rbsexo" value="femenino">

                    </td>
                  
                </tr>
                
                 <tr>
                    <td>
                        Estado Civil:
                    <td>
                       Soltero : <input type="radio" name="rbestadocivil" value="soltero" checked>
                       Casado  : <input type="radio" name="rbestadocivil" value="casado">

                    </td>
                  
                </tr>
                
                <tr>
                    <td>
                        Codigo Postal:
                    </td>
                    <td>
                <input type="text" name="txtcodigopostal" >
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Distrito:
                    </td>
                    <td>
                <select name="txtdistrito">
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
                <input type="text" name="txtmensaje" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        *Cuerpo del Mensaje:
                    </td>
                    <td>
                        <textarea  name="txtmotivo" rows="4" cols="50"  maxlength="50" required="required" ></textarea>
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
                    <button>Guardar</button>
                    </td>
                </tr>
        </table>
        </form>
    </body>
</html>
