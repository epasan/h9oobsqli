<?php

    DEFINE("DB_USER", "");
    DEFINE("DB_PASSWORD", "");
    
    $connection_string = "mysql:host=localhost;dbname=proclive";

    try {

        $db = new PDO($connection_string, DB_USER, DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
    
        
    
    }

?>
