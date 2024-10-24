<?php require ('../includes/header.php') ; ?>

<?php 
    $stmt   = $conn->query("SELECT * FROM filmes");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="films-wrapper">

    <!-- no caso de não ter filmes cadastrados no bd -->
    <?php if(empty($result)) : ?>

        <div class="no-films">Ainda não há filmes cadastrados! :(</div>

    <?php endif; ?>

    <!-- listagem de filmes assistidos -->
    <?php if(!empty($result)) : ?>

        <div class="films">

            <?php foreach ($result as $film) : ?>

                <div class="film-wrapper" style="background-color: <?= !empty($film['color']) ? $film['color'] : '#257180' ;?>;">
                
                    <div class="film">

                        <div class="film-image">
                            <img src="<?= htmlspecialchars($film['image']) ;?>" alt="">
                        </div>

                        <div class="separacao-vertical"></div>

                        <div class="film-infos">

                            <p class="title"><?= $film['title']; ?></p>

                            <p><?= $film['description']?></p>

                            <div class="separacao-horizontal"></div>

                            <div class="film-scores">
                                <p >
                                    Nota Dudu : 
                                    <span class="<?= $film['score_dudu'] >= 6 ? 'green' : 'red' ?>"><?= $film['score_dudu'] ?> </span>
                                </p>
                                |
                                <p >
                                    Nota Anaju : 
                                    <span class="<?= $film['score_anaju'] >= 6 ? 'green' : 'red' ?>"><?= $film['score_anaju'] ?> </span>
                                </p>
                            </div>

                            <?php $media = ($film['score_dudu'] + $film['score_anaju']) / 2 ; ?>

                            <p class="<?= $media >= 6 ? 'green' : 'red' ;?>">Média : <?= $media ?></p>

                            <div class="separacao-horizontal"></div>

                            <p>Assistido Em : <?= $film['watched_at'] ?></p>
                            
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</div>

<style>
    <?php require_once ('../css/films.css') ; ?>
</style>

<?php require ('../includes/footer.php') ; ?>