<?php

	//Capturei as informações do formulário
	$nome_pessoa = $_POST['nome'];
	$endereco_pessoa = $_POST['endereco'];
	$idade_pessoa = $_POST['idade'];
	
	//Abrindo conexão com o BD
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO pessoa (nome_pessoa, idade_pessoa, endereco_pessoa) 
			VALUE ('$nome_pessoa', '$idade_pessoa', '$endereco_pessoa')";
			
	$texto = "Aluno Inserido com Sucesso<br>";
	
	include('rodape_conexao.php');
?>