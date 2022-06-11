<?php

declare(strict_types=1);

class Produto
{
  private string $nome;
  private float $valor;
  private string $descricao;
  private readonly Categoria $categoria;

  public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
  {
    $this->nome = $novoNome;
    $this->valor = $novoValor; 
    $this->categoria = $categoria;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setNome(string $novoNome): void
  {
    $this->nome = $novoNome;
  }

  public function getValor(): float
  {
    return $this->valor;
  }
  
  public function setValor(int $novoValor): void
  {
    if ($novoValor < 0) {
      die('Ops, valor não pode ser negativo');
    }

    $this->valor = $novoValor;
  }

  public function getDescricao(): string
  {
    return $this->descricao;
  }
  
  public function setDescricao(int $novaDescricao): void
  {
    $this->descricao = $novaDescricao;
  }

  public function getCategoria(): Categoria
  {
    return $this->categoria;
  }

  public function setCategoria($categoria)
  {
    $this->categoria = $categoria;
  }
}


