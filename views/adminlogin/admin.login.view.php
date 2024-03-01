
<div class="align-item-center container mt-5">
    <div class="text-center">
        <h1 class="text-center text-primary">Welcome to Page Admin Signin</h1>
        <?php if (!isset($_SESSION['user'])) : ?>
            <div class=" mt-5">
                <a href="/form_admin_signin">Sign In</a> /
                <a href="/form_admin_signup">Create Account</a>
            </div>
        <?php else : ?>
            <a href="/signout">Sign Out</a>
        <?php endif; ?>
    </div>
</div>
