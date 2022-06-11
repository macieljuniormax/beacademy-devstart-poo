<?php

declare(strict_types=1);

class Gestor extends Usuario
{
  private float $salario;
  private string $horario;

  public function getSalario(): float
  {
    return $this->salario;
  }

  public function setSalario($salario): void
  {
    $this->salario = $salario;
  }

  public function getHorario(): string
  {
    return $this->horario;
  }

  public function setHorario($horario): void
  {
    $this->horario = $horario;
  }
}
