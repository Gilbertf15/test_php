<?php

class MensagemLogin{
    public function mensagem_login($usu){
        echo "____Parabéns $usu esse é seu primerio login_____";
    }
}
class Conta{
    public $mensagem, $nome, $acesso;
    function __construct(MensagemLogin $mensagem, $nome, $acesso){
        $this -> mensagem = $mensagem; 
        $this -> nome = $nome;
        $this -> acesso = $acesso;
        
    }
}
?>