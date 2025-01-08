<?php
    $name = $gender =  $email=  $password =  $confirmPassword =  $date =  $year = $month = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Check for validity of the input
        if(!(empty($_POST['name']) || !preg_match("/^[a-zA-Z-' ]*$/",$_POST['name']))){
            $name = $_POST['name'];
        }else {
            header("Location: http://localhost/accounts/register/err?=name");
            exit();
        }

        if(!(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))){
            $email = $_POST['email'];
        }else {
            header("Location: http://localhost/accounts/register/err?=email");
            exit();
        }

        if ($_POST['gender'] != "default") {
            $gender = $_POST['gender'];
        }else{
            header("Location: http://localhost/accounts/register/?err=gender");
            exit();
        }

        if(!(empty($_POST['password']) || strlen($_POST['password']) < 8)){
            $password = $_POST['password'];
        }else {
            header("Location: http://localhost/accounts/register/err?=password");
            exit();
        }

        if(($_POST['month'] != "default") && ($_POST['year'] != "default")){
            $month = $_POST['month'];
            $year = $_POST['year'];
            if ($_POST['date'] <= cal_days_in_month(CAL_GREGORIAN, $month, $year)) {
                $date = $_POST['date'];
            }else{
                header("Location: http://localhost/accounts/register/err?=date");
                exit();
            }
        }else{
            header("Location: http://localhost/accounts/register/err?=date");
            exit();
        }

        //Put the values in DB and rediret to confirmation of mail
        $conn = new mysqli('localhost', 'root', '', 'calculars');
        $id = rand(9**17,10*18);
        $stmt = $conn->prepare("INSERT INTO users (id, name, email, password, date, month, year, joined_on) VALUES (?, ?, ?, ?, ?, ?, ?, now())");
        $hashed_password = hash('sha256', $password);
        $stmt->bind_param("issssss", $id, $name, $email, $hashed_password, $date, $month, $year);
        if ($stmt->execute()) {
            header("Location: http://localhost/accounts/register/confirm");
            setcookie("user", $email, time() + (86400 * 30), "/");
            exit();
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register your Account | Calculars</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=prompt_suggestion" />
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

    <link rel="stylesheet" href="http://localhost/main.css">
    <link rel="stylesheet" href="http://localhost/legal/main.css">

    <script type="module" src="http://localhost/js/db.js"></script>

    <link rel="icon" type="image/x-icon" href="http://localhost/images/favicon.ico">
</head>

<body class="bg">
    <div class="montserrat">
        <!--These are the popups-->
        <div class="textbox_radius fixed_box hidden"
            style="display: flex !important; z-index:2; top: 35%; left: 25%; max-width: 50%;">
            <div class="flexbox complete_width">
                <!--This is the donation box-->
                <div class="standard_padding input_bg textbox_radius" id="donationBox"
                    style="display: none; top: 50%; left: 50%;">
                    <div class="flexbox flex_different text">
                        <div class="flexbox">
                            <div class="flexbox" style="width: 90%;">
                                <div class="font_heavy montserrat" style="margin: auto 0;">Donate our Efforts</div>
                            </div>
                            <div class="standard_padding">
                                <div class="input_bg standard_padding textbox_radius flexbox bg_dark border_radius"
                                    id="cancelDonationBox">
                                    <div class=""><i class="fi-xnsuxl-times"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="flexbox flex_different">
                            <div class="">Here is the QR code you may scan to support our efforts. After you make the
                                payment, take the extra care to send an email to Shayeq at
                                <span>shayeq01@protonmail.com</span></span></div>
                            <div class="standard_padding complete_width flexbox">
                                <img src="http://localhost/images/payment-qr.jpeg" class="margin_auto"
                                    style="margin-left: auto;" alt="Here is the UPI QR code for donation.">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--This is the start of the regular page.-->
        <div class="bg text roboto complete_height flexbox flex_different" id="regular">
            <!--This is the navbar-->
            <div class="flexbox navbar" id="navbar" style="border-bottom: 1px solid #dddfe2;">
                <div class="">
                    <a href="https://Calculars.in" class="no_link text">
                        <div class="flexbox">
                            <div class="margin_auto">
                                <img src="http://localhost/images/favicon.ico" class="link_button_main"
                                    style="height: 34px; width: 34px;" alt="" srcset="">
                            </div>
                            <div class="flexbox" style="font-size: 1.5rem; margin: auto;">
                                <div class="margin_auto">
                                    <div class="">Calculars</div>
                                </div>
                                <div class="navbar"> $$(&nbsp;version \approx -\infty \\)$$</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flexbox">

                    <a href="" id="openDonationBox" onclick="this.preventDefault();" class="no_link text navbar_links">
                        <div class="flexbox">
                            <div class="navbar_links">Suggest a Feature</div>
                        </div>
                    </a>
                    <div class="navbar_links"></div>
                    <div class="navbar_links"></div>

                    <a href="" id="openDonationBox" onclick="this.preventDefault();" class="no_link text navbar_links">
                        <div class="flexbox">
                            <div class=""><i class="fi-xnsuxl-rupee"></i></div>
                            <div class="navbar_links">Donate to Support our Efforts</div>
                        </div>
                    </a>
                    <div class="navbar_links"></div>
                    <div class="navbar_links"></div>

                    <!--These are the navbar elements that will be shown if the user is unregistered-->
                    <div class="flexbox ">
                        <a href="https://" class="no_link text navbar_links" id="openSettings">
                            <div class="flexbox">
                                <div class=""><i class="fi-xnsuxl-sign-out-solid"></i></div>
                                <div class="navbar_links">Register</div>
                            </div>
                        </a>
                        <div class="navbar_links"></div>
                        <div class="navbar_links"></div>

                        <a href="https://" class="no_link text navbar_links" id="logout">
                            <div class="flexbox">
                                <div class=""><i class="fi-xnsuxl-sign-out-solid"></i></div>
                                <div class="navbar_links">Login</div>
                            </div>
                        </a>
                    </div>

                    <div class="flexbox hidden">
                        <a href="https://" class="no_link text navbar_links" id="openSettings">
                            <div class="flexbox">
                                <div class=""><i class="fi-xnsuxl-settings-solid"></i></div>
                                <div class="navbar_links">Settings</div>
                            </div>
                        </a>
                        <div class="navbar_links"></div>
                        <div class="navbar_links"></div>

                        <a href="https://" class="no_link text navbar_links" id="logout">
                            <div class="flexbox">
                                <div class=""><i class="fi-xnsuxl-sign-out-solid"></i></div>
                                <div class="navbar_links">Logout</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="standard_padding min_height_complete">
                <!--This is the registration form area-->
                <div class="standard_padding flexbox complete_width" style="margin-top: 10px;">
                    <div class="full_height margin_vertical_auto right_form" style="width: 50%" id="side_logo">
                        <div class="margin_auto">
                            <div class="heading_size">Calculars</div>
                            <div class="">Revolutionizing the automatic math solving.</div>
                        </div>
                    </div>
                    <div class="flexbox" style="width: 50%">
                        <div class="flexbox complete_width">
                            <form action="" class="flexbox complete_width" method="post">
                                <div class="flexbox flex_different complete_width">
                                
                                <div class="complete_width">
                                    <div class="align_center font_heavy" style="font-size: 24px">Register a New Acoount</div>
                                    <div class="align_center">It is free and easy.</div>

                                </div>
                                    
                                <div class="fb-login-button" data-width="200" data-size="" data-button-type="" data-layout="" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                    <div class="input_distance complete_width element_distance">
                                        <input required type="text" name="name" placeholder="Your Full Name"
                                            class="standard_padding complete_width border textbox_radius no_border complete_width"
                                            id="">
                                    </div>

                                    <div class="input_distance complete_width element_distance flexbox flex_different">

                                        <label for="">Select your Date of Birth</label>
                                        <div class="flexbox complete_width">
                                            <div class="complete_width">
                                                <input required type="text" name="date" id=""
                                                    class="complete_width standard_padding no_border"
                                                    style="border-top-left-radius: 12px; border-bottom-left-radius: 12px"
                                                    placeholder="Date">
                                            </div>
                                            <div class="complete_width">
                                                <select name="month"
                                                    class="standard_padding complete_width border no_border complete_width">
                                                    <option value="default">Month</option>
                                                    <?php 
                                                        for($i = 1; $i <= 12; $i++){
                                                            $month = date('F', mktime(0, 0, 0, $i, 10));
                                                            echo "<option value='$i'>$month</option>";
                                                        }
                                                     ?>
                                                </select>
                                            </div>
                                            <div class="complete_width">
                                                <select name="year"
                                                    class="standard_padding complete_width border  no_border complete_width"
                                                    style="border-top-right-radius: 12px; border-bottom-right-radius: 12px">
                                                    <option value="default">Year</option>
                                                    <?php 
                                                        for($i = date('Y'); $i >=1950; $i--){
                                                            echo "<option value='$i'>$i</option>";
                                                        }
                                                     ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input_distance complete_width element_distance flexbox">
                                        <div class="complete_width">
                                            <select name="gender"
                                                class="standard_padding complete_width border textbox_radius no_border complete_width"
                                                id="gender-option">
                                                <option value="default">Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input_distance complete_width element_distance">
                                        <input required type="email" name="email" placeholder="Your email"
                                            class="standard_padding complete_width border textbox_radius no_border complete_width"
                                            id="">
                                    </div>

                                    <div class="input_distance complete_width element_distance">
                                        <input required type="password" name="password" placeholder="Your Password" 
                                        class="standard_padding complete_width border textbox_radius no_border complete_width" 
                                        id="">
                                    </div>

                                    <div class="input_distance complete_width element_distance">                                    
                                        <div class="cf-turnstile" data-sitekey="0x4AAAAAAA4qnHx1nF9ibysM"></div>
                                    </div>

                                    <div class="" style="margin-left: 14px">By clicking "Register", you are agrreing to our <a href="http://" target="_blank" rel="noopener noreferrer">Privacy Policy</a>, <a href="http://" target="_blank" rel="noopener noreferrer">Terms of Service</a> and <a href="http://" target="_blank" rel="noopener noreferrer">Cookie Policy</a>.</div>

                                    <div class="input_distance complete_width element_distance">
                                        <input type="submit" value="Register for Free!"
                                            class="standard_padding complete_width border textbox_radius no_border complete_width no_border text font_heavy"
                                            style="background-color: #1877f2; border-color: transparent !important"
                                            id="">
                                    </div>

                                    <div class="complete_width">
                                        <div class="align_center">Already have an account? <a href="http://localhost/accounts/login">Login</a></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 10px;" class="text  flexbox complete_width standard_padding flex_different"
                style="position: fixed; bottom: 0;">
                <div class="flexbox flex_different complete_width">
                    <div class="">
                        <div class="align_center">V Shayeq Production (shayeq01@protonmail.com)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<script src="http://localhost/js/helper.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>

</html>