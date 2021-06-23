<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bd_sistema_de_aula";
    
    $conect = mysqli_connect($servidor , $usuario , $senha , $banco);
    
    if(!$conect){
        die ("<h3> Não conectou. Error :" . mysqli_connect_error());
        }

        $sqlInserir = " INSERT INTO tb_listar (docente , curso , uc , resumo , escolha , data) values ('$docente' , '$curso' , '$uc' , '$resumo' , '$escolha' , $data ) ";

        mysqli_query($conect , $sqlInserir);


  //INSERT INTO `tb_listar` (`id`, `docente`, `curso`, `uc`, `resumo`, `escolha`, `data`) 




        ?>