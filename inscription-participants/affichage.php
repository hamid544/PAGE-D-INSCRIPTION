<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $nom = [] ;
 $prenom = [] ;
 $email = [];


 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $nom =  $_SESSION['nom'] ;
 }
 if( isset( $_SESSION['prenom'] ) ) {
    $prenom =  $_SESSION['prenom'] ;
 }
 if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['email'] ;
 }
 else {
    $_SESSION['nom'] =  $nom;
    $_SESSION['prenom'] =  $prenom;
    $_SESSION['email'] =  $email;
 }

 // Ajouter le nom du nom dans le tableau
 $nom[]  = $_POST["nom"] ;
 $prenom[]  = $_POST["prenom"] ;
 $email[]  = $_POST["email"] ;


 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $nom;
$_SESSION['prenom'] =  $prenom;
$_SESSION['email'] =  $email;

?>


<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="affichage.css"/>
    <title>Document</title>
    <style>
    .size{
        width: 400px;
    }
    .container{
        display: flex;
    }
    h2 ,h1{
        text-align:center;
    }
    li {
        text-align:center;
        list-style:none;
    }

    @media print{
        button {
            display:none;
        }
    }

    </style>
</head>
<body>
<h1>Liste des participants</h1>
<div class="container">

<div class="size">
<h2>SURNAME</h2>
<ul >
    <?php
        foreach ($nom as $value) { 
        ?>
        <li> <?php echo $value ?></li><br>
        <?php
        }
    ?>  
    </ul>
    </div>
    <div class="size">
    <h2>NAME</h2>
    <ul>
    <?php
        foreach ($prenom as $value) { 
        ?>
    <li> <?php echo  $value?></li><br>
        <?php
        }

    ?> 
    </ul>
    </div>
    <div class="size">
    <h2>EMAIL</h2>
    <ul>
      <?php
        foreach ($email as $value) { 
        ?>
    <li> <?php echo  $value ?></li><br>
        <?php
        }

    ?> 
    
     </ul> 
     </div>
     </div>
     <button type="button" onclick="window.print()" style=" 
    background-color: initial;
    color: black;
    width: 109px;
    height: 34px;
    FONT-SIZE: 16PX;
    FONT-FAMILY: monospace;
    MARGIN: AUTO;
" >print</button>

</body>
</html>