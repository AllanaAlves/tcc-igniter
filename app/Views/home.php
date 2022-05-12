<?php include 'cabecalho.php'; ?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>


    google.charts.load('current', {'packages':['corechart']});

    function desenharPizza (){

        var tabela = new google.visualization.DataTable();
        tabela.addColumn('string','categorias');
        tabela.addColumn('number','valores');
        tabela.addRows([

            ['Tipo1',2000],
            ['Tipo2',500],
            ['Tipo3',230],
            ['Tipo4',50],
            ['Tipo5 ',900],
            ['Tipo6',260]
        ]);
        var opcoes ={
            'title':'Titulo Grafico',
            'heigth': 500, 
            'width': 600,
            'pieHole':0.3,
            is3D : true,
        };

        var grafico = new google.visualization.PieChart(document.getElementById('graficoPizza'));
        grafico.draw(tabela, opcoes);
}

google.charts.setOnLoadCallback(desenharPizza);


</script>


<div id="graficoPizza"></div>

<a href="<?= site_url('auth/logout'); ?>"> desloga </a>