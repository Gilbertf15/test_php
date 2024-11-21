<?php

use PHPUnit\Framework\TestCase;

abstract class Plano{
    public $usu_plano;
    public $taxa_;

   
}

class Plano_Free extends Plano{
    private $nome, $idade, $acesso;
    function __construct($nome, $idade, $acesso, $usu_plano="Plano Free"){
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> acesso = $acesso;
        $this -> usu_plano = $usu_plano;
    }

    function Retornar_plano(){
        echo $this -> nome;
        echo "<br>";
        echo $this -> idade; 
        echo"<br>";
        echo $this -> acesso;
        echo "<br>";
        echo  $this -> usu_plano;
       
    }
}
#teste unitario de calculo da taxa mensal do plano prata 
class Plano_PrataTest extends TestCase{
    public function testCalcular_taxa(){
        $usuario_Prata = new Plano_Prata('teste_prata', 18, 5, 'acesso médio');
        $resultado = $usuario_Prata -> Calcular_taxa(30);
        $this ->assertEquals(150, $resultado);
    }
}
$usario_free = new Plano_Free('teste', 19, "Acesso Básico");
$usario_free -> Retornar_plano();

class Plano_Prata extends Plano{
    private $nome, $idade, $acesso;

    function __construct($nome, $idade,$taxa, $acesso, $usu_plano="Plano Prata", ){
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> acesso = $acesso;
        $this -> taxa_ = $taxa;
        $this -> usu_plano = $usu_plano;
       
    }

  
    # calculo da taxa do plano prata 
    public function Calcular_taxa($taxa_fixa){
        $total = 0;
        $total = $this -> taxa_ * $taxa_fixa;
        echo "<br>";
        echo $total;
        return $total;

    }
}

$usuario_Prata = new Plano_Prata('teste_prata', 18, 5, 'acesso médio',);
$usuario_Prata -> Calcular_taxa(30);

?>