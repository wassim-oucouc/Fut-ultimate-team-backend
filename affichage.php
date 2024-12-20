<?php

include("create.php");


$query_select = 'SELECT player.id,player.nameplayer,player.Rating,player.positionplayer,player.Photoplayer,equipe.logo,equipe.nom AS club_name,nationnalite.nom AS COUNTRYNAME,nationnalite.flag,playerdetails.pace,playerdetails.shooting,playerdetails.passing,playerdetails.defending,playerdetails.dribbling,playerdetails.physical FROM player INNER JOIN nationnalite ON player.id = nationnalite.id INNER join equipe ON player.id = equipe.id INNER JOIN playerdetails ON player.id = playerdetails.ID;';


$result  = mysqli_query($conn,$query_select);



$row = mysqli_fetch_assoc($result);


?>