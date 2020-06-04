<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Imobiliárias</a></li>
							<li class="breadcrumb-item active" aria-current="page">Nova Imobiliária</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>imobiliarias" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista de Imobiliárias</a>
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
	<div class="row">
        <div class="col">
          	<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<h3 class="mb-0">Cadastro de Imobiliária</h3>
						<?php $this->load->view('layout/messages.php'); ?>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="card-header">
					<form id="form_imobiliarias" class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label class="bmd-label-floating">Nome do Imobiliária</label>
									<input type="text" value="<?php echo set_value("nome_imobiliaria", @$item->nome_imobiliaria); ?>" class="form-control" name="nome_imobiliaria" id="nome_imobiliaria" disabled="">
									<small style="color:#F65676"><?php echo form_error('nome_imobiliaria'); ?></small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">CNPJ</label>
									<input type="text" value="<?php echo set_value("cnpj", @$item->cnpj); ?>" class="form-control" name="cnpj" id="cnpj" disabled="">
									<small style="color:#F65676"><?php echo form_error('cnpj'); ?></small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="bmd-label-floating">N. CRECI PJ</label>
									<input type="text" value="<?php echo set_value("creci", @$item->creci); ?>" class="form-control" name="creci" id="creci" disabled="">
									<small style="color:#F65676"><?php echo form_error('creci'); ?></small>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Email do Imobiliária</label>
									<input type="text" value="<?php echo set_value("email_imobiliaria", @$item->email); ?>" class="form-control" name="email_imobiliaria" id="email_imobiliaria" disabled="">
									<small style="color:#F65676"><?php echo form_error('email_imobiliaria'); ?></small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label class="bmd-label-floating">Telefone do Imobiliária</label>
									<input type="text" value="<?php echo set_value("telefone_telefone", @$item->telefone); ?>" class="form-control" name="telefone_imobiliaria" id="telefone_imobiliaria" disabled="">
									<small style="color:#F65676"><?php echo form_error('telefone_imobiliaria'); ?></small>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<a href="<?php echo site_url().'imobiliarias'?>" class="btn btn-sm btn-primary">Voltar</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/imobiliarias/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/imobiliarias/validate.js"></script>

