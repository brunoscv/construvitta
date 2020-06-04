<?php
$config['Simulacoes'] = array(
	array(
		'field' => 'corretores_id',
		'label' => 'Nome Corretor',
		'rules' => 'required'
	),
	array(
		'field' => 'clientes_id',
		'label' => 'Nome Cliente',
		'rules' => 'required'
	),
	array(
		'field' => 'data_nasc',
		'label' => 'Data Nascimento',
		'rules' => 'required'
	),
	array(
		'field' => 'imovel',
		'label' => 'Possui imóvel no nome',
		'rules' => ''
	),
	array(
		'field' => 'compr_dependente',
		'label' => 'Mais de um comprador e dependente',
		'rules' => ''
	),
	array(
		'field' => 'renda_bruta',
		'label' => 'Valor Renda Bruta',
		'rules' => 'required'
	),
	array(
		'field' => 'fgts',
		'label' => 'FGTS somado 3 Anos',
		'rules' => 'required'
	),
	array(
		'field' => 'valor_fgts',
		'label' => 'Valor FGTS',
		'rules' => 'required'
	),
	array(
		'field' => 'loteamento_zona',
		'label' => 'Qual loteamento ou zona para simulação',
		'rules' => 'required'
	),
	array(
		'field' => 'telefone',
		'label' => 'Telefone',
		'rules' => 'required'
	),
	array(
		'field' => 'email',
		'label' => 'Email',
		'rules' => 'required'
	),
	array(
		'field' => 'observacoes',
		'label' => 'Observações',
		'rules' => ''
	),
);