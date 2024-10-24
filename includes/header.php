
<?php require_once ( $_SERVER['DOCUMENT_ROOT'] . '/filmes/conn.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="/filmes/css/reset.css">
    <link rel="stylesheet" href="/filmes/css/struct.css">
</head>
<body>
    <header class="flex-space">

        <div id="header-links" class="header-links">
            <a href="/filmes/pages/films.php" id="all-films-link"> Todos os Filmes</a>
            |
            <a href="/filmes/pages/form.php" id="create-film-link">Cadastrar Filme</a>
        </div>
        
    </header>

    <main>
        
    