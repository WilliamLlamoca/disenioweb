<?php

    $mysqli = new mysqli("localhost","root","","disenoweb");
    if ($mysqli->connect_errno):
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
    endif;
    

?>