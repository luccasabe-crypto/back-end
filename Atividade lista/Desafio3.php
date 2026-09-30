<?php

$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
    $orientacao = "Procure uma alimentação mais nutritiva para atingir o peso ideal.";
} elseif ($imc <= 24.9) {
    $classificacao = "Peso normal";
    $orientacao = "Parabéns! Continue mantendo hábitos saudáveis e rotina ativa.";
} elseif ($imc <= 29.9) {
    $classificacao = "Sobrepeso";
    $orientacao = "O acompanhamento do peso pode ajudar a identificar hábitos que precisam de atenção. Procure um profissional para uma avaliação individualizada.";
} else {
    $classificacao = "Obesidade";
    $orientacao = "A atenção com a saúde deve ser prioridade. Procure orientação profissional para uma reeducação alimentar.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado - NutriVida</title>
</head>
<body>

    <h1>🥗 NutriVida - Resultado</h1>

    <p>👤 <strong>Paciente:</strong> <?php echo $nome; ?></p>
    <p>⚖️ <strong>Peso:</strong> <?php echo $peso; ?> kg</p>
    <p>📏 <strong>Altura:</strong> <?php echo $altura; ?> m</p>
    <p>📊 <strong>IMC:</strong> <?php echo number_format($imc, 2); ?></p>
    <p>ℹ️ <strong>Classificação:</strong> <?php echo $classificacao; ?></p>

    <p>💡 <?php echo $orientacao, $nome; ?></p>

    <br>
    <a href="index.html">⬅️ Voltar e calcular novamente</a>

    <hr>

    <p><strong>Quer cuidar melhor da sua saúde?</strong></p>
    <p>📅 Agende uma consulta com nossa nutricionista!</p>

</body>
</html>