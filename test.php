<?php
    $data = true;
    $callback = $_GET['callback'];
    sleep(10);
    echo $callback.'('.json_encode($data).')';
?>
