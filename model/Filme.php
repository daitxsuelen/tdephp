<?php

class Filme{
    public string $titulo;
    public string $diretor;
    public string $ano;
    public string $sinopse;

    public function salvarFilme()
    {
        echo "Filme pronto para ser salvo no banco de dados";
        //função responsável por salvar o filme no banco de dados
    }

    public function listarFilmes()
    {
        //busva a lista de filmes cadastradas no banco
    }
}