<?php

use PHPUnit\Framework\TestCase;
class ContaTest extends TestCase{
    public function testusuario(){
        $mensagem = new MensagemLogin();
        $conta = new Conta($mensagem, 'Maria', 'Poupança');
       
        $mensagem->mensagem_login($conta->nome);
        $t = $mensagem->mensagem_login($conta->nome);
        $this ->assertEquals("_Parabéns Maria esse é seu primeiro login__", $t);
        
    }
    
}
class MensagemLogin{
    public function mensagem_login($usu){
        return "_Parabéns $usu esse é seu primeiro login__";
    }
}

class Conta{
    public $mensagem, $nome, $acesso;

    function __construct(MensagemLogin $mensagem, $nome, $acesso){
        $this->mensagem = $mensagem; 
        $this->nome = $nome;
        $this->acesso = $acesso;
    }

    function exibirUsuarioEConta() {
        echo "Usuário: $this->nome, Conta: $this->acesso";
    }
}

$mensagem = new MensagemLogin();

$conta = new Conta($mensagem, 'Maria', 'Poupança');

$mensagem->mensagem_login($conta->nome);

?>