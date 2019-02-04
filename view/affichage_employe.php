<?php
    
    include ("../controller/ControllerEmploye.php");
    if(isset($_GET['idEmploye'])){
        $_SESSION['idEmploye'] = $_GET['idEmploye'];
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage Employe</title>
</head>
<body>
        <p><h1>Enregistrement des employés</h1></p>
    <form action = "../controller/ControllerEmploye.php" method = "POST">
        <p>Nom : <input type = "text" name = "nomEmploye" 
            value="<?php if(isset($_GET['nomEmploye'])){echo $_GET['nomEmploye'];}?>"></p>
        <p>Prenom :  <input type = "text" name = "prenomEmploye" 
            value="<?php if(isset($_GET['prenomEmploye'])){echo $_GET['prenomEmploye'];}?>"></p> 
        <input type = "submit" value = "Insert" name = "insert">
        <input type = "submit" value = "Afficher" name = "afficher">
        <input type = "submit" value = "Delete" name = "delete">
        <input type = "submit" value = "Update" name = "update">
        <br> 
        <br>
    </form> 

    <?php
    
    $listeEmploye = $employe->getAllEmploye();

        while($donnee = $listeEmploye->fetch()){
            echo "<a href=\"affichage_employe.php?idEmploye=".$donnee['idEmploye']."&nomEmploye=".$donnee['nomEmploye'].
            "&prenomEmploye=".$donnee['prenomEmploye']. "\" >Select line</a> id : ".$donnee['idEmploye']. 
            "- Nom : ".$donnee['nomEmploye']. " - Prenom : ".$donnee['prenomEmploye']."<br>";
        }
?>

</body>
</html>