<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Etudiant
 *
 * @author MOHAMED
 */
class Etudiant {

    private $id;
    private $nom;
    private $prenom;
    private $ville;
    private $sexe;
    private $img;

    function __construct($id, $nom, $prenom, $ville, $sexe,$img) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
        $this->sexe = $sexe;
        $this->img=$img;
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }
    
     function getImg() {
        return $this->img;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getVille() {
        return $this->ville;
    }

    function getSexe() {
        return $this->sexe;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }
    
    function setImg($img) {
        $this->img = $img;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function __toString() {
        return $this->nom . " " . $this->prenom;
    }

}
