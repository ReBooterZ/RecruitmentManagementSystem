<?php
/**
 * Created by PhpStorm.
 * User: chitra.p
 * Date: 4/7/2018
 * Time: 12:18 PM
 */
require("theme/lib.php"); ?>

<!DOCTYPE html>
<!-- saved from url=(0033)https://fruit-demo.myshopify.com/ -->
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface js csstransitions shopify-features__smart-payment-buttons--enabled"
      lang="en" style=""><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <?php
        echo get_meta();
        echo get_styles();
        //echo get_script();
        ?>
        <title> Account - Create </title>
    </head>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php include("theme/include/header.php"); ?>
<br><br>
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <div class="content-page">
            <div class="page-width page-login">
                <div class="grid contaner">
                    <div class="shop-banner banner-adv line-scale zoom-image">
                        <a href="#" class="adv-thumb-link">
                            <img src="/theme/assets/images/breadcrumb_image_6.jpg"
                                 alt="Banner-header">
                        </a>
                        <div class="banner-info">
                            <h2 class="title30 color">
                                Create Account
                            </h2>
                            <div class="bread-crumb white">
                                <a href="/index.php" title="Back to the frontpage" class="white">Home</a>
                                <span> Create Account </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid__item medium-up--one-half medium-up--push-one-quarter">
                        <div class="form-vertical">
                            <form method="post" action="/index.php" id="create_customer" accept-charset="UTF-8"><input
                                        type="hidden" name="form_type" value="create_customer">
                                <input type="hidden" name="utf8" value="✓">
                                <h3>Create Account</h3>
                                <p>Create your own account.</p>
                                <label class="control-label" for="FirstName">First Name</label>
                                <input type="text" name="customer[first_name]" id="FirstName">
                                <label class="control-label" for="LastName">Last Name</label>
                                <input type="text" name="customer[last_name]" id="LastName">
                                <label class="control-label" for="Email">Email</label>
                                <input type="email" name="customer[email]" id="Email" class="" autocorrect="off"
                                       autocapitalize="off">
                                <label class="control-label" for="CreatePassword">Password</label>
                                <input type="password" name="customer[password]" id="CreatePassword" class="">
                                <p class="text-left">
                                    <input type="submit" value="Create" class="link-v1 rt">
                                </p>
                            </form>
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