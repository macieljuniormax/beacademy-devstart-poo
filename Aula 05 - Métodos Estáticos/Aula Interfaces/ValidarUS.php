<?php

declare(strict_types=1);

class ValidarUS implements Validar
{
  function validarDocumento(string $documento): void
  {
    if (strlen($documento) !== 14) {
      die('Documento USA Inválido');
    }
  }
}
