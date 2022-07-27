<<<<<<< HEAD
<?php if(isset($_POST['submit'])): 
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
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Resumen registro</h2>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
    <?php if(isset($_POST['submit'])): 
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $regalo = $_POST['regalo'];
        $total = $_POST['total_pedido'];
        $fecha = date('Y-m-d H:i:s');
<<<<<<< HEAD
        //PEDIDOS
        $boletos = $_POST['boletos'];
        $camisas = $_POST['pedido_camisas'];
        $etiquetas = $_POST['pedido_etiquetas'];
        include_once 'includes/funciones/funciones.php';
        $pedido = productos_json($boletos, $camisas, $etiquetas);
        //EVENTOS
        $eventos = $_POST['registro'];
        $registro = $eventos_json($eventos);
=======

        //PEDIDOS

        $boletos = $_POST['boletos'];
        $camisas = $_POST['pedido_camisas'];
        $etiquetas = $_POST['pedido_etiquetas'];

        include_once 'includes/funciones/funciones.php';

        $pedido = productos_json($boletos, $camisas, $etiquetas);

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
        //EVENTOS

        $eventos = $_POST['registro'];
        $registro = $eventos_json($eventos);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16

>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
        try {
            require_once('includes/funciones/bd_conexion.php');
            $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
<<<<<<< HEAD
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('Location: validar_registro.php?exitoso=1');
        } catch (\Exception $e) {
            $error = $e->getMessage();
        }
?>

<?php endif; ?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Resumen registro</h2>

    <?php if(isset($_GET['exitoso'])):
        if($_GET['exitoso'] == "1"):
            echo "Registro exitoso";
    endif; ?>    
</section>    

<?php include_once 'includes/templates/footer.php'; ?>
=======
<<<<<<< HEAD
            $stmt->execute();
            $stmt->close();
            $conn->close();
=======
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
        } catch (\Exception $e) {
            $error = $e->getMessage();
        }
    ?>

<<<<<<< HEAD
=======
=======
    ?>

    <pre>
        <?php var_dump($eventos); ?>
    </pre>    

    <pre>
        <?php var_dump($registro); ?>
    </pre>

=======
        echo "<pre>";
            var_dump($pedido);
        echo "</pre>";
    ?>

=======
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
    <pre>
        <?php var_dump($_POST); ?>
    </pre>

<<<<<<< HEAD
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
    <?php endif; ?>

</section>    

<<<<<<< HEAD
<?php include_once 'includes/templates/footer.php'; ?>
=======
<<<<<<< HEAD
<?php include_once 'includes/templates/footer.php'; ?>
=======
<<<<<<< HEAD
<?php include_once 'includes/templates/footer.php'; ?>
=======
<?php include_once 'includes/templates/footer.php'; ?>
=======
</section>    

<?php include_once 'includes/templates/footer.php'; ?>
=======
<pre>
    <?php var_dump($_POST); ?>
</pre>
>>>>>>> d527f92936274fa9dabad0093ecdfc099055e31b
>>>>>>> 671e1507b0d949ef98f4255446f2df79f443c9a7
>>>>>>> ea60202389c94d3630f12757e474e2ba3ea37586
>>>>>>> a0008419a83e47c0d7a36e2c60ad7d66b87edfd7
>>>>>>> d74f43ff6c3999d6924a78930ca152fdbebfdc16
>>>>>>> d94aac461fff4e455663cc81eb9762ddeb8782b5
