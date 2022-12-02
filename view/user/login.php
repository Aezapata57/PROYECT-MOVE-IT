<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MOVE-IT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="../../style.css" rel="stylesheet">

    </head>
    <body class="bodyLogin">
        <script>
            window.fbAsyncInit = function() {
              FB.init({
                appId      : '852563055938241',
                cookie     : true,
                xfbml      : true,
                version    : 'v8.0'
              });
                
              FB.AppEvents.logPageView();   
                
            };
          
            (function(d, s, id){
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) {return;}
               js = d.createElement(s); js.id = id;
               js.src = "https://connect.facebook.net/en_US/sdk.js";
               fjs.parentNode.insertBefore(js, fjs);
             }(document, 'script', 'facebook-jssdk'));
             
             function onLogin(){
                FB.login((response) => {
                    if(response.authResponse){
                        FB.api('/me', (response) => {
                            console.log(response)
                        })
                    }
                })
             }

          </script>
        <div class="container bg-form w-75 mt-5">
            <div class="row align-items-stretch">
                <div class="col">
                    <br>
                    <div class="text-center mb-2">
                        <img src="../image/Logo.png" width="160px" alt="">
                    </div>
                    <h2 class="fw-bolt text-center mb-2">Bienvenido</h2>
                    
                    <!-- LOGIN -->
                    
                    <form action="read.php" method="POST">
                        
                        <div class="form-floating mb-2 mx-3">
                            <input type="email" name="EMAIL" class="form-control" id="EMAIL" placeholder="name@example.com" aria-describedby="inputGroupPrepend" required>
                            <label for="EMAIL">Correo electronico</label>
                        </div>
                        <div class="form-floating mb-2 mx-3">
                            <input type="password" name="PASSWORD" class="form-control" id="PASSWORD" placeholder="password" aria-describedby="inputGroupPrepend" required minlength="8" autocomplete="current-password" dir="ltr">
                            <label for="PASSWORD">Contraseña</label>
                        </div>
                        <div class="form-check mb-3 mx-4">
                            <input type="checkbox" class="form-check-input" name="connected" id="">
                            <label for="connected" class="form-check-label">Recordarme</label>
                        </div>
                                        
                        <div class="d-grid mb-2 mx-4">
                            <button type="submit" name="enviar" id="enviar" value="Logear" class="btn btn-lg btn-Inicio_sesion btn-default">Iniciar Sesión</button>
                        </div>
                        
                        <div class="row text-center">  
                            <div class="col mx-3 mb-2">
                                <span>¿No tienes cuenta? <a href='Register.php'>Registrate</a></span>
                            </div>
                            <br>
                            <div class="col mb-2">
                                <span><a href='#'><a href='Recover.php'>¿Olvidaste tu contraseña?</a></a></span>
                            </div>
                        </div>
                        
                    </form>
                    <div class="text-center">
                        <span>Inicia sesión con:</span>
                    </div>
                    <!-- LOGIN CON REDES SOCIALES -->
                    <div class="container w-100 mt-2 mb-3">
                        <div class="row text-center">
                            <div class="row">
                                <div class="col">
                                    <button onclick="onLogin();" class='btn btn-outline-primary w-100 my-1 mx-2'>
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <img src="../image/Facebook.png" width="30px" alt="">
                                            </div>
                                            <div class="col-10 text-center">
                                                Facebook
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class='btn btn-outline-danger w-100 my-1 mx-2'>
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <img src="../image/Google.png" width="30px" alt="">
                                            </div>
                                            <div class="col-10 text-center">
                                                Google
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col bg d-none d-lg-block"></div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>