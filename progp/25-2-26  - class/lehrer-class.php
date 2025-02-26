<?php
class Lehrer extends Person{
    // Attribute (Member)
    private int $gehaltsstufe;

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
    public function ausgabe() {
        echo "<p>";
        echo "Vorname: $this->vorname<br>";
        echo "Nachname: $this->nachname<br>";
        echo "Gehaltsstufe: A$this->gehaltsstufe";
        echo "</p>";
    }

    public function befoerdern():bool{
        if($this->gehaltsstufe < 16){
            $this->gehaltsstufe++;
            return true;
        }
        return false;
    }
}
?>