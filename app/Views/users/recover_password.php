<?php

	$this->extend('layouts/layout_mainnew');

?>

<?php $this->section('content')?>

<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Esqueci minha senha</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo site_url('Main') ?>">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
              <a href="<?php echo site_url('Users') ?>">Login</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Esqueci minha senha
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->


<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <form action="<?php echo site_url('users/reset_password')?>" method="post">
        <div class="form-group">
          <input type="email" name="text_email" placeholder="Email" required class="form-control">
        </div>
        <div class="form-group text-center">
          <a href="<?php echo site_url('users') ?>" class="btn btn-secondary mr-3">Voltar</a>
          <input type="submit" value="Reset" class="btn btn-primary">
        </div>
      </form>      
    </div>
  </div>
</div>

<?php $this->endSection()?>