<!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="E-mail" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="Senha" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Ainda não está registrado?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Crie sua conta agora</strong></a>! É bem fácil, garante acesso a descontos especiais e muito mais!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->

      <!--- Edit endereço modal -->
      <div id="end-modal" tabindex="-1" role="dialog" aria-labelledby="end-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Endereço</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  Cep:<input id="cep" type="text" placeholder="00000-000" class="form-control">
                </div>
                <div class="form-group">
                  <div class="left-col"><a class="btn btn-secondary mt-0"><i class="fa fa-search"></i> Buscar CEP</a></div>
                </div>
                <div class="form-group">
                  Rua:<input id="rua" type="text" class="form-control">
                </div>
                <div class="form-group">
                  Bairro:<input id="bairro" type="text" class="form-control">
                </div>
                <div class="form-group">
                  Cidade:<input id="cidade" type="text" class="form-control">
                </div>
                <div class="form-group">
                  Estado:<input id="estado" type="text" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-check"></i> Editar endereço de entrega</button>
                </p>
              </form>
              </div>
          </div>
        </div>
      </div>
      <!--- Edit endereço modal end -->
