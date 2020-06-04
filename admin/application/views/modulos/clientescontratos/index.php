<!-- Cards Header -->
<style type="text/css">
.table th, .table td {
    padding: 0.2em 0;
    vertical-align: middle;
}
.table-responsive {
    display: block;
    width: 100%;
    -webkit-overflow-scrolling: touch;
}
</style>
<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Clientes com Contratos</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
							<li class="breadcrumb-item active" aria-current="page">Default</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>clientes-contratos/criar" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> Novo Cliente com Contrato</a>
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
					<h3 class="mb-0">Painel de Clientes com Contratos</h3>
				</div>
				<div class="card-body">
					<?php $this->load->view('layout/messages.php'); ?>
					<form id="form_clientes_contratos" class="form-horizontal" method="post" action="<?php echo site_url(); ?>clientes-contratos/buscar" enctype="multipart/form-data">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						
						
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
								<label class="bmd-label-floating">Tem Muro?</label>
									<select name="casa_muro" id="" class="form-control">
										<option value="">Selecione</option>
										<option value="on">Sim</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<label class="bmd-label-floating">Tem Cerca Elétrica?</label>
									<select name="cerca_eletrica" id="" class="form-control">
										<option value="">Selecione</option>
										<option value="on">Sim</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<label class="bmd-label-floating">Tem Portão Automático?</label>
									<select name="portao_automatico" id="" class="form-control">
										<option value="">Selecione</option>
										<option value="on">Sim</option>
									</select>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
								<label class="bmd-label-floating">Modelo de Casa</label>
									<select name="modelo_casa" id="" class="form-control">
										<option>Selecione</option>
										<option value="c0">C0</option>
										<option value="c0_s">C0_s</option>
										<option value="c1">C1</option>
										<option value="c2">C2</option>
										<option value="c3">C3</option>
										<option value="c4">C4</option>
										<option value="c5">C5</option>
									</select>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="bmd-label-floating"></label><br/>
									<input type="submit" name="enviar" class="btn btn-primary" value="Buscar" style="padding: .54em 1em; margin-top: .45em; ">
									
								</div>
							</div>
						</div>
						
					</form>

					<div class="table-responsive py-4">
						<table class="table table-flush" id="datatable-basic">
							<thead class="thead-light">
								<tr>
									<th>#</th>
									<th>Nome Cliente</th>
									<th>Telefone</th>
									<th>Email</th>
									<th>Contrato?</th>
									<th>Status</th>
									<th>Criado</th>
									<th class="">Ações</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($listaClientes as $item): ?>
									<tr>
										<td><?php echo $item->id; ?></td>
										<td><?php echo $item->nome_cliente; ?></td>
										<td><?php echo $item->telefone; ?></td>
										<td><?php echo $item->email; ?></td>
										<td><?php echo ($item->contrato == "on" ? '<span class="badge badge-success"> Sim </span>' : '<span class="badge badge-danger"> Não </span>') ?></td>
										<td><?php echo ($item->status == 1 ? '<span class="badge badge-success"> Ativo </span>' : '<span class="badge badge-danger"> Inativo </span>') ?></td>
										<td><?php echo date("d/m/Y", strtotime($item->createdAt)); ?></td>
										<td class="">
											<a class="mr-2" href="<?php echo site_url("clientes-contratos/ver/".$item->id); ?>"><i class='fa fa-eye'></i></a>
											<a class="mr-2" href="<?php echo site_url("clientes-contratos/contrato/".$item->id); ?>"><i class='fa fa-file'></i></a>
											<!-- <a class="mr-2" href="<?php echo site_url("clientes-contratos/editar/".$item->id); ?>"><i class='fas fa-edit'></i></a> -->
											<a class="" href="<?php echo site_url("clientes-contratos/delete/". $item->id); ?>"><i class='fa fa-trash'></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>