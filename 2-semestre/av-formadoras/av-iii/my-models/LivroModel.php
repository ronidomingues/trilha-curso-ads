<?php
class LivroModel {
    // Atributos
    private string $idLivro;
    private string $isbn;
    private string $titulo;
    private int $anoPublicacao;
    private int $qtdEstoque;
    private float $valor;
    private EditoraModel $editora;
    /** @var Autor[] */
    private AutorModel $autores;

    // Construtor
    public function __construct(){
    }

    // Getters e Setters
    public function getIdLivro(): string {
        return $this->idLivro;
    }

    public function setIdLivro(string $idLivro): void {
        $this->idLivro = $idLivro;
    }

    public function getIsbn(): string {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): void {
        $this->isbn = $isbn;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getAnoPublicacao(): int {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao(int $anoPublicacao): void {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function getQtdEstoque(): int {
        return $this->qtdEstoque;
    }

    public function setQtdeEstoque(int $qtdEstoque): void {
        $this->qtdEstoque = $qtdEstoque;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function setValor(float $valor): void {
        $this->valor = $valor;
    }

    public function getEditora(): EditoraModel {
        return $this->editora;
    }

    public function setEditora(EditoraModel $editora): void {
        $this->editora = $editora;
    }

    /**
     * @return Autor[]
     */
    public function getAutores(): array {
        return $this->autores;
    }

    public function setAutores(AutorModel $autores): void {
        $this->autores = $autores;
    }

    /**
     * Adiciona um autor ao livro
     */
    public function adicionarAutor(AutorModel $autor): void {
        $this->autores[] = $autor;
    }

    // Método conforme o diagrama
    public function verificarDisponibilidade(): bool {
        return $this->qtdEstoque > 0;
    }

    // Método utilitário (não obrigatório, mas útil)
    public function toArray(): array {
        return [
            'idLivro' => $this->idLivro,
            'isbn' => $this->isbn,
            'titulo' => $this->titulo,
            'anoPublicacao' => $this->anoPublicacao,
            'qtdEstoque' => $this->qtdEstoque,
            'valor' => $this->valor,
            'editora' => $this->editora->toArray(),
            // 'autores' => array_map(fn($autor) => $autor->toArray(), $this->autores),
            'disponivel' => $this->verificarDisponibilidade()
        ];
    }
}
?>