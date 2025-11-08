<?php
class ItemVendaLivroModel {
    private LivroModel $livro;
    private VendaModel $venda;
    private int $qtdVenda;

    public function __construct(){
    }

    // --- Getters and Setters ---
    public function getLivro(): LivroModel {
        return $this->livro;
    }

    public function setLivro(LivroModel $livro): void {
        $this->livro = $livro;
    }

    public function getVenda(): VendaModel {
        return $this->venda;
    }

    public function setVenda(VendaModel $venda): void {
        $this->venda = $venda;
    }

    public function getQtdVenda(): int {
        return $this->qtdVenda;
    }

    public function setQtdeVendida(int $qtdVenda): void {
        $this->qtdVenda = $qtdVenda;
    }

    // --- Method from UML ---
    public function calcularSubtotal(): float {
        return $this->livro->getValor() * $this->qtdVenda;
    }
}
