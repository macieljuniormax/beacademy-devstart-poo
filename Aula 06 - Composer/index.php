<?php

use Classes\Categoria;
use Classes\Config\Usuario as ConfigUsuario;
use Classes\Usuario;
use Dompdf\Dompdf;

include 'vendor/autoload.php';

$dompdf = new Dompdf();

$html = '';

for ($i = 0; $i < 10; $i++) {
  $html .= 'É o pente, é o pente <br>';
}

$dompdf->loadHtml('<h1>É o pente</h1>' . $html);
$dompdf->render();
$dompdf->stream();

echo 'Funcionou';
