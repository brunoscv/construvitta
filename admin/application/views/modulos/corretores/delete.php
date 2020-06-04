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
							<li class="breadcrumb-item active" aria-current="page">Apagar Corretor</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>corretores" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista de Corretores</a>
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
					<h3 class="mb-0">Cadastro de Corretor</h3>
						<?php $this->load->view('layout/messages.php'); ?>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="card-header">
					<div class="alert alert-danger" role="alert">
						<strong>Atenção!</strong> 
						Esta ação não poderá ser desfeita.
					</div>
					<form id="form_corretores" class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<label class="bmd-label-floating">Nome do Corretor</label>
									<input type="text" disabled="" value="<?php echo set_value("nome_corretor", @$item->nome_corretor); ?>" class="form-control" name="nome_corretor" id="nome_corretor">
									<?php echo form_error('nome_corretor'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Email do Corretor</label>
									<input type="text" disabled="" value="<?php echo set_value("email_corretor", @$item->email); ?>" class="form-control" name="email_corretor" id="email_corretor">
									<?php echo form_error('email_corretor'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label class="bmd-label-floating">Telefone do Corretor</label>
									<input type="text" disabled="" value="<?php echo set_value("telefone_telefone", @$item->telefone); ?>" class="form-control" name="telefone_corretor" id="telefone_corretor">
									<?php echo form_error('telefone_corretor'); ?>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" name="enviar" class="btn btn-sm btn-danger" value="Apagar" />
									<a href="<?php echo site_url().'corretores'?>" class="btn btn-sm">Cancelar</a>
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

