<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $tipo   = $_POST['tipo'] ?? '';
    $gen    = $_POST['genero'] ?? '';
    $tam    = $_POST['tamanho'] ?? '';
    $estilo = $_POST['estilo'] ?? '';

    $obra = "";
    $desc = "";


    if ($tipo === "Digital") {

        // Ação
        if ($gen === "Ação" && $tam === "Curtas" && $estilo === "Conhecido") {
            $obra = "Hotline Miami";
            $desc = "Ação frenética, visão superior e combate dinâmico.";
        } elseif ($gen === "Ação" && $tam === "Curtas" && $estilo === "Diferente") {
            $obra = "Katana Zero";
            $desc = "Ação em plataforma neo-noir com manipulação do tempo.";
        } elseif ($gen === "Ação" && $tam === "Longas" && $estilo === "Conhecido") {
            $obra = "God of War";
            $desc = "Ação épica, mitologia envolvente e combate visceral.";
        } elseif ($gen === "Ação" && $tam === "Longas" && $estilo === "Diferente") {
            $obra = "Monster Hunter: World";
            $desc = "Caça estratégica contra monstros gigantes em ecossistemas vivos.";

        // RPG (Romance no formulário)
        } elseif ($gen === "RPG" && $tam === "Curtas" && $estilo === "Conhecido") {
            $obra = "Chrono Trigger";
            $desc = "Um clássico atemporal dos RPGs com viagens no tempo.";
        } elseif ($gen === "RPG" && $tam === "Curtas" && $estilo === "Diferente") {
            $obra = "Undertale";
            $desc = "RPG único onde você não precisa derrotar ninguém.";
        } elseif ($gen === "RPG" && $tam === "Longas" && $estilo === "Conhecido") {
            $obra = "The Witcher 3: Wild Hunt";
            $desc = "RPG de mundo aberto com história marcante e narrativa rica.";
        } elseif ($gen === "RPG" && $tam === "Longas" && $estilo === "Diferente") {
            $obra = "Persona 5 Royal";
            $desc = "Mistura de RPG por turnos, simulação de vida escolar e estilo único.";

        // Fantasia
        } elseif ($gen === "Fantasia" && $tam === "Curtas" && $estilo === "Conhecido") {
            $obra = "Hollow Knight";
            $desc = "Exploração e mistério em um mundo subterrâneo em ruínas.";
        } elseif ($gen === "Fantasia" && $tam === "Curtas" && $estilo === "Diferente") {
            $obra = "Ori and the Blind Forest";
            $desc = "Aventura emocionante em uma floresta mágica com visual incrível.";
        } elseif ($gen === "Fantasia" && $tam === "Longas" && $estilo === "Conhecido") {
            $obra = "Elden Ring";
            $desc = "Fantasia sombria em mundo aberto repleto de desafios e segredos.";
        } elseif ($gen === "Fantasia" && $tam === "Longas" && $estilo === "Diferente") {
            $obra = "Dragon Quest XI";
            $desc = "Fantasia clássica com arte vibrante e jornada inesquecível.";

        // Terror
        } elseif ($gen === "Terror" && $tam === "Curtas" && $estilo === "Conhecido") {
            $obra = "Outlast";
            $desc = "Terror psicológico focado em fuga e sobrevivência em um manicômio.";
        } elseif ($gen === "Terror" && $tam === "Curtas" && $estilo === "Diferente") {
            $obra = "Phasmophobia";
            $desc = "Investigação de assombrações e entidades sobrenaturais.";
        } elseif ($gen === "Terror" && $tam === "Longas" && $estilo === "Conhecido") {
            $obra = "Resident Evil 4 Remake";
            $desc = "Ação e survival horror clássico contra vilarejos e cultos misteriosos.";
        } elseif ($gen === "Terror" && $tam === "Longas" && $estilo === "Diferente") {
            $obra = "Alien: Isolation";
            $desc = "Terror de sobrevivência opressivo no espaço contra uma criatura implacável.";

        } else {
            $obra = "Hades";
            $desc = "Ação roguelike na mitologia grega com excelente narrativa.";
        }

    // =========================
    // JOGOS DE TABULEIRO
    // =========================
    } elseif ($tipo === "Tabuleiro") {

        // Ação
        if ($gen === "Ação" && $tam === "Curtas") {
            $obra = "King of Tokyo";
            $desc = "Monstros gigantes disputando o controle da cidade com rolagem de dados.";
        } elseif ($gen === "Ação" && $tam === "Longas") {
            $obra = "Zombicide";
            $desc = "Cooperativo de sobrevivência enfrentando hordas de zumbis.";

        // RPG
        } elseif ($gen === "RPG" && $tam === "Curtas") {
            $obra = "Munchkin";
            $desc = "Paródia bem-humorada de RPGs focada em monstros e tesouros.";
        } elseif ($gen === "RPG" && $tam === "Longas") {
            $obra = "Gloomhaven";
            $desc = "RPG tático completo com cenários, combate complexo e evolução de personagens.";

        // Fantasia
        } elseif ($gen === "Fantasia" && $tam === "Curtas") {
            $obra = "Catan";
            $desc = "Negociação, estratégia e expansão em uma ilha repleta de recursos.";
        } elseif ($gen === "Fantasia" && $tam === "Longas") {
            $obra = "Terraforming Mars";
            $desc = "Estratégia avançada para transformar Marte em um planeta habitável.";

        // Terror
        } elseif ($gen === "Terror" && $tam === "Curtas") {
            $obra = "Coups";
            $desc = "Jogo rápido de blefe, dedução e influência no poder.";
        } elseif ($gen === "Terror" && $tam === "Longas") {
            $obra = "Betrayal at House on the Hill";
            $desc = "Exploração de casa mal-assombrada onde um dos jogadores se torna o vilão.";

        } else {
            $obra = "Ticket to Ride";
            $desc = "Jogo de estratégia acessível focado em construir rotas ferroviárias.";
        }

    } else {

        $obra = "Nenhuma obra encontrada";
        $desc = "Não encontramos uma recomendação para essa combinação.";

    }

} else {

    header('Location: index.php');
    exit;

}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesIA - Especialista Nerd</title>
    <link rel="stylesheet" href="stile.css">
</head>
<body>
    <div class="container">
        <img src="M - Copia.jpg" width="500" alt="GeekIA Logo">
        <h2>Recomendação</h2>
        <?php echo $obra;?>
        <br>
         <?php echo $desc;?>
    </div>
</body>
</html>