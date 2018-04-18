<?php
/**
 * Created by PhpStorm.
 * User: chitra.p
 * Date: 4/14/2018
 * Time: 10:43 PM
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
<?php
echo "<div id=\"shopify-section-1516588728376\" class=\"shopify-section index-section\"><!-- section-slider-v1.liquid -->

<div data-section-id=\"1516588728376\" data-section-type=\"section-category-v3\" style=\" \">
  <section>
    <div class=\"container\">
      <div class=\"pop-cat8 bg-white\">
				<h2 class=\"title30 font-bold text-center\">List of Uzhavarsanthais</h2>
				<div class=\"popcat-slider8\">
					<div class=\"wrap-item owl-carousel owl-theme\" data-pagination=\"false\" data-navigation=\"true\" data-itemscustom=\"[[0,1],[560,2],[990,3]]\" style=\"opacity: 1; display: block;\">
						 
                      <div class=\"owl-item active\" style=\"width: 341px;\"><div class=\"item-popcat8\">
							<div class=\"banner-adv overlay-image zoom-out\">
								<a href=\"\" class=\"adv-thumb-link\">
									 <img src=\"//cdn.shopify.com/s/files/1/2644/1682/t/30/assets/pop1.jpg?18016044672682309820\" alt=\"\">
                                   <img src=\"//cdn.shopify.com/s/files/1/2644/1682/t/30/assets/pop1.jpg?18016044672682309820\" alt=\"\">
							
								</a>
							</div>
							<div class=\"popcat-info8 text-center\">
								<h3 class=\"title18\">Pallavaram Uzhavar Santhai</h3>
								<p class=\"desc\">Uzhavar Sandhai (farmer’s market) is a scheme to promote direct contact between farmers and consumers in the Indian state of Tamil Nadu.</p>
								<a href=\"/collection.php\" class=\"btn-arrow color\">View the site products</a>
							</div>
						</div></div><div class=\"owl-item active\" style=\"width: 341px;\"><div class=\"item-popcat8\">
							<div class=\"banner-adv overlay-image zoom-out\">
								<a href=\"\" class=\"adv-thumb-link\">
									 <img src=\"//cdn.shopify.com/s/files/1/2644/1682/t/30/assets/pop1.jpg?18016044672682309820\" alt=\"\">
                                   <img src=\"//cdn.shopify.com/s/files/1/2644/1682/t/30/assets/pop1.jpg?18016044672682309820\" alt=\"\">
							
								</a>
							</div>
							<div class=\"popcat-info8 text-center\">
								<h3 class=\"title18\">Uzhavarsandhai Chromepet</h3>
								<p class=\"desc\">The objective of this farmer's market is to promote direct contact between farmers and consumers, through which the farmer can get full profit. </p>
								<a href=\"/collection.php\" class=\"btn-arrow color\">View the site products</a>
							</div>
						</div></div><div class=\"owl-item active\" style=\"width: 341px;\" active=\"\"><div class=\"item-popcat8\">
							<div class=\"banner-adv overlay-image zoom-out\">
								<a href=\"\" class=\"adv-thumb-link\">
									 <img src=\"//cdn.shopify.com/s/files/1/2644/1682/t/30/assets/pop1.jpg?18016044672682309820\" alt=\"\">
                                   <img src=\"//cdn.shopify.com/s/files/1/2644/1682/t/30/assets/pop1.jpg?18016044672682309820\" alt=\"\">
							
								</a>
							</div>
							<div class=\"popcat-info8 text-center\">
								<h3 class=\"title18\">Kundrathur Santhai</h3>
								<p class=\"desc\">The markets are maintained and regulated by the Community Center and prices to the products are fixed on day basis.</p>
								<a href=\"/collection.php\" class=\"btn-arrow color\">View the site products</a>
							</div>
						</div></div></div>
						
					</div>
				</div>
			</div>

      </div>
  </section>



</div>


</div>
";
include("theme/include/footerr.php");
echo get_script(); ?>