<?php
include ("model/Employe.php");
include ("model/Ingenieur.php");
include ("model/Technicien.php");

$employe = new employe();
$employe->setidEmploye("1");
$employe->setnomEmploye("Simpson");
$employe->setprenomEmploye("Bart");
echo "<pre>";
var_dump($employe);
echo "</pre>";

echo"<br>";

$technicien1 = new technicien();
$technicien1->setnomEmploye("Simpson");
$technicien1->setprenomEmploye("Lisa");
$technicien1->setposteTechnicien("Secretaire");
$technicien1->setniveauTechnicien("Bac+3");
echo "<pre>";
var_dump($technicien1);
echo "</pre>";

echo"<br>";

$ingenieur = new Ingenieur();
$ingenieur->setnomEmploye("Francis");
$ingenieur->setprenomEmploye("Jean");
$ingenieur->setstatutIngenieur("ingenieur");
$ingenieur->setnb_projetsIngenieur("10");
echo"<pre>";
var_dump($ingenieur);
echo"</pre>"

?>
