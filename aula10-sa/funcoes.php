<?php

//recebe o nome do arquivo

function lerArquivo($nomeArquivo){
    //le o arquivo como string
    $arquivo = file_get_contents($nomeArquivo);
    
    //transforma string em array
    $jsonArray = json_decode($arquivo);

    //deolve o array
    return $jsonArray;
}
//busca o funcionario dentro da lista e devolve uma lista com funcionarios encontrados
function buscarFuncionario ($funcionarios, $first_name){

    $funcionariosFiltro = [];
    foreach ($funcionarios as $funcionario){
    if($funcionario -> first_name == $first_name){
    $funcionariosFiltro[] = $funcionario;
        }

    }
 return $funcionariosFiltro;

}

function adicionarFuncionario($nomeArquivo, $novoFuncionario){

    $funcionarios = lerArquivo($nomeArquivo);

    $funcionarios[] = $novoFuncionario;

    $json = json_encode($funcionarios);

    file_put_contents($nomeArquivo, $json);

}