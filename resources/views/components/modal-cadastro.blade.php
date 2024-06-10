<div class="modal fade modal-login" id="modalCadastro" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" >Cadastro</h1>
          <i class="fa-solid fa-x"  data-bs-dismiss="modal" aria-label="Close"></i>
        </div>
        <div class="loading-component hide-content">
            <span class="loader hide-content"></span>
            <div class="success-icon hide-content"><i class="fa-solid fa-check"></i></div>
        </div>

        <div class="modal-body">

          <div class="modal-body-container">
            <div class="modal-body-container-input-container">
                <span><i class="fa-solid fa-user"></i>Email</span>
                <input type="email" name="email-singup">
            </div>
            <span class="error-message hide-content" id="span-email-cadastro-error"><i class="fa-solid fa-circle-exclamation"></i> Email invalido</span>
            <div class="modal-body-container-input-container">
                <span><i class="fa-solid fa-lock"></i>Senha</span>
                <span class="eye-span"><i class="fa-solid fa-eye-slash"></i></span>
                <input type="password" name="password-singup">
            </div>
            <span class="error-message hide-content" id="span-senha-cadastro-error"><i class="fa-solid fa-circle-exclamation"></i> Senha invalida</span>

            <div class="modal-body-container-input-container">
                <span><i class="fa-solid fa-lock"></i>Confirmar Senha</span>
                <span class="eye-span"><i class="fa-solid fa-eye-slash"></i></span>
                <input type="password" name="confirm-password-singup">
            </div>
            <span class="error-message hide-content" id="span-confirma-senha-cadastro-error"><i class="fa-solid fa-circle-exclamation"></i> As senhas digitadas não coincidem</span>

            <div class="">
                <label for="formFileSm" class="form-label">Imagem Perfil</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="button-entrar-conta">Entrar na conta</button>

          <button type="button" class="btn btn-primary btn-criar-conta">Criar conta</button>

        </div>
      </div>
    </div>
</div>
