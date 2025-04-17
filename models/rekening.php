<?php

class Rekening
{
    public $rekeningNummer;
    protected $naamEigenaar;
    protected $saldo;
    protected $opnameLimiet;
    protected $maxRood;

    public function __construct($rekeningNummer, $naamEigenaar, $saldo = 0, $opnameLimiet = 100, $maxRood = -500)
    {
        $this->rekeningNummer = $rekeningNummer;
        $this->naamEigenaar = $naamEigenaar;
        $this->saldo = $saldo;
        $this->opnameLimiet = $opnameLimiet;
        $this->maxRood = $maxRood;
    }

    public function getNaam()
    {
        return $this->naamEigenaar;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getOpnameLimiet()
    {
        return $this->opnameLimiet;
    }

    public function getMaxRood()
    {
        return $this->maxRood;
    }

    public function storten($bedrag)
    {
        if (!is_numeric($bedrag) || $bedrag <= 0 || round($bedrag, 2) != $bedrag) {
            return ["success" => false, "message" => "Fout: Bedrag moet een positief getal zijn met maximaal 2 decimalen."];
        }
        $this->saldo += $bedrag;
        return ["success" => true, "message" => "Bedrag gestort.", "nieuwSaldo" => $this->saldo];
    }

    public function opnemen($bedrag)
    {
        if (!is_numeric($bedrag) || $bedrag <= 0 || round($bedrag, 2) != $bedrag) {
            return ["success" => false, "message" => "Fout: Bedrag moet een positief getal zijn met maximaal 2 decimalen."];
        }

        if ($bedrag > $this->opnameLimiet) {
            return ["success" => false, "message" => "Fout: Bedrag overschrijdt opnamelimiet."];
        }

        if (($this->saldo - $bedrag) < $this->maxRood) {
            return ["success" => false, "message" => "Fout: Onvoldoende saldo. Je kunt niet meer opnemen dan toegestaan."];
        }

        $this->saldo -= $bedrag;
        return ["success" => true, "message" => "Bedrag opgenomen.", "nieuwSaldo" => $this->saldo];
    }
}

?>

