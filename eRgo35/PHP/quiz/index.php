<?php
    @require "./auth.php";

    $query = "SELECT * FROM quiz";
    $result = $db -> query($query);

    while($row = $result -> fetch_array()) {
        $rows[] = $row;
    }   

    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Quiz z PHP</title>
    <style>
        html,
        body {
            margin: 0;
            border: 0;
            min-height: 100%;
            background: #076d63;
            color: white;
            font-family: Roboto;
            font-size: 3vh;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #0a3f3a;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #083b36;
        }

        svg {
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
        }

        .header {
            display: flex;
            position: relative;
            width: 100%;
            padding-bottom: 20%;
            vertical-align: middle;
            overflow: hidden;
        }

        .footer {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 0.6rem;
            margin: 40px;
        }

        h1 {
            z-index: 10;
            font-size: 5rem;
            margin: 10vh 0 0 10vh;
            -webkit-text-stroke: 0.1px #095049;
        }

        .questions {
            margin: 30px;
        }

        h3 {
            font-weight: 400;
            font-size: 1rem;
            line-height: 0.5;
        }

        .ans {
            font-size: 0.8rem;
        }

        .question-block {
            margin: 25px 25px;
            background: #0b8175;
            border-radius: 20px;
            padding: 20px 40px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            display: flex;
            justify-content: center;
            align-items: start;
            flex-direction: column;
        }

        .answer-block {
            margin: 0;
            border-radius: 20px;
            padding: 10px 30px;
        }

        form {
            display: flex;
            justify-content: start;
            align-items: start;
            flex-direction: column;
        }

        label {
            cursor: pointer;
        }
        
        button {
            outline: none;
            border: none;
            background: white;
            padding: 7px 18px;
            border-radius: 7px;
            color: #0b8175;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        }

        .warn {
            color: red;
            transition: 0.2s all ease-in-out;
        }

        .warn:hover {
            color: white;
            background: #bd1717;
            cursor: not-allowed;
        }
        
    </style>
</head>

<body>
    <div class="header">
        <h1 data-aos="fade-right" data-aos-duration="1000">Quiz z PHP</h1>
        <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
            <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill:#1ca799;"></path>
        </svg>
    </div>
    <div class="questions">
        <form action="./answers/" method="POST">
            <?php
                // for ($i = 0; $i < count($rows); $i++) {
                //     echo '
                //     <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                //         <h3>Pytanie ' . $rows[$i][0] . '. '.$rows[$i][1].'</h3>
                //         <div><label><input type="radio" name="q' . $rows[$i][0] . '" value="A"> <span class="ans">' . $rows[$i][2] . '</span></label></div>
                //         <div><label><input type="radio" name="q' . $rows[$i][0] . '" value="B"> <span class="ans">' . $rows[$i][3] . '</span></label></div>';
                //     if ($rows[$i][4] != "NULL") {
                //         echo '<div><label><input type="radio" name="q' . $rows[$i][0] . '" value="C"> <span class="ans">' . $rows[$i][4] . '</span></label></div>';
                //     }
                //     echo '</div>';
                // }
            ?>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[0][0] . '. '. $rows[0][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[0][0];?>" value="A"> <span class="ans"><?php echo $rows[0][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[0][0];?>" value="B"> <span class="ans"><?php echo $rows[0][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[0][0];?>" value="C"> <span class="ans"><?php echo $rows[0][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[1][0] . '. '. $rows[1][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[1][0];?>" value="A"> <span class="ans"><?php echo $rows[1][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[1][0];?>" value="B"> <span class="ans"><?php echo $rows[1][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[1][0];?>" value="C"> <span class="ans"><?php echo $rows[1][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[2][0] . '. '. $rows[2][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[2][0];?>" value="A"> <span class="ans"><?php echo $rows[2][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[2][0];?>" value="B"> <span class="ans"><?php echo $rows[2][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[2][0];?>" value="C"> <span class="ans"><?php echo $rows[2][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[3][0] . '. '. $rows[3][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[3][0];?>" value="A"> <span class="ans"><?php echo $rows[3][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[3][0];?>" value="B"> <span class="ans"><?php echo $rows[3][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[3][0];?>" value="C"> <span class="ans"><?php echo $rows[3][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[4][0] . '. '. $rows[4][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[4][0];?>" value="A"> <span class="ans"><?php echo $rows[4][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[4][0];?>" value="B"> <span class="ans"><?php echo $rows[4][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[4][0];?>" value="C"> <span class="ans"><?php echo $rows[4][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[5][0] . '. '. $rows[5][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[5][0];?>" value="A"> <span class="ans"><?php echo $rows[5][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[5][0];?>" value="B"> <span class="ans"><?php echo $rows[5][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[5][0];?>" value="C"> <span class="ans"><?php echo $rows[5][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[6][0] . '. '. $rows[6][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[6][0];?>" value="A"> <span class="ans"><?php echo $rows[6][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[6][0];?>" value="B"> <span class="ans"><?php echo $rows[6][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[6][0];?>" value="C"> <span class="ans"><?php echo $rows[6][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[7][0] . '. '. $rows[7][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[7][0];?>" value="A"> <span class="ans"><?php echo $rows[7][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[7][0];?>" value="B"> <span class="ans"><?php echo $rows[7][3];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[8][0] . '. '. $rows[8][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[8][0];?>" value="A"> <span class="ans"><?php echo $rows[8][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[8][0];?>" value="B"> <span class="ans"><?php echo $rows[8][3];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[9][0] . '. '. $rows[9][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[9][0];?>" value="A"> <span class="ans"><?php echo $rows[9][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[9][0];?>" value="B"> <span class="ans"><?php echo $rows[9][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[9][0];?>" value="C"> <span class="ans"><?php echo $rows[9][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="answer-block">
                <button type="submit" name="quiz"><span>Zakończ Test</span></button>
                <button type="reset" class="warn"><span>Wyczyść</span></button>
            </div>
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