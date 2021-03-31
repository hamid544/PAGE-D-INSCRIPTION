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
     <button onclick="window.print()">Print</button>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>