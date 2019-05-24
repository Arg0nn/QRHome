<?php

    $this->extend('layouts/layout_main');
    $s = session();

?>

<?php $this->section('content')?>

<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Barra de Utilizador</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo site_url('Main') ?>">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Usuário
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <?php echo view('users/userbar') ?>

    <div>Olá, <?php echo $s->name . ' (' . $s->id_user . ')'?></div>

    <div>O meu perfil é de: <?php echo $s->profile ?></div>

    <div class="row">
      <div class="col-4"text-center><a href="<?php echo site_url('users/op1') ?>" class="btn btn-primary">Operação 1</a></div>
      <div class="col-4"text-center><a href="<?php echo site_url('users/op2') ?>" class="btn btn-primary">Operação 2</a></div>
      <?php if(isset($admin)): ?>
      <div class="col-4"text-center><a href="<?php echo site_url('users/admin_users') ?>" class="btn btn-primary">Gestão de Utilizadores</a></div>
      <?php endif; ?>
    </div>

    <a href="<?php echo site_url('users/logout') ?>">Logout</a>

<?php $this->endSection()?>