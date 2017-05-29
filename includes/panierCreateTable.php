<?php

 $query = "CREATE TABLE panier (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    idvisit VARCHAR(99) NULL ,
    idadmin VARCHAR(99)	NULL
    )";

$db->exec($query);

?>