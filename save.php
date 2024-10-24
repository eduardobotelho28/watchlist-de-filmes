<?php 

try {

    //acesso ao banco de dados.
    require_once ( $_SERVER['DOCUMENT_ROOT'] . '/filmes/conn.php'); 

    //pegando a tabela onde os dados serão inseridos através da Query String.
    $table = $_GET['type'] == 'film' ? 'filmes' : 'series'  ;

    //processo para salvar a imagem em bas64.
    if(isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
        $imagePath    = $_FILES['image']['tmp_name']                                     ;
        $imageType    = $_FILES['image']['type']                                         ;
        $imageContent = file_get_contents($imagePath)                                    ;
        $imageBase64  = 'data:' . $imageType . ';base64,' . base64_encode($imageContent) ; 
    }

    //preparando a query , utilizando o conceito de BindParams.
    $stmt = $conn->prepare("INSERT INTO $table (title, description, score_dudu, score_anaju, watched_at, image, color) VALUES (:title, :description, :score_dudu, :score_anaju, :watched_at, :image, :color)") ; 

    $binded_array = [
        "title"       => isset($_POST['title'])          ? $_POST['title']          : null ,
        "description" => isset($_POST['description'])    ? $_POST['description']    : null ,
        "score_dudu"  => isset($_POST['score-eduardo'])  ? $_POST['score-eduardo']  : null ,
        "score_anaju" => isset($_POST['score-anaju'])    ? $_POST['score-anaju']    : null ,
        "watched_at"  => isset($_POST['watched_at'])     ? $_POST['watched_at']     : null ,
        "image"       => isset($imageBase64)             ? $imageBase64             : null ,
        "color"       => isset($_POST['color'])          ? $_POST['color']          : null ,
    ];

    $stmt->execute($binded_array) ;

    header('Location:pages/films.php');

} catch (\Throwable $th) {
    echo $th ;
}




