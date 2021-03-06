<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>DM System</title>

       <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">		  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300'  type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		

		
		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		  <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	     <script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>	
	   <script src="main.js"></script>

	
			


		

	</head>
	<body>
		<!-- Cabeçalho -->
		<div class="header">
			<div class="logo">
				<img src="img/logo.jpg" class="img-logo2">
				<span>Estoque</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>

		<!-- Menu de navegação-->
		<div class="side-nav">
			<div class="logo">
				<img src="img/logo.jpg" class="img-logo1">
				<span>Estoque</span>
			</div>
			<nav>
				<ul>
					<li >
						<a href="../home.html" >
							<span><i class="fa fa-home icon"></i></span>
							<span>Home</span>
						</a>
					</li>
					<li >
						<a href="#" >
							<span><i class="fa fa-user icon" ></i></span>
							<span>Clientes</span>
						</a>
					</li>
					
					    <li class="active">
						<a href="#" >
							<span><i class="fa fa-archive icon"></i></span>
							<span>Estoque</span>
						</a>
					</li>
					<li>
						<a href="../lembrete/lembrete.html">

						<span><i class="fa fa-calendar icon"></i></span>
							<span>Notas</span>
						</a>
					</li>
					<li>
						<a href="vendas.html">
							<span><i class="fa fa-file icon"></i></span>
							<span>Vendas</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span><i class="fa fa-power-off icon"></i></span>
							<span>SAIR</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<!-- conteûdo do corpo do site -->
			<div class="main-content">
			<div class="container mt-3" style="margin-left:-1%;padding:1px 16px;height:1000px;">
 
   <details>
  <summary>Adicionar Produtos</summary>
 <form class="formulario"  method="" action=""  id="ajax"> 
        <p> Cadastrar Produto </p>
        
        <div class="field radiobox">
            <span>Matería Prima</span>
            <input type="radio" name="produto" id="produto" value="Marmore" checked><label for="Marmore">Mármore</label>
            <input type="radio" name="produto" id="produto" value="Granito"><label for="Granito">Granito</label>
        </div>
        
        <div class="field">
            <label for="cor">Cor:</label>
           <input type="text"  id="cor" placeholder="cor" name="cor" required>
        </div>
		
		<div class="field">
            <label for="valor">Valor:</label>
            <input type="number" step="0.010"  id="valor" placeholder="valor do produto"  name="valor" required>
        </div>
		
		<div class="field">
            <label for="quantidade">M² Comprado:</label>
            <input type="number"  id="quantidade" placeholder="quantidade m²"  name="quantidade" required>
        </div>
 
        <div class="field">
            <label for="fornecedor">Fornecedor:</label>
            <input type="text"  id="fornecedor" placeholder="Fornecedor" name="fornecedor" required>
        </div> 
		<div class="field">
            <label for="datadecomp">Data da compra:</label>
            <input type="date"  id="datadecomp" placeholder="datadecomp" name="datadecomp" required>
        </div>
		
		<div class="field">
            <label for="email">Codigo fiscal:</label>
            <input type="number" step="0.010"  id="#" placeholder="Codigo Fiscal" name="#" required>
        </div>
		
		
        <input type="submit" name="acao" value="Enviar">
    </form>
     
	 
	 </details>
  



 <br> <br><input class="form-control" id="myInput" type="text"  placeholder="Pesquisar Produto">
  <br>
 <table class="table table-bordered" >
    <thead>
      <tr>
      
	   <th>Material</th>
        <th>Cor</th>
        <th>Valor</th>
		<th>Disponivel</th>
        <th>Valor em estoque</th>
		<th>Fornecedor</th>
		<th>Data Da Compra</th>
		<th>Quantidade Inicial</th>
		<th>Ação</th>
	 	
	 </tr>
    </thead>
    <tbody id="myTable">
     
<?php 
include "../conect.php";
$dados = mysqli_query($sql, "SELECT * FROM produto");
while($coluna = mysqli_fetch_array($dados)) {
     $id = $coluna['id'];
     $produto = $coluna['produto'];
     $cor = $coluna['cor'];
	 $valor= $coluna['valor'];
	 $quantidade= $coluna['quantidade'];
	 $fornecedor = $coluna['fornecedor'];
     $datadecomp = $coluna['datadecomp'];
	 $total=  $quantidade * $valor;
	 
	 
    
	
	echo"<tr>
    
	<td>$produto</td>
	<td>$cor</td>
	<td>$valor R$</td>
	<td>$quantidade m²</td>
	<td>$total R$</td>
    <td>$fornecedor</td>
	<td>$datadecomp</td>
	<td>$quantidade m²</td>
	<td><pre><a href='delete.php?id=$id'><img src='img/lixeira.png' ></a>   <img src='img/teste.png' class='lixeira'></pre></td>
	
</tr>";	
	    
	}
	echo "Data da Consulta: " . date("d/m/y") . "<br>";

	
?>


    </tbody>
  </table>
  
  </div>
 </div>
</div>
  	
	
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	
	
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script type="text/javascript">

$(document).ready(function(){
    $('#ajax').submit(function(){
        var dados = $( this ).serialize();

        $.ajax({
            type: "POST",
            url: "insert.php",
            data: dados,
            success: function( data )
            {
                document.location.reload(true);
            }
        });

        return false;
    });
});
</script>
	
	
	
	
	</body>
</html>
