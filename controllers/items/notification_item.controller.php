<?php
require "../../models/item.model.php";
$nodes = getItem();

foreach ($nodes  as $node) {
    $OPO = $node['pro_quantity'];

    if($OPO < 7){
        echo $OPO;
    }
}

