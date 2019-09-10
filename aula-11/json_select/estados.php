<?php
  header('Content-Type: application/json');
  $regiao_selecionada = $_REQUEST['regiao_selecionada'];
  $estados = [
    'centro-oeste' => [
      ['id'=>'DF', 'nome' => 'Distrito Federal'],
      ['id'=>'GO', 'nome' => 'Goiás'],
      ['id'=>'MT', 'nome' => 'Mato Grosso'],
      ['id'=>'MS', 'nome' => 'Mato Grosso do Sul']
    ],
    'sul' => [
      ['id'=>'PR', 'nome'=> 'Paraná'],
      ['id'=>'RS', 'nome'=> 'Rio Grande do Sul'],
      ['id'=>'SC', 'nome'=> 'Santa Catarina']
    ]
  ];
echo json_encode($estados[$regiao_selecionada]);
