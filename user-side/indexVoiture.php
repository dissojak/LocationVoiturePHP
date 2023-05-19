<?php
require_once('../controllers/VoitureController.php');
$us=new VoitureController();
$res=$us->liste();
echo "<table border=1>
<tr>
<td>id</td><td>Numero Serie</td>
<td>Marque </td>
<td>Carburant </td>
<td>PrixLocation </td>
<td>Modifier</td>
<td>Supprimer</td></tr>";
if (is_array($res) || is_object($res)){
foreach ($res as $row)
{
echo "<tr><td>$row[idVoiture]</td><td>$row[numSerie]</td>
<td>$row[marque]</td>
<td>$row[carburant]</td>
<td>$row[prixLocation]</td>
<td><a href ='modifVoiture.php?id=$row[idVoiture]'>Modifier</a></td>
<td><a href='supVoiture.php?id=$row[idVoiture]'>Supprimer</a></td> </tr>";
}}
echo "</table>";
echo "<a href='inscriptionVoiture.html'>Inscription</a>";
?>