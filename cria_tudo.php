<?php
    include "credentials.php";

    $conn = mysqli_connect($servername,$user,$password);
    if(!$conn){
        die("Problemas na conexão com o BD: " . mysqli_connect_error());
    }

    $sql = "create database web1_2021_2_noite;";

    if (mysqli_query($conn, $sql)) {
        echo "ok!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
    

    $sql = "use web1_2021_2_noite;";

    if (mysqli_query($conn, $sql)) {
        echo "ok!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
    
    // sql to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "ok!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
