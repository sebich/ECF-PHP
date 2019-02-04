<?php
//include('Connexion.php');
class Technicien extends Employe
{
        //attribut de la classe
    private $posteTechnicien;
    private $niveauTechnicien;

    /*function __construct($idE,$nomE,$prenomE,$posteT,$niveauT)
    {
        parent ::__construct ($idE,$nomE,$prenomE);
        $this->posteTechnicien = $posteT;
        $this->niveauTechnicien = $niveauT;
    } */
       //getteur et setteur    

    function getposteTechnicien()
    {
        return $this->posteTechnicien;
    }
    function getniveauTechnicien()
    {
        return $this->niveauTechnicien;
    }
    function setposteTechnicien($posteT)
    {
        $this->posteTechnicien = $posteT;
    }
    function setniveauTechnicien($niveauT)
    {
        $this->niveauTechnicien = $niveauT;
    }
    
}