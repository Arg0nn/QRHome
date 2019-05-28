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
          <h1 class="title-single">Cadastro Admin</h1>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('Main') ?>">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('users/admin_users') ?>">Admin</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Cadastrar novo usuário
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ Error /-->
<?php if(isset($error)): ?>
<div class="alert alert-danger">
  <?php echo $error ?>
</div>
<?php endif; ?>

<!--/ Form to new user /-->
<h2>Adicionar novo usuário</h2>
<form action="" method="post">
  <p><input type="text" name="text_username"  placeholder="Username" id="text_username" required></p>

  <p><input type="text" name="text_password"  placeholder="Senha" id="text_password" required></p>
  <p><input type="text" name="text_password_repeat"  placeholder="Repetir Senha" id="text_password_repeat" required></p>

  <div class="form-inline mb-2">
  <button class="btn btn-primary btn-sm" type="button" id="btn-password">Gerar Senha</button>
  <button class="btn btn-secondary btn-sm" type="button" id="btn-limpar">Limpar</button>
  </div>


  <p><input type="text" name="text_name"  placeholder="Name" id="text_name" required></p>
  <p><input type="email" name="text_email" placeholder="Email" id="text_email" required></p>

<!-- profile -->
<label><input type="checkbox" name="check_user" checked> User</label><br>
<label><input type="checkbox" name="check_realestate"> Real Estate</label><br>
<label><input type="checkbox" name="check_admin"> Admin</label><br>
<div>
  <a href="<?php echo site_url('users/admin_users') ?>" class="btn btn-secondary">Cancelar</a>
  <button class="btn btn-primary">Adicionar</button>
</div>
</form>

    

<?php $this->endSection()?>