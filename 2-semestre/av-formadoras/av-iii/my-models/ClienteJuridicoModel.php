<?php
class ClienteJuridicoModel extends ClienteModel {
    private ?string $razaoSocial;
    private ?string $cnpj;

    public function __construct(int $idCliente = 0, string $endereco = "", string $razaoSocial = "", string $cnpj = "") {
        parent::__construct($idCliente, $endereco, $credito = 0.0, 'Jurídico');
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
    }

    public function setRazaoSocial(string $razaoSocial): void {
        $this->razaoSocial = $razaoSocial;
    }

    public function setCnpj(string $cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function getRazaoSocial(): string {
        return $this->razaoSocial;
    }
    
    public function getCnpj(): string {
        return $this->cnpj;
    }

    public function calcularLimiteCredito(): float {
        return $this->credito * 2.0;
    }

    public function toArray(): array {
        return array_merge(parent::toArray(), [
            'razaoSocial' => $this->razaoSocial,
            'cnpj' => $this->cnpj
        ]);
    }
}
?>