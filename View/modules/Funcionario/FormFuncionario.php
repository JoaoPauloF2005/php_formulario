<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Primeiro nome</label>
      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nome" value="Mark" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Sobrenome</label>
      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Sobrenome" value="Otto" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Usuário</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
          Por favor, escolha um nome de usuário.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Cidade</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Cidade" required>
      <div class="invalid-feedback">
        Por favor, informe uma cidade válida.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer04">Estado</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Estado" required>
      <div class="invalid-feedback">
        Por favor, informe um estado válido.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer05">CEP</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="CEP" required>
      <div class="invalid-feedback">
        Por favor, informe um CEP válido.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Concordo com os termos e condições
      </label>
      <div class="invalid-feedback">
        Você deve concordar, antes de continuar.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>