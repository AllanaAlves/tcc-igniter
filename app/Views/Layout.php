<?php
class Layout
{
   public $cabecalho;
   
   public  function __construct()
   {
      $this->cabecalho = "cabecalho";
   }

   public function index(){
      $this->conteudo($this->cabecalho);
   }
   public function conteudo($conteudo){
      
    include $conteudo.".php";
    
   }

}
