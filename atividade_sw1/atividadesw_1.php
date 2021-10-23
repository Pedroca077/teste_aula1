

<?php
    $valor1 = $_POST['valor1'];
    
    switch($valor1){
        case "Professor":
        echo "Você é um professor";
        break;

        case "Aluno":
        echo "Você é um aluno";
        break;

        default:
        echo "O valor está errado";

    }

?>