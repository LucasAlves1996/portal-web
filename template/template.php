<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title><?= $this->view->dados['title'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= DIR ?>/files/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= DIR ?>/template/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= DIR ?>/template/css/app.css">
    <!-- Font Awesome -->
    <link href="<?= DIR ?>/fontawesome/css/all.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="bg-dark fixed-top">
      <a href="<?= DIR ?>/"><img class="logo" src="<?= DIR ?>/files/logo.png" alt="logo.png"></a>
        <i class="fas fa-user-circle icon-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?= DIR ?>/minha-conta">Minha conta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= DIR ?>/logout">Sair</a>
        </div>
      </div>
    </header>

    <section>
        <?= $this->content() ?>
    </section>

    <script src="<?= DIR ?>/template/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>