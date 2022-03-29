<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../racine.php';
    include_once RACINE . '/service/EtudiantService.php';
    create();
}

function create() {
    extract($_POST);

    if ($img == "no") {
        $image = null;
    } else {
        $image = $img;
    }
    echo $image;
    echo $img;
    $es = new EtudiantService();
    $es->create(new Etudiant(1, $nom, $prenom, $ville, $sexe, $image));
    //chargement de la liste des étudiants sous format json
    header('Content-type: application/json');
    echo json_encode($es->findAllApi());
}
