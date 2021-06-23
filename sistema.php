

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </body>
</html>
<?php include "estrutura.php" ?>


<form method="post" action="inserir-contato.php" >

<label for="docente" >Docente:
  <input name="nome" id="nome" >
</label>

<label for="curso" >Curso:
    <input name="text" id="curso" >
</label>

<label for="uc" >UC:
    <input name="number" id="number">
</label>


<p></p>
<label for="resumo" >Resumo das atividades:
    <textarea name="txt2" id="txt2" ></textarea>
</label>


<!--<label for="txt2">Resumo das atividades:
<input text="txt2">
</label>-->



<p></p>
        <label for="escolha">
    <input type="radio"name="material" value="computador" >Computador
    <input type="radio"name="material" value="papelaria" >Papelaria
    <input type="radio"name="material" value="datashow" >Datashow
    <input type="radio"name="material" value="kit maker" >Kit maker
        </label>

    <p></p>
    <label for="data">
    <input type="date"  name="dataAula" id="data" >
</label>
    <br> 
    <label for="enviar">
    <input type="submit" name="submit" value="Enviar" id="submit">
    </label>
    </form>








<?php include "rodape.php" ?>