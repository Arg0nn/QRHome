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
            <h1 class="title-single">Contate-nos</h1>
            <span class="color-text-a">Aut voluptas consequatur unde sed omnis ex placeat quis eos. Aut natus officia corrupti qui autem fugit consectetur quo. Et ipsum eveniet laboriosam voluptas beatae possimus qui ducimus. Et voluptatem deleniti. Voluptatum voluptatibus amet. Et esse sed omnis inventore hic culpa.</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo site_url('Main') ?>">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contato
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <div class="row mt-5 mb-5">

    <div class="col-8 offset-2 card p-4">

      <div class="card bg-light text-center p-3">
        <p>Poderá entrar em contato através do email</p>
      </div>

      <form action="<?php echo site_url("main/contato enviar") ?>"  method="post">
      
        <div class=>

        <input type="text" name="text_nome" clas="form-control">
        <input type="email" name="text_email" clas="form-control">
        <textarea name="text_menssagem" rows="5" clas="form-control">

        </textarea>

      </form>

    </div>

  </div>

  <?php $this->endSection()?>
