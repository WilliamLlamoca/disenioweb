<?php
function Mostrardatos($dato)
            {
                $codigo=$dato["codigo"];
                $nombres=$dato["nombres"];
                $apellidos=$dato["apellidos"];
                $email=$dato["email"];
                $url=$dato["url"];
                $telefono=$dato["telefono"];
                $sexo=$dato["sexo"];
                $estadocivil=$dato["estadocivil"];
                $codigopostal=$dato["codigopostal"];
                $distrito=$dato["distrito"];
                $mensaje=$dato["mensaje"];
                $motivo=$dato["motivo"];
                
                //$espacio=" ";
               // $nombre=$nombres.$espacio.$apellidos;
                //printf($miCodigo." ");
                //printf($nombre." ");
                //printf($fecnacimiento."<Br>");
                printf("<tr>");
                    printf("<td>");
                    printf($codigo);
                    printf("</td>");
                    printf("<td>");
                    printf($nombres);
                    printf("</td>");
                    printf("<td>");
                    printf($apellidos);
                    printf("</td>");
                    printf("<td>");
                    printf($email);
                    printf("</td>");
                     printf("<td>");
                    printf($url);
                    printf("</td>");
                     printf("<td>");
                    printf($telefono);
                    printf("</td>");
                     printf("<td>");
                    printf($sexo);
                    printf("</td>");
                     printf("<td>");
                    printf($estadocivil);
                    printf("</td>");
                     printf("<td>");
                    printf($codigopostal);
                    printf("</td>");
                     printf("<td>");
                    printf($distrito);
                    printf("</td>");
                     printf("<td>");
                    printf($mensaje);
                    printf("</td>");
                     printf("<td>");
                    printf($motivo);
                    printf("</td>");
                printf("</tr>");
                                      
                
             }
             
             
             
function mostrar_cabecera_tabla()            
{
  printf("<table border=1 id=postulante>");
            printf("<caption id=postulante>Relación de clientes</caption>");
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
    
}
             
function MD_ActualizarPostulante($dato)
            {
                $codigo=$dato["codigo"];
                $nombres=$dato["nombres"];
                $apellidos=$dato["apellidos"];
                $email=$dato["email"];
                $url=$dato["url"];
                $telefono=$dato["telefono"];
                $sexo=$dato["sexo"];
                $estadocivil=$dato["estadocivil"];
                $codigopostal=$dato["codigopostal"];
                $distrito=$dato["distrito"];
                $mensaje=$dato["mensaje"];
                $motivo=$dato["motivo"];
                
                $espacio=" ";
               // $minombres=$nombres.$espacio.$apellidos;
                //printf($miCodigo." ");
                //printf($nombre." ");
                //printf($fecnacimiento."<Br>");
                printf("<tr>");
                    printf("<td>");
                    printf($codigo);
                    printf("</td>");
                    printf("<td>");
                    printf($nombres);
                    printf("</td>");
                    printf("<td>");
                    printf($apellidos);
                    printf("</td>");
                    printf("<td>");
                    printf($email);
                    printf("</td>");
                     printf("<td>");
                    printf($url);
                    printf("</td>");
                     printf("<td>");
                    printf($telefono);
                    printf("</td>");
                     printf("<td>");
                    printf($sexo);
                    printf("</td>");
                     printf("<td>");
                    printf($estadocivil);
                    printf("</td>");
                     printf("<td>");
                    printf($codigopostal);
                    printf("</td>");
                     printf("<td>");
                    printf($distrito);
                    printf("</td>");
                     printf("<td>");
                    printf($mensaje);
                    printf("</td>");
                     printf("<td>");
                    printf($motivo);
                    printf("</td>");
                printf("<td>");
                    $llave="Conductores";
                    $datoencritado=  encripta($codigo,$llave);
                    echo "<a href='ActPostBD.php?actid=$datoencritado' title='Actualizar Cliente' target='black'>";
                    echo "<img border='0' src='imagenes/edicion.gif' width='25' height='25'></a>";
                    printf("</td>");
                printf("</tr>");
                                      
                
             }
     
         //Funciones de Encriptación
              function encripta($string, $key) {
                $result = '';
                for($i=0; $i<strlen($string); $i++) {
                   $char = substr($string, $i, 1);
                   $keychar = substr($key, ($i % strlen($key))-1, 1);
                   $char = chr(ord($char)+ord($keychar));
                   $result.=$char;
                }
                return base64_encode($result);
             }
                
                function desencripta($string, $key)
                 {
                $result = '';
                $string = base64_decode($string);
                for($i=0; $i<strlen($string); $i++) {
                   $char = substr($string, $i, 1);
                   $keychar = substr($key, ($i % strlen($key))-1, 1);
                   $char = chr(ord($char)-ord($keychar));
                   $result.=$char;
                }
                return $result;
             }
?>