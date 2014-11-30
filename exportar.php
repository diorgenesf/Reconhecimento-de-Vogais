<?php  
  
	// Descreve o caminho e nome do arquivo .CSV a ser gerado ou atualizado  
	$file_path = 'np.csv';  
	  
	  
	// Cria uma variável dados com valor null  
	$dados = '';  
	  
	// Recebe e armazena na variável "dados" todos os Valores a constar no arquivo (o   é necessário para quebrar a linha)  
	  
    $dados .= $_GET['11'].",".$_GET['12'].",".$_GET['13'].",";  
	//$dados .= "\n";  

    $dados .= $_GET['21'].",".$_GET['22'].",".$_GET['23'].",";  
    //$dados .= "\n";  

    $dados .= $_GET['31'].",".$_GET['32'].",".$_GET['33'].",";  
    //$dados .= "\n";  

    $dados .= $_GET['41'].",".$_GET['42'].",".$_GET['43'].",";  
    //$dados .= "\n";  

    $dados .= $_GET['51'].",".$_GET['52'].",".$_GET['53'];  
    $dados .= "\n";  
 	
	
	// Limpa os dados
	@unlink($file);

	// Cria arquivo
	
	$file=fopen($file_path,'w+');
	
	if (!fwrite($file, $dados)) die('Não foi possível atualizar o arquivo.');
	
	 
?>  

<html>
<head>
	<title>Utilização de IA para detecção de vogais</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="content">
			<h1><a href="http://localhost/ia_vogais/">Utilização de IA para detecção de vogais</a></h1>
		</div>
	</div>
	<div class="content main">
		<div class="box">
			<fieldset>
				<legend>Arquivo gerado com sucesso!</legend>
				<a href="np.csv">Clique aqui para realizar o download do arquivo .CSV</a>  
			</fieldset>
		</div>
			
	</div>
	<div class="footer"><p>Desenvolvido por Diorgenes Ferreira e Marcos Vinicius</p></div>

</body>
</html>