<?php 

try {

    $dbName   = "filmes";
    $user     = "root"  ;
    $password = ""      ;

    $conn = new PDO ("mysql:host=localhost;dbname=$dbName", $user, $password);

} catch (PDOException $error) {
    echo $error; 
}

?>