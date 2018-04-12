<?php
/**
 * Created by PhpStorm.
 * User: chitra.p
 * Date: 4/7/2018
 * Time: 3:16 PM
 */
require ("theme/lib.php");?>

    <!DOCTYPE html>
    <!-- saved from url=(0033)https://fruit-demo.myshopify.com/ -->
    <html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface js csstransitions shopify-features__smart-payment-buttons--enabled" lang="en" style=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#7796A8">
    <link rel="canonical" href="http://uzhavarsandhai.com/">
    <link href="./theme/styles/Poppins.css" rel="stylesheet" type="text/css">
    <link href="./theme/styles/Pacifico.css" rel="stylesheet" type="text/css">
    <link href="./theme/styles/Poiret-One.css" rel="stylesheet" type="text/css">
    <title> Farmer's Market Manager </title>

    <!-- /snippets/social-meta-tags.liquid -->
    <meta property="og:site_name" content="Farmer's Market Manager">
    <meta property="og:url" content="http://uzhavarsandhai.com/">
    <meta property="og:title" content="Farmer's Market Manager">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Farmer's Market Manager">


    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Farmer's Market Manager">
    <meta name="twitter:description" content="Farmer's Market Manager">

    <?php
    echo get_styles();
    //echo get_script();
    ?>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php include("theme/include/header.php");
?>


    <html>
<?php
echo "
  <script src=\"./styles/scripts/quickview.js\" type=\"text/javascript\"></script>
  <script src=\"./styles/scripts/wish-list.js\" type=\"text/javascript\"></script>
  <script src=\"./styles/scripts/timber.js\" type=\"text/javascript\"></script>
  <script src=\"./styles/scripts/countdown.js\" type=\"text/javascript\"></script>
  <script src=\"./styles/scripts/collection.js\" type=\"text/javascript\"></script>
  
  <link href=\"./theme/styles\css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"./theme/styles/css(1)\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"./theme/styles/css(2)\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"./theme/styles/theme.scss.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"> 
  <link href=\"./theme/styles/timber.scss.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/bootstrap-theme.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/owl.carousel.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/owl.transitions.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/jquery.mCustomScrollbar.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/owl.theme.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/slick.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/animate.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/hover.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/color.scss.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/theme.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/responsive.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/browser.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"./theme/styles/custom-color.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  
<div class=\"page-container\" id=\"PageContainer\">

    <main class=\"main-content\" id=\"MainContent\" role=\"main\">

        <div class=\"content-page\">
       
<div class=\"page-width page-login\">

  <div class=\"grid container\">
     <!-- /snippets/breadcrumb.liquid -->





<!-- /snippets/breadcrumb.liquid -->




<div class=\"shop-banner banner-adv line-scale zoom-image\">
  <a href=\"#\" class=\"adv-thumb-link\">
    
    
    
    <img src=\"//cdn.shopify.com/s/files/1/2644/1682/t/27/assets/breadcrumb_image_6.jpg?9974154348750016803\" alt=\"Banner-header\">
    
  
 
  </a>
  <div class=\"banner-info\">
    <h2 class=\"title30 color\">
      
        Account
        
    </h2>
    <div class=\"bread-crumb white\">
     
    <a href=\"/\" title=\"Back to the frontpage\" class=\"white\">Home</a>
     

        <span>
        Account
      </span>

        
    </div>
  </div>
</div>


    <div class=\"grid__item medium-up--one-half medium-up--push-one-quarter\">
      <div class=\"note form-success hide\" id=\"ResetSuccess\">
        We\'ve sent you an email with a link to update your password.
      </div>

      <div id=\"CustomerLoginForm\" class=\"form-vertical\" style=\"display: none;\">
        <form method=\"post\" action=\"/account/login\" id=\"customer_login\" accept-charset=\"UTF-8\"><input type=\"hidden\" name=\"form_type\" value=\"customer_login\"><input type=\"hidden\" name=\"utf8\" value=\"✓\">


          <h3>Login</h3>
          <p>Hello, welcome to your account</p>

          

          <label class=\"control-label\" for=\"CustomerEmail\">Email</label>
          <input type=\"email\" name=\"customer[email]\" id=\"CustomerEmail\" class=\"form-control \" autocorrect=\"off\" autocapitalize=\"off\" autofocus=\"\">

          
            <label class=\"control-label\" for=\"CustomerPassword\">Password</label>
            <input type=\"password\" value=\"\" name=\"customer[password]\" id=\"CustomerPassword\" class=\"form-control \">
          

          <div class=\"text-left\">
            
              <p><a href=\"/account/forgotpassword.php\" id=\"RecoverPassword\">Forgot your password?</a></p>
            

            <input type=\"submit\" class=\"link-v1 rt\" value=\"Sign In\">

            <p>
              <a href=\"/account/register\" id=\"customer_register_link\">register</a>
            </p>
          </div>

        </form>
      </div>

      <div id=\"RecoverPasswordForm\" style=\"\">

        <div class=\"text-left\">
          <h3>Reset your password</h3>
          <p>We will send you an email to reset your password.</p>
        </div>

        <div class=\"form-vertical\">
          <form method=\"post\" action=\"/account/recover\" accept-charset=\"UTF-8\"><input type=\"hidden\" name=\"form_type\" value=\"recover_customer_password\"><input type=\"hidden\" name=\"utf8\" value=\"✓\">

            

     
            <label class=\"control-label\" for=\"RecoverEmail\">Email</label>
            <input type=\"email\" value=\"\" name=\"email\" id=\"RecoverEmail\" class=\"input-full form-control\" autocorrect=\"off\" autocapitalize=\"off\">

            <div class=\"text-left\">
              <p>
                <input type=\"submit\" class=\"link-v1 rt\" value=\"Submit\">
              </p>

              <button type=\"button\" id=\"HideRecoverPasswordLink\" class=\"text-link\">Cancel</button>
            </div>
          </form>
        </div>

      </div>

      
      
    </div>

  </div>
</div>
</div>

    </main>
 </div>";

