<?php

declare(strict_types=1);

class Gestor extends Usuario
{
  private float $salario;
  private string $horario;

  public function getSalario()
  {
    return $this->salario;
  }

  public function setSalario($salario)
  {
    $this->salario = $salario;
    return $this;
  }

  public function getHorario()
  {
    return $this->horario;
  }

  public function setHorario($horario)
  {
    $this->horario = $horario;
    return $this;
  }
}
