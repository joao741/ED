<?php
    // Lendo a altura e o sexo
    $altura = $_GET['altura'];
    $sexo = $_GET['sexo'];

    // Calculando o peso ideal
    if ($sexo === 'M') {
        $pesoIdeal = (72.7 * $altura) - 58;
    } elseif ($sexo === 'F') {
        $pesoIdeal = (62.1 * $altura) - 44.7;
    } else {
        echo "Sexo inválido";
        exit;
    }

    // Exibindo o resultado
    echo "O peso ideal é: " . $pesoIdeal . " kg";
    ?>