<?php require_once ('../includes/header.php') ; ?>

    <div class="form-wrapper flex-center">

        <h1>Cadastrando um novo Filme</h1>

        <form action="../save.php?type=film" method="POST"  enctype="multipart/form-data">

            <div class="form-column">

                <div class="input-wrapper">
                    <label for="title">Título do Filme</label>
                    <input type="text" id="title" name="title">
                </div>

                <div class="input-wrapper">
                    <label for="description">Descricão?</label>
                    <input type="text" id="description" name="description" maxlength="80">
                </div>

                <div class="input-wrapper">
                    <label for="score-eduardo">Nota Dudu</label>
                    <input type="text" id="score-eduardo" name="score-eduardo">
                </div>

                <div class="input-wrapper">
                    <label for="score-anaju">Nota Anaju</label>
                    <input type="text" id="score-anaju" name="score-anaju">
                </div>

            </div>

            <div class="form-column">

                <div class="input-wrapper">
                    <label for="watched_at">Assistido Em:</label>
                    <input type="date" id="watched_at" name="watched_at">
                </div>

                <div class="input-wrapper">
                    <label for="image">Imagem do Filme</label>
                    <input type="file" id="image" name="image">
                </div>

                <div class="input-wrapper" id="input-color">
                    <label for="color"> Cor personalizada ?</label>
                    <input type="color" id="color" value="#257180" name="color">
                </div>

                <button type="submit">Salvar</button>

            </div>

        </form>

    </div>

    <style>
        <?php require_once('../css/form.css'); ?>
    </style>

<?php require_once ('../includes/footer.php') ; ?>