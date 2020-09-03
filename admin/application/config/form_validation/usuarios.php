<?php
$config['Usuarios'] = array(
							array(
								'field' => 'senha',
								'label' => 'Senha',
								'rules' => 'required'
							),
							array(
								'field' => 'senha2',
								'label' => 'Senha',
								'rules' => 'required|matches[senha]'
							),
							array(
								'field' => 'usuario',
								'label' => 'Usuario',
								'rules' => 'required|strtolower'
							),
							array(
								'field' => 'nome',
								'label' => 'Nome',
								'rules' => ''
							),
							array(
								'field' => 'tipo_id',
								'label' => 'Tipo de Usuario',
								'rules' => 'required'
							),
							array(
								'field' => 'usuario_id',
								'label' => 'Lista de Usuarios',
								'rules' => 'required'
							),
							array(
								'field' => 'email',
								'label' => 'E-mail',
								'rules' => 'valid_email'
							),
							array(
								'field' => 'email',
								'label' => 'E-mail',
								'rules' => 'valid_email'
							),		
					);