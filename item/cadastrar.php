<?php
include('../app/item.php');
include("../Include/cabecalho.php");
include("../include/rodape.php");
include("formulario.php");
if(!isset($_POST['nome'], $_POST['patrimonio'])){
    $item = new Item();
    $item->nome = $_POST['nome'];
    $item->descricao = $_POST['descricao'];
    $item->patrimonio = $_POST['patrimonio'];
}