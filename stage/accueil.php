<?php
session_start(); 
    ?>
    <html>
    <head> <link href="style.css" media="all" rel="stylesheet" type="text/css"/> </head>
    <body>
   

<?php
require_once '_conf.php';

if (isset($_POST['envoi'])) //reçois données rentrée lors de la connexion
{
   
    $login = $_POST['login'];
    $mdp = md5($_POST['mdp']);
    

    $connexion = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD);
    $requete="Select * from utilisateur WHERE login = '$login' AND motdepasse= '$mdp'"; //recupere données utilisateur 
    $resultat = mysqli_query($connexion, $requete);
    $trouve=0;
    while($donnees = mysqli_fetch_assoc($resultat))
      {
   
        $trouve=1;
        $type=$donnees['type'];
        $login=$donnees['login'];
        $id=$donnees['num'];
        $prenom = $donnees ['prenom'];
        $nom = $donnees ['nom'];
        $tel = $donnees ['tel'];
        $email = $donnees ['email'];
     // echo "je créé mes sessions !!!";
        $_SESSION["id"]=$id; //relie variable avec session
        $_SESSION["login"]=$login;
        $_SESSION["type"]=$type;
        $_SESSION["prenom"]=$prenom;
        $_SESSION["nom"]=$nom;
        $_SESSION["email"]=$email;
        $_SESSION["tel"]=$tel;    
      }

    if($trouve==0)
    {
        echo "erreur de connexion";
    }
}
if (isset($_SESSION["login"]))
 
    {
        if($_SESSION["type"]==0) // si connexion d'eleve
        {
          ?>
         <ul class="nav">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="perso.php">Profil</a></li>
        <li><a href="cr.php">Compte rendus</a></li>
        <li><a href="ccr.php">Nouveau compte-rendu</a></li>
        </ul>
 
            <?php
            echo "bienvenue sur le compte eleve <br> <br>";
            echo "Vous etes connecte en tant que ".$_SESSION["login"]."<br> <br>";
           echo "<FORM method='post' action='index.php'> <button type=submit name='deco'> DECONNEXION </button> </form>";
        }
        else
        {
?>
              <ul class="nav">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="perso.php">Profil</a></li>
        <li><a href="cr.php">Compte rendus</a></li>
        <li><a href="lsteleve.php">Liste eleve</a></li>
        </ul></html>
<?php
             echo "Bienvenue sur le compte professeurs <br> <br>";
            echo "Vous etes connecté en tant que ".$_SESSION["login"]."<br> <br>";
            echo "<FORM method='post' action= 'index.php'> <button type=submit name='deco'> DECONNEXION </button> </form>";
        }
    }


?>
</html>
