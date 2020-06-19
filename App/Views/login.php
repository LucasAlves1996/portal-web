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
    <link rel="stylesheet" href="<?= DIR ?>/template/css/login.css">
    <!-- Font Awesome -->
    <link href="<?= DIR ?>/fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
    <?php if($this->view->login == 'erro'){ ?>
    <div class="alert alert-danger" style="text-align:center;width:250px;
    margin:75px auto -124px auto;">
        Credenciais inválidas!
    </div>
    <?php } ?>
    <div id="formLogin">
        <img class="logo" src="<?= DIR ?>/files/logo.png">
        <div id="form">
            <form method="POST" action="<?= DIR ?>/auth">
                <label>Usuário:</label><br>
                <input type="text" name="usuario" class="form-fields" placeholder="Digite o seu login ou e-mail" required><br>
                <label>Senha:</label><br>
                <input type="password" name="senha" id="senha" class="form-fields" placeholder="Digite a sua senha" required><br>     
                <a href="" style="float:left;margin:-8px 0px 8px 5px;">Esqueceu sua senha?</a>
                <input class="btn btn-outline-dark" type="submit" value="Entrar" id="submit">
            </form>
            <i class="fas fa-eye" onclick="viewPassword()" id="eye" title="Mostrar senha"></i>
        </div>
    </div>

    <footer>
        <div class="text-light bg-dark fixed-bottom">
          <h5 style="width:100%;text-align:center;margin:0;padding:23px 0px 20px 0px;">
            Desenvolvido por <a href="https://linkedin.com/in/lucas-costa-alves" style="outline:none;">Lucas Costa Alves</a>
          </h5>
        </div>
    </footer>

    <script src="<?= DIR ?>/template/js/app.js"></script>
</body>
</html>