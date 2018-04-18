<?php
/**
 * Created by PhpStorm.
 * User: chitra.p
 * Date: 4/15/2018
 * Time: 8:13 AM
 */
require("./theme/lib.php");
require("./lib/dblib.php");

?>

<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface js csstransitions shopify-features__smart-payment-buttons--enabled"
      lang="en" style="">
<head>
    <?php
    echo get_meta();
    echo get_styles();
    ?>
    <title> List Items </title>
</head>

<body class="template-index" style="background: rgb(255, 255, 255);">

<?php echo get_header(); ?>
<br><br>
<div class="container">
<div class="shop-banner banner-adv line-scale zoom-image">
    <a href="#" class="adv-thumb-link">
        <img src="/theme/assets/images/fruits.jpeg"
             alt="Banner-header">
    </a>
    <div class="banner-info">
        <h2 class="title30 color">
            All
        </h2>
        <div class="bread-crumb white">
            <a href="/" title="Back to the frontpage" class="white">Home</a>
            <span>All</span>
        </div>
    </div>
</div>
</div>

<?php include("theme/include/footerr.php");
echo get_script(); ?>