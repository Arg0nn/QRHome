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
            <h1 class="title-single">Login</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo site_url('Main') ?>">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Login
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

<div class="row mt-3 mb-3">
    <div class="col-5 offset-3 card bg-light p-3">

        <form action="<?php echo site_url('users/login')?>" method="post">

            <div class="form-group mt-2">
                <input type="text" name="text_username" class="form-control" placeholder="Username">
            </div>

            <div class="form-group">
                <input type="password" name="text_password" class="form-control" placeholder="Password" >
            </div>

            <div class="form-group row">
                <div class="col-6">
                    <small><a href="<?php echo site_url('users/recover') ?>">Esqueci minha senha</a></small>
                </div>
                <div class="form-group col-6 text-right">
                    <input type="submit" value="Entrar" class="btn btn-primary">
                </div>
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