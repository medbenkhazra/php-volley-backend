<?php

include_once '../racine.php';
include_once RACINE . '/service/EtudiantService.php';
extract($_GET);
$es = new EtudiantService();
$es->delete($es->findById($id));
header("location:../index.php");

