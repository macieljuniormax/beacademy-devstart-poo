<?php

declare(strict_types=1);

final class Cliente extends Usuario
{
    private string $dataDeCadastro;

    public function getDataDeCadastro(): string
    {
        return $this->dataDeCadastro;
    }

    public function setDataDeCadastro(string $dataDeCadastro): void
    {
        $this->dataDeCadastro = $dataDeCadastro;
    }
}
