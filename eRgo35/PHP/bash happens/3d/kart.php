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

<br />  //? YOINK


<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
    print(fgets($uczniowie));
    // 6
    $nowytekst = "Uczymy się zdalnie";
    fwrite($uczniowie, $nowytekt);

?>
<br />
<br />  Cannot use [] for reading in C:\xampp\htdocs\kart.php on line 41
<br />
<br /> 

<br />
<br />
<br />

<?php
    //Zad. 1
    echo "Dziś jest ".date("d-m-Y")."<br>";
    echo "godzina: ".date("H:m");
    //Zad. 2
    echo "Za miesiąc będzie".getDate(strtotime());
    //Zd 3
    
?>