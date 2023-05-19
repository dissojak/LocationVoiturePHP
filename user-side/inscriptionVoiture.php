<?php
require_once('../controllers/VoitureController.php');
require_once('../models/Voiture.php');
$nserie=$_POST['nSerie'];
$marque=$_POST['marque'];
$carburant=$_POST['carburant'];
$prixLocation=$_POST['prixLocation'];
$Voiture=new Voiture($nserie,$marque,$carburant,$prixLocation);
$VCtr=new VoitureController();


$res=$VCtr->insert($Voiture);
//echo $Voiture->getSerie();

if($res==true){
	header('Location:indexVoiture.php');
}


?>