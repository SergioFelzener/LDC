<?php
    $deuMerda = false;
    
    if (isset($_GET['username'])) {
        $username = $_GET['username'];    
        if ($username == "fabio")
            $deuMerda = true;
        if ($username == "sergio")
            $deuMerda = true;
        if ($username == "didi")
            $deuMerda = true;
        
        if ($deuMerda == true) {
            echo "S";
        } else {
            echo "N";
        }
    }

?>