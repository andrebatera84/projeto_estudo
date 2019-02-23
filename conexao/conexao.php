<?php
    $servidor = "localhost";
    $user     = "root";
    $senha    = "";
    $bd       = "bdcadastro";
    $charset  = "utf-8";


    $con      = mysqli_connect("$servidor","$user","$senha","$bd");

    if (!$con){
        echo"erro ao estabelecer conexão com o servidor";
    }

    mysqli_set_charset($con,$charset);