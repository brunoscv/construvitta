<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Clientes com Contratos</a></li>
							<li class="breadcrumb-item active" aria-current="page">Novo Cliente com Contrato</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>clientes-contratos" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista de Clientes com Contratos</a>
					<!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cards Header -->
<!-- Page content -->
<style>

input[type="file"] {
  position: absolute;
  left: 0;
  opacity: 0;
  top: 0;
  bottom: 0;
  width: 100%;
}

/* div#file {
  position: relative;
  top: 0;
  bottom: 0;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #ccc;
  border: 3px dotted #bebebe;
  border-radius: 10px;
} */

div#file {
    z-index: 999;
    padding: 5rem 1rem;
    cursor: pointer;
    transition: all .15s ease;
    text-align: center;
    color: #8898aa;
    border: 1px dashed #dee2e6;
    border-radius: .375rem;
    background-color: #fff;
	order: -1;
	font-size: 1em;
	cursor: pointer;
}

#test:hover { 
	color: #000
}


div.dragover {
  background-color: #aaa;
}

</style>
<div class="container-fluid mt--6">
	<!-- Table -->
	<div class="row">
        <div class="col">
          	<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<h3 class="mb-0">Cadastro de Clientes com Contratos</h3>
						<?php $this->load->view('layout/messages.php'); ?>
				</div>
				<div class="card-header">
					<form id="form_clientes_contratos" class="form-horizontal" method="post" action="<?php echo site_url(); ?>clientes-contratos/criar" enctype="multipart/form-data">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						<div class="row">
							<div class="col-md-7">
								<div class="form-group">
								<label class="bmd-label-floating">Nome do Cliente</label>
									<input type="text" value="<?php echo set_value("nome_cliente", @$item->nome_cliente); ?>" class="form-control" name="nome_cliente" id="nome_cliente">
									<small style="color:#F65676"><?php echo form_error('nome_cliente'); ?></small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<label class="bmd-label-floating">CPF</label>
									<input type="text" value="<?php echo set_value("cpf", @$item->cpf); ?>" class="form-control" name="cpf" id="cpf">
									<small style="color:#F65676"><?php echo form_error('cpf'); ?></small>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
								<label class="bmd-label-floating">Data de Nascimento</label>
									<input type="text" value="<?php echo set_value("data_nasc", @$item->data_nasc); ?>" class="form-control datepicker" name="data_nasc" id="data_nasc">
									<small style="color:#F65676"><?php echo form_error('data_nasc'); ?></small>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Email do Cliente</label>
									<input type="text" value="<?php echo set_value("email_cliente", @$item->email); ?>" class="form-control" name="email_cliente" id="email_cliente">
									<small style="color:#F65676"><?php echo form_error('email_cliente'); ?></small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label class="bmd-label-floating">Telefone do Cliente</label>
									<input type="text" value="<?php echo set_value("telefone_cliente", @$item->telefone); ?>" class="form-control" name="telefone_cliente" id="telefone_cliente">
									<small style="color:#F65676"><?php echo form_error('telefone_cliente'); ?></small>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label class="bmd-label-floating">Renda Bruta Familiar</label>
									<input type="text" value="<?php echo set_value("renda_bruta", @$item->renda_bruta); ?>" class="form-control" name="renda_bruta" id="renda_bruta">
									<small style="color:#F65676"><?php echo form_error('renda_bruta'); ?></small>
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<label class="fbmd-label-floating" for="tem_repasse_garantido">Mais de um comprador ou dependente?</label>
								<br>
								<label class="custom-toggle">
									<input type="checkbox" name="compr_dependente">
									<span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								</label>
							</div>
							<div class="col-md-5 mb-3">
								<label class="fbmd-label-floating" for="tem_repasse_garantido">Mais de 3 anos de FGTS? Somandos todos os 
									períodos trabalhados.
								</label>
								<br>
								<label class="custom-toggle">
									<input type="checkbox" name="fgts">
									<span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								</label>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="bmd-label-floating">Valor do FGTS</label>
									<input type="text" value="<?php echo set_value("valor_fgts", @$item->valor_fgts); ?>" class="form-control" name="valor_fgts" id="valor_fgts">
									<small style="color:#F65676"><?php echo form_error('valor_fgts'); ?></small>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label class="bmd-label-floating">Valor do Sinal/Entrada</label>
									<input type="text" value="<?php echo set_value("valor_sinal", @$item->valor_sinal); ?>" class="form-control" name="valor_sinal" id="valor_sinal">
									<small style="color:#F65676"><?php echo form_error('valor_sinal'); ?></small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Loteamento/Zona para Construção</label>
									<input type="text" value="<?php echo set_value("loteamento_zona", @$item->loteamento_zona); ?>" class="form-control" name="loteamento_zona" id="loteamento_zona">
									<small style="color:#F65676"><?php echo form_error('loteamento_zona'); ?></small>
								</div>
							</div>
							
							<div class="col-md-3 mb-3">
								<label class="fbmd-label-floating" for="tem_repasse_garantido">Algum Modelo de Casa Pré-definido?</label>
								<div class="row">
									<div class="col-md-6">
										<div class="custom-control custom-checkbox mb-3">
											<input class="custom-control-input" name="c0" value="1" id="customCheck1" type="checkbox">
											<label class="custom-control-label" for="customCheck1">C0</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="custom-control custom-checkbox mb-3">
											<input class="custom-control-input" name="c0_s" value="1" id="customCheck2" type="checkbox">
											<label class="custom-control-label" for="customCheck2">C0-S</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="custom-control custom-checkbox mb-3">
											<input class="custom-control-input" name="c1" value="1" id="customCheck3" type="checkbox">
											<label class="custom-control-label" for="customCheck3">C1</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="custom-control custom-checkbox mb-3">
											<input class="custom-control-input" name="c2" value="1" id="customCheck4" type="checkbox">
											<label class="custom-control-label" for="customCheck4">C2</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="custom-control custom-checkbox mb-3">
											<input class="custom-control-input" name="c3" value="1" id="customCheck5" type="checkbox">
											<label class="custom-control-label" for="customCheck5">C3</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="custom-control custom-checkbox mb-3">
											<input class="custom-control-input" name="c4" value="1" id="customCheck6" type="checkbox">
											<label class="custom-control-label" for="customCheck6">C4</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="custom-control custom-checkbox mb-3">
											<input class="custom-control-input" name="c5" value="1" id="customCheck7" type="checkbox">
											<label class="custom-control-label" for="customCheck7">C5</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="custom-control custom-checkbox mb-3">
											<input class="custom-control-input" name="com_muro" value="1" id="customCheck8" type="checkbox">
											<label class="custom-control-label" for="customCheck8">COM MURO</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<label class="fbmd-label-floating" for="tem_repasse_garantido">Cliente tem contrato?
								</label>
								<br>
								<label class="custom-toggle">
									<input type="checkbox" name="contrato" checked="checked">
									<span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								</label>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Outro Modelo</label>
									<input type="text" value="<?php echo set_value("outro_modelo", @$item->outro_modelo); ?>" class="form-control" name="outro_modelo" id="outro_modelo">
									<small style="color:#F65676"><?php echo form_error('outro_modelo'); ?></small>
								</div>
							</div>
							
						</div>

						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label class="bmd-label-floating">Qual valor do Lote?</label>
									<input type="text" value="<?php echo set_value("valor_lote", @$item->valor_lote); ?>" class="form-control" name="valor_lote" id="valor_lote">
									<small style="color:#F65676"><?php echo form_error('valor_lote'); ?></small>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="bmd-label-floating">Qual valor da Casa?</label>
									<input type="text" value="<?php echo set_value("valor_casa", @$item->valor_casa); ?>" class="form-control" name="valor_casa" id="valor_casa">
									<small style="color:#F65676"><?php echo form_error('valor_casa'); ?></small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<label class="bmd-label-floating">Qual Extra?</label>
									<input type="text" value="<?php echo set_value("extra", @$item->extra); ?>" class="form-control" name="extra" id="extra">
									<small style="color:#F65676"><?php echo form_error('extra'); ?></small>
								</div>
							</div>
							<div class="col-md-1 mb-3">
								<label class="fbmd-label-floating" for="tem_repasse_garantido">Muro
								</label>
								<br>
								<label class="custom-toggle">
									<input type="checkbox" name="muro" <?php if(@$item->muro == "on") { echo "checked"; }  ?>>
									<span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								</label>
							</div>
							<div class="col-md-2 mb-3">
								<label class="fbmd-label-floating" for="tem_repasse_garantido">Cerca Elétrica
								</label>
								<br>
								<label class="custom-toggle">
									<input type="checkbox" name="cerca_eletrica" <?php if(@$item->cerca_eletrica == "on") { echo "checked"; }  ?>>
									<span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								</label>
							</div>
							<div class="col-md-2 mb-3">
								<label class="fbmd-label-floating" for="tem_repasse_garantido">Portão Automático
								</label>
								<br>
								<label class="custom-toggle">
									<input type="checkbox" name="portao_automatico" <?php if(@$item->portao_automatico == "on") { echo "checked"; }  ?>>
									<span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								</label>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="bmd-label-floating">Observações</label>
									<textarea id="observacoes" name="observacoes"></textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="bmd-label-floating">Corretor Responsável</label>
									<?php echo form_dropdown('user_id', $listaCorretores, set_value('user_id', @$item->user_id), 
												'data-size="7" data-live-search="true" class="form-control fill_select btn_in own_selectbox" id="corretores"'); ?>
									<small style="color:#F65676"><?php echo form_error('user_id'); ?></small>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="bmd-label-floating">Correspondente Responsável</label>
									<?php echo form_dropdown('correspondente_id', $listaCorrespondentes, set_value('correspondente_id', @$item->correspondente_id), 
												'data-size="7" data-live-search="true" class="form-control fill_select btn_in own_selectbox" id="correspondente"'); ?>
									<small style="color:#F65676"><?php echo form_error('correspondente_id'); ?></small>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div id="file">Clique ou arraste arquivos nesse espaço.</div>
									<input type="file" id="test" name="files[]" multiple>
								</div>
							</div>
							<div class="col-md-12">
								<ul class="list-group list-group-lg list-group-flush" id="filename"></ul>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" name="enviar" class="btn btn-sm btn-primary" value="Salvar" />
									<a href="<?php echo site_url().'clientes-contratos'?>" class="btn btn-sm">Cancelar</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/clientescontratos/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/clientescontratos/validate.js"></script>
<script>
	tinymce.init({
	selector: '#observacoes',
	menubar: false,
	plugins: [
		'advlist autolink lists link image charmap print preview anchor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table paste code help wordcount'
	],
	toolbar:
	'bold italic backcolor | alignleft aligncenter ' +
	'alignright alignjustify | bullist numlist outdent indent | ' +
	'help',
	content_css: '//www.tiny.cloud/css/codepen.min.css'
	});
</script>

