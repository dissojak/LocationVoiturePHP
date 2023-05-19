<?php
require_once('../controllers/VoitureController.php');
$VtCtr=new VoitureController();
$VtCtr->delete($_GET['id']);
header('Location:indexVoiture.php');
?>
