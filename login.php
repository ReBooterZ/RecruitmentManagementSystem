<?php
require("theme/lib.php");
require ("lib/dblib.php");
session_start();
$DB = new Db();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM user WHERE username = '$username' and password = '$password'";

    if($DB->select($sql)) {
        $_SESSION['login_user'] = $username;
        echo "Successfully Logged In";
    } else {
        echo "Wrong Credentials";
    }
}
?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface js csstransitions shopify-features__smart-payment-buttons--enabled"
      lang="en" style="">
<head>
    <?php
    echo get_meta();
    echo get_styles();
    //echo get_script();
    ?>
    <title> Account - Login </title>
</head>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php include("theme/include/header.php"); ?>
<br><br>
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <div class="content-page">
            <div class="page-width page-login">
                <div class="grid container">
                    <div class="shop-banner banner-adv line-scale zoom-image">
                        <a href="#" class="adv-thumb-link">
                            <img src="/theme/assets/images/breadcrumb_image_6.jpg"
                                 alt="Banner-header">
                        </a>
                        <div class="banner-info">
                            <h2 class="title30 color">Account</h2>
                            <div class="bread-crumb white">
                                <a href="/index.php" title="Back to the frontpage" class="white">Home</a>
                                <span>Account</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid__item medium-up--one-half medium-up--push-one-quarter">
                        <div class="note form-success hide" id="ResetSuccess">
                            We've sent you an email with a link to update your password.
                        </div>
                    <div id="CustomerLoginForm" class="form-vertical">
                        <form method="post" action="" id="customer_login" accept-charset="UTF-8">
                            <input type="hidden" name="form_type" value="customer_login">
                            <input type="hidden" name="utf8" value="✓">
                            <h3>Login</h3>
                            <p>Hello, Welcome to your account</p>
                            <label class="control-label" for="CustomerEmail">Email</label>
                            <input type="text" name="username" id="CustomerUserName" class="form-control" autocorrect="off" autocapitalize="off">
                            <label class="control-label" for="CustomerPassword">Password</label>
                            <input type="password" value="" name="password" id="CustomerPassword" class="form-control">
                            <div class="text-left">
                                <p><a href="/forgotpassword.php" id="RecoverPassword">Forgot your password?</a></p>
                                <input type="submit" class="link-v1 rt" value="Sign In">
                                <p><a href="/register.php" id="customer_register_link">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div id="RecoverPasswordForm" style="display: none;">
                        <div class="text-left">
                            <h3>Reset your password</h3>
                            <p>We will send you an email to reset your password.</p>
                        </div>
                        <div class="form-vertical">
                            <form method="post" action="/account/recover" accept-charset="UTF-8">
                                <input type="hidden" name="form_type" value="recover_customer_password">
                                <input type="hidden" name="utf8" value="✓">
                                <label class="control-label" for="RecoverEmail">Email</label>
                                <input type="email" value="" name="email" id="RecoverEmail" class="input-full form-control" autocorrect="off" autocapitalize="off">
                                <div class="text-left">
                                    <p><input type="submit" class="link-v1 rt" value="Submit"></p>
                                    <button type="button" id="HideRecoverPasswordLink" class="text-link"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include("theme/include/footer.php"); ?>

</body>
</html>