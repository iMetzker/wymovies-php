<?php
require_once("./app/templates/header.php");
?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
      <div class="row" id="auth-row">
        <div class="col-md-4" id="login-container">
          <h2>Entrar</h2>
          <form action="<?= $BASE_URL ?>auth_process.php" method="POST">
            <input type="hidden" name="type" value="login">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control mb-2 mt-2" id="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control mb-2 mt-2" id="password" name="password" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn card-btn mt-3"> Entrar </button>
          </form>
        </div>
        <div class="col-md-4" id="register-container">
          <h2>Criar Conta</h2>
          <form action="<?= $BASE_URL ?>auth_process.php" method="POST">
            <input type="hidden" name="type" value="register">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control mb-2 mt-2" id="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" class="form-control mb-2 mt-2" id="name" name="name" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="lastname">Sobrenome</label>
              <input type="text" class="form-control mb-2 mt-2" id="lastname" name="lastname" placeholder="Digite seu sobrenome">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control mb-2 mt-2" id="password" name="password" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
              <label for="confirmpassword">Confirmar senha</label>
              <input type="password" class="form-control mb-2 mt-2" id="confirmpassword" name="confirmpassword" placeholder="Confirme sua senha">
            </div>
            <button type="submit" class="btn card-btn mt-3">
                Registrar </button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
require_once("./app/templates/footer.php");
?>