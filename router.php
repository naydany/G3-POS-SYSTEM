<?php
session_start();
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";

$routes = [
    '/' => 'controllers/wellcom/wellcom.controller.php',
    '/form_staff_signin' => 'controllers/staffsignin/form.signin.controller.php',
    '/form_admin_signin' => 'controllers/adminlogin/form.signin.controller.php',
    '/forget_password' => 'controllers/staffsignin/forget_password.controller.php',
];

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['role'] === 'admin') {
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
            '/order_product' => 'controllers/orders/update_order.controller.php',
            '/order' => 'controllers/orders/order.controller.php',

            '/form_create' => 'controllers/items/create_item.controller.php',
            '/update_item' => 'controllers/items/edit_item.controller.php',
            '/update_admin' => 'controllers/admin/edit_admin.controller.php',

            '/edit_item' => 'controllers/items/edit_item.controller.php',
            '/suppliers' => 'controllers/suppliers/supplier.controller.php',
            '/create_suppliers' => 'controllers/suppliers/form_supplier.controller.php',

            '/update_supplier' => 'controllers/suppliers/edite_spplier.controller.php',
            '/admin_table' => 'controllers/admin/table_admin.controller.php',
            '/form_admin' => 'controllers/admin/form_admin.controller.php',
            '/form_payment' => 'controllers/payments/form.payment.controller.php',
            '/old_payment' => 'controllers/payments/old_payment.controller.php',
             
            '/path_payment' => 'controllers/payments/path_payment.controller.php',
          

            '/dashboard_report'=>'controllers/reports/dashboard_report.controller.php',
            '/sale_report' => 'controllers/reports/sale_report.controller.php',
            '/payment_report' => 'controllers/reports/payment_report.controller.php',
            '/employee_report' => 'controllers/reports/employee_report.controller.php',

            '/forget_password' => 'controllers/staffsignin/forget_password.controller.php',

        ];
    } elseif ($_SESSION['user']['role'] === 'stock manager') {
        $routes = [
            '/admin' => 'controllers/admin/admin.controller.php',
            '/' => 'controllers/wellcom/wellcom.controller.php',
            '/categories' => 'controllers/categories/category.controller.php',
            '/items' => 'controllers/items/item.controller.php',
            '/orders' => 'controllers/orders/order.controller.php',
            '/reports' => 'controllers/reports/report.controller.php',
            '/users' => 'controllers/users/user.controller.php',
            '/payments' => 'controllers/payments/payment.controller.php',
            '/staffs' => 'controllers/staffs/staff.controller.php',

            '/profile' => 'controllers/profile/profile.controller.php',
            '/update_profile' => 'controllers/profile/update_detail.controller.php',

            '/admin_signin' => 'controllers/adminlogin/admin.login.controller.php',
            '/form_admin_signin' => 'controllers/adminlogin/form.signin.controller.php',
            '/form_staff_signin' => 'controllers/staffsignin/form.signin.controller.php',
            '/order_product' => 'controllers/orders/update_order.controller.php',
            '/order' => 'controllers/orders/order.controller.php',
            '/suppliers' => 'controllers/suppliers/supplier.controller.php',

            '/admin_table' => 'controllers/admin/table_admin.controller.php',
            '/form_admin' => 'controllers/admin/form_admin.controller.php',
            '/form_payment' => 'controllers/payments/form.payment.controller.php',
            '/old_payment' => 'controllers/payments/old_payment.controller.php',
         
            '/forget_password' => 'controllers/staffsignin/forget_password.controller.php',

        ];
    }elseif($_SESSION['user']['role'] === 'cashier') {
        $routes = [
            '/admin' => 'controllers/admin/admin.controller.php',
            '/' => 'controllers/wellcom/wellcom.controller.php',
            '/categories' => 'controllers/categories/category.controller.php',
            '/items' => 'controllers/items/item.controller.php',
            '/orders' => 'controllers/orders/order.controller.php',
            '/reports' => 'controllers/reports/report.controller.php',
            '/users' => 'controllers/users/user.controller.php',
            '/payments' => 'controllers/payments/payment.controller.php',
            '/staffs' => 'controllers/staffs/staff.controller.php',

            '/profile' => 'controllers/profile/profile.controller.php',
            '/update_profile' => 'controllers/profile/update_detail.controller.php',

            '/admin_signin' => 'controllers/adminlogin/admin.login.controller.php',
            '/form_admin_signin' => 'controllers/adminlogin/form.signin.controller.php',
            '/form_staff_signin' => 'controllers/staffsignin/form.signin.controller.php',

            '/order_product' => 'controllers/orders/update_order.controller.php',
            '/suppliers' => 'controllers/suppliers/supplier.controller.php',

            '/admin_table' => 'controllers/admin/table_admin.controller.php',
            '/form_admin' => 'controllers/admin/form_admin.controller.php',
            '/form_payment' => 'controllers/payments/form.payment.controller.php',
            '/old_payment' => 'controllers/payments/old_payment.controller.php',
            '/forget_password' => 'controllers/staffsignin/forget_password.controller.php',
        
        ];
    }
}


if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
    http_response_code(404);
    $page = 'views/errors/404.php';
}


require "layouts/header.php";
if (!empty($_SESSION['user'])) {
    if ($uri != '/' && $uri != '/form_admin_signin' && $uri != '/form_staff_signin' && $uri != '/forget_password') {
        require "layouts/navbar.php";
        require $page;
        require "layouts/footer.php";
    }else{
        require $page;
    }
} elseif (empty($_SESSION['user'])) {
    if ($uri != '/' && $uri != '/form_admin_signin' && $uri != '/form_staff_signin' && $uri != '/forget_password') {
        // $page = 'views/errors/404.php';
        $page = 'controllers/wellcom/wellcom.controller.php';
        require $page;
        require "layouts/footer.php";
    } else {
        require $page;
    }
}

