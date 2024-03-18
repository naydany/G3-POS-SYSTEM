
<?php
require "database/database.php";
require "models/payment.model.php";
require "models/order.model.php";

deletOrder();
require('views/payments/recipt_order.view.php');
