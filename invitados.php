<?php include_once 'includes/templates/header.php'; ?>

<<<<<<< HEAD
    <?php include_once 'includes/templates/invitados.php'; ?>                 

=======
<<<<<<< HEAD
    <?php include_once 'includes/templates/invitados.php'; ?>                 

=======
<<<<<<< HEAD
    <?php include_once 'includes/templates/invitados.php'; ?>                 

=======
<<<<<<< HEAD
    <?php include_once 'includes/templates/invitados.php'; ?>                 

=======
<<<<<<< HEAD

=======
    <section class="seccion contenedor">
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e

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
                                <a class="invitado_info" href="#invitado <?php echo $invitados['invitado_id'] ?>">
=======
<<<<<<< HEAD
                                <a href="#invitado <?php echo $invitados['invitado_id'] ?>">
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
                                    <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Invitado 1">
                                    <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></p>
                                </a>
                            </div>
                        </li>
<<<<<<< HEAD
                        <div style="display:none;">
=======
                        <div style="display: none;">
<<<<<<< HEAD
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
                            <div class="invitado_info" id="invitado<?php echo $invitados['invitado_id'] ?>">
                                <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></h2>
                                <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Invitado 1">
                                <p><?php echo $invitados['descripcion'] ?></p>
                            </div>
                        </div>
<<<<<<< HEAD
=======
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
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
                <?php  } ?>
            </ul>
        </section>

        <?php  $conn->close(); ?>                

<<<<<<< HEAD
=======
    </section>

>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
>>>>>>> 01279a17dec833b6096fdb473cea3e02c1fa299b
>>>>>>> e8499af52520ddcf0a7940986ac4ccb3b922e6ce
>>>>>>> 821c4bf06ee351ee49f4d70f4533350374d6fccc
>>>>>>> 17236eae116681c6021ae93dfd9fc25f54d25d6b
<?php include_once 'includes/templates/footer.php'; ?>