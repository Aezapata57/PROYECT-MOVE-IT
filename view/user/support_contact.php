<!DOCTYPE html>
<html lang="es">
    <head>
        <title>MOVE-IT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="../../style.css" rel="stylesheet">
        
    </head>
    <body class="bodyRegister">

               
        
    <div class="container bg-form w-50 mt-5 mb-5">
        <div class="row align-items-stretch">
            <br>
            <div class="text-center mt-2 mb-2">
                <img src="../image/Logo.png" width="160px" alt="">
            </div>
            <h2 class="fw-bolt text-center mb-3">¿Como podemos ayudarte?</h2>

            <h5 class="fw-bolt text-center mb-2">Uno de nuestros principales objetivos es que te sientas conforme con los servicios que MOVE-IT ofrece para ti, es por esto que nos preocupa tu inconformidad.</h5>
            <h5 class="fw-bolt text-center mb-2">¿Cual es tu problema?</h5> <br>
            <br>
            <form action="message_support.php" method="POST"> 
                <div class="form-floating mb-2">
                    <input type="name" name="nombres" class="form-control" id="nombres" placeholder="name" aria-describedby="inputGroupPrepend" required>
                    <label for="nombres">Nombre(s)</label>
                </div>
                

            <div class="row text-center mx-1">
                    <select type="problemas" name="problemas" aria-placeholder="problemas" class="form-select form-floating" aria-label="Default select example" required>
                        <option value="" selected disabled>Problema o incoveniente a solucionar</option>
                        <option value="Problemas con registro.">Problemas con registro.</option>
                        <option value="No puedo iniciar sesion de ninguna forma.">No puedo iniciar sesion de ninguna forma.</option>
                        <option value="Problemas con reconocimiento de contraseña.">Problemas con reconocimiento de contraseña.</option>
                        <option value="Devolucion de dinero.">Devolucion de dinero.</option>
                        <option value="Quejas y reclamos.">Quejas y reclamos.</option>
                        <option value="Mal servicio a la hora de mudanza.">Mal servicio a la hora de mudanza.</option>
                        <option value="Otros.">Otros.</option>
                    </select>
            </div>  

                    </div>


                    <div class="mb-3">
                        <label for="comentarios">Comentarios</label>
                        <input type="text" name="comentarios" class="form-control" id="comentarios" placeholder="Comentarios" style="height: 100px" aria-describedby="inputGroupPrepend" required>
                  </div>
                      <div class="mb-3">
                        <label for="telefono">Telefono</label>
                        <input type="tel" name="telefono" class="form-control" id="telefono" placeholder="Telefono" aria-describedby="inputGroupPrepend" required>
                  </div>


                      <br>
                    

                    <div class="d-grid mb-2 mx-2">
                        <button type="submit" class="btn btn-lg btn-Inicio_sesion btn-default">Comunicarse con un asesor</a></span></button>
                    </div>
                    <div class="d-grid mb-2 mx-2">
                    <input type="submit" class="btn btn-lg btn-Inicio_sesion btn-default" name="Enviar" value="Enviar">
                    </div>
               
                    
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>