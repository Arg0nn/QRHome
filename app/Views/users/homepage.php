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


    <div>Olá, <?php echo $s->name . ' (' . $s->id_user . ')'?></div>

    <a href="<?php echo site_url('users/logout') ?>">Logout</a>

<?php $this->endSection()?>