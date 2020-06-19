<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="cadastra-empresa" id="form-cadastro-empresa">
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
                <label>CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" class="form-control" required>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success" form="form-cadastro-empresa">Finalizar</button>
      </div>
    </div>
  </div>
</div>

<div class="table-div">
  <form method="POST" class="float-left form-pesquisa">
    <div class="form-group">
      <input type="text" name="pesquisar" id="pesquisar" class="form-control" placeholder="Nome ou cnpj">
    </div>
    <i class="fas fa-search btn-dark" id="pesquisa-icon"></i>
  </form>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#exampleModalCenter" title="Cadastrar empresa">
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
          <th scope="col">cnpj</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($this->view->dados['empresas'] as $empresa){ ?>
        <tr>	
          <th scope="row"><?= $empresa['empresa_id'] ?></th>
          <td><?= $empresa['empresa_name'] ?></td>
          <td><?= $empresa['empresa_email'] ?></td>
          <td><?= $empresa['empresa_telefone'] ?></td>
          <td><?= $empresa['empresa_cnpj'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>