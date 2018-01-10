<?php

    $firstname   = $_POST["firstname"];
    $lastname    = $_POST["lastname"];
        $data = array(
        
            "firstname"  => $firstname,
            "lastname"   => $lastname
        );
        echo json_encode($data);

?>