<?php 

    /* -------------------- */
    /* Michał Czyż (c) 2020 */
    /* -------------------- */

    
    // Zadanie 1

    echo "Dziś jest " . date("d-m-Y") . "<br>";
    echo "godzina: " . date("H:m");

    // Zadanie 2
    
    $today = getDate();
    echo "Za miesiąc będzie " . $today["mday"] . "/" . ($today["mon"] + 1) . "/" . $today["year"];
    
    // Zadanie 3

    $d = strtotime("+1 week");
    echo "W następny czwartek " . date("d/m/Y", $d) . " znowu mamy 4 lekcje!!";

    // Zadanie 4

    $uczniowie = fopen("uczniowie.txt", "r+") or die("Nie można otworzyć pliku uczniowie!");

    // Zadanie 5

    echo fgets($uczniowie);

    // Zadanie 6

    $tekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $tekst);

    // Zadanie 7

    if (file_exists("nazwiska.php")) {
        echo "Plik istnieje!";
    }
    else {
        echo "Nie ma takiego pliku!";
    }
    
    // Zaadanie 8
    
    $lista = "Adam Mickiewicz, Juliusz Słowacki, Kazimierz Przerwa-Tetmajer";

    touch("autorzy.txt");
    $autorzy = fopen("autorzy.txt", "r+");
    fwrite($autorzy, $lista);
    fclose($autorzy);
    readfile("autorzy.txt");

?>