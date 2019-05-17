<?php

	$this->extend('layouts/layout_main');

?>

<?php $this->section('content')?>


<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Redefinir Senha</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo site_url('Main') ?>">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?php echo site_url('Users') ?>">Login</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Redefinir Senha
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

<div class="row">
    <div class="col-5 offset-3 card bg-light p-3">

        <form action="<?php echo site_url('users/redefine_password_submit')?>" method="post">

            <input type="hidden" name="text_id_user" value="<?php echo $user['id_user']?>">

            <div class="form-group">
                <input type="password" name="text_nova_password" class="form-control" placeholder="Senha" required>
            </div>

            <div class="form-group">
                <input type="password" name="text_repetir_password" class="form-control" placeholder="Repetir Senha" required>
            </div>

            
            <div class="form-group col-12 text-center">
                <input type="submit" value="Redefinir" class="btn btn-primary">
            </div>

        </form>

        <?php if(isset($error)): ?>
            <div class="alert alert-danger text-center mt-1" id="error-message">
                <?php echo $error ?>
            </div>
        <?php endif; ?>
        
    </div>
</div>

<?php $this->endSection()?>