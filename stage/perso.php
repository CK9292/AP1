<?php
session_start();
?>

<html>
<head> <link href="style.css" media="all" rel="stylesheet" type="text/css"/> </head>
<body> 
<?php
include '_conf.php';
if ($_SESSION["type"] ==1) //si connexion en prof
  {
    ?>
    <html>
    <ul class="nav">
    <li><a href="accueil.php">Accueil</a></li>
    <li><a href="perso.php">Profil</a></li>
    <li><a href="cr.php">Compte rendus</a></li>
    <li><a href="lsteleve.php">Liste Eleve</a></li>
    </ul> </html> <?php
  }
else
  {
    ?>
    <html>
    <ul class="nav">
    <li><a href="accueil.php">Accueil</a></li>
    <li><a href="perso.php">Profil</a></li>
    <li><a href="cr.php">Compte rendus</a></li>
    <li><a href="ccr.php">Nouveau compte-rendu</a></li>
    </ul> </html> <?php
  }


?>

<div class="profile">
  <figure>

  </figure>
  <header>
    <h1><center>
      <small>Vos informations personnels :</small></h1>
  </header>
  
  <div class="toggle">


  </div>
  <main>
    <dl><center>
      <dt>Nom complet : </dt>
        <dd><?php echo      $_SESSION["prenom"],"  ", $_SESSION["nom"];?></dd>
      <dt>Email :</dt>
        <dd><?php echo $_SESSION["email"]?></dd>
      <dt>Telephone :</dt>
        <dd><?php echo $_SESSION["tel"]?></dd>
      <dt>Status</dt>
        <dd><?php if ($_SESSION["type"] ==1){echo "Professeurs";}else{echo "Eleve";}?> </dd>
    </dl>
  </main>

</div>


</html>



