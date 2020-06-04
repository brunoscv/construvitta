<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Clientes</a></li>
							<li class="breadcrumb-item active" aria-current="page">Ver Cliente</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>clientes" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista de Clientes</a>
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

.tox-tinymce {
    border-radius: 4px !important;
    border: 1px solid #dee2e6 !important;
}

.form-control:disabled, .form-control[readonly] {
    opacity: 1 !important;
    background-color: #f7fafc !important;
}

</style>
<div class="container-fluid mt--6">
	<!-- Table -->
	<div class="row">
        <div class="col">
          	<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<h3 class="mb-0">Visualizar Cliente</h3>
					<?php $this->load->view('layout/messages.php'); ?>
				</div>
				<div class="card-header">
					<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
					<div class="row">
						<div class="col-md-7">
							<div class="form-group">
							<label class="bmd-label-floating">Nome do Cliente</label>
								<input type="text" value="<?php echo set_value("nome_cliente", @$item->nome_cliente); ?>" class="form-control" name="nome_cliente" id="nome_cliente" disabled="">
								<small style="color:#F65676"><?php echo form_error('nome_cliente'); ?></small>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label class="bmd-label-floating">CPF</label>
								<input type="text" value="<?php echo set_value("cpf", @$item->cpf); ?>" class="form-control" name="cpf" id="cpf" disabled="">
								<small style="color:#F65676"><?php echo form_error('cpf'); ?></small>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							<label class="bmd-label-floating">Data de Nascimento</label>
								<input type="text" value="<?php echo set_value("data_nasc", date("d/m/Y", strtotime($item->data_nasc))); ?>" class="form-control datepicker" name="data_nasc" id="data_nasc" disabled="">
								<small style="color:#F65676"><?php echo form_error('data_nasc'); ?></small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="bmd-label-floating">Email do Cliente</label>
								<input type="text" value="<?php echo set_value("email_cliente", @$item->email); ?>" class="form-control" name="email_cliente" id="email_cliente" disabled="">
								<small style="color:#F65676"><?php echo form_error('email_cliente'); ?></small>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label class="bmd-label-floating">Telefone do Cliente</label>
								<input type="text" value="<?php echo set_value("telefone_cliente", @$item->telefone); ?>" class="form-control" name="telefone_cliente" id="telefone_cliente" disabled="">
								<small style="color:#F65676"><?php echo form_error('telefone_cliente'); ?></small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<label class="bmd-label-floating">Renda Bruta Familiar</label>
								<input type="text" value="<?php echo set_value("renda_bruta", @$item->renda_bruta); ?>" class="form-control" name="renda_bruta" id="renda_bruta" disabled="">
								<small style="color:#F65676"><?php echo form_error('renda_bruta'); ?></small>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label class="fbmd-label-floating" for="tem_repasse_garantido">Mais de um comprador ou dependente?</label>
							<br>
							<label class="custom-toggle">
								
								<input type="checkbox" name="compr_dependente" <?php if(@$item->compr_dependente == "on") { echo "checked"; }  ?> disabled="">
								<span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
							</label>
						</div>
						<div class="col-md-5 mb-3">
							<label class="fbmd-label-floating" for="tem_repasse_garantido">Mais de 3 anos de FGTS? Somandos todos os 
								períodos trabalhados.
							</label>
							<br>
							<label class="custom-toggle">
								<input type="checkbox" name="fgts" <?php if(@$item->fgts == "on") { echo "checked"; }  ?> disabled="">
								<span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
							</label>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label class="bmd-label-floating">Valor do FGTS</label>
								<input type="text" value="<?php echo set_value("valor_fgts", @$item->valor_fgts); ?>" class="form-control" name="valor_fgts" id="valor_fgts" disabled="">
								<small style="color:#F65676"><?php echo form_error('valor_fgts'); ?></small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<label class="bmd-label-floating">Valor do Sinal/Entrada</label>
								<input type="text" value="<?php echo set_value("valor_sinal", @$item->valor_sinal); ?>" class="form-control" name="valor_sinal" id="valor_sinal" disabled="">
								<small style="color:#F65676"><?php echo form_error('valor_sinal'); ?></small>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Loteamento/Zona para Construção</label>
								<input type="text" value="<?php echo set_value("loteamento_zona", @$item->loteamento_zona); ?>" class="form-control" name="loteamento_zona" id="loteamento_zona" disabled="">
								<small style="color:#F65676"><?php echo form_error('loteamento_zona'); ?></small>
							</div>
						</div>
						
						<div class="col-md-5 mb-3">
							<label class="fbmd-label-floating" for="tem_repasse_garantido">Algum Modelo de Casa Pré-definido?</label>
							<div class="row">
								<div class="col-md-6">
									<div class="custom-control custom-checkbox mb-3">
										<input class="custom-control-input" name="c0" value="1" id="customCheck1" type="checkbox" <?php if(@$item->c0 == "1") { echo "checked"; }  ?> disabled="">
										<label class="custom-control-label" for="customCheck1">C0</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="custom-control custom-checkbox mb-3">
										<input class="custom-control-input" name="c0_s" value="1" id="customCheck2" type="checkbox" <?php if(@$item->c0_s == "1") { echo "checked"; }  ?> disabled="">
										<label class="custom-control-label" for="customCheck2">C0-S</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="custom-control custom-checkbox mb-3">
										<input class="custom-control-input" name="c1" value="1" id="customCheck3" type="checkbox" <?php if(@$item->c1 == "1") { echo "checked"; }  ?> disabled="">
										<label class="custom-control-label" for="customCheck3">C1</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="custom-control custom-checkbox mb-3">
										<input class="custom-control-input" name="c2" value="1" id="customCheck4" type="checkbox" <?php if(@$item->c2 == "1") { echo "checked"; }  ?> disabled="">
										<label class="custom-control-label" for="customCheck4">C2</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="custom-control custom-checkbox mb-3">
										<input class="custom-control-input" name="c3" value="1" id="customCheck5" type="checkbox" <?php if(@$item->c3 == "1") { echo "checked"; }  ?> disabled="">
										<label class="custom-control-label" for="customCheck5">C3</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="custom-control custom-checkbox mb-3">
										<input class="custom-control-input" name="c4" value="1" id="customCheck6" type="checkbox" <?php if(@$item->c4 == "1") { echo "checked"; }  ?> disabled="">
										<label class="custom-control-label" for="customCheck6">C4</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="custom-control custom-checkbox mb-3">
										<input class="custom-control-input" name="c5" value="1" id="customCheck7" type="checkbox" <?php if(@$item->c5 == "1") { echo "checked"; }  ?> disabled="">
										<label class="custom-control-label" for="customCheck7">C5</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="custom-control custom-checkbox mb-3">
										<input class="custom-control-input" name="com_muro" value="1" id="customCheck8" type="checkbox" <?php if(@$item->com_muro == "1") { echo "checked"; }  ?> disabled="">
										<label class="custom-control-label" for="customCheck8">COM MURO</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Outro Modelo</label>
								<input type="text" value="<?php echo set_value("outro_modelo", @$item->outro_modelo); ?>" class="form-control" name="outro_modelo" id="outro_modelo" disabled="">
								<small style="color:#F65676"><?php echo form_error('outro_modelo'); ?></small>
							</div>
						</div>
						
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="bmd-label-floating">Observações</label>
								<textarea id="observacoes" name="observacoes" value="" disabled=""><?php echo set_value("observacoes", @$item->observacoes); ?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="list-group list-group-lg list-group-flush" id="filename">
								<?php foreach ($cliente_arquivos as $key => $arquivo) { ?>
									<li class='list-group-item px-0'>
										<div class='row align-items-center'>
											<div class='col-auto'>
												<div class='avatar'>
													<img class='avatar-img rounded' src='<?= base_url()?>assets/img/theme/images.png'>
												</div>
											</div>
											<div class='col ml--3'>
												<h4 class='mb-1'> <?= $arquivo->descricao ?> </h4>
												<p class='small text-muted mb-0'><strong><?= $arquivo->tamanho ?></strong> kb</p>
											</div>
											<div class='col-auto'>
												<a href="<?= $arquivo->caminho . $arquivo->descricao; ?>" role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-download'></i></a>
											</div>
										</div>
									</li>
								<?php } ?> 
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<a href="<?php echo site_url().'clientes'?>" class="btn btn-sm btn-primary">Voltar</a>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

    <div class="col-md-4">
        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content bg-gradient-template">
                    <form id="" class="form-horizontal">
                        <div class="modal-header">
                            <h6 class="modal-title" id="modal-title-notification">Confirmação</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="py-3 text-center">
                                <i class="ni ni-bell-55 ni-3x"></i>
                                <h4 class="heading mt-4">Deseja continuar?</h4>
                                <p>Ao continuar o arquivo será removido do sistema.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" id="btn_deletar_arquivo">Ok, Apagar!</button>
                            <a href="<?php echo site_url("imoveis")?>" class="btn btn-link text-white ml-auto">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/clientes/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/clientes/validate.js"></script>
<script>
	tinymce.init({
	selector: '#observacoes',
	menubar: false,
	readonly : 1,
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
    
    $('#modal-notification').on('shown.bs.modal', function (e) {
        var arquivoId = $(e.relatedTarget).data('arquivoid');
        var clienteId = <?= $cliente_id;?>;
        $('#btn_deletar_arquivo').click( function() {
            $.ajax({
                type : 'POST',
                context: this,
                dataType:"json",
                url : "<?= site_url('clientes/deletar_arquivos/')?>" + arquivoId, 
                data :  { 'arquivoId' : arquivoId }, 
                success : function(data){
                    window.location.href = "<?= site_url('clientes/editar/')?>" + clienteId;
                },
                fail: function(data) {
                    console.log(data);
                } 
            });
        });
	});
</script>

