<?php

require "models/item.model.php";
require "database/database.php";

$products = getItem();

require "views/orders/order.view.php";