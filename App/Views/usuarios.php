<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="cadastra-usuario" id="form-cadastro-usuario">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Login</label>
                <input type="text" name="login" id="login" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" required>
            </div>

            <div class="form-group">
                <select class="form-control" id="permission_id" name="permission_id" required>
                  <option value="">Selecione o tipo de usuário</option>
                  <?php foreach ($this->view->dados['permissions'] as $permission) { ?>
                    <option value="<?= $permission['permission_id'] ?>"><?= $permission['permission_name'] ?></option>
                  <?php } ?>
                </select>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success" form="form-cadastro-usuario">Finalizar</button>
      </div>
    </div>
  </div>
</div>

<div class="table-div">
  <form method="POST" class="float-left form-pesquisa">
    <div class="form-group">
      <input type="text" name="pesquisar" id="pesquisar" class="form-control" placeholder="Nome ou e-mail">
    </div>
    <i class="fas fa-search btn-dark" id="pesquisa-icon"></i>
  </form>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#exampleModalCenter" title="Cadastrar usuário">
    <i class="fas fa-user-plus h4 m-0"></i>
  </button>
  
  <div class="responsible-table float-left">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nome</th>
          <th scope="col">email</th>
          <th scope="col">tipo de usuário</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($this->view->dados['users'] as $user){ ?>
        <tr>	
          <th scope="row"><?= $user['user_id'] ?></th>
          <td><?= $user['user_name'] ?></td>
          <td><?= $user['user_email'] ?></td>
          <td><?= $user['permission_id'] == 2 ? "Administrador" : "Comum" ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>