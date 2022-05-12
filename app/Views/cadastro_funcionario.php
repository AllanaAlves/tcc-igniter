
<?php include_once 'cabecalho.php'; ?>

<br>
    <div class="container">
        <div class="text">Cadastro de Funcionário</div>

        <form method="POST" action="cadastro_funcionario"> 
           
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required name="nome_funcionario">
                 <div class="underline"></div>
                 <label for="">Nome Completo</label>
              </div>
              <div class="input-data">
                 <input type="text" required name="cpf_funcionario">
                 <div class="underline"></div>
                 <label for="">CPF</label>
              </div>
           </div>

           <div class="form-row">
              <div class="input-data">
                 <input type="text" required name="email_funcionario">
                 <div class="underline"></div>
                 <label for="">Email</label>
              </div>
              <div class="input-data">
                 <input type="text" required name="celular_funcionario">
                 <div class="underline"></div>
                 <label for="">Celular</label>
              </div>
           </div>

           <div class="form-row">
           <div class="input-data">
                 <input type="text" required name="cargo">
                 <div class="underline"></div>
                 <label for="">Cargo</label>
              </div>
              <div class="input-data">
                 <input type="date" required name="data_admissao">
                 <div class="underline"></div>
                 <label for="" style="margin-left: 100px;">Data de Admissão</label>
              </div>
            </div>
            
           <div class="form-row">
           <div class="input-data">
                 <input type="text" required name="usuario_funcionario">
                 <div class="underline"></div>
                 <label for="">Nome de Usuário</label>
              </div>
              <div class="input-data">
                 <input type="text" required name="senha_funcionario">
                 <div class="underline"></div>
                 <label for="">Senha</label>
              </div>
           </div>

                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="Cadastrar" name="cadastro">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>