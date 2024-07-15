<?php 
defined('CONTROL') OR die("Acesso negado!");

//efetuar o logout
session_destroy();

//voltar para a página inicial
header('location: index.php?rota=login');