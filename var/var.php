<?php class UserInformation {
    private $usuario_id;
    private $nome_usuario;

    public function __construct($id, $nome) {
        $this->usuario_id = $id;
        $this->nome_usuario = $nome;
    }

    public function getUsuarioId() {
        return $this->usuario_id;
    }

    public function getNomeUsuario() {
        return $this->nome_usuario;
    }
}
?>