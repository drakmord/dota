<?php
namespace HireMe\Repositories;
use HireMe\Entities\Equipo;
use HireMe\Entities\Aspecto;
use HireMe\Entities\Rarezas;

class EquipoRepo {
    public function getEquipo()
    {
        return Equipo::
        select('nombre')
            ->get();
    }
    public function ListaAspectos()
    {
        return Aspecto::
        select('nombre','idaspecto')
        ->get();
    }
    public function ListaRarezas()
    {
        return Rarezas::
        select('nombre','idrareza')
        ->get();
    }
}




















