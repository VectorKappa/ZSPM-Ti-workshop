/* Dawid Głąb 
1. Wyrażenia regularne jest to wzorzec używany do sprawdzania inputu użytkownika w poszukiwaniu powtórzeń.

2. a) Koniec stringa
   b) Znak kropka "."
   c) Grupa znaków
   d) Początek stringa
   e) OR (lub)
   f) W wyrażeniu: litera "i"; Jako flaga: Wielkość znaków bezznaczenia
   g) Znaki białe (spacja, nowa linia itd.)
   h) Nie liczba

*/
//3.
var patt = /^0\/[\d]{3}\s[\d]{3}/;
//4.
var phNum = /\d{3}-\d{2}-\d{2}/;