<?php
/*3 - [Nomes em letra Maiúscula] - Crie uma função que receba uma lista de nomes e retorne uma outra lista em que apenas a primeira letra de cada nome seja maiúscula e o restante minúscula.
*/

function fmaiuscula($lista){
    $listaCorrigida = [];
    foreach ($lista as $palavra) {
        array_push($listaCorrigida, ucfirst(strtolower(($palavra))));
    }

    return $listaCorrigida;
}


print_r(fmaiuscula(["mavis", "senaida", "letty"]));
print_r(fmaiuscula(["samuel", "MABELLE", "letitia", "meridith"]));
print_r(fmaiuscula(["Slyvia", "Kristal", "Sharilyn", "Calista"]));
print_r(fmaiuscula(["MaViS", "sENaida", "leTTy"]));


?>