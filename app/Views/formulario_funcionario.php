<?php
include 'cabecalho';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/menu.css">
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/funcionario.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Registro de Usuário Funcionário</title>
</head>

   
<br>
    <div class="container">
        <div class="text">Cadastro de Funcionário</div>

        <form action="<?= base_url('auth/save') ?>" method="post"> 
           <?= csrf_field(); ?>
           <?php 
           if(!empty(session()->getFlashdata('fail'))) : ?>
           <div class="alert alert-danger"> <?= session()->getFlashdata('fail'); ?> </div>
           <?php endif ?>

           <?php 
           if(!empty(session()->getFlashdata('success'))) : ?>
           <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div> <!---->
           <?php endif ?>

           <div class="form-row">
              <div class="input-data">
                 <input type="text"  name="nome_funcionario">
                 <div class="underline"></div>
                 <label for="">Nome Completo</label>
              </div>
              <div class="input-data">
                 <input type="text"  name="cpf_funcionario">
                 <div class="underline"></div>
                 <label for="">CPF</label>
              </div>
           </div>

           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="email_funcionario">
                 <div class="underline"></div>
                 <label for="">Email</label>
              </div>
              <div class="input-data">
                 <input type="text"  name="celular_funcionario">
                 <div class="underline"></div>
                 <label for="">Celular</label>
              </div>
           </div>

           <div class="form-row">
           <div class="input-data">
                 <input type="text" name="cargo">
                 <div class="underline"></div>
                 <label for="">Cargo</label>
              </div>
              <div class="input-data">
                 <input type="date" name="data_admissao">
                 <div class="underline"></div>
                 <label for="" style="margin-left: 100px;">Data de Admissão</label>
              </div>
            </div>
            
           <div class="form-row">
           <div class="input-data">
                 <input type="text"  name="usuario_funcionario">
                 <div class="underline"></div>
                 <label for="">Nome de Usuário</label>
                 <span class="text-danger"><?= isset($validation) ? display_error($validation,'usuario_funcionario') : '' ?></span>
              </div>
              <div class="input-data">
                 <input type="text"  name="senha_funcionario">
                 <div class="underline"></div>
                 <label for="">Senha</label>
              </div>
           </div>

                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="Cadastrar" name="">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>

     </body>
</html>