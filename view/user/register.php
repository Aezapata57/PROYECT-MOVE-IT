<!DOCTYPE html>
<html lang="en">
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
                <h2 class="fw-bolt text-center mb-3">Registrate en MOVE-IT</h2>

                <form action="store.php" method="POST" autocomplete="off">
                    
                    <div class="row text-center mx-1">
                        <hr>
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="name" name="NAMES" class="form-control" id="NAMES" placeholder="name" aria-describedby="inputGroupPrepend" required>
                                <label for="NAMES">Nombre(s)</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="surname" name="SURNAMES" class="form-control" id="SURNAMES" placeholder="surname" aria-describedby="inputGroupPrepend" required>
                                <label for="SURNAMES">Apellidos</label>
                            </div>
                        </div>
                    </div>    
                        
                    <div class="form-floating mb-2 mx-3">
                        <input type="email" name="EMAIL" class="form-control" id="EMAIL" placeholder="name@example.com" aria-describedby="inputGroupPrepend" required>
                        <label for="EMAIL">Correo electronico</label>
                    </div>
                    
                    <div class="row text-center mx-1">
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="tel" name="PHONE" class="form-control" id="PHONE" placeholder="tel" aria-describedby="inputGroupPrepend" required>
                                <label for="PHONE">Numero Celular(+57)</label>
                            </div>
                        </div>
                        <div class="col">
                                <select type="city" name="CITY" aria-placeholder="city" class="form-select form-floating" aria-label="Default select example" required>
                                    <option value="" selected disabled>Ciudad</option>
                                    <option value="Arauca">Arauca</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Barranquilla">Barranquilla</option>
                                    <option value="Bogotá">Bogotá</option>
                                    <option value="Bucaramanga">Bucaramanga</option>
                                    <option value="Cali">Cali</option>
                                    <option value="Cartagena">Cartagena</option>
                                    <option value="Cúcuta">Cúcuta</option>
                                    <option value="Florencia">Florencia</option>
                                    <option value="Ibagué">Ibagué</option>
                                    <option value="Leticia">Leticia</option>
                                    <option value="Manizales">Manizales</option>
                                    <option value="Medellín">Medellín</option>
                                    <option value="Mitú">Mitú</option>
                                    <option value="Mocoa">Mocoa</option>
                                    <option value="Montería">Montería</option>
                                    <option value="Neiva">Neiva</option>
                                    <option value="Pasto">Pasto</option>
                                    <option value="Pereira">Pereira</option>
                                    <option value="Popayán">Popayán</option>
                                    <option value="Puerto Carreño">Puerto Carreño</option>
                                    <option value="Puerto Inírida">Puerto Inírida</option>
                                    <option value="Quibdó">Quibdó</option>
                                    <option value="Riohacha">Riohacha</option>
                                    <option value="San Andrés">San Andrés</option>
                                    <option value="San José del Guaviare">San José del Guaviare</option>
                                    <option value="Santa Marta">Santa Marta</option>
                                    <option value="Sincelejo">Sincelejo</option>
                                    <option value="Tunja">Tunja</option>
                                    <option value="Valledupar">Valledupar</option>
                                    <option value="Villavicencio">Villavicencio</option>
                                    <option value="Yopal">Yopal</option>
                                </select>
                            </div>  
                    </div>
                    
                    <div class="form-floating mb-2 mx-3">
                        <input type="password" name="PASSWORD" class="form-control" id="PASSWORD" placeholder="password" aria-describedby="inputGroupPrepend" required>
                        <label for="PASSWORD">Contraseña</label>
                    </div>
                    <div class="form-floating mb-2 mx-3">
                            <input type="password" name="PASSWORD" class="form-control" id="PASSWORD" placeholder="password" aria-describedby="inputGroupPrepend" required>
                            <label for="PASSWORD">Confirmar Contraseña</label>
                    </div>
                    
                    <div class="row text-center mx-1">
                        <div class="col">
                            <div class="form-floating mb-2">
                                    <input type="date" name="DATE" class="form-control" id="DATE" placeholder="date" aria-describedby="inputGroupPrepend" required>
                                    <label for="DATE">Fecha de nacimiento</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-2">
                                    <input type="number" name="CC" class="form-control" id="CC" placeholder="number" aria-describedby="inputGroupPrepend" required>
                                    <label for="CC">CC</label>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center mx-1">
                        <div class="col">
                                <div class="form-check mb-3 mx-2">
                                    <input class="form-check-input" type="radio" name="TYPE" id="TYPE1" checked>
                                    <label class="form-check-label" for="TYPE1">Conductor</label>
                                </div>
                        </div>
                        <div class="col">
                            <div class="form-check mb-3 mx-2">
                                <input class="form-check-input" type="radio" name="TYPE" id="TYPE2">
                                <label class="form-check-label" for="TYPE2">Cliente</label>
                              </div>                             
                        </div>
                    </div>
                    
                    <div class="mx-4 mb-3">
                        <font size=2>
                            Al hacer clic en "Registrarme", aceptas nuestras Condiciones, la Política de privacidad y la Política de cookies.
                        </font>     
                    </div>

                    <div class="d-grid mb-2 mx-4">
                        <button type="submit" name="enviar" id="enviar" value="Registrar" class="btn btn-lg btn-Inicio_sesion btn-default">Registrarme</button>
                    </div>

                    <div class="col mx-3 mb-5">
                        <span>¿Ya tienes una cuenta? <a href='login.php'>Inicia Sesión</a></span>
                    </div>
                    </form>
                    
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>