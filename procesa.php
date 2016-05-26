<?php
    ?>
<!DOCTYPE html>
<html>
<body background="imagenes/mundo.jpg"  style="background-repeat: no-repeat; background-position: inherit;background-size: cover" >
    

<form action="validar.php" method="post">
    <center>
                <table border="1" bgcolor="#C0C0C0" align="center"  >
                    <tr align="center" >
                        <td colspan="2">EM INTRANET</td><td></td>
                    </tr>
                    
                    <tr>&nbsp;&nbsp; 
                    </tr>
                    
                    <tr>
                        <td>Usuario:</td>
                        <td><input type="text" name="txtusuario" required=""></td>
                    </tr>
                    
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="txtpassword" required=""></td>
                    </tr>
                    
                    <tr align="center">
                        <td></td>
                        <td colspan="2"><input type="submit" name="enviar datos" value="Enviar Datos"></td>
                    </tr>
                    
                </table>
        </center>
            </form></body>
</html>
