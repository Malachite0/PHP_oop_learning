<?php

class Auto
{
    public string $merk;
    public string $model;
    public string $kleur;
    public bool $trekhaak = false;
    public int $tankInhoud = 50;
    public int $benzine = 0;

    /**
     * @param string $merk
     * @param string $model
     * @param string $kleur
     * @param bool $trekhaak
     * @param int $tankInhoud
     * @param int $benzine
     */
    public function __construct(string $merk, string $model, string $kleur, int $tankInhoud, int $benzine = 0, bool $trekhaak = false)
    {
        $this->merk = $merk;
        $this->model = $model;
        $this->kleur = $kleur;
        $this->trekhaak = $trekhaak;
        $this->tankInhoud = $tankInhoud;
        $this->benzine = $benzine;
    }


    public function setTankInhoud(int $inhoud)
    {
        $this->tankInhoud = $inhoud;
    }

    public function tanken(int $liter): string
    {
        if ($this->benzine + $liter > $this->tankInhoud) {
            $teveel = ($this->benzine + $liter) - $this->tankInhoud;
            $this->benzine = $this->tankInhoud;
            return "Je hebt $teveel liter teveel getankt. De tank is nu vol met {$this->tankInhoud} liter.";
        } else {
            $ruimte = $this->tankInhoud - ($this->benzine + $liter);
            $this->benzine += $liter;
            return "Je hebt $liter liter getankt. Er zit nu {$this->benzine} liter in de tank. Je kan nog $ruimte liter bijtanken.";
        }
    }


    public function toeteren(int $aantal): string
    {
        $tekst = "";
        for ($i = 0; $i < $aantal; $i++) {
            $tekst .= "𝓯𝓻𝓮𝓪𝓴𝔂, ";
        }
        return rtrim($tekst, ', ');
    }
}
