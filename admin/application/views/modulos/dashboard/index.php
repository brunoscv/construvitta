<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Default</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
							<li class="breadcrumb-item active" aria-current="page">Default</li>
						</ol>
					</nav>
				</div>
				<!-- <div class="col-lg-6 col-5 text-right">
					<a href="#" class="btn btn-sm btn-neutral">New</a>
					<a href="#" class="btn btn-sm btn-neutral">Filters</a>
				</div> -->
			</div>
		</div>
	</div>
</div>
<!-- Cards Header -->
 <!-- Page content -->
 <div class="container-fluid mt--6">
	<!-- Card stats -->
	<div class="row">
		<div class="col-xl-4 col-md-6">
			<div class="card card-stats">
			<!-- Card body -->
			<div class="card-body">
				<div class="row">
				<div class="col">
					<h5 class="card-title text-uppercase text-muted mb-0">Total de Arquivos Enviados</h5>
					<span class="h2 font-weight-bold mb-0">50.897</span>
				</div>
				<div class="col-auto">
					<div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
					<i class="ni ni-active-40"></i>
					</div>
				</div>
				</div>
				<p class="mt-3 mb-0 text-sm">
				<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3,48%</span>
				<span class="text-nowrap">Desde o mês passado</span>
				</p>
			</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6">
			<div class="card card-stats">
			<!-- Card body -->
			<div class="card-body">
				<div class="row">
				<div class="col">
					<h5 class="card-title text-uppercase text-muted mb-0">Clientes Atendidos</h5>
					<span class="h2 font-weight-bold mb-0">124</span>
				</div>
				<div class="col-auto">
					<div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
					<i class="ni ni-chart-pie-35"></i>
					</div>
				</div>
				</div>
				<p class="mt-3 mb-0 text-sm">
				<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3,48%</span>
				<span class="text-nowrap">Desde o mês passado</span>
				</p>
			</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6">
			<div class="card card-stats">
			<!-- Card body -->
			<div class="card-body">
				<div class="row">
				<div class="col">
					<h5 class="card-title text-uppercase text-muted mb-0">Novos Corretores</h5>
					<span class="h2 font-weight-bold mb-0">24</span>
				</div>
				<div class="col-auto">
					<div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
					<i class="ni ni-money-coins"></i>
					</div>
				</div>
				</div>
				<p class="mt-3 mb-0 text-sm">
				<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3,48%</span>
				<span class="text-nowrap">Desde o mês passado</span>
				</p>
			</div>
			</div>
		</div>
	</div>
	<div class="row">
        <div class="col-xl-12">
          	<div class="card bg-default">
            	<div class="card-header bg-transparent">
					<div class="row align-items-center">
						<div class="col">
							<h6 class="text-light text-uppercase ls-1 mb-1">Visualização Geral</h6>
							<h5 class="h3 text-white mb-0">Transações Realizadas</h5>
						</div>
						<div class="col">
							<ul class="nav nav-pills justify-content-end">
								<li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
									<a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
										<span class="d-none d-md-block">Mensal</span>
										<span class="d-md-none">M</span>
									</a>
								</li>
								<li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
									<a href="#" class="nav-link py-2 px-3" data-toggle="tab">
										<span class="d-none d-md-block">Semanal</span>
										<span class="d-md-none">S</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
            	</div>
				<div class="card-body">
					<!-- Chart -->
					<div class="chart">
						<!-- Chart wrapper -->
						<canvas id="chart-sales-dark" class="chart-canvas"></canvas>
					</div>
				</div>
       		</div>
		</div>
	</div>
        
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/dashboard/js.js"></script>