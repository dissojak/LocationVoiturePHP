<?php

class Voiture {
private $nSerie,$Marque,$carburant,$PrixLocation;
function __construct($nSerie="",$Marque="",$carburant="",$PrixLocation="") {
	
    $this->nSerie=$nSerie;
    $this->Marque=$Marque;
    $this->carburant=$carburant;
    $this->PrixLocation=$PrixLocation;
}

public function getSerie(){
	return $this->nSerie;
}

public function getMarque(){
	return $this->Marque;
}

public function getCarburant(){
	return $this->carburant;
}

public function getPrixLocation(){
	return $this->PrixLocation;
}


public function setMarque($Marque){
        $this->Marque = $Marque;
    }

public function setSerie($nSerie){
        $this->nSerie = $nSerie;
    }

public function setCarburant($carburant){
        $this->carburant = $carburant;
    }

 public function setPrixLocation($PrixLocation){
        $this->PrixLocation = $PrixLocation	;
    }
	
}?>