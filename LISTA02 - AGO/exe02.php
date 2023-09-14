<?php
/*
    2 - [limpeza de lista] Crie uma função que limpe uma lista, removendo todos os itens duplicados dela e retorne com a lista limpa. (a ordem final dos números não importa)
*/

function verificaSeEstaNaLista($lista, $numero){
    
    foreach ($lista as $valor) {
        if ($valor == $numero) {
            return true;
        }
    }

    return false;
}

function limpezaLista($lista){

    $listaLimpa = [$lista[0]];

    for ($i = 1;$i < count($lista); $i++) { 
        if(verificaSeEstaNaLista($listaLimpa, $lista[$i]))
            continue;
        else
            array_push($listaLimpa, $lista[$i]);
    }

    return "[".implode(", ",$listaLimpa)."]";
}

echo limpezaLista([1, 3, 3, 5, 5])."<br>";
echo limpezaLista([4, 4, 4, 4])."<br>";
echo limpezaLista([5, 7, 8, 9, 10, 15])."<br>";
echo limpezaLista([3, 3, 3, 2, 1])."<br>";
echo limpezaLista([3, 3, 3, 1, 1, 2, 4, 4])."<br>";
?>