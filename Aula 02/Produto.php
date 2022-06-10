<?php

declare(strict_types=1);

class Produto
{
  private string $nome;
  private float $valor;

  public function pegarNome(): string
  {
    return $this->nome;
  }

  public function alterarNome(string $novoNome)
  {
    $this->nome = $novoNome;
  }
  
  public function alterarValor(int $novoValor)
  {
    if ($novoValor < 0) {
      die('Ops, valor não pode ser negativo');
    }
    
    $this->valor = $novoValor;
  }
}


