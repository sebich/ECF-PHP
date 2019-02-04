<?php
include('Connexion.php');
class Employe
{
        //attribut de la classe
    protected $idEmploye;
    protected $nomEmploye;
    protected $prenomEmploye;

    /*function __construct($idEmploye,$nomEmploye,$prenomEmploye){
        $this->idEmploye = $idEmploye;
        $this->nomEmploye = $nomEmploye;
        $this->prenomEmploye = $prenomEmploye;

    }   */  
    function getidEmploye()
    {
        return $this->idEmploye;
    }
    function getnomEmploye()
    {
        return $this->nomEmploye;
    }
    function getprenomEmploye()
    {
        return $this->prenomEmploye;
    }
    function setidEmploye($idEmploye)
    {
        $this->idEmploye = $idEmploye;
    }
    function setnomEmploye($nomEmploye)
    {
        $this->nomEmploye = $nomEmploye;
    }
    function setprenomEmploye($prenomEmploye)
    {
        $this->prenomEmploye = $prenomEmploye;
    }
    
    function callConnexion()
    {
        $db = Connexion::getConnexion();
        return $db;
    }

    function addEmploye()
    { 
        $db = $this->callConnexion();
        $requete = $db->prepare('INSERT INTO employe(idEmploye,nomEmploye,prenomEmploye) 
                                    VALUES (?,?,?)');
        $requete->execute(array(
                                $this->idEmploye,
                                $this->nomEmploye,
                                $this->prenomEmploye
                                ));
    }

    function getAllEmploye()
    {//R
        $db = $this->callConnexion();
        $listeEmploye = $db->query('SELECT * FROM employe');
        return $listeEmploye;
    }
    
    function updateEmploye()
    {//U
        $db = $this->callConnexion();
        $requete = $db->prepare("UPDATE employe SET nomEmploye=?,prenomEmploye=? WHERE idEmploye=?");
        $requete->execute(array(
            $this->nomEmploye,
            $this->prenomEmploye,
            $this->idEmploye
        ));

    }

    function deleteEmploye()
    {//D 
        $db = $this->callConnexion();
        $requete = $db->prepare("DELETE FROM employe WHERE idEmploye=?");
        $requete->execute(array($this->idEmploye));
    }
   
}
?>