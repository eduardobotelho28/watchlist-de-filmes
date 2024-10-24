<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
</head>
<body>
    <div class="splash">
        <h1>Filmes<span>EmDupla</span></h1>
        <p>Watch List de Filmes!</p>
    </div>
</body>

<style>

    span {
        color: #6098a3 ;
    }

    * {
        padding: 0px;
        margin: 0px ;
    }

    .splash {
        width: 100vw             ;
        height: 100vh            ;
        background-color: #257180;
        display: flex            ;
        flex-direction: column   ;
        justify-content: center  ;
        align-items: center      ;
        color: white             ;
    }
</style>

<script>
    // redireciona para a tela de filmes.
    window.addEventListener("load", function (event) {
        setTimeout(() => {
            window.location.href = `${window.location.origin}/filmes/pages/films.php`
        }, 2000);
    });
</script>
</html>