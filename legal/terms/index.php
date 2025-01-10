<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Calculars | We're approaching infinity</title>
  
  
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=prompt_suggestion" />  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

  <link rel="stylesheet" href="https://shayeq01.github.io/calculars/main.css">
  <link rel="stylesheet" href="https://shayeq01.github.io/calculars/legal/main.css">

  <script type="module" src="https://shayeq01.github.io/calculars/js/db.js"></script>

  <link rel="icon" type="image/x-icon" href="https://shayeq01.github.io/calculars/images/favicon.ico">
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
              <img src="https://shayeq01.github.io/calculars/images/payment-qr.jpeg" class="margin_auto" style="margin-left: auto;" alt="Here is the UPI QR code for donation.">
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
              <img src="https://shayeq01.github.io/calculars/images/favicon.ico" class="link_button_main" style="height: 34px; width: 34px;" alt="" srcset="">
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
    <!--This is the Terms area-->
      <div class="">
        <div class="">
          <div class="standard_padding">
            <h1 class="">Terms of Service</h1>
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
                      <div class="text_margin">Welcome to MathSolver, a platform powered by advanced Large Language Models (LLM) specialized in solving mathematics problems. By accessing or using our services, you agree to comply with these Terms of Service (the “Terms”). If you do not agree to these Terms, you must not use the service.</div>
                    </div>
                  </div>

                  
                  <!--This is the section that deals with Registration and Eligibility-->
                  <div class="standard_padding">
                    <h2 class="">Registration and Eligibility</h2>
                    <div class="text_margin">
                      <div class="">To register and use our services, you must:</div>
                      <div class="">
                        <ul class="">
                          <li class="text_margin">Be at least 13 years old. If you are under 18 you must have your parents or legal guardian’s permission to use our services.</li>
                          <li class="text_margin">Provide accurate and complete information during the registration process.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--End of section-->
                  
                  <!--This is the section that deals with Acoount registration-->
                  <div class="standard_padding">
                    <h2 class="">Account Registration</h2>
                    <div class="text_margin">
                      <div class="">
                        <ul class="">
                          <li class="text_margin">You will be required to register for an account to use our services beyond two messages on a single device.</li>
                          <li class="text_margin">When you are registered, you are responsible for safegaurding your account credentials.</li>
                          <li class="text_margin">During registration, you must provide accurate and complete information.</li>
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                  <!--End of section-->    

                  <!--This is the section that deals with the information we collect-->
                  <div class="standard_padding">
                    <h2 class="">Use of the Service</h2>
                    <div class="text_margin">
                      <div class="">We collect and process the following types of information.</div>
                      
                      <div class="standard_padding">
                        <div class="text_margin">
                          <h3 class="">Permitted Use</h3>
                        </div>
                        <div class="text_margin">
                          <ul>
                            <li class="flexbox text_margin">
                                <div class="">The Service is provided solely for educational, research, and non-commercial purposes unless explicitly agreed otherwise.</div>
                            </li>
                            
                            <li class="flexbox text_margin">
                                <div class="">We reserve the right to modify or discontinue the Service at any time, without prior notice.</div>
                            </li>
                            
                            <li class="flexbox text_margin">
                                <div class="">You may input mathematical problems and utilize solutions as provided by the Calculars. However, you must understand that being an experimental version, we do not guarantee the accuracy or completeness of the solutions.</div>
                            </li>
                          </ul>
                        </div>
                      </div>

                      
                      <div class="standard_padding">
                        <div class="text_margin">
                          <h3 class="">Prohibited Uses</h3>
                        </div>
                        <div class="text_margin">
                            <div class="">You agree not to:</div>
                            <ul>
                                <li class="flexbox text_margin">
                                  <div class="">Use the Service for unlawful or fraudulent purposes.</div>
                                </li>
                            
                                <li class="flexbox text_margin">
                                    <div class="">Reverse-engineer, copy, or distribute the Service without prior written consent.</div>
                                </li>
                                
                                <li class="flexbox text_margin">
                                    <div class="">Input inappropriate, harmful, or malicious content into the Calculars.</div>
                                </li>
                            </ul>
                        </div>
                      </div>

                      </div>
                    </div>
                    
                  </div>
                  <!--End of section-->

                  <!--This is the section that deals with Intellectual Property-->
                  <div class="standard_padding">
                    <h2 class="">Intellectual Property</h2>
                    <div class="text_margin">
                      <div class="">
                        <ul class="">
                          <li class="text_margin">All intellectual property rights in the Service, including the LLM and related technologies, are owned by Calculars and should not be used without prior consent.</li>
                          <li class="text_margin">Users are granted a limited, non-exclusive, and revocable license to use the Service for its intended purpose.</li>  
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                  <!--End of section-->
                  
                  <!--This is the section that deals with Limitaions of Liability-->
                  <div class="standard_padding">
                    <h2 class="">Limitations of Liability</h2>
                    <div class="text_margin">
                      <div class="">
                        <ul class="">
                          <li class="text_margin">The Service is provided on an "as-is" basis without warranties of any kind, express or implied.</li>
                          <li class="text_margin">We are not liable for any errors, inaccuracies, or misuse of the mathematical solutions provided. </li>  
                          <li class="text_margin">To the fullest extent permitted by law, we are not liable for indirect, incidental, or consequential damages arising from your use of the Service.</li>
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                  <!--End of section-->

                  <!--This is the section that deals with Idemnification-->
                  <div class="standard_padding">
                    <h2 class="">Idemnification</h2>
                    <div class="text_margin">
                      <div class="">You agree to indemnify and hold Calculars harmless from any claims, damages, or expenses resulting from your use of the Service or breach of these Terms.</div>
                    </div>
                  </div>
                  <!--End of section--> 

                  <!--This is the section that deals with Termination of Accounts-->
                  <div class="standard_padding">
                    <h2 class="">Termination of Access to Service</h2>
                    <div class="text_margin">
                      <div class="">
                        <ul class="">
                          <li class="text_margin">We reserve the right to suspend or terminate your access to the Service at any time for violations of these Terms or applicable laws.</li>
                          <li class="text_margin">Upon termination, your right to use the Service ceases immediately.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--End of section--> 

                  
                  <!--This is the section that deals with Idemnification-->
                  <div class="standard_padding">
                    <h2 class="">Governing Law</h2>
                    <div class="text_margin">
                      <div class="">These Terms are governed by the laws of India. Any disputes shall be resolved exclusively in the courts located in Lucknow, Uttar Pradesh.</div>
                    </div>
                  </div>
                  <!--End of section--> 

                  <!--This is the section that deals with Idemnification-->
                  <div class="standard_padding">
                    <h2 class="">Modifications to these Terms</h2>
                    <div class="text_margin">
                      <div class="">We may update these Terms from time to time. Any significant changes will be communicated via email or on the platform. Continued use of the Service after updates constitutes acceptance of the revised Terms.</div>
                    </div>
                  </div>
                  <!--End of section--> 

                  <!--This is the section that deals with ways to contact us -->
                  <div class="standard_padding">
                    <h2 class="">How to Contact Us?</h2>
                    <div class="text_margin">
                      <div class="">For questions or concerns about this Terms of Service, contact us at:</div>
                      <div class="flexbox text_margin">
                        <div class="heading">Email:&nbsp;</div>
                        <div class="">shayeq01@protonmail.com</div>
                      </div>
                      <div class="text_margin">By using our product, you acknowledge that you have read, understood, and agree to be bounded by this Terms of Service.</div>
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

<script src="https://shayeq01.github.io/calculars/js/helper.js"></script>

</html>
