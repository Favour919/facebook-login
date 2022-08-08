<?php
    $Month = GetMonth();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body>
    <div class="login-main-wrapper">
        <div class="login-header">
            <div>
                <h2>Sign Up</h2>
                <p>It's quick and easy.</p>
            </div>
            <i class="fas fa-times time"></i>
        </div>

        <hr>

        <form action="form.php" method="POST" class="login-wrapper" spellcheck="off">
            <div class="login-name-wrapper">
                <div class="input-wrapper">
                    <i class="fas fa-circle-exclamation error-icon" <?php if (!$fnameError == "") { ?> style=" visibility:visible" <?php } ?>></i>
                    <input class="name firstname" value="<?php echo $fname ?>" type="text" <?php if (!$fnameError == "") { ?> style=" border: 1px solid red" <?php } ?> name="fname" id="firstname" placeholder="First name" autofocus>
                    <!-- <p class="error-message">Please input your name</p> -->
                    <?php
                    echo "<p class='error-message'>$fnameError </p>"
                    ?>
                </div>
                <div class="input-wrapper">
                    <i class="fas fa-circle-exclamation error-icon" <?php if (!$surNameError == "") { ?> style=" visibility:visible" <?php } ?>></i>
                    <input class="name surname" value="<?php echo $surName ?>" type="text" <?php if (!$surNameError == "") { ?> style=" border: 1px solid red" <?php } ?> name="surname" id="surname" placeholder="Surname">
                    <!-- <p class="error-message">Please input your Surname</p> -->
                    <?php
                    echo "<p class='error-message'>$surNameError </p>"
                    ?>
                </div>
            </div>
            <div class="email">
                <i class="fas fa-circle-exclamation error-icon" <?php if (!$emailError == "") { ?> style="visibility:visible" <?php } ?>></i>
                <input class="name" value="<?php echo $email ?>" name="email" <?php if (!$emailError == "") { ?> style=" border: 1px solid red" <?php } ?> id="email" placeholder="Mobile number or email address">
                <?php
                echo "<p class='error-message pronounEmail'>$emailError </p>"
                ?>
                <!-- <p class="error-message">Please input your phone number or email address</p> -->
                <input class="name re-enter" type="email" name="" id="re-enter" placeholder="Re-enter email address">
            </div>
            <div class="pw">
                <div class="icons">
                    <i class="fa fa-eye-slash slash"></i>
                </div>
                <input class="name " value="<?php echo $password ?>" type="password" <?php if (!$passwordError == "") { ?> style=" border: 1px solid red" <?php } ?> name="password" id="psd" placeholder="New password">
                <?php
                echo "<p class='error-message'>$passwordError </p>"
                ?>
                <!-- <p class="error-message">Please input your phone number or email address</p> -->
            </div>
            <div>
                <p>Date of birth <i class="fas fa-question-circle"></i></p>
                <div class="date">
                    <select name="day" class="nam" <?php if (!$dateError == '') { ?> style=' border: 1px solid red' <?php } ?>>
                        <!-- <option selected disabled>Date</option> -->
                        <?php

                        for ($i = 1; $i <= 31; $i++) {
                            # code...
                            echo "
                           <option value='$i' >$i</option>
                        
                        ";
                        }
                        ?>
                        <!-- <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option> -->
                    </select>
                    <select name="month" class="nam" <?php if (!$dateError == '') { ?> style=' border: 1px solid red' <?php } ?>>
                        <!-- <option value="" selected disabled>Month</option> -->
                        <?php

                        foreach ($Month as $key => $value) {
                            # code...
                            echo "
                                <option value='{$value['title']}'>{$value['title']}</option>

                                ";
                        }
                        
                        ?>
                        <!-- <option value="feburary">feburary</option>
                        <option value="march">march</option>
                        <option value="apirl">apirl</option>
                        <option value="may">may</option>
                        <option value="june">june</option>
                        <option value="july">july</option>
                        <option value="august">august</option>
                        <option value="september">september</option>
                        <option value="october">october</option>
                        <option value="november">november</option>
                        <option value="december">december</option> -->
                    </select>
                    <select class="nam" id="year" name="year" <?php if (!$dateError == '') { ?> style=' border: 1px solid red' <?php } ?>>
                        <!-- <option value="" selected disabled>Year</option> -->
                        <?php

                        for ($i = $year; $i >= 1960; $i--) {
                            # code...
                            echo "
                           <option value='$i'>$i</option>
                        
                        ";
                        }
                        ?>
                    </select>
                    <?php
                    echo "<p class='error-message pronoun'>$dateError </p>"
                    ?>
                </div>

            </div>
            <div class="gender-wrapper">
                <p>Gender <i class="fas fa-question-circle"></i></p>
                <div class="gender">
                    <label class="label" <?php if (!$genderError == "") { ?> style=" border: 1px solid red" <?php } ?> for="radio1">Female <input type="radio" name="gender" id="radio1" value="female" <?php if ($gender == "female") { ?> checked <?php } ?>></label>
                    <label class="label" <?php if (!$genderError == "") { ?> style=" border: 1px solid red" <?php } ?> for="radio2">Male <input type="radio" name="gender" id="radio2" value="male" <?php if ($gender == "male") { ?> checked <?php } ?>></label>
                    <label class="label" <?php if (!$genderError == "") { ?> style=" border: 1px solid red" <?php } ?> for="radio3">Custom <input type="radio" name="gender" id="radio3" value="custom" <?php if ($gender == "custom") { ?> checked <?php } ?>></label>
                </div>
                <?php
                   echo "<p class='error-message pronoun'>$genderError </p>"
                ?>
                <div class="gender-wrapper custom" <?php if ($gender == "custom") { ?> style="display: block;" <?php } ?>>
                    <select class="nam" name="pronoun" <?php if (!$pronounError == "") { ?> style=" border: 1px solid red" <?php } ?>>
                        <option value="" <?php if ($pronoun == "") { ?> selected <?php } ?> disabled>Select your pronoun</option>
                        <option value="he" <?php if ($pronoun == "he") { ?> selected <?php } ?>>He "Wish him a happy birthday!"</option>
                        <option value="she" <?php if ($pronoun == "she") { ?> selected <?php } ?>>She "Wish her a happy birthday!"</option>
                        <option value="they" <?php if ($pronoun == "they") { ?> selected <?php } ?>>They "Wish them a happy birthday!"</option>
                    </select>
                    <?php
                    echo "<p class='error-message '>$pronounError </p>"
                    ?>
                    <div class="gender-wrapper">
                        <p>Your pronoun is visible to everyone</p>
                        <input class="nam" type="text" placeholder="Gender (optional)">
                    </div>
                </div>

            </div>
            <div>
                <p class="agreed">By clicking Sign Up you agreed to our <a href="/" class="link">Terms</a>, <a href="/" class="link">Data Policy</a> and <a href="/" class="link">Cookie Policy</a> . You may recieve SMS notifications from us and can opt out at any time.</p>
            </div>
            <div class="btn">
                <button name="submit" class="btn2" id="submit-btn">Sign Up</button>
            </div>

        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>