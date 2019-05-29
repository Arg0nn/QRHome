<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>QR Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
    <link href="<?php echo base_url('assets/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-migrate.min.js') ?>"></script>

</head>
<body>

<div class="click-closed"></div>

<!--/ Form Search Start /-->
<div class="box-collapse">
  <div class="title-box-d">
    <h3 class="title-d">Procurar Propriedades</h3>
  </div>
  <span class="close-box-collapse right-boxed ion-ios-close"></span>
  <div class="box-collapse-wrap form">
    <form class="form-a">
      <div class="row">
        <div class="col-md-12 mb-2">
          <div class="form-group">
            <label for="Type">Palavras-Chave</label>
            <input type="text" class="form-control form-control-lg form-control-a" placeholder="Tags">
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div class="form-group">
            <label for="Type">Type</label>
            <select class="form-control form-control-lg form-control-a" id="Tipo">
              <option>Todos</option>
              <option>Aluga-se</option>
              <option>A venda</option>
              <option>Open House</option>
            </select>
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div class="form-group">
            <label for="Cidade">City</label>
            <select class="form-control form-control-lg form-control-a" id="Cidade">
              <option>Todas as Cidades</option>
              <option>Alabama</option>
              <option>Arizona</option>
              <option>California</option>
              <option>Colorado</option>
            </select>
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div class="form-group">
            <label for="Quartos">Bedrooms</label>
            <select class="form-control form-control-lg form-control-a" id="Quartos">
              <option>-</option>
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04 ou Mais</option>
            </select>
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div class="form-group">
            <label for="garages">Garages</label>
            <select class="form-control form-control-lg form-control-a" id="Garagens">
              <option>-</option>
              <option>01 carros</option>
              <option>02 carro</option>
              <option>03 carro</option>
              <option>04 ou Mais</option>
            </select>
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div class="form-group">
            <label for="bathrooms">Bathrooms</label>
            <select class="form-control form-control-lg form-control-a" id="Banheiros">
              <option>-</option>
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04 ou Mais</option>
            </select>
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div class="form-group">
            <label for="price">Min Price</label>
            <select class="form-control form-control-lg form-control-a" id="Preço Mínimo">
              <option>Sem Limite</option>
              <option>$50,000</option>
              <option>$100,000</option>
              <option>$150,000</option>
              <option>$200,000</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-b">Procurar Propriedade</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!--/ Form Search End /-->

<!--/ Navbar Start /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
  <div class="container">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="navbar-brand text-brand" href="<?php echo site_url('Main') ?>">[^]</a>
    <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
      data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo site_url('Main') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('sobre') ?>">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('imoveis') ?>">Imóveis</a></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('anunciar') ?>">Anunciar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('contato') ?>">Contato</a>
        </li>
      </ul>
    </div>
    <!--/ Login /-->
    <?php echo view('users/userbar') ?>
    <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
      data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
  </div>
</nav>
  </div>
</nav>
<!--/ Navbar End /-->






<?php $this->renderSection('content')?>






<!--/ footer Start /-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="nav-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="href="<?php echo site_url('Main') ?>">Direitos autorais</a>
            </li>
            <li class="list-inline-item"> - </li>
            <li class="list-inline-item">
              <a href="<?php echo site_url('sobre') ?>">Termos de uso</a>
            </li>
            <li class="list-inline-item"> - </li>
            <li class="list-inline-item">
              <a href="<?php echo site_url('propriedades') ?>">Política de privacidade</a>
            </li>
            <li class="list-inline-item"> - </li>
            <li class="list-inline-item">
              <a href="<?php echo site_url('contato') ?>">Contato</a>
            </li>
          </ul>
        </nav>
        <div class="copyright-footer">
          <p class="copyright color-text-a">
            <span class="color-a">QR Home&copy;</span> 2019 - Todos os direitos reservados
          </p>
        </div>
        <div class="socials-a">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-dribbble" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer End /-->

<!-- JavaScript Libraries -->
<script src="<?php echo base_url('assets/easing/easing.min.js') ?>"></script>
<script src="<?php echo base_url('assets/owlcarousel/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('assets/scrollreveal/scrollreveal.min.js') ?>"></script>

<!-- JavaScript -->
<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

<!-- Template Main Javascript File -->
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>
</html>