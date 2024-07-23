<?php
$retorno =    [
    "Cpf" => "13315887400",
    "Matricula" => "12345678901",
    "CodEmpregador" => "string",
    "NomeEmpregador" => "string",
    "IndNovaMargemConsignado" => false,
    "IndRefinConsignado" => true,
    "IndPortConsignado" => true,
    "IndNovoCartao" => false,
    "IndSaqueCartao" => true,
    "IndAumentoCartao" => false,
    "IndSaqueAumentoCartao" => false,
    "IndNovaMargemCreditoConta" => true,
    "IndRefinCreditoConta" => true,
    "IndConsultaOnlineAtiva" => null,
    "SubProdutos" => false,
    "IndRestricao" => true,
    "IndConsultaBeneficio" => false,
    "IndSeguroNovoCartao" => false,
    "IndSeguroCartaoEmitido" => true,
    "IndFgts" => false,
    "IndRefinConsignadoPort" => false,
    "IndSolicitaAutorizacaoBeneficio" => false,
    "IndRetornoSerpro" => true
  ];

  foreach ($retorno as $chave => $valor){
    if(!empty($valor) && is_bool($valor)){
        echo "$chave: $valor<br>";
    }

  }

?>