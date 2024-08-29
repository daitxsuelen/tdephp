<?php

require_once("../model/Filme.php");

class FilmeController
{
    public function listarFilmes()
    {
        $page = require('../view/listar.php');
        return $page;
    }
    public function cadastrarFilme()
    {
        $page = require('../view/cadastrar.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $filme = new Filme();
            $filme->titulo = $_POST['titulo'];
            $filme->diretor = $_POST['diretor'];
            $filme->ano = $_POST['ano'];
            $filme->sinopse = $_POST['sinopse'];
            $filme->salvarFilme();

        return $page;
    }}
}

$paginaPadrao = "listarFilmes";

if(isset($_GET["metodo"]))
{
    $metodo = $_GET["metodo"];
} else{
    $metodo = $paginaPadrao;
}


$filmeController = new FilmeController();
$filmeController->$metodo();