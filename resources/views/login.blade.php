<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connexion</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     

        <!-- Sign up form -->
        <section class="signup">
          
           </div>
            <div class="container">


                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">s'inscrire</h2>
                       
                        <form action="{{url('login') }}" method="POST" class="register-form" id="register-form">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="nom"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="mot de passe"/ required>
                                
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="répeter mot de passe"/ required>
                            
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                
                            </div>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="enregistrer"/>
                            </div>
                      
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/para1.png" alt="sing up image"></figure>
                        <a  class="signup-image-link" href="#C4">Déjà membre</a>
                    </div>
                </div>
            </div>
        </section>
       
        

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/img.png" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Crér une compte</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title" id="C4" >se connecter</h2>
                        <form method="POST" class="register-form" id="login-form" >
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="nom"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="mot de passe"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="connexion"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>
   <!-- <script> 
/*openForm("Login");
function openForm(formName) {
 var x = document.getElementsByClassName("form");
 for (i = 0; i < x.length; i++) {
 x[i].style.display = "none"; }
 document.getElementById(formName).style.display = "block"; }
</script>-->


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>