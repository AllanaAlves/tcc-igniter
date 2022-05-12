<?php include 'cabecalho.php'; ?>

<br>
       <div class="container">
        <div class="text">Cadastro de Clientes</div>
        <form method="POST" action="./cadastro_usuario"> 
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Nome Completo</label>
              </div>
              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">CPF</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Email</label>
              </div>
              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Celular</label>
              </div>
           </div>
           <div class="form-row">
           <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Telefone</label>
              </div>
              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Data de Cadastro</label>
              </div>
           </div>
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="Cadastrar">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>