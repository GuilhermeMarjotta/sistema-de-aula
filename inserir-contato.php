<?php  include "estrutura.php" ?>

<main>
    <?php
    
    $docente = $_POST ["nome"];
    $curso = $_POST ["text"];
    $uc = $_POST ["number"];
    $resumo = $_POST ["txt2"];
    $escolha = $_POST ["material"];
    $data =  $_POST ["dataAula"];

    echo $docente . " - " . $curso . " - " . $uc . " - " . $resumo . " - " . $escolha . " - " . $data ;

 include "conexao.php"
        

 

    ?>


</main>


<?php  include "rodape.php" ?>