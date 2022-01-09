<!DOCTYPE html>
<html>
<head>
    <?php require_once 'inc/css.php'; ?>
</head>

<body class="top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <?php require_once 'inc/nav.php'; ?>
            <div class=" wrapper-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"> 
                           <div class="profile-image">
                            <img src="<?= base_url()?>PLANTILLA/imagenes/g-ocho.png" class="m-b-md" alt="profile">
                        </div>
                    </div>
                    <div class="col-md-10">

                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                    API de G-ocho
                                </h2>
                                <h4>Funcionamiento de las API</h4>
                                <small>
                                    Las API permiten que sus productos y servicios se comuniquen con otros, sin necesidad de saber cómo están implementados. Esto simplifica el desarrollo de las aplicaciones y permite ahorrar tiempo y dinero. Las API le otorgan flexibilidad; simplifican el diseño, la administración y el uso de las aplicaciones; y ofrecen oportunidades de innovación, lo cual es ideal al momento de diseñar herramientas y productos nuevos (o de gestionar los actuales).
                                </small>
                            </div>
                        </div>
                    </div>
                        <div class="ibox ">
                            <div class="ibox-content">
                            <div class="col-md-12"> 
                                <h2><b>Crear tarea</b> </h2>
                                <h3><b style="color:#05A29D";>POST</b> http://squadsupport.online/tareas/crear</h3>
                                <pre>http://squadsupport.online/tareas/crear</pre>
                                <h3>Ejemplo</h3>
                                <!--<h4>Vamos a crear una nueva tarea.</h4>-->
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Parámetro</th>
                                                    <th>Valor</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td><?=$this->session->userdata('usuario')?></td>
                                                    <td>Datos de Autenticación</td>
                                                </tr>
                                                <tr>
                                                    <td>Contrasena</td>
                                                    <td><?=$this->session->userdata('contrasena')?></td>
                                                    <td>Datos de Autenticación</td>
                                                </tr>
                                                <tr>
                                                    <td>Detalle</td>
                                                    <td>Crear modulo de gestion de tareas</td>
                                                    <td>Detalle de la tarea a realizar</td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha</td>
                                                    <td>10-01-2022</td>
                                                    <td>Fecha de vencimiento de la tarea</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7">
                                    <h3><b style="color:#ff6c36";>POSTMAN</b></h3>
                                        <a href="https://documenter.getpostman.com/view/7313821/UVXerxQE" target="_blank" >https://documenter.getpostman.com/view/7313821/UVXerxQE</a>
                                        <pre>curl --location --request POST 'http://squadsupport.online/tareas/crear' \
--header 'Cookie: ci_session=59171becb2d66dd55629b905f68444ca32363ec0' \
--form 'nombre="<?=$this->session->userdata('usuario')?>"' \
--form 'contrasena="<?=$this->session->userdata('contrasena')?>"' \
--form 'detalle="Crear modulo de gestion de tareas"' \
--form 'fecha="10-01-2022"'</pre>
                            </div>

                        </div>
                         </div>

                        <div class="col-md-12"> 
                                <h2><b>Actualizar tarea</b> </h2>
                                <h3><b style="color:#05A29D";>POST</b> http://squadsupport.online/tareas/actualizar</h3>
                                <pre>http://squadsupport.online/tareas/actualizar</pre>
                                <h3>Ejemplo</h3>
                                <!--<h4>Vamos a crear una nueva tarea.</h4>-->
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Parámetro</th>
                                                    <th>Valor</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td><?=$this->session->userdata('usuario')?></td>
                                                    <td>Datos de Autenticación</td>
                                                </tr>
                                                <tr>
                                                    <td>Contrasena</td>
                                                    <td><?=$this->session->userdata('contrasena')?></td>
                                                    <td>Datos de Autenticación</td>
                                                </tr>
                                                <tr>
                                                    <td>Tarea</td>
                                                    <td>2</td>
                                                    <td>Id de la tarea a actualizar</td>
                                                </tr>
                                                <tr>
                                                    <td>Detalle</td>
                                                    <td>Crear modulo de gestion de tareas</td>
                                                    <td>Detalle de la tarea a realizar</td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha</td>
                                                    <td>10-01-2022</td>
                                                    <td>Fecha de vencimiento de la tarea</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7">
                                    <h3><b style="color:#ff6c36";>POSTMAN</b></h3>
                                        <a href="https://documenter.getpostman.com/view/7313821/UVXerxQE" target="_blank" >https://documenter.getpostman.com/view/7313821/UVXerxQE</a>
                                        <pre>curl --location --request POST 'http://squadsupport.online/tareas/actualizar' \
