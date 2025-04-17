<?php

require_once 'rekening.php';

class BeleggingsRekening extends Rekening
{
    private $startDatum;
    public $inleg;
    public $rendement;

    public function __construct($rekeningNummer, $naamEigenaar, $saldo, $startDatum, $inleg, $rendement)
    {
        parent::__construct($rekeningNummer, $naamEigenaar, $saldo);
        $this->startDatum = $startDatum;
        $this->inleg = $inleg;
        $this->rendement = $rendement;
    }

    public function berekenNieuweSaldo()
    {
        $rendementBedrag = $this->saldo * $this->rendement;
        $this->saldo += $rendementBedrag + $this->inleg;
        return $this->saldo;
    }
}

?>
