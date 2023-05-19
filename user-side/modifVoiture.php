<?php
require_once('../controllers/VoitureController.php');
$VCtr=new VoitureController();
$res=$VCtr->getVoiture($_GET['id']);
?>
<form name = 'f1' method='post' action='modificationVoiture.php'>
<table border='1'>
	<tr>
<td>id</td>
<td><input type = "text" name = "id" readonly="readonly" value = "<?php echo $res['idVoiture'] ?>"/></td></tr>
<tr>
<td>Numéro Serie</td>
<td><input type = "text" name = "nSerie" value = "<?php echo $res['numSerie'] ?>"/></td></tr>
<tr>
<td>marque</td>
<td><input type = "text" name = "marque" value = "<?php echo $res['marque'] ?>"/></td></tr>
<tr><td>carburant</td>
<td><input type = "text" name = "carburant" value = "<?php echo $res['carburant'] ?>"/></td></tr>
<tr>
<td>prixLocation</td>
<td><input type = "text" name = "prixLocation" value = "<?php echo $res['prixLocation'] ?>"/></td></tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>