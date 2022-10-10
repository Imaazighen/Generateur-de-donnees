<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="envoi.css">
</head>
<body>
    

<form action="envoi.php" method="post" name="cv" id="cv">


    <p>Nom & Prénom :</p>
    <input type="text" name="nom"> 

    <p>Adresse e-mail :</p>
    <input type="e-mail" name="email">

    <p>Numéro :</p>
    <input type="number" name="numero">

    <p>Adresse postale :</p>
    <input type="text" name="adresse">

    <p>Phrase d'intro :</p>
    <input type="text" name="intro" id="intro">

    <p>Compétences :</p>
    <input type="text" name="competences">

    <p>Expériences :</p>
        <input type="text" name="exp1"  placeholder="Experience 1">
            <br><br>
        <input type="text" name="exp2" placeholder="Experience 2">
            <br><br>
        <input type="text" name="exp3" placeholder="Experience 3">
            <br><br>
        <input type="text" name="exp4" placeholder="Experience 4">

    <p>Formations :</p>
    <input type="text" name="formations">
    <br><br>
    <button type="submit" name="valider">Envoyer</button>

</form>

<!-- ----------------------------------------------------PARTIE PHP---------------------------------------------------- -->

<?php

if(isset($_POST['valider']))
    {
            if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['numero']) AND !empty($_POST['adresse'])
            AND !empty($_POST['competences']) AND !empty($_POST['formations']))
            {
                $intro=htmlspecialchars($_POST['intro']);
                $nom=htmlspecialchars($_POST['nom']);
                $email=htmlspecialchars($_POST['email']);
                $numero=htmlspecialchars($_POST['numero']);
                $adresse=htmlspecialchars($_POST['adresse']);
                $competences=htmlspecialchars($_POST['competences']);
                $exp=htmlspecialchars($_POST['exp']);
                $formations=htmlspecialchars($_POST['formations']);

                echo "
                <style>
                body{
                     display:flex;
                     justify-content:center;}

                #cv{display:flex;
                    border: solid 1px black;
                    width:800px;}

                #contact{color:white; 
                        background-image: url('image/eee.jpg');
                        background-size:cover;
                        background-repeat:no-repeat;
                        border-right:solid 4px black;
                        font-size:15px;
                        padding:30px;
                        font-weight:bold;}

                #infos{padding:50px;
                       background-color:#780000;
                       color:white;
                       font-size:18px;
                       width:575px;}

                .intro{color:white;
                       font-size:15px;}
                
                p{font-size:30px;
                        text-decoration:underline;
                  color:black;
                  font-weight:bold;}

                </style>
                
                <div id='cv'>
                        
                        <div id='contact'>
                                $nom </br></br> 
                                $email </br></br> 
                                $numero </br></br> 
                                $adresse </br></br>
                        </div>
                
                        <div id='infos'>
                               <span class='intro'>$intro</span>
                               <p>Compétences :</p>
                               $competences </br></br>
                               <hr>
                               <p>Expériences :</p>
                                $exp
                                <hr>
                                <p>Formations :</p>
                                $formations
                        </div>
                
                </div>";
            }
    }
?>


</body>
</html>