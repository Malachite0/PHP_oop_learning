<?php

require_once 'rekening.php';

class SpaarRekening extends Rekening
{
    private $startDatum;
    public $rente;
    public $kosten;

    public function __construct($rekeningNummer, $naamEigenaar, $saldo, $startDatum, $rente, $kosten)
    {
        parent::__construct($rekeningNummer, $naamEigenaar, $saldo);
        $this->startDatum = $startDatum;
        $this->rente = $rente;
        $this->kosten = $kosten;
    }

    public function berekenMaandbedrag()
    {
        $renteBedrag = $this->saldo * $this->rente;
        $this->saldo += $renteBedrag - $this->kosten;
        return $this->saldo;
    }

    public function pasRenteAan($nieuweRente)
    {
        if ($nieuweRente >= 0) {
            $this->rente = round($nieuweRente, 2);
        }
    }
}

?>
