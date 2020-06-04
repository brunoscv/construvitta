<?php
$config['Clientes'] = array(
	array(
		'field' => 'nome_cliente',
		'label' => 'Nome',
		'rules' => 'required'
	),
	array(
		'field' => 'cpf',
		'label' => 'CPF',
		'rules' => 'required'
	),
	array(
		'field' => 'data_nasc',
		'label' => 'Data Nascimento',
		'rules' => 'required'
	),
	
	array(
		'field' => 'telefone_cliente',
		'label' => 'Telefone',
		'rules' => 'required'
	),
	array(
		'field' => 'email_cliente',
		'label' => 'Email',
		'rules' => 'required'
	),
	array(
		'field' => 'renda_bruta',
		'label' => 'Renda Bruta Familiar',
		'rules' => 'required'
	),
	array(
		'field' => 'compr_dependente',
		'label' => 'Mais de um comprador ou dependente?',
		'rules' => ''
	),
	array(
		'field' => 'fgts',
		'label' => 'Mais de 3 anos de FGTS?',
		'rules' => ''
	),
	array(
		'field' => 'valor_fgts',
		'label' => 'Email',
		'rules' => ''
	),
	array(
		'field' => 'valor_sinal',
		'label' => 'Email',
		'rules' => 'required'
	),
	array(
		'field' => 'loteamento_zona',
		'label' => 'Loteamento/Zona',
		'rules' => 'required'
	),
	array(
		'field' => 'modelo_casa',
		'label' => 'Modelo de Casa',
		'rules' => ''
	),
	array(
		'field' => 'outro_modelo',
		'label' => 'Outro Modelo',
		'rules' => ''
	),

	array(
		'field' => 'observacoes_cliente',
		'label' => 'Observações',
		'rules' => ''
	),
);