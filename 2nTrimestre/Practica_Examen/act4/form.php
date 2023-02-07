<?php
    $cp = $_POST['cp'];
    $ciudad = $_POST['ciudad'];

    if ($cp != '' && $ciudad != '') {
        echo json_encode('correcto');
    } else {
        echo json_encode('error');
    }

?>