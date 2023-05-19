<?php
require_once('../controllers/VoitureController.php');
require_once('../models/Voiture.php');
$VCtr=new VoitureController();
$Voiture=new Voiture();

$Voiture->setSerie($_POST['nSerie']);
$Voiture->setMarque($_POST['marque']);
$Voiture->setCarburant($_POST['carburant']);
$Voiture->setPrixLocation($_POST['prixLocation']);
$VCtr->modifier_voiture($Voiture);
header('Location:indexVoiture.php');

?>