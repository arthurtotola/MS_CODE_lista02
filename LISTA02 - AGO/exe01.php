<?php
/*1 - [Capture a torre] Escreva uma função que retorne verdadeiro se duas torres puderem atacar uma à outra falso caso contrário. (obs: tabuleiro vazio, somente as duas torres jogando)*/

function torreAtaca($coordJoga){
    $coordJoga01 = str_split($coordJoga[0]);
    $coordJoga02 = str_split($coordJoga[1]);

    if($coordJoga01[0] == $coordJoga02[0] || $coordJoga01[1] == $coordJoga02[1]){
        return true;
    } else{
        return false;
    }
}

echo torreAtaca(["A8", "E8"])."<br>";
echo torreAtaca(["A1", "B2"])."<br>";
echo torreAtaca(["H4", "H3"])."<br>";
echo torreAtaca(["F5", "C8"])."<br>";
echo torreAtaca(["A3", "B3"])."<br>";
?>