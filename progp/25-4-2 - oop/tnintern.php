<?php
require_once 'teilnehmer.php';
ini_set("display_errors", "on");
class tnintern extends teilnehmer {
    private string $abteilung;
    private int $anzahl=0;

    public function __construct($n, $vn, $c ,$abteilung) {
        parent::__construct($vn, $n, $c);
        $this->abteilung = $abteilung;
        $this->anzahl= $this->anzahl+1;
    }

    public function getDaten() {
        echo "Name: $this->name <br>";
        echo "Vorname: $this->vorname <br>";
        echo "Code: $this->code <br>";
        echo "Abteilung: $this->abteilung <br>";
        echo "Anzahl: $this->anzahl";
    }

    public function getAnzahl():int {
        return $this->anzahl;
    }
}
?>