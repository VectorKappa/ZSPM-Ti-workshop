<?php
    @require "../auth.php";

    if (!isset($_POST['quiz'])) {
        header('Location: /quiz/');
    }

    $query = "SELECT * FROM quiz";
    $result = $db -> query($query);

    while($row = $result -> fetch_array()) {
        $rows[] = $row;
    }   

    echo "<pre>";
    print_r($rows);
    echo "</pre>";

    error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="../styles.css" rel="stylesheet">
    <title>Quiz z PHP</title>
</head>

<body>
    <div class="header">
        <h1 data-aos="fade-right" data-aos-duration="1000">Odpowiedzi</h1>
        <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
            <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill:#1ca799;"></path>
        </svg>
    </div>
    <div class="questions">
        <form>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                Wynik: <?php 
                    $score = 0;
                    for ($i = 1; $i <= count($rows); $i++) {
                        if ($_POST['q'.$i] == $rows[$i-1]['correct']) {
                            $score++;
                        }
                    }
                    echo $score;
                ?>/10
            </div>
            <?php
                for ($i = 0; $i < count($rows); $i++) {
                    echo '<div data-aos="fade-up" data-aos-duration="1000" class="question-block">';
                    echo '<h3>Pytanie ' . $rows[$i][0] . '. '.$rows[$i][1].'</h3>';

                    for ($j = 0; $j < 3; $j++) {
                        $arr = ["A", "B", "C"];
                        $qst = [2, 3, 4];
                        echo '<div><label><input type="radio" name="q' . $rows[$i][0] . '" ';
                        if ($_POST['q'. $rows[$i][0]] == $arr[$j]) {
                            echo 'checked="checked"';
                        }
                        echo ' value="';
                        echo $arr[$j];
                        echo '"> <span class="ans'; 
                        if ($_POST['q'. $rows[$i][0]] == $arr[$j]) {
                            echo ' selected';
                        }
                        if ($_POST['q'. $rows[$i][0]] == $rows[$i-1]['correct']) {
                            echo ' correct';
                        }
                        echo '">' . $rows[$i][$qst[$j]] . '</span></label></div>';
                    }
                    echo '</div>';
                }
            ?>
        </form>
    </div>
    <div data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="footer">
        <span>Michał Czyż &copy;2020</span>
        <span>All Rights Reserved</span>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>