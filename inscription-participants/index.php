<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-image: url("photo-1525947088131-b701cd0f6dc3.jpg")
    }
    input[type="text"] {
    display: block;
    margin: auto;
    width: 300px;
    height: 30px;
    border-radius: 7px;
    outline: none;
    border: none;
}

label {
    font-size: 20px;
    color: white;
    margin-left: 479px;
    /* display: block; */
}

    </style>
</head>
<body>
    <h1 style="
    DISPLAY: block;
    margin: 66px auto;
    color: #c3c3c3;
">Formulaire d'inscription</h1>
    <form action="affichage.php" target="_blank" method="post">
        <label for="">Nom:</label>
        <input name="nom" type="text"><br>
        <label for="">Prénom:</label><br>
        <input name="prenom" type="text"><br>
        <label for="">Émail:</label><br>
        <input name="email" type="text"><br><br>
      

        <button type="submit" style="
    DISPLAY: block;
    background-color: initial;
    color: white;
    width: 109px;
    height: 34px;
    FONT-SIZE: 16PX;
    FONT-FAMILY: monospace;
    MARGIN: AUTO;
">Enregistrer</button>
    </form>

</body></html>