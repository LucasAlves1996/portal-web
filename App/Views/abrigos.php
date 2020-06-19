<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar abrigo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="cadastra-abrigo" id="form-cadastro-abrigo">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Endereço</label>
                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Ex: Nome da rua 204, complemento" required>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success" form="form-cadastro-abrigo">Finalizar</button>
      </div>
    </div>
  </div>
</div>

<div class="table-div">
  <form method="POST" class="float-left form-pesquisa">
    <div class="form-group">
      <input type="text" name="pesquisar" id="pesquisar" class="form-control" placeholder="Nome ou endereço">
    </div>
    <i class="fas fa-search btn-dark" id="pesquisa-icon"></i>
  </form>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#exampleModalCenter" title="Cadastrar abrigo">
    <i class="fas fa-plus h4 m-0"></i>
  </button>
  
  <div class="responsible-table float-left">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nome</th>
          <th scope="col">email</th>
          <th scope="col">telefone</th>
          <th scope="col">endereço</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($this->view->dados['abrigos'] as $abrigo){ ?>
        <tr>	
          <th scope="row"><?= $abrigo['abrigo_id'] ?></th>
          <td><?= $abrigo['abrigo_name'] ?></td>
          <td><?= $abrigo['abrigo_email'] ?></td>
          <td><?= $abrigo['abrigo_telefone'] ?></td>
          <td><?= $abrigo['abrigo_endereco'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>