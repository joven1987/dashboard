<?php

include 'dbConnection.php';

    $query = $db->prepare("SELECT * FROM `main_category` 
            JOIN `sub_category` 
            ON `main_category`.`main_category_id`=`sub_category`.`sub_category_id`");
    $query->execute();
    $query->setFetchMode(PDO::FETCH_OBJ);
    print_r(json_encode($query->fetchAll()));
    /*while ($row = $query->fetchALL()) {

    }*/
?>