<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Formulaire html
</title>
<style>
body{
    background-image: url("i.jpg")
}
label {
    font-size: 20px;
    color: #d0d0d0;
    margin-left: 479px;
    /* display: block; */
}
</style>
</head>
<body>
<form action="traitement.php" method="POST">
Votre nom :<input type="text" name="nom">
Votre âge :<input type="text" name="age">
<p>
<input type=submit value="Envoyer">

</form>
</body>
</html>