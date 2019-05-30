<?php

    $this->extend('layouts/layout_mainnew');
    $s = session();

    // profile
    $profile = explode(',',$user['profile']);
    $check_user = '';
    $check_admin = '';
    $check_realestate = '';

    if(in_array('admin', $profile)){ $check_admin = "checked";}
    if(in_array('realestate', $profile)){ $check_realestate = "checked";}
    if(in_array('user', $profile)){ $check_user = "checked";}

?>

<?php $this->section('content')?>

<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Editar perfi</h1>
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
              Editar perfil
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
<form action="<?php echo site_url('admin_edit_user') ?>" method="post">

  <p>Username: <b><?php echo $user['username']?></b></p>

  <p><input type="text" name="text_name"  placeholder="Name" id="text_name" required value="<?php echo $user['name']?>"></p>
  <p><input type="email" name="text_email" placeholder="Email" id="text_email" required value="<?php echo $user['email']?>"></p>

<!-- profile -->
<label><input type="checkbox" name="check_user" <?php echo $check_user ?>> User</label><br>
<label><input type="checkbox" name="check_realestate" <?php echo $check_realestate ?>> Real Estate</label><br>
<label><input type="checkbox" name="check_admin" <?php echo $check_admin ?>> Admin</label><br>
<div>
  <a href="<?php echo site_url('users/admin_users') ?>" class="btn btn-secondary">Cancelar</a>
  <button class="btn btn-primary">Atualizar</button>
</div>
</form>

    

<?php $this->endSection()?>