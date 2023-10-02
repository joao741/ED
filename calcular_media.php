<?php
    // Lendo as notas das provas
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $nota4 = $_GET['nota4'];

    // Calculando a média
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    // Verificando se o aluno foi aprovado ou reprovado
    if ($media >= 5) {
        echo "Aluno aprovado com média " . $media;
    } else {
        echo "Aluno reprovado com média " . $media;
    }
    ?>