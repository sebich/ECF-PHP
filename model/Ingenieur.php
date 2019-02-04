<?php
//include('Connexion.php');
class Ingenieur extends Employe
{
        //attribut de la classe
    private $statutIngenieur;
    private $nb_projetsIngenieur;

    /*function __construct($idE,$nomE,$prenomE,$statutI,$nb_projetsI){
        parent ::__construct ($idE,$nomE,$prenomE);
        $this->statutIngenieur = $statutI;
        $this->nb_projetsIngenieur = $nb_projetsI;
    }  */    
    
       //getteur et setteur    

    function getstatutIngenieur()
    {
        return $this->statutIngenieur;
    }
    function getnb_projetsIngenieur()
    {
        return $this->nb_projetsIngenieur;
    }
    function setstatutIngenieur($statutI)
    {
        $this->statutIngenieur = $statutI;
    }
    function setnb_projetsIngenieur($nb_projetsI)
    {
        $this->nb_projetsIngenieur = $nb_projetsI;
    }

    function addTechnicien()
    { 
        $db = $this->callConnexion();
        $requete = $db->prepare('INSERT INTO technicien(nomTechnicien,prenomTechnicien) 
                                    VALUES (?,?)');
        $requete->execute(array(
                                $this->nomTechnicien,
                                $this->prenomTechnicien
                                ));
    }
    
}