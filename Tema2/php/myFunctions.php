<?php
const TARIFA_BASICA = 1649;
const TARIFA_ESTANDAR = 2799;
const TARIFA_PREMIUM = 3999;

function calcularTarifa($plan) {
  $tarifa = 0;
  $impuesto = 0.76;

  switch ($plan) {
    case 'basico':
      $tarifa = TARIFA_BASICA + (TARIFA_BASICA * $impuesto);
      return $tarifa;

    case 'estandar':
      $tarifa = TARIFA_ESTANDAR + (TARIFA_ESTANDAR * $impuesto);
      return $tarifa;

    case 'premium':
      $tarifa = TARIFA_PREMIUM + (TARIFA_PREMIUM * $impuesto);
      return $tarifa;

    default:
      return $tarifa;
  }

}
?>