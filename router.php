<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/admin' => 'controllers/admin/admin.controller.php',
    '/' => 'controllers/wellcom/wellcom.controller.php',
    '/categories' => 'controllers/categories/category.controller.php',
    '/items' => 'controllers/items/item.controller.php',
    '/orders' => 'controllers/orders/order.controller.php',
    '/reports' => 'controllers/reports/report.controller.php',
    '/users' => 'controllers/users/user.controller.php',
    '/create_form_cate' => 'controllers/categories/form_category.controller.php',
    '/payments' => 'controllers/payments/payment.controller.php',
    '/staffs' => 'controllers/staffs/staff.controller.php',
    '/admin_signin' => 'controllers/adminlogin/admin.login.controller.php',
    '/form_admin_signin' => 'controllers/adminlogin/form.signin.controller.php',
    '/form_admin_signup' => 'controllers/adminlogin/admin.signup.controller.php',
    '/create_staffs' => 'controllers/staffs/create_form_staff.controller.php',
    '/form_create_pro' => 'controllers/items/create_item.controller.php',
    '/update_staff' => 'controllers/staffs/edite.staff.contrller.php',



]; 


if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}

require "layouts/header.php";
// require "layouts/navbar.php";
// require "layouts/footer.php";
if ($uri !== "/" && $uri !== "/admin_signin" && $uri !='/form_admin_signin' && $uri !=='/form_admin_signup') {
    require "layouts/navbar.php";
}

require $page;

// Include the footer only if the user is logged in
if ($uri !== "/" && $uri !== "/admin_signin"  && $uri !='/form_admin_signin' && $uri !=='/form_admin_signup') {
    require "layouts/footer.php";
}