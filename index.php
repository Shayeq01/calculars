<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Calculars | We're approaching infinity</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=prompt_suggestion" />  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

  <link rel="stylesheet" href="http://localhost/main.css">

  <script type="module" src="http://localhost/js/db.js"></script>

  <link rel="icon" type="image/x-icon" href="http://localhost/images/favicon.ico">
</head>
<body class="bg">
  <div class="montserrat">
  <!--These are the popups-->
  <div class="textbox_radius fixed_box hidden" style="display: flex !important; z-index:2; top: 35%; left: 25%; max-width: 50%;">
    <div class="flexbox complete_width">
      <!--This is the donation box-->
      <div class="standard_padding input_bg textbox_radius" id="donationBox" style="display: none; top: 50%; left: 50%;">
        <div class="flexbox flex_different text">
          <div class="flexbox">
            <div class="flexbox" style="width: 90%;">
              <div class="font_heavy montserrat" style="margin: auto 0;">Donate our Efforts</div>
            </div>
            <div class="standard_padding">
              <div class="input_bg standard_padding textbox_radius flexbox bg_dark border_radius" id="cancelDonationBox">
                <div class=""><i class="fi-xnsuxl-times"></i></div>
              </div>
            </div>
          </div>

          <div class="flexbox flex_different">
            <div class="">Here is the QR code you may scan to support our efforts. After you make the payment, take the extra care to send an email to Shayeq at <span>shayeq01@protonmail.com</span></span></div>
            <div class="standard_padding complete_width flexbox">            
              <img src="http://localhost/images/payment-qr.jpeg" class="margin_auto" style="margin-left: auto;" alt="Here is the UPI QR code for donation.">
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
              <img src="http://localhost/images/favicon.ico" class="link_button_main" style="height: 34px; width: 34px;" alt="" srcset="">
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
  
    <div class="standard_padding full_height">
    <!--This is the message area-->
    <div class="flexbox standard_padding full_height navbar_links flex_different standard_padding">
      
      <div class="flexbox complete_width">
        <div class="complete_width">
          <div class="margin_auto complete_width" style="margin-top: 50px;">
            <h1 class="align_center">Welcome to Calculars</h1>
            <h2 class="align_center">We are the world's number 1 in automatic math solving.</h2>
            <h3 class="align_center">Made by Shayeq Khan(CEO) and Maaz Khan(CFO)</h3>
            <!--<p class="align_center">You can ask 2 free questions to try us. After that, you have to register yourself to continue services.</p>-->
        </div>
      </div>

      <div class="message_window flexbox complete_width hidden">
        <div class="standard_padding flexbox flex_different complete_width">
          <div class="flexbox navbar_links">
            <div class="" style="width: 90%;"></div>
            <div class="message_sender standard_padding complete_width border_radius">
              <div class="" style="text-align: left;">Find out the factorial of 5.  Use integration definition of gamma function.</div>
            </div>
          </div>
          <br>
          <div class="flexbox navbar_links">
            <div class="standard_padding border_radius complete_width">
              <div class="standard_padding">
                <!--answer here-->
                <div class="">

                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!--This is the input area-->
    <div style="margin-top: 10px; position: fixed; bottom: 0;" class="flexbox complete_width standard_padding flex_different" style="position: fixed; bottom: 0;">
      <div class="flexbox complete_width standard_padding">
          <div class="complete_width flexbox">
            <textarea id="input_message" class="standard_padding textbox_radius montserrat no_resize complete_width no_border input_bg text" id="textbox" style="border-top-right-radius: 0; border-bottom-right-radius: 0;">Ask a question?</textarea>
            <button id="submit" class="standard_padding no_border textbox_radius input_bg text" id="hover_bu  tton" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
              <i class="fi-xnsuxl-paper-plane-solid"></i>
            </button>
          </div>
      </div>
      <div class="flexbox flex_different complete_width">
        <div class="hidden align_center complete_width">By agreeing to use our services, you are agreeing to follow our <a href="http://localhost/legal/privacy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="http://" target="_blank" rel="noopener noreferrer">Terms of Service</a></div>
        <div class="align_center complete_width">We can generate factually wrong answers. Report the message if you get it.</div>
        <div class="">
          <div class="align_center">V Shayeq Production (shayeq01@protonmail.com)</div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>

<script src="./js/helper.js"></script>

</html>