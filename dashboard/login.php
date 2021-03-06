<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Material Admin</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Vendor CSS -->
      <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
      <link href="vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
      <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet'>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      
      <!-- CSS -->
      <link href="css/app.min.1.css" rel="stylesheet">
      <link href="css/app.min.2.css" rel="stylesheet">
      <style>
         body{
         background:#d87890;
         background: linear-gradient(to right,#783048, #d87890, #783048);
         }
         .btn-padding-left{
         padding-left: 10%;
         }
         .b-r{
         border-right: 3px solid red;
         }
         .b-l{
         border-left: 3px solid red;
         }
         .b-t{
         border-top: 3px solid red;
         }
         .b-b{
         border-bottom: 3px solid red;
         }
         .b-t-l-r{
         border-top-left-radius: 2%;            
         }
         .b-t-r-r{
         border-top-right-radius: 2%;
         }
         .b-b-r-r{
         border-bottom-right-radius: 2%;
         }
         .b-b-l-r{
         border-bottom-left-radius: 2%;
         }
         .bt-b-r{
         border-radius: 40px;
         }
         .bt-b-l-r{
         border-bottom-left-radius: 40%;
         }
         .bt-t-r-r{
         border-top-right-radius: 40%;
         }
         .bt-b-r-r{
         border-bottom-right-radius: 40%;
         }
         .bt-c{
         background-color: #60d8c0;
         }
         ul.nav li.active a {
         color: white !important;
         }
         .d-scr{
         overflow-y:auto;            
         }
         .t-c-b{
         color: black;
         }
         ::-webkit-scrollbar { 
         display: none; 
         }
      </style>
   </head>
   <body>
      <section id="backgroundBody" style="margin:0 auto; padding-top: 3%; height: 700px !important;">
         <div class="row b-t-r-r b-b-r-r b-t-l-r b-b-l-r" style="height: 600px; width: 80%; background-color: #60d8c0; margin: 0 auto; box-shadow: 0 8px 17px rgba(0, 0, 0, 0.2);">
         <div class="col-md-6 b-t-l-r b-b-l-r" style="background-color: #60d8c0; height: 100%;">
            Here is the image
         </div>
         <div class="col-sm-6 b-t-r-r b-b-r-r d-scr"style="background-color: #303048; height: 100%; padding-top: 2%;">
            <section id="register">
               <div class="container">
                  <div class="form-content">
                     <div class ="tabbable-panel">
                        <div class ="tabbable-line">
                           <ul class="nav nav-tabs" id="myTab">
                              <li class="active"><a href="#signIn" data-toggle="tab" style="color: black">Sign In</a></li>
                              <li><a href="#signUp" data-toggle="tab" style="color: black">Sign Up</a></li>
                           </ul>
                           <div class="tab-content">
                              <div  class="tab-pane active" id="signIn">
                                 <form action="" method="" id="signInForm" name="">
                                    <fieldset>
                                       <div class="input-group row"style = "width: 100%;">
                                          <div class="col-md-1 pull-left">
                                             <label for="l_email">
                                             <span class="input-group-addon" ><i class="zmdi zmdi-email" ></i></span>
                                             </label>
                                          </div>
                                          <div class="col-md-11 pull-right">
                                             <input type="text" class="form-control" placeholder=" Email Address" id="l_email" >
                                          </div>
                                       </div>
                                       <br>
                                       <div class="input-group row"style = "padding-bottom:5%; width: 100%;" >
                                          <div class="col-md-1 pull-left">
                                             <label for="l_password">
                                             <span class="input-group-addon" ><i class="zmdi zmdi-key" ></i></span>
                                             </label>
                                          </div>
                                          <div class="col-md-11 pull-right">
                                             <input type="text" class="form-control" placeholder=" Password" id="l_password">
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class= "col-md-offset-1 col-md-7 text-left">
                                             <div class="checkbox-wrap">
                                                <input name="rememberMe" id="rem" type="checkbox" value="">
                                                <label for="rem"style="padding-bottom: 5%; padding-left: 4%; color: black;">
                                                <i class="input-helper"></i>
                                                <small>Remember me?</small>
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </fieldset>
                                    <div class="col-sm-4 pull-left">
                                    <div class="checkbox m-b">
                                        <p id="ilsresp"></p>
                                    </div>
                                       <button id="signinbtn" class="btn btn-block bt-c bt-b-r" style = "color: black;">Sign In</button>
                                    </div>
                                    <div class="col-sm-8 pull-left">
                                       <a href="#">
                                          <p class="text-muted" style = "color: black; padding-top: 2%;"><small>Forgot your password?</small></p>
                                       </a>
                                    </div>
                                 </form>
                              </div>
                              <div class="tab-pane" id="signUp">
                                 <form action="" method="" id="signUpForm" name="">
                                    <fieldset>
                                       <div class="input-group row"style = "width: 100%;">
                                          <div class="col-md-1 pull-left">
                                             <label for="name">
                                             <span class="input-group-addon" ><i class="zmdi zmdi-account" ></i></span>
                                             </label>
                                          </div>
                                          <div class="col-md-11 pull-right">
                                             <input type="text" class="form-control" placeholder=" Company Name" id="name" >
                                          </div>
                                       </div>
                                       <br>
                                       <div class="input-group row"style = "width: 100%;">
                                          <div class="col-md-1 pull-left">
                                             <label for="typeOfBusiness">
                                             <span class="input-group-addon" ><i class="zmdi zmdi-chart zmdi-hc-fw" ></i></span>
                                             </label>
                                          </div>
                                          <div class="col-md-11 pull-right">
                                             <input type="text" class="form-control" placeholder=" Type of Business" id="typeOfBusiness" >
                                          </div>
                                       </div>
                                       <br>
                                       <div class="input-group row"style = "width: 100%;">
                                          <div class="col-md-1 pull-left">
                                             <label for="phoneNumber">
                                             <span class="input-group-addon" ><i class="zmdi zmdi-local-phone" ></i></span>
                                             </label>
                                          </div>
                                          <div class="col-md-11 pull-right">
                                             <input type="text" class="form-control" placeholder=" Phone Number" id="phoneNumber" >
                                          </div>
                                       </div>
                                       <br>
                                       <div class="input-group row"style = "width: 100%;">
                                          <div class="col-md-1 pull-left">
                                             <label for="email">
                                             <span class="input-group-addon" ><i class="zmdi zmdi-email" ></i></span>
                                             </label>
                                          </div>
                                          <div class="col-md-11 pull-right">
                                             <input type="text" class="form-control" placeholder=" Email Address" id="email" >
                                          </div>
                                       </div>
                                       <br>
                                       <div class="input-group row"style = "width: 100%;">
                                          <div class="col-md-1 pull-left">
                                             <label for="location">
                                             <span class="input-group-addon" ><i class="zmdi zmdi-pin zmdi-hc-fw" ></i></span>
                                             </label>
                                          </div>
                                          <div class="col-md-11 pull-right">
                                             <input type="text" class="form-control" placeholder=" Company Address" id="location" >
                                          </div>
                                       </div>
                                       <br>
                                       <div class="input-group row"style = "width: 100%;">
                                          <div class="col-md-1 pull-left">
                                             <label for="password">
                                             <span class="input-group-addon" ><i class="zmdi zmdi-key" ></i></span>
                                             </label>
                                          </div>
                                          <div class="col-md-11 pull-right">
                                             <input type="text" class="form-control" placeholder=" Password" id="password" >
                                          </div>
                                       </div>
                                       <br>
                                       <div class="input-group row"style = "width: 100%;">
                                          <div class="col-md-1 pull-left">
                                             <label for="confirmPassword">
                                             <span class="input-group-addon" ><i class="zmdi zmdi-key" ></i></span>
                                             </label>
                                          </div>
                                          <div class="col-md-11 pull-right">
                                             <input type="text" class="form-control" placeholder=" Confirm Password" id="confirmPassword" >
                                          </div>
                                       </div>
                                       <br>
                                    </fieldset>
                                    <label style="padding-left: 4%;">
                                    <input type="checkbox" value="">
                                    <i class="input-helper"></i>
                                    <small style = "color: black;">I have read and agreed to the terms and conditions</small>
                                    </label>
                                    <div class="col-sm-4 pull-left">
                                    <div class="checkbox m-b">
                                        <p id="lsresp"></p>
                                    </div>
                                       <button id="signupbtn" class="btn btn-block bt-c bt-b-r" style = "color: black;">Sign Up</button>
                                    </div>
                                 </form>
                              </div>
                              <!-- <div class="btn-group bt-b-r bt-c pull-right">
                                 <button type="button" class="btn bt-c bt-b-r" style="background-color: #455a64;" disabled="disabled">Sign In</button>
                                 <a href="#"><button type="button" class="btn bt-c waves-effect bt-b-r">Sign Up</button></a>
                                 </div>
                                 </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </section>
      <!-- Javascript Libraries -->
      <footer id="footer">
        <div class="text-center padder clearfix" style="color: black">
            <p><small>MilePact<br>
			&copy; 2018</small></p>
        </div>
    </footer>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
      <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>      
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>      
      <script src="js/functions.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>