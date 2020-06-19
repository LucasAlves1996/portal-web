<?php $pessoa = $this->view->dados['pessoa']; ?>
<h1 class="display-4"><?= $pessoa['pessoa_name'] ?></h1>
<div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1 m-auto">
      <div id="bt-voltar">
        <i class="fas fa-arrow-circle-left h1 text-dark" title="Voltar" onclick="window.location.href = 'pessoas'"></i>
      </div>
      <h4 class="mb-3">Dados da pessoa</h4>
      <form method="POST" action="atualiza-pessoa">
        <input type="hidden" name="id" value="<?= $pessoa['pessoa_id'] ?>">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?= $pessoa['pessoa_name'] ?>" required>
          </div>

          <div class="col-md-6 mb-3">
            <label>Data de nascimento</label>
            <input type="text" onkeypress="return mask(event, this, '##/##/####')" maxlength="10" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="00/00/0000" value="<?= $pessoa['pessoa_data_nascimento'] ?>" required>
          </div>
        </div>
        
        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" name="email" id="email" value="<?= $pessoa['pessoa_email'] ?>">
        </div>

        <div class="mb-3">
          <label>Telefone</label>
          <input type="text" name="telefone" id="telefone" class="form-control" value="<?= $pessoa['pessoa_telefone'] ?>">
        </div>

        <div class="mb-3">
          <label>Endereço</label>
          <input type="text" class="form-control" name="endereco" id="endereco" value="<?= $pessoa['pessoa_endereco'] ?>" placeholder="Ex: Nome da rua 204, complemento">
        </div>
        
        <div class="row">
          <div class="col-md-6 mb-3">
            <select class="form-control" id="abrigo_id" name="abrigo_id" required>
              <option value="">Selecione o abrigo</option>
            <?php foreach ($this->view->dados['abrigos'] as $abrigo) { ?>
              <option value="<?= $abrigo['abrigo_id'] ?>" <?php if($abrigo['abrigo_id'] == $pessoa['abrigo_id']){?>selected<?php } ?>><?= $abrigo['abrigo_name'] ?></option>
            <?php } ?>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <select class="form-control" id="empresa_id" name="empresa_id" selected="1" required>
              <option value="">Selecione a empresa</option>
            <?php foreach ($this->view->dados['empresas'] as $empresa) { ?>
              <option value="<?= $empresa['empresa_id'] ?>" <?php if($empresa['empresa_id'] == $pessoa['empresa_id']){?>selected<?php } ?>><?= $empresa['empresa_name'] ?></option>
            <?php } ?>
            </select>
          </div>
        </div>

        <div class="mb-3">
          <label>Habilidades</label>
          <textarea class="form-control" name="habilidades" id="habilidades" cols="30" rows="5"><?= $pessoa['pessoa_habilidades'] ?></textarea>
        </div>

        <hr class="mb-4">
        <button class="btn btn-outline-dark btn-lg btn-block" type="submit">Atualizar pessoa</button>
      </form>
    </div>
  </div>
</div>