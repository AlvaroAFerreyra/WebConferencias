<?php 
    $conn = new mysqli('localhost', 'root', 'elelemanuel', 'gdlwebcamp');

    if($conn->connect_error) {
        echo $error -> $conn -> connect_error;
    }
?>