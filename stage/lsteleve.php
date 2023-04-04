<?php
session_start();
include '_conf.php';
?>
<html>
<head> <link href="style.css" media="all" rel="stylesheet" type="text/css"/> </head>
<body>
<?php

if($_SESSION["type"]==1) 
        {
            
 ?>             <ul class="nav">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="perso.php">Profil</a></li>
        <li><a href="cr.php">Compte rendus</a></li>
        <li><a href="lsteleve.php">Liste d'éleve</a></li>
        </ul></html>
        <?php
        
      

        if(isset($_GET['id'])) /*verification que la variable est envoyé*/
        {
        $id=$_GET['id'];
        $connexion = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD);
        $requete="DELETE FROM utilisateur WHERE utilisateur.num = $_SESSION[nomvar]";
        $resultat = mysqli_query($connexion, $requete);
        echo "Eleve supprimer !";
        }
        $connexion = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD);
        $requete="SELECT * from utilisateur where type =0"; //recupere tous les eleve par date decroissante
        $resultat = mysqli_query($connexion, $requete);
        while($donnees = mysqli_fetch_assoc($resultat))
          {
            $id=$donnees['num'];
            $prenom = $donnees ['prenom'];
            $nom = $donnees ['nom'];

            echo " <table border =1>
            <thead>
                <tr>
                    <th colspan='2'>Eleve n°$id</th> 
                </tr>
            </thead>
            <tbody>

                <tr> 
            <td><center>$prenom</td>
            <td><center>$nom</td>
              </tr>
              <th colspan='2'><a href='lsteleve.php?id=$id'>Supprimer</a></th> 

          </tbody>
          </table><br>";  
          }
        }


        
?>

