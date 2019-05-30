<?php 
    $s = session();
?>
<div class="nav-user">
<ul class="navbar-nav">
  <li class="nav-item">

  <?php if($s->has('id_user')):?>

    <li class="nav-item ">
      <strong class="color-w" title="<?php echo $s->username ?>">
        <a class="white" href="<?php echo site_url('users/homepage')?>">
          <i class="fa fa-user">&nbsp;</i><?php echo $s->username ?>
        </a>
      </strong>
      &nbsp;
      <a class="purple" href="<?php echo site_url('users/logout')?>">
        <i class="fa fa-sign-out " title="Sair"></i>
      </a>
    </li>

    <?php else: ?>

      <a class="purple-dark btn btn-b-l p-1.5 mr-2" href="<?php echo site_url('cadastro') ?>">Cadastrar</a>
      <a class="purple-dark btn btn-b-l p-1.5" href="<?php echo site_url('users') ?>">Login</a>

    <?php endif;?>

  </li>
</ul>

</div>