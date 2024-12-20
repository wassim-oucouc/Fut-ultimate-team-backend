<?php

include("configuration.php");





if(isset($_POST["send"]))
{
    
    $name = $_POST["fname"] ;
    $photourl = $_POST["photourl"];
    $position = $_POST["position"];
    $nationality = $_POST["nationality"];
    $flag = $_POST["flag"];
    $club = $_POST["club"];
    $logo = $_POST["logo"];
    $rating = $_POST["rating"];
    $pace = $_POST["pace"];
    $shooting = $_POST["shooting"];
    $passing = $_POST["passing"];
    $dribbling = $_POST["dribbling"];
    $defending = $_POST["defending"];
    $physical = $_POST["physical"];


 if(empty($name) || empty($photourl) || empty($position) || empty($nationality) || empty($flag) || empty($club) ||
  empty($logo) || empty($rating) || empty($pace) || empty($shooting) || empty($passing) || empty($dribbling) || empty($defending)  || empty($physical))
 {

   $error = "please enter informations";
 }

 else
 {
    $querie_joueur = mysqli_query($conn,"INSERT INTO  player(nameplayer,Photoplayer,Rating,positionplayer) VALUES('$name','$photourl','$rating','$position');");
    $querie_equipe = mysqli_query($conn,"INSERT INTO equipe(logo,nom) VALUES('$logo','$club');");
    $query_nationnalite = mysqli_query($conn,"INSERT INTO nationnalite(nom,flag) VALUES('$nationality','$flag');");
    $playerdetails = mysqli_query($conn,"INSERT INTO playerdetails(pace,shooting,passing,defending,dribbling,physical) VALUES('$pace','$shooting','$passing','$dribbling','$defending','$physical');");

    if($querie_joueur && $querie_equipe && $query_nationnalite && $playerdetails)
    {
        echo "query good!";
    }
    else
    {
        echo "query not good!";
    }
    echo "entered";
    unset($_POST);
    header("Location: joueur.php");

 }

}





?>