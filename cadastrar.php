<?php

include_once("conexao.php");

// definir variáveis e inicializá-las como vazias
$nome = $sobrenome = $email = $radio1 = "";

var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = validar_input($_POST["nome"]);
    $sobrenome = validar_input($_POST["sobrenome"]);
    $email = validar_input($_POST["email"]);
    $radio1 = isset($_POST["radio1"]) ? $_POST["radio1"] : "";

    echo $nome . " " . $sobrenome . " <br> " . $email;
    echo "<br> Qual sua área de atuação?: " . $radio1; 
}
else {
    echo "Método não é POST";
}

function validar_input($dado) {
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}


$result = mysqli_query($conn, "INSERT INTO auxiliar(nome, sobrenome, email, funcao) 
VALUES ('$nome', '$sobrenome', '$email', '$radio1')");

?>