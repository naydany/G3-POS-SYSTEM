<?php
session_start();
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
    '/profile' => 'controllers/profile/profile.controller.php',
    '/update_profile' => 'controllers/profile/update_detail.controller.php',

    '/admin_signin' => 'controllers/adminlogin/admin.login.controller.php',
    '/form_admin_signin' => 'controllers/adminlogin/form.signin.controller.php',
    '/form_staff_signin' => 'controllers/staffsignin/form.signin.controller.php',
    '/form_admin_signup' => 'controllers/adminlogin/admin.signup.controller.php',
    '/create_staffs' => 'controllers/staffs/create_form_staff.controller.php',
    '/form_create_pro' => 'controllers/items/create_item.controller.php',
    '/update_staff' => 'controllers/staffs/edite.staff.contrller.php',
    '/update_category' => 'controllers/categories/edite_category.controller.php',
    '/view_category' => 'controllers/categories/view_category.controller.php',
    '/order_product' => 'controllers/orders/update_order.controller.php',


    '/form_create' => 'controllers/items/create_item.controller.php',
    '/update_item' => 'controllers/items/edit_item.controller.php',

    '/edit_item' => 'controllers/items/edit_item.controller.php',
    '/suppliers' => 'controllers/suppliers/supplier.controller.php',
    '/create_suppliers' => 'controllers/suppliers/form_supplier.controller.php',

    '/logout' => 'controllers/users/logout.controller.php',
    '/update_supplier' => 'controllers/suppliers/edite_spplier.controller.php',
    '/admin_table' => 'controllers/admin/table_admin.controller.php',
    '/form_admin' => 'controllers/admin/form_admin.controller.php',

];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
    // var_dump($page);
} else {
    http_response_code(404);
    $page = 'views/errors/404.php';
}

require "layouts/header.php";
if (
    $uri !== "/" &&
    $uri !== "/admin_signin" &&
    $uri != '/form_admin_signin' &&
    $uri !== '/form_admin_signup' &&
    $uri !== '/form_staff_signin'
) {
    require "layouts/navbar.php";
}

require $page;

// Include the footer only if the user is logged in
if (
    $uri !== "/" &&
    $uri !== "/admin_signin"  &&
    $uri != '/form_admin_signin' &&
    $uri !== '/form_admin_signup' &&
    $uri !== '/form_staff_signin'
) {
    require "layouts/footer.php";
}

// if (empty($_SESSION['user'])){
//     if ($page === 'controllers/adminlogin/form.signin.controller.php'){
//         session_destroy();
//         // require "layouts/header.php";
//         // require $page;
//         // require "layouts/footer.php";

//         echo 'hello';
//     } else{
//         header('location: /');
//     }
// }else{
//     if ($page != 'controllers/adminlogin/form.signin.controller.php'){
//         // require "layouts/header.php";
//         // require "layouts/navbar.php";
//         // require $page;
//         // require "layouts/footer.php";


//     }
// }

// echo $_SERVER['REQUEST_URI'];
