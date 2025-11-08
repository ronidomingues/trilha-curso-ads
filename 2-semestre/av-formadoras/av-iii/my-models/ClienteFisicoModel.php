<?php
class ClienteFisicoModel extends ClienteModel {
    private ?string $nome;
    private ?string $cpf;

    public function __construct(int $idCliente = 0, string $endereco = "", string $nome = "", string $cpf = "") {
        parent::__construct($idCliente, $endereco, $credito = 0.0, 'Físico');
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCpf(): string {
        return $this->cpf;
    }
    public function calcularLimiteCredito(): float {
        return $this->credito * 1.2;
    }

    public function toArray(): array {
        return array_merge(parent::toArray(), [
            'nome' => $this->nome,
            'cpf' => $this->cpf
        ]);
    }
}
?>