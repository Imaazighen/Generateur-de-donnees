
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
                $exp1=htmlspecialchars($_POST['exp1']);
                $exp2=htmlspecialchars($_POST['exp2']);
                $exp3=htmlspecialchars($_POST['exp3']);
                $exp4=htmlspecialchars($_POST['exp4']);
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
                                - $exp1 </br>
                                - $exp2 </br>
                                - $exp3 </br>
                                - $exp4 </br></br>
                                <hr>
                                <p>Formations :</p>
                                $formations
                        </div>
                
                </div>";
            }
    }


