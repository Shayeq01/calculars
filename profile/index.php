


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shayeq Khan | Calculars</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=prompt_suggestion" />  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

  <link rel="stylesheet" href="http://localhost/main.css">
  <link rel="stylesheet" href="main.css">

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
    
    <!--This is the desktop horizontal navbar-->
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
      
      <div class="flexbox" id="desktop_navbar">
        <a href="" id="Profile" class="navbar_links_hover no_link text navbar_links standard_padding">
          <div class="flexbox">
            <!--<div class=""><img src="http://localhost/images/profile_pics/img.jpg" alt="Profile Pics" srcset="" class="border_radius dimension_profile_pics"></div>-->
            <div><i class="fi-cnsuxl-user-circle"></i></div>
            <div class="navbar_links standard_margin_left margin_vertical_auto" style="margin-left: 12px">Profile</div>
          </div>
        </a>
        <div class="navbar_links"></div>
        <div class="navbar_links"></div>
  
        
        <a href="" id="invite" class="navbar_links_hover no_link text navbar_links standard_padding">
          <div class="flexbox">
            <div class=""><i class="fi-xnsuxl-user-plus-solid"></i></div>
            <div class="navbar_links standard_margin_left margin_vertical_autostandard_margin_left">Invite</div>
          </div>
        </a>
        <div class="navbar_links"></div>
        <div class="navbar_links"></div>

        <a href="" class="navbar_links_hover no_link text navbar_links standard_padding">
          <div class="flexbox">
            <div class=""><i class="fi-xnsuxl-team-solid"></i></div>
            <div class="navbar_links standard_margin_left margin_vertical_auto">Clubs</div>
          </div>
        </a>
        <div class="navbar_links"></div>
        <div class="navbar_links"></div>
  
        <!--These are the navbar elements that will be shown if the user is unregistered-->
        <div class="flexbox ">
          <a href="https://" class="navbar_links_hover no_link text navbar_links standard_padding">
            <div class="flexbox">
              <div class=""><i class="fi-xnsuxl-sign-out-solid"></i></div>
              <div class="navbar_links standard_margin_left margin_vertical_auto">Register</div>
            </div>
          </a>
          <div class="navbar_links"></div>
          <div class="navbar_links"></div>
  
          <a href="https://" class="navbar_links_hover no_link text navbar_links standard_padding">
            <div class="flexbox margin_auto">
              <div class=""><i class="fi-xnsuxl-sign-out-solid"></i></div>
              <div class="navbar_links standard_margin_left margin_vertical_auto">Login</div>
            </div>
          </a>
        </div>
        

        <!--These are the navbar elements that will be shown if the user is registered-->
        <div class="flexbox hidden">
          <a href="https://" class="navbar_links_hover no_link text navbar_links standard_padding" id="openSettings">
            <div class="flexbox">
              <div class=""><i class="fi-xnsuxl-settings-solid"></i></div>
              <div class="navbar_links standard_margin_left margin_vertical_auto">Settings</div>
            </div>
          </a>
          <div class="navbar_links"></div>
          <div class="navbar_links"></div>
  
          <a href="https://" class="navbar_links_hover no_link text navbar_links standard_padding" id="logout">
            <div class="flexbox">
              <div class=""><i class="fi-xnsuxl-sign-out-solid"></i></div>
              <div class="navbar_links standard_margin_left margin_vertical_auto">Logout</div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--This is the settings page-->
    <div class="standard_padding roboto full_height complete_width" style="margin-bottom: 50px">
        <div class="flexbox standard_border_right complete_width">
            <div class="flexbox flex_different fixed_box standard_border_right standard_border_right complete_height left_col hiddenSmallScreen">
                <div class="">
                    <div class="standard_margin_bottom standard_padding  complete_width flexbox">                    
                        <img src="http://localhost/images/favicon.ico" alt="" srcset="" class="profile_pics border_radius margin_auto">
                    </div>
                    
                    <div class="flexbox complete_width">
                        <div class="flexbox complete_width">
                            <a href="http://" target="_blank" rel="noopener noreferrer" style="background-color: #fb651e" class="text no_link standard_padding complete_width standard_margin_right standard_border_radius" onclick="event.preventDefault()">
                                <div class="flexbox complete_width">
                                    <div class="margin_horizontal_auto">Add Friend</div>
                                </div>                
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flexbox flex_different">
                    <div class="flexbox flex_different standard_padding">
                        <div class="flexbox roboto standard_margin_bottom">
                            <div class="font_heavy">Name:</div>
                            <div class="standard_margin_left">Shayeq Khan</div>
                        </div>
                        
                        <div class="flexbox roboto standard_margin_bottom">
                            <div class="font_heavy">Preparing For:</div>
                            <div class="standard_margin_left">JEE and SAT</div>
                        </div>
                        
                        <div class="flexbox roboto standard_margin_bottom">
                            <div class="font_heavy">Birthday:</div>
                            <div class="standard_margin_left">1 January, 2025</div>
                        </div>

                        <div class="flexbox roboto standard_margin_bottom">
                            <div class="font_heavy">Gender:</div>
                            <div class="standard_margin_left">Male</div>
                        </div>

                        <div class="flexbox roboto standard_margin_bottom">
                            <div class="font_heavy">Relationship Status:</div>
                            <div class="standard_margin_left">Married with Bharat</div>
                        </div>

                        
                        <div class="flexbox roboto standard_margin_bottom">
                            <div class="font_heavy">About:</div>
                            <div class="standard_margin_left">Trying to put a ding in this universe</div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>

        <div class="right_col">
            <div class="standard_padding">
                <div class="heading_size font_heavy">Chats</div>
                
                <div class="standard_padding">
                    <div class="">
                        <!--This is the Chat Show Page-->
                        <div class="flexbox flex_different complete_width">
                            <!--THis is the sample chat-->
                            <div class="flexbox flex_different bg1 standard_padding">
                                <!--This is the top profile section-->
                                <div class="flexbox flex_different">
                                    <div class="flexbox">
                                        <div class="standard_padding standard_margin_right">
                                            <img src="http://localhost/images/favicon.ico" alt="Profile Pics" srcset="" class="border_radius dimension_profile_pics">
                                        </div>

                                        <div class="margin_vertical_auto white_text">                                                
                                            <a href="" class="no_link flexbox   standard_link_highlight text">
                                                <div class="font_heavy">Shayeq Khan</div>
                                            </a>    
                                            <div class="flexbox no_link font_light_important">
                                                <div class="">January 12</div>&nbsp;
                                                <div class="">at</div>&nbsp;
                                                <div class="">9:30 PM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flexbox standard_padding padding_top_none">
                                    <div class="flexbox standard_padding padding_top_none complete_width">
                                        <div class="standard_margin_left complete_width margin_auto">
                                            <div class="font_chat">What is Navier Strokes Equation?</div>
                                        </div>

                                        <div class="standard_padding flex">
                                            <div class="">
                                                <div class="margin_auto">
                                                    <div class="hidden">
                                                        <i class="fi-xwsuxl-caret-solid"></i>
                                                    </div>

                                                    
                                                    <div class="">
                                                        <i class="fi-xwsdxl-caret-solid"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--This is the full post-->
                                <div class="standard_padding" id="">
                                    <div class="padding_top_none standard_padding">
                                        <div class="">The Navier–Stokes equations are partial differential equations which describe the motion of viscous fluid substances. They were named after French engineer and physicist Claude-Louis Navier and the Irish physicist and mathematician George Gabriel Stokes. They were developed over several decades of progressively building the theories, from 1822 (Navier) to 1842–1850 (Stokes).</div>
                                    </div>
                                </div>

                                <!--This is the reaction box-->
                                <div class="flexbox standard_padding standard_border_top standard_border_bottom padding_top_none padding_bottom_none">
                                    <div class="complete_width">
                                        <button type="button" class="transparent_padding standard_padding text no_border complete_width highlight">
                                            <div class="flexbox margin_horizontal_auto div_centrify">
                                                <div class="">
                                                    <i class="fi-xnsuxl-heart"></i>
                                                </div>

                                                <div class="standard_margin_left flexbox">
                                                    <div class="">Praise</div>&nbsp;
                                                    <div class="">(1)</div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="complete_width">
                                        <button type="button" class="transparent_padding standard_padding text no_border complete_width">
                                            <div class="flexbox div_centrify">
                                                <div class="">
                                                    <i class="fi-xnsuxl-share"></i>
                                                </div>

                                                <div class="standard_margin_left flexbox">
                                                    <div class="">Share</div>&nbsp;
                                                    <div class="">(1)</div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End of Settings page-->

    <!--This is the footer-->
    <div style="margin-top: 10px; position: fixed; bottom: 0;" class="flexbox bg_dark complete_width standard_padding flex_different" style="position: fixed; bottom: 0;">
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

</html>