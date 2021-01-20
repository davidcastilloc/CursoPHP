<?php

namespace Controllers;

class ReservaController
{
    function frm_reserva()
    {
        require "./Views/layout/header.phtml";
        require "./Views/frm_reserva.phtml";
    }

    public function __construct()
    {
        $this->frm_reserva();
    }
}