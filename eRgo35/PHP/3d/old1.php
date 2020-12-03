<form action="/" method="POST">
    Wpisz kod pocztowy: <input type="text" name="kod">
    <input type="submit" name="form" value="Wyślij">
</form>
<?php
    if (isset($_POST['form'])) {
        if (preg_match('/^\d{2}-\d{3}$/')) {
            echo "Ok";
        }
        else {
            echo "Błond, Dżejms Błond.";
        }
    }
?>