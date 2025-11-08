<?php
class ClienteModel {
    // Atributos
    protected ?int $idCliente;
    protected ?string $endereco;
    protected ?float $credito = 0.0;
    protected ?string $tipoCliente;

    // Construtor
    public function __construct(int $idCliente, string $endereco, string $tipoCliente) {
        $this->idCliente = $idCliente;
        $this->endereco = $endereco;
        $this->tipoCliente = $tipoCliente;
    }


    // Getters e Setters
    public function getIdCliente(): int {
        return $this->idCliente;
    }

    public function setIdCliente(int $idCliente): void {
        $this->idCliente = $idCliente;
    }

    public function getEndereco(): string {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void {
        $this->endereco = $endereco;
    }

    public function getCredito(): float {
        return $this->credito;
    }

    public function setCredito(float $credito): void {
        $this->credito = $credito;
    }

    public function getTipoCliente(): string {
        return $this->tipoCliente;
    }

    public function setTipoCliente(string $tipoCliente): void {
        $this->tipoCliente = $tipoCliente;
    }

    // Método calcularLimiteCredito
    public function calcularLimiteCredito(): float {
        // Exemplo de cálculo simples (poderia ser ajustado conforme regras de negócio)
        return $this->credito * 1.2;
    }

    // Método toArray
    public function toArray(): array {
        return [
            'idCliente' => $this->idCliente,
            'endereco' => $this->endereco,
            // 'credito' => $this->credito,
            'tipoCliente' => $this->tipoCliente,
            'limiteCredito' => $this->calcularLimiteCredito()
        ];
    }
}
?>