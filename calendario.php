<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>Calendario de eventos</h2>

        <?php
            try {
                require_once('includes/funciones/bd_conexion.php');
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
>>>>>>> 392024229772099d2bd07406c983b6ceb7190353
>>>>>>> 473fd4c457cfa7ea166280fec9960793661e028e
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
>>>>>>> 01279a17dec833b6096fdb473cea3e02c1fa299b
>>>>>>> e8499af52520ddcf0a7940986ac4ccb3b922e6ce
>>>>>>> 821c4bf06ee351ee49f4d70f4533350374d6fccc
>>>>>>> 17236eae116681c6021ae93dfd9fc25f54d25d6b
>>>>>>> d527f92936274fa9dabad0093ecdfc099055e31b
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                $sql .= " ORDER BY evento_id ";
                $resultado = $conn->query($sql);
            } catch (\Exception $e) {
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
<<<<<<< HEAD
                $error = $e->getMessage();
=======
                echo $e->getMessage();
>>>>>>> 392024229772099d2bd07406c983b6ceb7190353
>>>>>>> 473fd4c457cfa7ea166280fec9960793661e028e
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
>>>>>>> 01279a17dec833b6096fdb473cea3e02c1fa299b
>>>>>>> e8499af52520ddcf0a7940986ac4ccb3b922e6ce
>>>>>>> 821c4bf06ee351ee49f4d70f4533350374d6fccc
>>>>>>> 17236eae116681c6021ae93dfd9fc25f54d25d6b
>>>>>>> d527f92936274fa9dabad0093ecdfc099055e31b
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
            }
        ?>
        <div class="calendario">
            <?php
                $calendario = array();
                while ( $eventos = $resultado->fetch_assoc() ){ 

                    //obtiene la fecha del evento
                    $fecha = $eventos['fecha_evento']; 

                    $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
>>>>>>> 392024229772099d2bd07406c983b6ceb7190353
>>>>>>> 473fd4c457cfa7ea166280fec9960793661e028e
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
>>>>>>> 01279a17dec833b6096fdb473cea3e02c1fa299b
>>>>>>> e8499af52520ddcf0a7940986ac4ccb3b922e6ce
>>>>>>> 821c4bf06ee351ee49f4d70f4533350374d6fccc
>>>>>>> 17236eae116681c6021ae93dfd9fc25f54d25d6b
>>>>>>> d527f92936274fa9dabad0093ecdfc099055e31b
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
                        'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                    );

                    $calendario[$fecha][] = $evento; 

            ?>   
                    
            <?php    } //while de fetch_assoc ?>   

            <?php  //imprime todos los eventos
                foreach($calendario as $dia => $lista_eventos) { ?>
                    <h3>
                        <i class="fa fa-calendar"></i>
                        <?php 
                            setlocale(LC_TIME, 'spanish');
                            echo strftime("%A, %d de %B del %Y", strtotime($dia)); 
                        ?>
                    </h3>
                    <?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 392024229772099d2bd07406c983b6ceb7190353
>>>>>>> 473fd4c457cfa7ea166280fec9960793661e028e
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
>>>>>>> 01279a17dec833b6096fdb473cea3e02c1fa299b
>>>>>>> e8499af52520ddcf0a7940986ac4ccb3b922e6ce
>>>>>>> 821c4bf06ee351ee49f4d70f4533350374d6fccc
>>>>>>> 17236eae116681c6021ae93dfd9fc25f54d25d6b
>>>>>>> d527f92936274fa9dabad0093ecdfc099055e31b
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
                        foreach($lista_eventos as $evento) { 
                    ?>
                            <div class="dia">

                                <p class="titulo"><?php echo $evento['titulo']; ?></p>
                                <p class="hora">
                                    <i class="fa-solid fa-clock" aria-hidden="true"></i>
                                    <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                                </p>

                                <p>
                                    <i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                                    <?php echo $evento['categoria']; ?>
                                </p>

                                <p>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <?php echo $evento['invitado']; ?>
                                </p>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
                        foreach($lista_eventos as $evento) { ?>
                            <div class="dia">
                                <p class="titulo"></p>
                                <pre>
                                    <?php var_dump ($evento); ?>
                                </pre>
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
>>>>>>> 392024229772099d2bd07406c983b6ceb7190353
>>>>>>> 473fd4c457cfa7ea166280fec9960793661e028e
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
>>>>>>> 01279a17dec833b6096fdb473cea3e02c1fa299b
>>>>>>> e8499af52520ddcf0a7940986ac4ccb3b922e6ce
>>>>>>> 821c4bf06ee351ee49f4d70f4533350374d6fccc
>>>>>>> 17236eae116681c6021ae93dfd9fc25f54d25d6b
>>>>>>> d527f92936274fa9dabad0093ecdfc099055e31b
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
                            </div>
                    <?php    } //fin foreach de eventos ?>
                    
            <?php    }  //fin foreach de dias ?>
            
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 473fd4c457cfa7ea166280fec9960793661e028e
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
>>>>>>> 01279a17dec833b6096fdb473cea3e02c1fa299b
>>>>>>> e8499af52520ddcf0a7940986ac4ccb3b922e6ce
>>>>>>> 821c4bf06ee351ee49f4d70f4533350374d6fccc
>>>>>>> 17236eae116681c6021ae93dfd9fc25f54d25d6b
>>>>>>> d527f92936274fa9dabad0093ecdfc099055e31b
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
        </div> <!--.calendario-->

        <?php  $conn->close(); ?>                   

    </section>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
        </div> <!--.calendario-->
=======
        </div>
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
        <?php
            $conn->close();
        ?>

    </section>

<<<<<<< HEAD
<?php $conn => close(); ?>

=======
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
>>>>>>> 392024229772099d2bd07406c983b6ceb7190353
>>>>>>> 473fd4c457cfa7ea166280fec9960793661e028e
>>>>>>> c290b404bb34c2b174df2f9043052a643ad012de
>>>>>>> c1bd86fc194e3cec0afb1b49ebb945598f79216e
>>>>>>> 01279a17dec833b6096fdb473cea3e02c1fa299b
>>>>>>> e8499af52520ddcf0a7940986ac4ccb3b922e6ce
>>>>>>> 821c4bf06ee351ee49f4d70f4533350374d6fccc
>>>>>>> 17236eae116681c6021ae93dfd9fc25f54d25d6b
>>>>>>> d527f92936274fa9dabad0093ecdfc099055e31b
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
<?php include_once 'includes/templates/footer.php'; ?>