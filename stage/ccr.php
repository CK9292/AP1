<?php
session_start();
?>
<html>
<head> <link href="style.css" media="all" rel="stylesheet" type="text/css"/> </head>

<ul class="nav">
  <li><a href="accueil.php">Accueil</a></li>
  <li><a href="perso.php">Profil</a></li>
  <li><a href="cr.php">Compte rendus</a></li>
  <li><a href="ccr.php">Nouveau compte-rendu</a></li>

</ul>
 
<FORM method="post" action="cr.php"> 

<div> <font size=20 align="center"> Creer un nouveau compte rendu  </font> </div>
<br> 
<div> Date <input type="date" name="date" required> </div>
<div> Contenu <textarea name="contenu" rows=10 cols=40></textarea>
<br><br>

Note : <select name="note">
    <option value="0">Pas de note</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>

  </select>
<br><br><br><br>
<div> <button type="submit" name="update"> Confirmer </button>
</FORM>
</html>

