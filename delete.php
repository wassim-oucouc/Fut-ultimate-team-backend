<?php

include("configuration.php");
$id_player = $_GET["delete_id"];

echo $id_player;


$query_delete = mysqli_query($conn,"DELETE FROM player where id = $id_player");


// echo $query_delete;




// require_once("joueur.php");

header("Location: joueur.php");

?>