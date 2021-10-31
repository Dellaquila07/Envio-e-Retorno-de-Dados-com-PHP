<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>

    <!-- CSS BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JS BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/pagina_2.css">
</head>
<body>
    <div class="container">
        <h3> Listagem de Mensagens </h3>
        <br>
        <table border='1' width='100%' class="table_1">
            <tr>
                <td width='10%'> ID </td>
                <td width='50%'> Mensagem do dia </td>
                <td width='40%'> Data da inserção da Mensagem </td>
            </tr>
        </table>
        <br>
        <?php
            include_once("conexao.php");
            $sql = "select * from mensagens_dia";
            $resultado_mensagens = mysqli_query($conn, $sql);
            while ($row_usuario = mysqli_fetch_assoc($resultado_mensagens)) {
                echo "<table border='1' width='100%'>";
                echo "<tr>";
                echo "<td width='10%'>".$row_usuario['mensagem_id']."</td>";
                echo "<td width='50%'>".$row_usuario['mensagem']."</td>";
                echo "<td width='40%'>".$row_usuario['mensagem_data']."</td>";
                echo "</tr>";
                echo "</table>";
            }
        ?>
    </div>
</body>
</html>