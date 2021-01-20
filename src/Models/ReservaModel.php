<?php

namespace Models;

class ReservaModel
{
	private $id, $rut, $nombre, $mail, $hora_fecha_ingreso, $hora_fecha_llegada;

	function getFechaLlegada()
	{
		return $this->hora_fecha_llegada;
	}
}