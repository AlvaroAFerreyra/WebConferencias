<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">

        <?php
            try {
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT * FROM `invitados` ";
                $resultado = $conn->query($sql);
            } catch (Exception $e) {
                $error = $e->getMessage();
            }
        ?>

        <section class="invitados contenedor seccion">
            <h2>Nuestros invitados</h2>
            <ul class="lista_invitados clearfix">
                <?php
                    while ( $invitados = $resultado->fetch_assoc() ){ ?>
                        <li>
                            <div class="invitado">
<<<<<<< HEAD
                                <a class="invitado_info" href="#invitado <?php echo $invitados['invitado_id'] ?>">
=======
<<<<<<< HEAD
                                <a href="#invitado <?php echo $invitados['invitado_id'] ?>">
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
                                    <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Invitado 1">
                                    <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></p>
                                </a>
                            </div>
                        </li>
                        <div style="display: none;">
<<<<<<< HEAD
                            <div class="invitado_info" id="invitado<?php echo $invitados['invitado_id'] ?>">
                                <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></h2>
                                <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Invitado 1">
                                <p><?php echo $invitados['descripcion'] ?></p>
                            </div>
                        </div>
=======
                            <div class="invitado_info" id="invitado<?php echo $invitados['invitado_id']; ?>">
                                <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?></h2>
                                <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Invitado 1">
                                <p></p><?php echo $invitados['descripcion']; ?></p>
                            </div>
                        </div>
=======
                                <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Invitado 1">
                                <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></p>
                            </div>
                        </li>
>>>>>>> 473fd4c457cfa7ea166280fec9960793661e028e
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
                <?php  } ?>
            </ul>
        </section>

        <?php  $conn->close(); ?>                

    </section>

<?php include_once 'includes/templates/footer.php'; ?>