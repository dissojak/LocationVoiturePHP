<?php
include_once('../models/Voiture.php') ;
include_once('../database/config.php');
class VoitureController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(Voiture $v){

$query="insert into Voiture(numSerie,Marque,carburant,PrixLocation)values(?, ?, ?, ?)";
$res=$this->pdo->prepare($query);

$req =array($v->getSerie(),$v->getMarque(),$v->getCarburant(),$v->getPrixLocation()) ;

return $res->execute($req);

}

function getVoiture($id){
    $query="SELECT * FROM Voiture WHERE idVoiture = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idVoiture) {
$query = "delete from Voiture where idVoiture=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idVoiture));
}
function liste(){
$query = "select * from Voiture";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_voiture(Voiture $v)
{
$sql = "UPDATE Voiture SET  marque=?, carburant=?,prixlocation=? WHERE numSerie=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($v->getMarque(),$v->getCarburant(),$v->getPrixLocation(),$v->getSerie()));
}


}

?>


	