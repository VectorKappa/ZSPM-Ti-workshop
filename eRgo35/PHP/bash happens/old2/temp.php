<div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[0][0] . '. '. $rows[0][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[0][0];?>" <?php echo ($_POST['q1'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q1'] == "A") ? 'selected' : ''; ?> correct"><?php echo $rows[0][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[0][0];?>" <?php echo ($_POST['q1'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q1'] == "B") ? 'selected' : ''; ?>"><?php echo $rows[0][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[0][0];?>" <?php echo ($_POST['q1'] == "C") ? 'checked="checked"' : ''; ?> value="C"> <span class="ans <?php echo ($_POST['q1'] == "C") ? 'selected' : ''; ?>"><?php echo $rows[0][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[1][0] . '. '. $rows[1][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[1][0];?>" <?php echo ($_POST['q2'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q2'] == "A") ? 'selected' : ''; ?> correct"><?php echo $rows[1][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[1][0];?>" <?php echo ($_POST['q2'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q2'] == "B") ? 'selected' : ''; ?>"><?php echo $rows[1][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[1][0];?>" <?php echo ($_POST['q2'] == "C") ? 'checked="checked"' : ''; ?> value="C"> <span class="ans <?php echo ($_POST['q2'] == "C") ? 'selected' : ''; ?>"><?php echo $rows[1][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[2][0] . '. '. $rows[2][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[2][0];?>" <?php echo ($_POST['q3'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q3'] == "A") ? 'selected' : ''; ?>"><?php echo $rows[2][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[2][0];?>" <?php echo ($_POST['q3'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q3'] == "B") ? 'selected' : ''; ?> correct"><?php echo $rows[2][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[2][0];?>" <?php echo ($_POST['q3'] == "C") ? 'checked="checked"' : ''; ?> value="C"> <span class="ans <?php echo ($_POST['q3'] == "C") ? 'selected' : ''; ?>"><?php echo $rows[2][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[3][0] . '. '. $rows[3][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[3][0];?>" <?php echo ($_POST['q4'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q4'] == "A") ? 'selected' : ''; ?> correct"><?php echo $rows[3][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[3][0];?>" <?php echo ($_POST['q4'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q4'] == "B") ? 'selected' : ''; ?>"><?php echo $rows[3][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[3][0];?>" <?php echo ($_POST['q4'] == "C") ? 'checked="checked"' : ''; ?> value="C"> <span class="ans <?php echo ($_POST['q4'] == "C") ? 'selected' : ''; ?>"><?php echo $rows[3][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[4][0] . '. '. $rows[4][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[4][0];?>" <?php echo ($_POST['q5'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q5'] == "A") ? 'selected' : ''; ?>"><?php echo $rows[4][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[4][0];?>" <?php echo ($_POST['q5'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q5'] == "B") ? 'selected' : ''; ?>"><?php echo $rows[4][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[4][0];?>" <?php echo ($_POST['q5'] == "C") ? 'checked="checked"' : ''; ?> value="C"> <span class="ans <?php echo ($_POST['q5'] == "C") ? 'selected' : ''; ?> correct"><?php echo $rows[4][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[5][0] . '. '. $rows[5][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[5][0];?>" <?php echo ($_POST['q6'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q6'] == "A") ? 'selected' : ''; ?>"><?php echo $rows[5][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[5][0];?>" <?php echo ($_POST['q6'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q6'] == "B") ? 'selected' : ''; ?>"><?php echo $rows[5][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[5][0];?>" <?php echo ($_POST['q6'] == "C") ? 'checked="checked"' : ''; ?> value="C"> <span class="ans <?php echo ($_POST['q6'] == "C") ? 'selected' : ''; ?> correct"><?php echo $rows[5][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[6][0] . '. '. $rows[6][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[6][0];?>" <?php echo ($_POST['q7'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q7'] == "A") ? 'selected' : ''; ?> correct"><?php echo $rows[6][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[6][0];?>" <?php echo ($_POST['q7'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q7'] == "B") ? 'selected' : ''; ?>"><?php echo $rows[6][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[6][0];?>" <?php echo ($_POST['q7'] == "C") ? 'checked="checked"' : ''; ?> value="C"> <span class="ans <?php echo ($_POST['q7'] == "C") ? 'selected' : ''; ?>"><?php echo $rows[6][4];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[7][0] . '. '. $rows[7][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[7][0];?>" <?php echo ($_POST['q8'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q8'] == "A") ? 'selected' : ''; ?>"><?php echo $rows[7][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[7][0];?>" <?php echo ($_POST['q8'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q8'] == "B") ? 'selected' : ''; ?> correct"><?php echo $rows[7][3];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[8][0] . '. '. $rows[8][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[8][0];?>" <?php echo ($_POST['q9'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q9'] == "A") ? 'selected' : ''; ?> correct"><?php echo $rows[8][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[8][0];?>" <?php echo ($_POST['q9'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q9'] == "B") ? 'selected' : ''; ?>"><?php echo $rows[8][3];?></span></label></div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" class="question-block">
                <h3>Pytanie <?php echo $rows[9][0] . '. '. $rows[0][1];?></h3>
                <div><label><input type="radio" name="q<?php echo $rows[9][0];?>" <?php echo ($_POST['q10'] == "A") ? 'checked="checked"' : ''; ?> value="A"> <span class="ans <?php echo ($_POST['q10'] == "A") ? 'selected' : ''; ?>"><?php echo $rows[9][2];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[9][0];?>" <?php echo ($_POST['q10'] == "B") ? 'checked="checked"' : ''; ?> value="B"> <span class="ans <?php echo ($_POST['q10'] == "B") ? 'selected' : ''; ?>"><?php echo $rows[9][3];?></span></label></div>
                <div><label><input type="radio" name="q<?php echo $rows[9][0];?>" <?php echo ($_POST['q10'] == "C") ? 'checked="checked"' : ''; ?> value="C"> <span class="ans <?php echo ($_POST['q10'] == "C") ? 'selected' : ''; ?> correct"><?php echo $rows[9][4];?></span></label></div>
            </div>