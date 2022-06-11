<?php

declare(strict_types=1);

class Categoria
{

  function __construct(
    private string $nome,
    private string $descricao,
  ) {
  }

  function getNome(): string
  {
    return $this->nome;
  }

  function setNome($nome): void
  {
    $this->nome = $nome;
  }

  function getDescricao(): string
  {
    return $this->descricao;
  }

  function setDescricao($descricao): void
  {
    $this->descricao = $descricao;
  }
}
