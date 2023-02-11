<?php

$Moto = [
  "Marca" => "Yamaha",
  "Modelo" => "MT03",
  "Cilindrada" => "321 cm³",
  "Potencia-Maxima" => 30,9 kW,
  "Peso" => 168 kg,
  "Chasis" => "Diamante",
  "Capacidad-Combustible" => "14 l",
  "Tipo-Motor" => "4 tiempos, 4 válvulas",
  "Precio" => 7.000,
];

$Moto_json = json_encode($Moto);

$data = json_decode($Moto_json);

echo "Marca: " . $data->Marcas . "\n";
echo "Modelo: " . $data->Modelos . "\n";
echo "Cilindrada: " . $data->Cilindraje . "\n";
echo "Potencia-Maxima: " . $data->PotenciaMaxima . "\n";
echo "Peso: " . $data->Peso . "\n";
echo "Chasis: " . $data->Chasis . "\n";
echo "Capacidad-Combustible: " . $data->CapacidadCombustible . "\n";
echo "Tipo-Motor: " . $data->TipoMotor . "\n";
echo "Precio: " . $data->Precio . "\n";

?>