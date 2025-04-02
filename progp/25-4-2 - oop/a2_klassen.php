<?php
ini_set("display_errors", "on");
class mitarbeiter {
    public string $name;
    public string $geburtsdatum;
    public int $gehalt;

    public function __construct(string $n, string $gb, int $g) {
        $this->name = $n;
        $this->geburtsdatum = $gb;
        $this->gehalt = $g;
    }

    public function getInfo():void {
        echo "Name: $this->name <br>";
        echo "Geburtsdatum: $this->geburtsdatum <br>";
        echo" Gehalt: $this->gehalt <br>";
    }
    public function getJahresgehalt():int {
        return $this->gehalt * 12;
    }
}


class vollzeit extends mitarbeiter {
    public int $arbeitszeit = 40;
    public int $bonus;

    public function __construct(string $n, string $gb, int $g, int $b) {
        parent::__construct($n, $gb, $g);
        $this->arbeitszeit = 40;
        $this->bonus = $b;
    }

    public function getInfo(): void {
        parent::getInfo();
        echo "Arbeitszeit: $this->arbeitszeit <br>";
        echo "Bonus: $this->bonus <br>";
    }

    public function getJahresgehalt():int {
        return parent::getJahresgehalt() + $this->bonus;
    }
}

class teilzeit extends mitarbeiter {
    public string $arbeitszeit; // h pro woche
    public int $stundenlohn = 15; // Euro pro Stunde
    public int $gehalt = 0;

    public function __construct(string $n, string $gb, int $g, int $hpw, int $sl) {
        parent::__construct($n, $gb, $g);
        $this->gehalt = $this->gehalt + ($hpw * $sl * 4); // 4 Wochen pro Monat
        $this->stundenlohn = $sl;
    }

    public function getInfo(): void {
        parent::getInfo();
        echo "Arbeitszeit: $this->arbeitszeit <br>";
        echo "Stundenlohn: $this->stundenlohn <br>";
    }

    public function getJahresgehalt():int {
        return parent::getJahresgehalt() + ($this->stundenlohn * 20 * 12);
    }
}
?>