--header 'Cookie: ci_session=77b28c951c326efbce11e2b449cc15fdaca282cb' \
--form 'nombre="<?=$this->session->userdata('usuario')?>"' \
--form 'contrasena="<?=$this->session->userdata('contrasena')?>"' \
--form 'tarea="2"' \
--form 'detalle="La gestion de tareas esta realizada."' \
--form 'fecha="2022-02-02"' \
--form 'finalizo="SI"'</pre>
                            </div>
                        </div>
                         </div>

                        <div class="col-md-12"> 
                                <h2><b>Borrar tarea</b> </h2>
                                <h3><b style="color:#05A29D";>POST</b> http://squadsupport.online/tareas/borrar</h3>
                                <pre>http://squadsupport.online/tareas/borrar</pre>
                                <h3>Ejemplo</h3>
                                <!--<h4>Vamos a crear una nueva tarea.</h4>-->
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Parámetro</th>
                                                    <th>Valor</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td><?=$this->session->userdata('usuario')?></td>
                                                    <td>Datos de Autenticación</td>
                                                </tr>
                                                <tr>
                                                    <td>Contrasena</td>
                                                    <td><?=$this->session->userdata('contrasena')?></td>
                                                    <td>Datos de Autenticación</td>
                                                </tr>
                                                <tr>
                                                    <td>Tarea</td>
                                                    <td>2</td>
                                                    <td>Id de la tarea a borrar</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7">
                                    <h3><b style="color:#ff6c36";>POSTMAN</b></h3>
                                        <a href="https://documenter.getpostman.com/view/7313821/UVXerxQE" target="_blank" >https://documenter.getpostman.com/view/7313821/UVXerxQE</a>
                                        <pre>curl --location --request POST 'http://squadsupport.online/tareas/borrar' \
--header 'Cookie: ci_session=934ca4690a448e3e1467d19af4c775223a12ae5e' \
--form 'nombre="<?=$this->session->userdata('usuario')?>"' \
--form 'contrasena="<?=$this->session->userdata('contrasena')?>"' \
--form 'tarea="2"'</pre>
                            </div>

                        </div>
                         </div>


  <div class="col-md-12"> 
                                <h2><b>Listar tarea</b> </h2>
                                <h3><b style="color:#05A29D";>GET</b> http://squadsupport.online/tareas/consultar</h3>
                                <pre>http://squadsupport.online/tareas/consultar</pre>
                                <h3>Ejemplo</h3>
                                <!--<h4>Vamos a crear una nueva tarea.</h4>-->
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Parámetro</th>
                                                    <th>Valor</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td><?=$this->session->userdata('usuario')?></td>
                                                    <td>Datos de Autenticación</td>
                                                </tr>
                                                <tr>
                                                    <td>Contrasena</td>
                                                    <td><?=$this->session->userdata('contrasena')?></td>
                                                    <td>Datos de Autenticación</td>
                                                </tr>
                                                <tr>
                                                    <td>Parametro</td>
                                                    <td>TODO</td>
                                                    <td>TODO -> Consultar todas las teareas (incluidas la de otros usuarios) <br>
                                                    USUARIO -> Consultar solo mis tareas (las del usuario autenticado) <br>
                                                    FINALIZADO -> Consulta solo las tareas finalizadas <br>
                                                    PENDIENTE -> Consulta solo las tareas pendientes  </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-7">
                                    <h3><b style="color:#ff6c36";>POSTMAN</b></h3>
                                        <a href="https://documenter.getpostman.com/view/7313821/UVXerxQE" target="_blank" >https://documenter.getpostman.com/view/7313821/UVXerxQE</a>
                                        <pre>curl --location --request GET 'http://squadsupport.online/tareas/consultar?nombre=guillermo&contrasena=1&parametro=TODO' \
--header 'Cookie: ci_session=6fe5b816bd032b65bec33b6ebc828f710d162304'</pre>
                            </div>

                        </div>
                         </div>





                </div>
            </div>
</div>
    </div>
</div>
<div class="footer">
    <div>
        <strong>Guillermo Landazuri Amaya</strong>
    </div>
</div>

</div>
</div>
<?php require_once 'inc/js.php'; ?>



</body>

</html>
