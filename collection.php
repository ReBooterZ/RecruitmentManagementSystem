<?php
require("./theme/lib.php");
require("./lib/dblib.php");

$DB = new Db();

$sql = "SELECT id, name, cost, images, category, description FROM items WHERE id > 0";

if ($result = $DB->select($sql)) {
    $items = $result;
} else {
    echo "Wrong Credentials";
}
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
<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <div id="shopify-section-collection-template" class="shopify-section">
            <section id="content">
                <div class="container">
                    <div class="shop-banner banner-adv line-scale zoom-image">
                        <a href="#" class="adv-thumb-link">
                            <img src="//cdn.shopify.com/s/files/1/2644/1682/t/27/assets/breadcrumb_image_1.jpg?9974154348750016803"
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
                    <div class="content-shop">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <aside class="sidebar-left sidebar-shop">
                                    <div class="widget widget-search">
                                        <form class="search-form">
                                            <input onblur="if (this.value=='') this.value = this.defaultValue"
                                                   onfocus="if (this.value==this.defaultValue) this.value = ''"
                                                   value="Search" type="text" name="q">
                                            <input type="submit" value="">
                                        </form>
                                    </div>
                                    <div class="widget widget-filter-price widget-container widget_product_categories filter-block filter-custom filter-tag">
                                        <h2 class="title18 title-widget font-bold">Price</h2>
                                        <div class="widget-content">
                                            <ul class="list-filter size-filter box-list-stype">
                                                <li class="li-price">
                                                    <input type="checkbox" value="0-100">
                                                    <a href="javascript:void(0)" title="Rs0 - Rs100"
                                                       class="">Rs0-Rs100</a>
                                                </li>
                                                <li class="li-price">
                                                    <input type="checkbox" value="100-200">
                                                    <a href="javascript:void(0)" title="Rs100 - Rs200"
                                                       class="">Rs100 - Rs200</a>
                                                </li>
                                                <li class="li-price">
                                                    <input type="checkbox" value="200-300">
                                                    <a href="javascript:void(0)" title="$200-$300"
                                                       class="">Rs200 - Rs300</a>
                                                </li>
                                                <li class="li-price">
                                                    <input type="checkbox" value="0-100">
                                                    <a href="javascript:void(0)" title="Above Rs300" class="">Above
                                                        Rs300</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget widget-filter-price widget-container widget_product_categories filter-block filter-custom filter-tag">
                                        <h2 class="title18 title-widget font-bold">Filter by Size</h2>
                                        <div class="widget-content">
                                            <ul class="list-filter size-filter">
                                                <li class="li-price">
                                                    <input type="checkbox" value="x">
                                                    <a href="javascript:void(0)" title="X">X</a>
                                                </li>
                                                <li class="li-price">
                                                    <input type="checkbox" value="m">
                                                    <a href="javascript:void(0)" title="M">M</a>
                                                </li>
                                                <li class="li-price">
                                                    <input type="checkbox" value="l">
                                                    <a href="javascript:void(0)" title="L">L</a>
                                                </li>
                                                <li class="li-price">
                                                    <input type="checkbox" value="xl">
                                                    <a href="javascript:void(0)" title="XL">XL</a>
                                                </li>
                                                <li class="li-price">
                                                    <input type="checkbox" value="2xl">
                                                    <a href="javascript:void(0)" title="2XL">2XL</a>
                                                </li>
                                                <li class="li-price">
                                                    <input type="checkbox" value="3xl">
                                                    <a href="javascript:void(0)" title="3XL">3XL</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget widget-filter-price widget-container widget_product_categories filter-block filter-custom filter-tag">
                                        <h2 class="title18 title-widget font-bold">Filter by Color</h2>
                                        <div class="widget-content">
                                            <ul class="list-filter size-filter">
                                                <li class="li-price ">
                                                    <input type="checkbox" value="red">
                                                    <a href="javascript:void(0)" class="">Red</a>
                                                </li>
                                                <li class="li-price ">
                                                    <input type="checkbox" value="blue">
                                                    <a href="javascript:void(0)" class="">Blue</a>
                                                </li>
                                                <li class="li-price ">
                                                    <input type="checkbox" value="white">
                                                    <a href="javascript:void(0)" class="">White</a>
                                                </li>
                                                <li class="li-price ">
                                                    <input type="checkbox" value="orange">
                                                    <a href="javascript:void(0)" class="">Orange</a>
                                                </li>
                                                <li class="li-price ">
                                                    <input type="checkbox" value="black">
                                                    <a href="javascript:void(0)" class="">Black</a>
                                                </li>
                                                <li class="li-price ">
                                                    <input type="checkbox" value="pupple">
                                                    <a href="javascript:void(0)" class="">Purple</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </aside>


                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="main-content-shop">

                                    <!-- /snippets/collection-sorting.liquid -->
                                    <div class="shop-pagibar clearfix">
                                        <p class="desc silver pull-left">
                                            Showing 1 -
                                            8
                                            of 8 products</p>
                                        <ul class="wrap-sort-view list-inline-block pull-right">
                                            <li>
                                                <div class="sort-bar order-by">
                                                    <span class="inline-block">Sort:</span>
                                                    <div class="select-box border radius6 inline-block ">
                                                        <select class="radius6 orderby" name="SortBy" id="SortBy">
                                                            <option value="manual">Sort: Featured</option>
                                                            <option value="best-selling">Sort: Best Selling</option>
                                                            <option value="title-ascending">Sort: Alphabetically, A-Z
                                                            </option>
                                                            <option value="title-descending">Sort: Alphabetically, Z-A
                                                            </option>
                                                            <option value="price-ascending">Sort: Price, low to high
                                                            </option>
                                                            <option value="price-descending">Sort: Price, high to low
                                                            </option>
                                                            <option value="created-descending">Sort: Date, new to old
                                                            </option>
                                                            <option value="created-ascending">Sort: Date, old to new
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="view-bar">
                                                    <a class="btn-grid grid-view active" href="#"></a>
                                                    <a class="btn-list list-view" href="#"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <script>
                                        /*============================================================================
                                          Inline JS because collection liquid object is only available
                                          on collection pages and not external JS files
                                        ==============================================================================*/
                                        Shopify.queryParams = {};
                                        if (location.search.length) {
                                            for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                                                aKeyValue = aCouples[i].split('=');
                                                if (aKeyValue.length > 1) {
                                                    Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                                                }
                                            }
                                        }

                                        $(function () {
                                            $('#SortBy')
                                                .val('best-selling')
                                                .bind('change', function () {
                                                        Shopify.queryParams.sort_by = jQuery(this).val();
                                                        location.search = jQuery.param(Shopify.queryParams);
                                                    }
                                                );
                                            $('#Showby')
                                                .val('10')
                                                .bind('change', function () {
                                                        Shopify.queryParams.view = jQuery(this).val();
                                                        location.search = jQuery.param(Shopify.queryParams);
                                                    }
                                                );
                                        });
                                    </script>

                                    <div class="grid--uniform">
                                        <div id="tabs-grid" class="product-grid-view ">
                                            <div class="row">

                                                <?php
                                                $output = "";
                                                foreach ($items as $item) {
                                                    $output .= '<div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="item-product item-product-grid text-center">
                                                        <div class="product-thumb">

                                                            <a href="#"
                                                               class="product-thumb-link rotate-thumb">
                                                                <img src="/theme/assets/images/'.$item['images'].'"
                                                                     >
                                                                <img src="/theme/assets/images/'.$item['images'].'"
                                                                     >
                                                            </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a
                                                                        href="#">'.$item['name'].'</a></h3>
                                                            <div class="product-price">
                                                                <ins class="color"><span>
                                                                <span class="money" data-currency="INR">Rs. '.$item['cost'].'</span></span>
                                                                </ins>
                                                            </div>
                                                            <div class="product-rate">
													 <span class="spr-badge" id="spr_badge_590739341354"
                                                           data-rating="0.0"><span
                                                                 class="spr-starrating spr-badge-starrating"><i
                                                                     class="spr-icon spr-icon-star" style="color: goldenrod;"></i><i
                                                                     class="spr-icon spr-icon-star" style="color: goldenrod;"></i><i
                                                                     class="spr-icon spr-icon-star" style="color: goldenrod;"></i><i
                                                                     class="spr-icon spr-icon-star-empty"></i><i
                                                                     class="spr-icon spr-icon-star-empty"></i></span><span
                                                                 class="spr-badge-caption">No reviews</span>
</span>

                                                            </div>
                                                            <div class="product-extra-link">


                                                                <a href="/account/login" class="wishlist-link"><i
                                                                            class="fa fa-heart-o"
                                                                            aria-hidden="true"></i><span>Wishlist</span></a>


                                                                <form method="post" action="/cart/add">
                                                                    <input type="hidden" name="id"
                                                                           value="7948557615146">
                                                                    <button type="submit" name="add"
                                                                            id="AddToCart590739341354"
                                                                            class="addcart-link add-to-cart-button enj-add-to-cart-btn"
                                                                            title="Add to Cart">
                                                                        Add to Cart
                                                                    </button>
                                                                </form>


                                                                <a href="javascript:void(0)" data-id="fresh-meal-kit-1"
                                                                   class="compare-link quick-view engoj-btn-quickview"><i
                                                                            class="fa fa-search" aria-hidden="true"></i><span>Quick view</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
                                                }
                                                echo $output;
                                                ?>

                                            </div>
                                        </div>
                                        <div id="tabs-list" class="product-list-view " style="display:none;">

                                        <?php
                                        $output = "";
                                        foreach ($items as $item) {
                                            $output .= '
                                            <div class="item-product item-product-list">

                                                <div class="row">
                                                    <div class="col-md-4 col-sm-5 col-xs-5">
                                                        <div class="product-thumb">

                                                            <a href="#"
                                                               class="product-thumb-link rotate-thumb">
                                                                <img src="/theme/assets/images/' . $item['images'] . '"
                                                                     >


                                                                <img src="/theme/assets/images/' . $item['images'] . '"
                                                                     >


                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-7 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="product-title"><a
                                                                        href="#">' . $item['name'] . '</a></h3>
                                                            <div class="product-price">
                                                                <ins class="color"><span>
                                                                <span class="money"
                                                                 data-currency="INR">Rs. ' . $item['cost'] . '</span></span>
                                                                </ins>


                                                            </div>
                                                            <div class="product-rate">
													<span class="spr-badge" id="spr_badge_590739341354"
                                                          data-rating="0.0"><span
                                                                class="spr-starrating spr-badge-starrating"><i
                                                                    class="spr-icon spr-icon-star" style="color: goldenrod;"></i><i
                                                                    class="spr-icon spr-icon-star" style="color: goldenrod;"></i><i
                                                                    class="spr-icon spr-icon-star" style="color: goldenrod;"></i><i
                                                                    class="spr-icon spr-icon-star-empty"></i><i
                                                                    class="spr-icon spr-icon-star-empty"></i></span><span
                                                                class="spr-badge-caption">No reviews</span>
</span>

                                                            </div>
                                                            <div class="desc">' . $item['description'] . '
                                                            </div>
                                                            <div class="product-extra-link">


                                                                <a href="/account/login" class="wishlist-link"><i
                                                                            class="fa fa-heart-o"
                                                                            aria-hidden="true"></i><span>wishlist</span></a>


                                                                <form method="post" action="/cart/add">
                                                                    <input type="hidden" name="id"
                                                                           value="7948557615146">
                                                                    <button type="submit" name="add"
                                                                            id="AddToCart590739341354"
                                                                            class="addcart-link add-to-cart-button enj-add-to-cart-btn"
                                                                            title="Add to Cart">
                                                                        Add to Cart
                                                                    </button>
                                                                </form>


                                                                <a href="javascript:void(0)" data-id="fresh-meal-kit-1"
                                                                   class="compare-link quick-view engoj-btn-quickview"><i
                                                                            class="fa fa-search" aria-hidden="true"></i><span>Quick view</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                            echo $output;
                                            ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Content Shop -->
                </div>
            </section>


        </div>

    </main>
</div>

<?php include("theme/include/footer.php");
echo get_script(); ?>

</body>
</html>