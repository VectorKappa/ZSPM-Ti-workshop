<?php 

$lista = "Adam Mickiewicz, Juliusz Słowacki, Kazimierz Przerwa-Tetmajer";

    touch("autorzy.txt");
    $autorzy = fopen("autorzy.txt", "r+");
    fwrite($autorzy, $lista);
    fclose($autorzy);
    readfile("autorzy.txt");

?> 