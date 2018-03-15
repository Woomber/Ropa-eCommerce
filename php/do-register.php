<?php
    foreach($_POST as $key => $val){
        echo $key . "=" . htmlspecialchars($val, ENT_COMPAT, 'UTF-8') . "<br>";

    }
 



?>