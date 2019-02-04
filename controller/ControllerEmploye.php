<?php
session_start();
include ('../model/Employe.php');
$employe = new Employe();

if(isset($_POST['insert'])){//C
    if(isset($_POST['nomEmploye']) && isset($_POST['prenomEmploye'])){
        $nomEmploye= $_POST['nomEmploye'];
        $prenomEmploye =$_POST['prenomEmploye'];
        $employe->setnomEmploye($nomEmploye);
        $employe->setprenomEmploye($prenomEmploye);
        $employe->addEmploye();
        header("Location:../view/affichage_employe.php");
    }
}elseif(isset($_POST['afficher'])){//R
    header("Location:../view/affichage_employe.php");

}elseif(isset($_POST['delete'])){//D
    if(isset($_SESSION['idEmploye'])){
        $employe->setidEmploye($_SESSION['idEmploye']);
        $employe->deleteEmploye();
        header("Location:../view/affichage_employe.php");
    }
}elseif(isset($_POST['update'])){//U
    if(isset($_SESSION['idEmploye']) && isset($_POST['nomEmploye']) && isset($_POST['prenomEmploye'])){
        $employe->setidEmploye($_SESSION['idEmploye']);
        $employe->setnomEmploye($_POST['nomEmploye']);
        $employe->setprenomEmploye($_POST['prenomEmploye']);
        $employe->updateEmploye();
        header("Location:../view/affichage_employe.php");
    } else {
        header("Location:../view/affichage_employe.php");
    }  
}
?>