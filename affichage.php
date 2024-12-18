<?php

include("create.php");


$query_select_player = 'SELECT * FROM PLAYER';

$query_select_nationnalite = 'SELECT * FROM nationnalite';

$query_select_equipe = 'SELECT * FROM equipe';

$query_select_playerdetails = 'SELECT * FROM query_select_playerdetails';


$result  = mysqli_query($conn,$query_select_player);

print_r($result);



$row = mysqli_fetch_assoc($result);

echo $row["nameplayer"];


?>