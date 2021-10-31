<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>

    <!-- CSS BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JS BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/pagina_1.css">
    
</head>
<body>
    <div class="container">
        <div class="row" id="row_1">
            <h2>Mensagem do dia</h2>
        </div>
        <div class="row" id="row_2">
            <form id="mensagens" method="POST">
                <label>Digite a mensagem do dia</label>
                <br><br>
                <input type="text" name="mensagem_do_dia" required>
                <br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>

<?php
    include_once("conexao.php");

    $Mensagem = filter_input(INPUT_POST,'mensagem_do_dia',FILTER_SANITIZE_STRING);
    //echo $Mensagem;
    $result_mensagem = "insert into mensagens_dia (mensagem,mensagem_data) values ('$Mensagem',now())";
    $resultado_mensagem = mysqli_query($conn,$result_mensagem);
    //echo $result_mensagem;