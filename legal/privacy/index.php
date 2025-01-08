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
    <!--This is the Policy area-->
      <div class="">
        <div class="">
          <div class="standard_padding">
            <h1 class="">Privacy Policy</h1>
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
                      <div class="text_margin">We at MathSolver.in,  we are committed to protecting the privacy of our users. This Privacy Policy outlines how we collect, use, disclose, and safeguard your information when you use our Large Language Model (LLM) specialized for solving mathematics problems. By using our services, you agree to the terms of this Privacy Policy.</div>
                      <div class="text_margin">It's important to us that you know how to control your privacy, so we also show you where you can manage your information in the settings.</div>
                    </div>
                  </div>

                  <!--This is the section that deals with the information we collect-->
                  <div class="standard_padding">
                    <h2 class="">Information we Collect</h2>
                    <div class="text_margin">
                      <div class="">We collect and process the following types of information.</div>
                      
                      <div class="standard_padding">
                        <div class="text_margin">
                          <h3 class="">Information you provide to Us</h3>
                        </div>
                        <div class="text_margin">
                          <ul>
                            <li class="flexbox text_margin">
                              <div class="heading">Account Information:&nbsp;</div>
                              <div class="">When you create an account, we collect your name, email address, and any other required details.</div>
                            </li>
                            
                            <li class="flexbox text_margin">
                              <div class="heading">Math Problem Input:&nbsp;</div>
                              <div class="">The mathematical problems you input into the chat application.</div>
                            </li>
                          </ul>
                        </div>
                      </div>

                      
                      <div class="standard_padding">
                        <div class="text_margin">
                          <h3 class="">Automatically Collected Information</h3>
                        </div>
                        <div class="text_margin">
                          <ul>
                            <li class="flexbox text_margin">
                              <div class="heading">Usage Data: &nbsp;</div>
                              <div class=""> Information about how you use our product, including log files, timestamps, and interaction data.</div>
                            </li>
                            
                            <li class="flexbox text_margin">
                              <div class="">Device Information:&nbsp;</div>
                              <div class="">Details about your device, such as IP address, operating system, and browser type.</div>
                            </li>
                          </ul>
                        </div>
                      </div>

                      </div>
                    </div>
                    
                  </div>
                  <!--End of section-->

                  <!--This is the section that deals with how we use the information-->
                  <div class="standard_padding text_container">
                    <h2 class="">How we Use the Information</h2>
                    <div class="text_margin">
                      <div class="">We use the collected information to:</div>
                      <div class="">
                        <ul class="">
                          <li class="text_margin">Provide accurate and efficient solutions to mathematical problems.</li>
                          <li class="text_margin">Improve our functionality and user experience and to conduct our research in this sphere.</li>
                          <li class="text_margin">To prevent fraud, illegal activity, or misuses of our Services, and to protect the security of our systems and services.</li>
                          <li class="text_margin">Respond to queries and support requests.</li>
                          <li class="text_margin">Ensure compliance with legal and regulatory requirements in India.</li>
                          <li class="text_margin">Provide accurate and efficient solutions to mathematical problems.</li>
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                  <!--End of section-->
                  
                  <!--This is the section that deals with how we share information-->
                  <div class="standard_padding text_container">
                    <h2 class="">Sharing of Information</h2>
                    <div class="text_margin">
                      <div class="">We do not sell, rent, or share your personal information with third parties except in the following cases:</div>
                      
                      <div class="standard_padding">
                        <div class="text_margin">
                          <ul>
                            <li class="flexbox text_margin">
                              <div class="heading">Legal Compliance:&nbsp;</div>
                              <div class="">To comply with legal obligations or enforce our Terms of Service.</div>
                            </li>
                            
                            <li class="flexbox text_margin">
                              <div class="heading">Service Providers:&nbsp;</div>
                              <div class="">Trusted partners who assist in maintaining and improving our services, bound by strict confidentiality agreements.</div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      </div>
                    </div>
                  <!--End of section-->
                    
                  <!--This is the section that deals with data security-->
                  <div class="standard_padding text_container">
                    <h2 class="">Data Security</h2>
                    <div class="text_margin">
                      <div class="">We implement robust measures to safeguard your data, including encryption and secure storage. However, no system is completely secure, and we cannot guarantee absolute protection against unauthorized access.</div>
                    </div>
                  </div>
                  <!--End of section-->                    

                  
                  <!--This is the section that deals with data retention-->
                  <div class="standard_padding text_container">
                    <h2 class="">How we Use the Information</h2>
                    <div class="text_margin">
                      <div class="">We use the collected information to:</div>
                      <div class="">
                        <ul class="">
                          <li class="text_margin">We retain user data only for as long as necessary to fulfill the purposes outlined in this policy.</li>
                          <li class="text_margin">Mathematical input data may be anonymized and retained for improving the model’s performance.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--End of section-->    
                  
                  <!--This is the section that deals with data retention-->
                  <div class="standard_padding text_container">
                    <h2 class="">You Rights</h2>
                    <div class="text_margin">
                      <div class="">As a user based in India, you have the right to:</div>
                      <div class="">
                        <ul class="">
                          <li class="text_margin">Access, correct, or delete your personal data.</li>
                          <li class="text_margin">Withdraw consent for data processing, where applicable.</li>
                          <li class="text_margin">Lodge a complaint with relevant data protection authorities if you believe your rights have been violated.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--End of section-->    

                  <!--This is the section that deals with children's privacy-->
                  <div class="standard_padding text_container">
                    <h2 class="">Children's Privacy</h2>
                    <div class="text_margin">
                      <div class="">Our service is not intended for users under the age of 13. We do not knowingly collect data from children.</div>
                    </div>
                  </div>
                  <!--End of section-->  

                  
                  <!--This is the section that deals with children's privacy-->
                  <div class="standard_padding text_container">
                    <h2 class="">Changes to this Privacy Policy</h2>
                    <div class="text_margin">
                      <div class="">We may update this Privacy Policy to reflect changes in legal requirements or our practices. Updates will be notified via email or prominently on our platform.</div>
                    </div>
                  </div>
                  <!--End of section-->
                  
                  <!--This is the section that deals with children's privacy-->
                  <div class="standard_padding text_container">
                    <h2 class="">How to Contact Us?</h2>
                    <div class="text_margin">
                      <div class="">For questions or concerns about this Privacy Policy or our practices, contact us at:</div>
                      <div class="flexbox text_margin">
                        <div class="heading">Email:&nbsp;</div>
                        <div class="">shayeq01@protonmail.com</div>
                      </div>
                      <div class="text_margin">By using our product, you acknowledge that you have read, understood, and agree to this Privacy Policy.</div>
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