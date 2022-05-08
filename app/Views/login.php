<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/login.css">
<link rel="icon" href="/img/faviconx.png" type="image">
<title>Book Solution</title>

</head>

<body>
    <div class="lottie-bg">
        <lottie-interactive path="/lotties/bookbg0.json"  background="transparent" speed="1.0" loop  autoplay style="left:0; right:0; top:0; bottom:0; position: absolute;">
    </div>  
    
    <div class="center">
     <div class="logoindex"><img  src="/img/logoindex.png"></img>
     </div>
      <form action="<?= base_url('auth/check') ?>" method="post">
         <?= csrf_field(); ?>

         <?php if(!empty(session()->getFlashdata('fail'))) : ?>
          <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
          <?php endif ?>
        <div class="txt_field">
          <input type="text" name="usuario_funcionario" value="<?= set_value('funcionario_usuario') ?>">
          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'usuario_funcionario') : ''  ?></span>
          <label>Usuário</label>
        </div>
        <div class="txt_field">
          <input type="password" name="senha_funcionario">
          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'senha_funcionario') : ''  ?></span>          
          <label>Senha</label>
        </div>
        <i class="pass" style="text-decoration:none;cursor: text;">Login: alradmin</i>
        <i class="pass" style="text-decoration:none;cursor: text;">Senha: ALR#1245#</i>
        <div class='' style='color: #ff0000'><p><br>

        </p></div>
        <input type="submit" name="" value="Login">        
        <div class="signup_link">
        </div>        
      </form>
    </div>
   
  
        <!--  Custom Scripts       -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script type="text/javascript" src="https://unpkg.com/lottie-interactive@latest/dist/lottie-interactive.js"></script>


</body>

</html>