<div class="modal fade modal-login" id="modalLogin" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
          <i class="fa-solid fa-x"  data-bs-dismiss="modal" aria-label="Close"></i>
        </div>
        <div class="loading-component hide-content">
            <span class="loader hide-content"></span>
            <div class="success-icon hide-content"><i class="fa-solid fa-check"></i></div>
            <div class="error-icon hide-content">
                <div class="container-icon-error">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <span class="error-info"><i class="fa-solid fa-circle-exclamation"></i>Info do erro</span>
            </div>
        </div>
        <div class="modal-body">
          <div class="modal-body-container">
            <div class="modal-body-container-input-container">
                <span><i class="fa-solid fa-user"></i>Email</span>
                <input type="email" name="input-email-login">
            </div>
            <span class="error-message hide-content" id="span-email-error"><i class="fa-solid fa-circle-exclamation"></i> Email invalido</span>
            <div class="modal-body-container-input-container">
                <span><i class="fa-solid fa-lock"></i>Senha</span>
                <span class="eye-span"><i class="fa-solid fa-eye-slash"></i></span>
                <input type="password" name="input-password-login">
            </div>
            <span class="error-message hide-content" id="span-senha-error"><i class="fa-solid fa-circle-exclamation"></i>A senha deve conter pelo menos 2 caracteres</span>

            <span class="forget-password">Esqueceu a senha?</span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="button-criar-conta" class="btn btn-secondary">Criar conta</button>

          <button type="button" class="btn btn-primary" id="logar-conta">Entrar na conta</button>
        </div>
      </div>
    </div>
</div>
