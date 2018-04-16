<?php

    $dsn     = "mysql:host=localhost;dbname=imagetmp";
    $user    = "root";
    $pass    = "";
    $options = array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");
    
    try {
        
        $conn = new PDO($dsn, $user, $pass, $options);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        echo "
        <div class='alert alert-warning text-center' role='alert'>
            <h4>!!! Database Connect ERROR !!!</h4>
        </div>";
        $e->getMessage();
    }
    
