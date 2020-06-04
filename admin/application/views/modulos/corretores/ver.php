<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Corretores</a></li>
							<li class="breadcrumb-item active" aria-current="page">Visualizar Corretor</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>clientes" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista de Corretores</a>
					<!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cards Header -->
<!-- Page content -->
<div class="container-fluid mt--6">
	<!-- Table -->
	<div class="row" style="height:100vh">
        <div class="col">
          	<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<h3 class="mb-0">Visualização de Corretores</h3>
						<?php $this->load->view('layout/messages.php'); ?>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="card-header">
					<form id="form_corretores" class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label class="bmd-label-floating">Nome do Corretor</label>
									<input type="text" value="<?php echo set_value("nome_corretor", @$item->nome_corretor); ?>" class="form-control" name="nome_corretor" id="nome_corretor" disabled="">
									<small style="color:#F65676"><?php echo form_error('nome_corretor'); ?></small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<label class="bmd-label-floating">CPF</label>
									<input type="text" value="<?php echo set_value("cpf", @$item->cpf); ?>" class="form-control" name="cpf" id="cpf" disabled="">
									<small style="color:#F65676"><?php echo form_error('cpf'); ?></small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<label class="bmd-label-floating">Data de Nascimento</label>
									<input type="text" value="<?php echo set_value("data_nasc", date("d/m/Y", strtotime($item->data_nasc))); ?>" class="form-control datepicker" name="data_nasc" id="data_nasc" disabled="">
									<small style="color:#F65676"><?php echo form_error('data_nasc'); ?></small>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="bmd-label-floating">Email do Corretor</label>
									<input type="text" value="<?php echo set_value("email_corretor", @$item->email); ?>" class="form-control" name="email_corretor" id="email_corretor" disabled="">
									<small style="color:#F65676"><?php echo form_error('email_corretor'); ?></small>
								</div>
							</div>
						
							<div class="col-md-4">
								<div class="form-group">
								<label class="bmd-label-floating">Telefone do Corretor</label>
									<input type="text" value="<?php echo set_value("telefone_corretor", @$item->telefone); ?>" class="form-control" name="telefone_corretor" id="telefone_corretor" disabled="">
									<small style="color:#F65676"><?php echo form_error('telefone_corretor'); ?></small>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								<label class="bmd-label-floating">CRECI do Corretor</label>
									<input type="text" value="<?php echo set_value("creci", @$item->creci); ?>" class="form-control" name="creci" id="creci" disabled="">
									<small style="color:#F65676"><?php echo form_error('creci'); ?></small>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="bmd-label-floating">Imobiliarias</label>
									<?php echo form_dropdown('imobiliarias_id', $listaImobiliarias, set_value('imobiliarias_id', @$item->imobiliarias_id), 
												'data-size="7" data-live-search="true" class="form-control fill_select btn_in own_selectbox" disabled="disabled" id="pacientes"'); ?>
									<small style="color:#F65676"><?php echo form_error('imobiliarias_id'); ?></small>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<a href="<?php echo site_url().'corretores'?>" class="btn btn-sm btn-primary">Voltar</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/corretores/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/corretores/validate.js"></script>

