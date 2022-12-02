<?php
    require_once("c://xampp/htdocs/MOVE-IT/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <h2 class="fw-bolt text-center mb-3">SOLICITA UN SERVICIO CON MOVE-IT</h2>
                <form name="form" action="service.php" method="post">
                        <table border="0" align="center">
                    <div class="row text-center mx-1">
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="address" name="Direccion_origen" required class="form-control" id="Direccion_origen" placeholder="address" aria-describedby="inputGroupPrepend" required>
                                <label for="Direccion_origen"> Dirección origen</label>
                            </div>
                        </div>
                    </div>  
                    <div class="row text-center mx-1">
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="address" name="Direccion_destino" required class="form-control" id="Direccion_destino" placeholder="address" aria-describedby="inputGroupPrepend" required>
                                <label for="Direccion_destino"> Dirección destino</label>
                            </div>
                        </div>
                    </div>   
                    <div class="form-floating mb-2 mx-3">
                        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15908.372921616297!2d-74.09271535!3d4.5772749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1667516889211!5m2!1ses!2sco"  margin= "0 auto" width="1550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <div class="row text-center mx-1">
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="time" name="Hora" required class="form-control" id="Hora" placeholder="time" aria-describedby="inputGroupPrepend" required>
                                <label for="Hora">Hora del servicio</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-2">
                                    <input type="date" name="Dia" required class="form-control" id="Dia" placeholder="date" aria-describedby="inputGroupPrepend" required>
                                    <label for="Dia">Fecha del servicio</label>
                            </div>
                        </div> 
                    </div>
                    <div class="row text-center mx-1">
                        <div class="col">
                            <div class="form-floating mb-2">
                                <select type="city" name="Tipo_servicio" aria-placeholder="city" required class="form-select" aria-label="Default select example" required>
                                    <option value="Tipo_servicio" selected disabled>Tipo de servicio</option>
                                    <option value="Grúa">Grúa</option>
                                    <option value="Camión(carga delicada)">Camión(carga delicada)</option>
                                    <option value="Camión(carga normal)">Camión(carga normal)</option>
                                    <option value="Camión(carga pesada)">Camión(carga pesada)</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col">
                            <div class="form-floating mb-2">
                                <select type="amount" name="Cantidad" aria-placeholder="amount" required class="form-select" aria-label="Default select example" required>
                                    <option value="Cantidad de cajas o electrodomesticos" selected disabled>Cantidad de cajas o electrodomesticos</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4 o más">4 o más</option>
                                </select>
                            </div>
                        </div>  
                    </div>
                    
    <button type="submit" class="btn btn-primary">Solicitar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/MOVE-IT/view/head/footer.php");
?>
