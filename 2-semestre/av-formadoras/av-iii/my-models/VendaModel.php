<?php
class VendaModel {
    private int $idVenda;
    private string $dataVenda;
    private string $formaPagamento;
    private ClienteModel $cliente;
    private array $itens; 

    public function __construct() {       
    }

    public function getIdVenda(): int {
        return $this->idVenda;
    }

    public function setIdVenda(int $idVenda): void {
        $this->idVenda = $idVenda;
    }

    public function getDataVenda(): string {
        return $this->dataVenda;
    }

    public function setDataVenda(string $dataVenda): void {
        $this->dataVenda = $dataVenda;
    }

    public function getFormaPagamento(): string {
        return $this->formaPagamento;
    }

    public function setFormaPagto(string $formaPagamento): void {
        $this->formaPagamento = $formaPagamento;
    }

    public function getCliente(): ClienteModel {
        return $this->cliente;
    }

    public function setCliente(ClienteModel $cliente): void {
        $this->cliente = $cliente;
    }

    public function getItens(): array {
        return $this->itens;
    }
    
    public function setItens(array $itens): void {
        $this->itens = $itens;
    }

    public function adicionarItem(ItemVendaLivro $item): void {
        $this->itens[] = $item;
    }

    public function calcularTotal(): float {
        $total = 0.0;
        foreach ($this->itens as $item) {
            $total += $item->calcularSubtotal();
        }
        return $total;
    }

    public function aplicarDesconto(float $percentual): float {
        $total = $this->calcularTotal();
        $desconto = $total * ($percentual / 100);
        return $total - $desconto;
    }

    // public function toArray(): array {
    //     $itensArray = [];
    //     foreach ($this->itens as $item) {
    //         $itensArray[] = $item->toArray();
    //     }

    //     return [
    //         'idVenda' => $this->idVenda,
    //         'dataVenda' => $this->dataVenda,
    //         'formaPagamento' => $this->formaPagamento,
    //         'cliente' => $this->cliente->toArray(),
    //         'itens' => $itensArray,
    //         'total' => $this->calcularTotal()
    //     ];
    // }
    public function toArray(): array {
        return [
            'idVenda' => $this->idVenda,
            'dataVenda' => $this->dataVenda,
            // 'credito' => $this->credito,
            'formaPagamento' => $this->formaPagamento,
            'cliente' => $this->cliente,
            'itens' => $this->itens,
        ];
    }
}