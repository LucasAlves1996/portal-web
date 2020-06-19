<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar pessoa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="cadastra-pessoa" id="form-cadastro-pessoa">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Data de nascimento</label>
                <input type="text" onkeypress="return mask(event, this, '##/##/####')" maxlength="10" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="00/00/0000" required>
            </div>

            <div class="form-group">
                <select class="form-control" id="abrigo_id" name="abrigo_id" required>
                  <option value="">Selecione o abrigo</option>
                  <?php foreach ($this->view->dados['abrigos'] as $abrigo) { ?>
                    <option value="<?= $abrigo['abrigo_id'] ?>"><?= $abrigo['abrigo_name'] ?></option>
                  <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" id="empresa_id" name="empresa_id" required>
                  <option value="">Selecione a empresa</option>
                  <?php foreach ($this->view->dados['empresas'] as $empresa) { ?>
                    <option value="<?= $empresa['empresa_id'] ?>"><?= $empresa['empresa_name'] ?></option>
                  <?php } ?>
                </select>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success" form="form-cadastro-pessoa">Finalizar</button>
      </div>
    </div>
  </div>
</div>

<div class="table-div">
  <form method="POST" class="float-left form-pesquisa">
    <div class="form-group">
      <input type="text" name="pesquisar" id="pesquisar" class="form-control" placeholder="Nome">
    </div>
    <i class="fas fa-search btn-dark" id="pesquisa-icon"></i>
  </form>

  <form method="POST" class="form-pesquisa" id="form-filtro"></form>

  <div class="form-group float-left mt-2 mr-2">
    <select class="form-control" id="abrigo_id" name="abrigo_id" form="form-filtro">
      <option value="">Filtrar por abrigo</option>
      <?php foreach ($this->view->dados['abrigos'] as $abrigo) { ?>
        <option value="<?= $abrigo['abrigo_id'] ?>"><?= $abrigo['abrigo_name'] ?></option>
      <?php } ?>
    </select>
  </div>
  
  <div class="form-group float-left mt-2 mr-2">
    <select class="form-control" id="empresa_id" name="empresa_id" form="form-filtro">
      <option value="">Filtrar por empresa</option>
      <?php foreach ($this->view->dados['empresas'] as $empresa) { ?>
        <option value="<?= $empresa['empresa_id'] ?>"><?= $empresa['empresa_name'] ?></option>
      <?php } ?>
    </select>
  </div>

  <div class="form-group float-left">
    <button type="submit" class="btn btn-outline-dark mt-2 mr-2" form="form-filtro">Filtrar</button>
  </div>

  <button type="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#exampleModalCenter" title="Cadastrar pessoa">
    <i class="fas fa-plus h4 m-0"></i>
  </button>
  
  <div class="responsible-table float-left">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nome</th>
          <th scope="col">abrigo</th>
          <th scope="col">empresa</th>
          <th scope="col">ver/editar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($this->view->dados['pessoas'] as $pessoa){ ?>
        <tr>	
          <th scope="row"><?= $pessoa['pessoa_id'] ?></th>
          <td><?= $pessoa['pessoa_name'] ?></td>
        <?php foreach($this->view->dados['abrigos'] as $abrigo){
            if($pessoa['abrigo_id'] == $abrigo['abrigo_id']){
        ?>
          <td><?= $abrigo['abrigo_name'] ?></td>
        <?php }} ?>
        <?php foreach($this->view->dados['empresas'] as $empresa){
            if($pessoa['empresa_id'] == $empresa['empresa_id']){
        ?>
          <td><?= $empresa['empresa_name'] ?></td>
        <?php }} ?>
          <td>
            <form method="POST" action="edita-pessoa">
              <input type="hidden" name="id" value="<?= $pessoa['pessoa_id'] ?>">
              <button type="submit" class="btn btn-outline-dark" title="Ver ou editar pessoa">
                <i class="fas fa-edit h4 m-0"></i>
              </button>
            </form>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>