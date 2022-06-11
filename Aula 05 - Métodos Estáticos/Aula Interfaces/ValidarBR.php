<?php

declare(strict_types=1);

class ValidarBR implements Validar
{
  function validarDocumento(string $documento): void
  {
    if (strlen($documento) !== 11) {
      die('CPF Inválido');
    }
  }
}
