<?php
require_once "personen-class.php";
class Lehrer extends Person{
    // Attribute (Member)
    private int $gehaltsstufe;#

    // Klassen Arttribute
    public static int $maxGehaltsstufe =16;

    // spezieller (parametrisierter) Konstruktor
    public function __construct(string $vn, string $nn, int $gs) {
        parent::__construct($vn, $nn);
        $this->setGehaltsstufe($gs);
    }

    // Öffentliche Zugriffsfunktionen
    // Setter
    public function setGehaltsstufe(int $gs): void {
        $this->gehaltsstufe = $gs;
    }

    // Getter
    public function getGehaltsstufe(): int {
        return $this->gehaltsstufe;
    }

    // Sonstige Funktionen
    public function ausgabe() { // Funktion ausgabe() der Elternklasse
                                // überschreibt => erweitern
        parent::ausgabe();
        echo "Gehaltsstufe: A$this->gehaltsstufe";
        echo "</p>";
    }

    public function befoerdern():bool{
        // self die klasse selsbst -> Klasse lehrer
        // $this-> die Instanz der Klasse
        if($this->gehaltsstufe < self::$maxGehaltsstufe){
            $this->gehaltsstufe++;
            return true;
        }
        return false;
    }
}
?>