<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/admin/admin.controller.php',
    '/categories' => 'controllers/categories/category.controller.php',
    '/items' => 'controllers/items/item.controller.php',
    '/orders' => 'controllers/orders/order.controller.php',
    '/reports' => 'controllers/reports/report.controller.php',
    '/users' => 'controllers/users/user.controller.php',
<<<<<<< HEAD
<<<<<<< HEAD
    '/create_form' => 'controllers/categories/form.category.controller.php',
=======
    '/payments' => 'controllers/payments/payment.controller.php',
>>>>>>> ed246fb890ad9fb8d6812d553173c2c7c18e4e07
=======
    '/payments' => 'controllers/payments/payment.controller.php',
>>>>>>> ed246fb890ad9fb8d6812d553173c2c7c18e4e07
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require "layouts/header.php";
require "layouts/navbar.php";
require $page;
require "layouts/footer.php";
