<?php
    include "credentials.php";

    $conn = mysqli_connect($servername,$user,$password,$dbname);
    if(!$conn){
        die("Problemas na conexão com o BD: " . mysqli_connect_error());
    }

    $firstname = mysqli_real_escape_string($conn,$_POST["firstname"]);
    $lastname =  mysqli_real_escape_string($conn,$_POST["lastname"]);
    $email =  mysqli_real_escape_string($conn,$_POST["email"]);;

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('$firstname', '$lastname', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Inserido com sucesso!";
    } else {
        echo "Erro ao inserir: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>