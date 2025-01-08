<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to MathSolver.in | We're approaching infinity</title>
  
  
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=prompt_suggestion" />  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

  <link rel="stylesheet" href="http://localhost/main.css">
  <link rel="stylesheet" href="http://localhost/legal/main.css">

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
        <a href="https://MathSolver.in.in" class="no_link text">
          <div class="flexbox">
            <div class="margin_auto">
              <img src="http://localhost/images/favicon.ico" class="link_button_main" style="height: 34px; width: 34px;" alt="" srcset="">
            </div>
            <div class="flexbox" style="font-size: 1.5rem; margin: auto;">
              <div class="margin_auto">
                <div class="">MathSolver.in</div>
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
    <!--This is the Terms area-->
      <div class="">
        <div class="">
          <div class="standard_padding">
            <h1 class="">Cookie Policy</h1>
          </div>

          <div class="flexbox text  flex_different">
            <div class="flexbox standard_padding">
              <div class="flexbox flex_different">
                <div class="flexbox standard_padding">
                  <div class="heading">Effective From:</div>
                  <div class="">&nbsp;12 January, 2025</div>
                </div>
                <div class="">
                  <div class="flexbox flex_different">
                    <div class="standard_padding">
                      <div class="text_margin">At MathSolver.in, we use cookies and similar technologies to enhance your experience on our platform. This Cookie Policy explains what cookies are, how we use them, and your choices regarding their use.</div>
                    </div>
                  </div>
                  
                  <!--This is the section that deals with children's privacy-->
                  <div class="standard_padding">
                    <h2 class="">What are the Cookies?</h2>
                    <div class="text_margin">
                      <div class="">Cookies are small text files placed on your device (computer, smartphone, tablet) when you visit a website. They help websites function efficiently, provide a better user experience, and collect analytics.</div>
                    </div>
                  </div>
                  <!--End of section-->  
                  
                  <!--This is the section that deals with the information we collect-->
                  <div class="standard_padding">
                    <h2 class="">Types of Cookies We Use</h2>
                    <div class="text_margin">
                      <div class="">We use the following types of cookies on our platform:</div>
                      
                      <div class="standard_padding">
                        <div class="text_margin">
                          <h3 class="">Information you provide to Us</h3>
                        </div>
                        <div class="text_margin">
                          <ul>
                            <li class="flexbox text_margin">
                              <div class="heading">Essential Cookies:&nbsp;</div>
                              <div class="">These cookies are necessary for the platform to function properly. They enable features such as secure login and session management.</div>
                            </li>
                            
                            <li class="flexbox text_margin">
                              <div class="heading">Performance and Analytics Cookies:&nbsp;</div>
                              <div class="">These cookies collect information about how users interact with our platform, helping us improve functionality and performance.</div>
                            </li>
                            
                            <li class="flexbox text_margin">
                              <div class="heading">Advertising and Marketing Cookies:&nbsp;</div>
                              <div class="">We may use these cookies to display relevant advertisements and measure the effectiveness of our marketing campaigns.</div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      </div>
                    </div>
                    
                  </div>
                  <!--End of section-->
                  
                  <!--This is the section that deals with data retention-->
                  <div class="standard_padding">
                    <h2 class="">How we Use the Cookies</h2>
                    <div class="text_margin">
                      <div class="">We use the cookies to:</div>
                      <div class="">
                        <ul class="">
                          <li class="text_margin">Authenticate users and ensure secure sessions.</li>
                          <li class="text_margin">Monitor and analyze usage to improve the platform's performance.</li>
                          <li class="text_margin">Remember your preferences and settings.</li>
                          <li class="text_margin">Provide tailored content and advertisements to fund our services.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--End of section--> 

                <!--This is the section that deals with children's privacy-->
                <div class="standard_padding">
                    <h2 class="">Third Party Cookies</h2>
                    <div class="text_margin">
                      <div class="">We may allow trusted third-party services, such as analytics or advertising partners, to place cookies on your device. These cookies are governed by the respective third parties' privacy policies.</div>
                    </div>
                </div>
                  <!--End of section-->
                  
                  
                  <!--This is the section that deals with data retention-->
                  <div class="standard_padding">
                    <h2 class="">Data Collected by Cookies</h2>
                    <div class="text_margin">
                      <div class="">Cookies may collect:</div>
                      <div class="">
                        <ul class="">
                          <li class="text_margin">Browser type and version.</li>
                          <li class="text_margin">Device Operating System.</li>
                          <li class="text_margin">IP Address.</li>
                          <li class="text_margin">Time and Duration of your Visit.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--End of section--> 
                  
                  <!--This is the section that deals with children's privacy-->
                  <div class="standard_padding">
                    <h2 class="">Changes to this CookiePolicy</h2>
                    <div class="text_margin">
                      <div class="">We may update this Cookie Policy periodically to reflect changes in legal requirements or our practices. Significant changes will be notified via email or a notice on our platform.</div>
                    </div>
                  </div>
                  <!--End of section-->
                  
                  <!--This is the section that deals with children's privacy-->
                  <div class="standard_padding">
                    <h2 class="">How to Contact Us?</h2>
                    <div class="text_margin">
                      <div class="">For questions or concerns about this Cookie Policy or our practices, contact us at:</div>
                      <div class="flexbox text_margin">
                        <div class="heading">Email:&nbsp;</div>
                        <div class="">shayeq01@protonmail.com</div>
                      </div>
                      <div class="text_margin">By using our product, you acknowledge that you have read, understood, and agree to this Cookie Policy.</div>
                    </div>
                  </div>
                  <!--End of section-->


                </div>

              </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top: 10px;" class="text  flexbox complete_width standard_padding flex_different" style="position: fixed; bottom: 0;">
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