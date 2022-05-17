



<h1 class="h1titulo">LIVROS</h1>

<form action="livros.php" method="GET">

 <div class="card-group">

  
 </div>
</form>
<li><a id="a01" href="cadastro_livro">Cadastro de Livro</a></li>

<?php

include_once "./conexao.php";

$query_livro = "SELECT codigo, titulo, data_publicacao FROM livro";
$result_livro = $conn->prepare($query_livro);
$result_livro->execute();

if(($result_livro) AND ($result_livro->rowCount() != 0)){

    while($row_livro = $result_livro->fetch(PDO::FETCH_ASSOC)){
       //var_dump($row_livro);
       extract ($row_livro);
       echo "<div style='display: inline;'>";
        echo "<p>Titulo: $titulo ";
        echo "Código: $codigo ";
        echo "Publicação: $data_publicacao</p>";
        echo "</div>";
    }

}else{
    echo "<p>Sem cadastros.</p>";
}


?>

</div>
</form>