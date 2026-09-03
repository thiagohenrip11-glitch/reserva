<?php
include ('app/item.php');
include('app/servidor.php');
include('app/emprestimo.php');

$item = new Item();
$item->nome='Apagador';
$item->descricao = 'Apagador para quadro branco';
$item->patrimonio = '009866';

echo"<pre>";
print_r($item);
echo"</pre>";

$servidor = new Servidor();
$servidor->nome = "joao";
$servidor->dtn = "2008-06-27";

$emprestimo = new Emprestimo();
$emprestimo->dataEmprestimo = "2026-08-24 17:11";
$emprestimo->item = $item;
$emprestimo->servidor = $servidor;

echo"<pre>";
print_r($emprestimo);
echo"</pre>";