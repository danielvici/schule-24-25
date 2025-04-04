<?php
require_once "personen-class.php";
class Schueler extends Person{
    // Attribute (Member)
    private string $klasse;

    // spezieller (parametrisierter) Konstruktor
    public function __construct(string $vn, string $nn, string $kl) {
        parent::__construct($vn, $nn);
        $this->setKlasse($kl);
    }

    // Öffentliche Zugriffsfunktionen
    // Setter
    public function setKlasse(string $kl): void {
        $this->klasse = $kl;
    }

    // Getter
    public function getKlasse(): string {
        return $this->klasse;
    }

    // Sonstige Funktionen
    public function ausgabe() {
        parent::ausgabe();
        echo "Klasse: $this->klasse";
        echo "</p>";
    }

    public function versetzen():bool{
        if($this->klasse == "2BKI1"){
            $this->klasse = "2BKI2";
            return true;
        }
        return false;
    }
}
?>