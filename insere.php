<?php
    include "credentials.php";

    $conn = mysqli_connect($servername,$user,$password,$dbname);
    if(!$conn){
        die("Problemas na conexão com o BD: " . mysqli_connect_error());
    }

    if(!empty($_GET["acao"])){
        if($_GET["acao"] == "deleta"){
            //apaga algum registro
            $sql = "DELETE FROM MyGuests WHERE id = " . $_GET["id"];

            if(!mysqli_query($conn,$sql))
                die("erro sql?:". mysql_error($conn));
        }
    }

    $sql = "SELECT * FROM MyGuests";
    $rows = mysqli_query($conn,$sql);

    if(!$rows)
        die("Erro sql: " . mysqli_error($conn));

    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insere MyGuests</title>
</head>
<body>
    <form action="mysql.php" method="POST">
        Firstname: <input type="text" name="firstname"><br>
        Lastname: <input type="text" name="lastname"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" value="Enviar">
        
    </form>
    <?php

        if(mysqli_num_rows($rows) > 0){
            while($guest = mysqli_fetch_assoc($rows)){
                echo $guest["id"] . "-" . $guest["firstname"] . " " . $guest["lastname"] ;
                echo "<a href='insere.php?acao=deleta&id=" . $guest["id"]. "'> <button>remover</button> </a>  "."<br>";
            }
        }
        else{
            echo "Nenhum registro na tabela";
        }

    ?>
</body>
</html>