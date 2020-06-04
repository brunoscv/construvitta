<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content=" Construvitta Dashboard">
  <meta name="author" content=" Construvitta">
  <title>Construvitta - Sistema</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/argon.css?v=1.1.0" type="text/css">
  <link href="https://cdn.quilljs.com/1.3.4/quill.snow.css" rel="stylesheet">
  <!-- Bootstrap Select Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select-picker/css/bootstrap-select.css" type="text/css">
  

  <!-- Core -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="https://cdn.quilljs.com/1.3.4/quill.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/select-picker/js/bootstrap-select.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/sp6agbdzuu3vbpn0mwhu4xmge5uafg3u3ialsyvk9wbfdz30/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="<?php echo base_url(); ?>dashboard">
          <img src="<?php echo base_url(); ?>assets/img/theme/construvitta-logo.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url(); ?>dashboard" role="button" aria-expanded="false">
                  <i class="fas fa-tachometer-alt text-primary"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-pacientes" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-pacientes">
                <i class="ni ni-single-copy-04 text-orange"></i>
                <span class="nav-link-text">Cadastros</span>
              </a>
              <div class="collapse" id="navbar-pacientes">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>clientes" class="nav-link">Listar Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>corretores" class="nav-link">Listar Corretores</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>correspondentes" class="nav-link">Listar Correspondentes</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>imobiliarias" class="nav-link">Listar Imobiliárias</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-clientes-contratos" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-clientes-contratos">
                <i class="ni ni-single-copy-04 text-orange"></i>
                <span class="nav-link-text">Clientes c/ Contrato</span>
              </a>
              <div class="collapse" id="navbar-clientes-contratos">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>clientes-contratos" class="nav-link">Listar Clientes c/ Contrato</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>simulacoes">
                <i class="ni ni-archive-2 text-green"></i>
                <span class="nav-link-text">Simulações</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">
                <i class="far fa-money-bill-alt text-danger"></i>
                <span class="nav-link-text">Financeiro</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#navbar-configuration" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fa fa-cogs text-primary"></i>
                <span class="nav-link-text">Configurações</span>
              </a>
              <div class="collapse" id="navbar-configuration">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>menus" class="nav-link">Menus</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>usuarios" class="nav-link">Usuários</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>perfis" class="nav-link">Perfis de Acesso</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">Documentos</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Manual Primeiros Passos</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-gradient-template border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search form -->
            <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
                </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </form>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
                <!-- Sidenav toggler -->
                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
                </div>
            </li>
            <li class="nav-item d-sm-none">
                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i> <span style="font-size:0.8em">Acesso Rápido</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                <div class="row shortcuts px-4">
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                        <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Cadastrar Clientes</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                        <i class="ni ni-email-83"></i>
                    </span>
                    <small>Listar Clientes</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                        <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Fazer Simulação</small>
                    </a>
                    <!-- <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                        <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                        <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                    </a>
                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                        <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                    </a> -->
                </div>
                </div>
            </li>
            </ul>
            <ul class="navbar-nav align-items-center ml-auto ml-md-0">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?php echo base_url(); ?>assets/img/theme/user.png">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><!-- <?= $userdata['nome']; ?> -->Administrador</span>
                    </div>
                </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Bem Vindo!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                  <a href="<?php echo base_url().'auth/logout' ?>" class="dropdown-item">
                      <i class="ni ni-user-run"></i>
                      <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
        </div>
      </div>
    </nav>