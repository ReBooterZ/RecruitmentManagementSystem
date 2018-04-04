<?php
/**
 * Created by PhpStorm.
 * User: chitra.p
 * Date: 4/3/2018
 * Time: 8:32 PM
 */

echo "<!DOCTYPE html>
<!-- saved from url=(0052)https://codeboxr.net/themedemo/coinz/html/index.html -->
<html class=\" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths\" lang=\"en\" style=\"\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Farmer's Market Manager</title>

    <meta name=\"description\" content=\"simple description for your site\">
<meta name=\"keywords\" content=\"keyword1, keyword2\">
<meta name=\"author\" content=\"recruitz\">

<!-- twitter card starts from here, if you don't need remove this section -->
<meta name=\"twitter:card\" content=\"summary\">
<meta name=\"twitter:site\" content=\"@yourtwitterusername\">
<meta name=\"twitter:creator\" content=\"@yourtwitterusername\">
<meta name=\"twitter:url\" content=\"http://yourdomain.com\">
<meta name=\"twitter:title\" content=\"Your home page title, max 140 char\"> <!-- maximum 140 char -->
<meta name=\"twitter:description\" content=\"Your site description, maximum 140 char \"> <!-- maximum 140 char -->
<meta name=\"twitter:image\" content=\"assets/img/twittercardimg/twittercard-144-144.png\">  <!-- when you post this page url in twitter , this image will be shown -->
<!-- twitter card ends here -->

<!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
<meta property=\"og:title\" content=\"Your home page title\">
<meta property=\"og:url\" content=\"http://your domain here.com\">
<meta property=\"og:locale\" content=\"en_US\">
<meta property=\"og:site_name\" content=\"Your site name here\">
<!--meta property=\"fb:admins\" content=\"\" /-->  <!-- use this if you have  -->
<meta property=\"og:type\" content=\"website\"> <!-- 'article' for single page  -->
<meta property=\"og:image\" content=\"assets/img/opengraph/fbphoto-476-476.png\"> <!-- when you post this page url in facebook , this image will be shown -->
<!-- facebook open graph ends here -->

<!-- desktop bookmark -->
<meta name=\"msapplication-TileColor\" content=\"#ffffff\">
<meta name=\"msapplication-TileImage\" content=\"assets/img/favicon/ms-icon-144x144.png\">
<meta name=\"theme-color\" content=\"#ffffff\">

<!-- icons & favicons -->
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./style/image/favicon.ico\">  <!-- this icon shows in browser toolbar -->
<link rel=\"icon\" type=\"image/x-icon\" href=\"./style/image/favicon.ico\"> <!-- this icon shows in browser toolbar -->
<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/apple-icon-57x57.png\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/apple-icon-60x60.png\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/apple-icon-72x72.png\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/apple-icon-76x76.png\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/apple-icon-114x114.png\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/apple-icon-120x120.png\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/apple-icon-144x144.png\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/apple-icon-152x152.png\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/apple-icon-180x180.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/android-icon-192x192.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/favicon-32x32.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/favicon-96x96.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/favicon-16x16.png\">
<link rel=\"manifest\" href=\"https://codeboxr.net/themedemo/coinz/html/assets/img/favicon/manifest.json\">

    <!--[if lt IE 9]>
<script type='text/javascript' src='assets/vendor/css3-mediaqueries.min.js?ver=1.0'></script>
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='assets/vendor/html5shiv.min.js?ver=3.7'></script>
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='assets/vendor/html5shiv-printshiv.min.js?ver=3.7'></script>
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='assets/vendor/respond.min.js?ver=1.4.2'></script>
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='assets/vendor/respond.matchmedia.addListener.min.js?ver=1.4.2'></script>
<![endif]-->

<!-- BOOTSTRAP CSS -->
<link rel=\"stylesheet\" href=\"./style/css/bootstrap.min.css\">

<!-- FONT AWESOME CSS -->
<link rel=\"stylesheet\" href=\"./style/css/font-awesome.min.css\">

<!-- Flaticon CSS -->
<link rel=\"stylesheet\" href=\"./style/css/flaticon.css\">

<!-- GOOGLE FONT -->
<link href=\"./css\" rel=\"stylesheet\">

<!--owl-->
<link rel=\"stylesheet\" href=\"./style/css/owl.carousel.min.css\" media=\"all\">
<link rel=\"stylesheet\" href=\"./style/css/owl.theme.default.min.css\" media=\"all\">

<!-- Bootstrap Select CSS -->
<link rel=\"stylesheet\" href=\"./style/css/bootstrap-select.min.css\">

<!-- MODERNIZER JS -->
<script src=\"./style/js/modernizr-2.8.3.min.js\"></script>


    <!-- MASTER  STYLESHEET  -->
    <link id=\"cbx-style\" data-layout=\"1\" rel=\"stylesheet\" href=\"./style/css/style-default.css\" media=\"all\">



<style type=\"text/css\">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><script type=\"text/javascript\" charset=\"UTF-8\" src=\"./style/js/common.js\"></script><script type=\"text/javascript\" charset=\"UTF-8\" src=\"./style/js/util.js\"></script><script type=\"text/javascript\" charset=\"UTF-8\" src=\"./style/js/stats.js\"></script></head>
<body>

<!--[if lt IE 7]>
<p class=\"browsehappy\">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

<div class=\"cbx-container\">
    <!-- SITE CONTENT -->

    <div id=\"cbx-header\" class=\"cbx-header-wrapper\">
    <nav class=\"navbar\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
                    Menu
                </button>
                <div class=\"navbar-brand\">
                    <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html\">
                        <img src=\"./style/image/logo(1).png\" alt=\"recruitz\" class=\"img-responsive\">
                    </a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#banner\" class=\"gotome\">Home</a></li>
                    <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#converter\" class=\"gotome\">Converter</a></li>
                    <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#team\" class=\"gotome\">Team</a></li>
                    <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#pricing\" class=\"gotome\">Pricing</a></li>
                    <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#review\" class=\"gotome\">Review</a></li>
                    <li class=\"dropdown\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">Pages</a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"dropdown\">
                                <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">Blog Pages</a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"https://codeboxr.net/themedemo/coinz/html/blog.html\">Archive Blog</a>
                                    </li>
                                    <li>
                                        <a href=\"https://codeboxr.net/themedemo/coinz/html/single-blog.html\">Single Blog</a>
                                    </li>
                                    <li>
                                        <a href=\"https://codeboxr.net/themedemo/coinz/html/single-blog-sidebar.html\">Single Blog with Sidebar</a>
                                    </li>
                                    <li>
                                        <a href=\"https://codeboxr.net/themedemo/coinz/html/single-blog-left-sidebar.html\">Single Blog with Left Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"https://codeboxr.net/themedemo/coinz/html/pricing.html\">Pricing</a>
                            </li>
                            <li>
                                <a href=\"https://codeboxr.net/themedemo/coinz/html/team.html\">Team</a>
                            </li>
                            <li>
                                <a href=\"https://codeboxr.net/themedemo/coinz/html/contact.html\">Contact Us</a>
                            </li>
                            <li>
                                <a href=\"https://codeboxr.net/themedemo/coinz/html/typography.html\">Typography</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#contact\" class=\"gotome\">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>

    <div id=\"banner\" class=\"cbx-banner-wrapper\" style=\"min-height: 796px;\">
    <div class=\"cbx-banner-inner-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"banner-content\">
                        <h2>Bank in <span class=\"banner-blue\">Your Pocket</span><br><span class=\"banner-brand\">CoinZ</span> is Better<br>solution</h2>
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"btn btn-default about-btn\">Buy Some Coin</a>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"banner-img\">
                        <img src=\"./style/image/banner-coin.png\" alt=\"Coin\" class=\"img-responsive\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class=\"cbx-about-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3><span>Here Is Demo</span>Title Of coinz</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem for our is
                    accusantium doloremque laudantium. Neque porro quisquam est, qui
                    dolorem ipsum quia dolor sit amet teaser your is nope luptatem.</p>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem discount
                    accusantium doloremque laudantium. Neque porro quisquam est, qui
                    dolorem ipsum quia dolor sit amet luptatem.</p>
                <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"btn btn-default about-btn\">Know More</a>
            </div>
            <div class=\"col-md-6\">
                <div class=\"about-image-layer-wrapper\">
                    <div class=\"layer-one\">
                        <img src=\"./style/image/graph.png\" alt=\"Layer One\" class=\"img-responsive\">
                    </div>
                    <div class=\"layer-two\">
                        <img src=\"./style/image/chart.png\" alt=\"Layer One\" class=\"img-responsive\">
                    </div>
                    <div class=\"layer-three\">
                        <img src=\"./style/image/bitcoin.png\" alt=\"Layer One\" class=\"img-responsive\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id=\"converter\" class=\"cbx-converter-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <div class=\"converter-content\">
                    <h5>
                        <span>Convert Your</span> Money to CoinZ
                    </h5>
                    <p>We Accept:</p>
                    <ul class=\"list-unstyled payment-gateways\">
                        <li>
                            <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">
                                <img src=\"./style/image/american_express.png\" alt=\"\" class=\"img-responsive\">
                            </a>
                        </li>
                        <li>
                            <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">
                                <img src=\"./style/image/paypal.png\" alt=\"\" class=\"img-responsive\">
                            </a>
                        </li>
                        <li>
                            <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">
                                <img src=\"./style/image/marter_card.png\" alt=\"\" class=\"img-responsive\">
                            </a>
                        </li>
                        <li>
                            <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">
                                <img src=\"./style/image/visa.png\" alt=\"\" class=\"img-responsive\">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-7\">
                <div class=\"converter-currency-wrapper\">
                    <h5>Currency Converter</h5>

                    <div class=\"converter-field-wrapper\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group dc_select_wrapper\">
                                    <div class=\"btn-group bootstrap-select\"><button type=\"button\" class=\"btn dropdown-toggle btn-default\" data-toggle=\"dropdown\" role=\"button\" data-id=\"digital-currency\" title=\"Bitcoin\"><span class=\"filter-option pull-left\">Bitcoin</span>&nbsp;<span class=\"bs-caret\"><span class=\"caret\"></span></span></button><div class=\"dropdown-menu open\" role=\"combobox\"><ul class=\"dropdown-menu inner\" role=\"listbox\" aria-expanded=\"false\"><li data-original-index=\"0\" class=\"selected\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"true\"><span class=\"text\">Bitcoin</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"1\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Ethereum</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"2\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Ripple</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"3\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Bitcoin Cash</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"4\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Cardano</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"5\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Litecoin</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"6\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">NEM</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"7\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">NEO</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"8\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Stellar</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"9\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">IOTA</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"10\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Dash</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"11\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Monero</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"12\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Qtum</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"13\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Ethereum Classic</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"14\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Lisk</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"15\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">RaiBlocks</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"16\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">VeChain</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"17\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Verge</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"18\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Zcash</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li></ul></div><select id=\"digital-currency\" class=\"selectpicker\" tabindex=\"-98\">
                                        <option value=\"BTC\" selected=\"\">Bitcoin</option>
                                        <option value=\"ETC\">Ethereum</option>
                                        <option value=\"XRP\">Ripple</option>
                                        <option value=\"BCH\">Bitcoin Cash</option>
                                        <option value=\"ADA\">Cardano</option>
                                        <option value=\"LTC\">Litecoin</option>
                                        <option value=\"XEM\">NEM</option>
                                        <option value=\"ANS\">NEO</option>
                                        <option value=\"XLM\">Stellar</option>
                                        <option value=\"IOT\">IOTA</option>
                                        <option value=\"DASH\">Dash</option>
                                        <option value=\"XMR\">Monero</option>
                                        <option value=\"QTUM\">Qtum</option>
                                        <option value=\"ETH\">Ethereum Classic</option>
                                        <option value=\"LSK\">Lisk</option>
                                        <option value=\"XRB\">RaiBlocks</option>
                                        <option value=\"VEN\">VeChain</option>
                                        <option value=\"XVG\">Verge</option>
                                        <option value=\"ZEC\">Zcash</option>
                                    </select></div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"form-group pc_select_wrapper\">
                                    <div class=\"btn-group bootstrap-select\"><button type=\"button\" class=\"btn dropdown-toggle btn-default\" data-toggle=\"dropdown\" role=\"button\" data-id=\"physical-currency\" title=\"US Dollar\"><span class=\"filter-option pull-left\">US Dollar</span>&nbsp;<span class=\"bs-caret\"><span class=\"caret\"></span></span></button><div class=\"dropdown-menu open\" role=\"combobox\"><ul class=\"dropdown-menu inner\" role=\"listbox\" aria-expanded=\"false\"><li data-original-index=\"0\" class=\"selected\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"true\"><span class=\"text\">US Dollar</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"1\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Euro</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"2\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Japanese Yen</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"3\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">British Pound</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"4\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Swiss Franc</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"5\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Canadian Dollar</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"6\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Australian Dollar</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"7\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Hong Kong Dollar</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"8\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Bangladeshi Taka</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li><li data-original-index=\"9\"><a tabindex=\"0\" class=\"\" data-tokens=\"null\" role=\"option\" aria-disabled=\"false\" aria-selected=\"false\"><span class=\"text\">Indian Rupee</span><span class=\"glyphicon glyphicon-ok check-mark\"></span></a></li></ul></div><select id=\"physical-currency\" class=\"selectpicker\" tabindex=\"-98\">
                                        <option value=\"USD\" selected=\"\">US Dollar</option>
                                        <option value=\"EUR\">Euro</option>
                                        <option value=\"JPY\">Japanese Yen</option>
                                        <option value=\"GBP\">British Pound</option>
                                        <option value=\"CHF\">Swiss Franc</option>
                                        <option value=\"CAD\">Canadian Dollar</option>
                                        <option value=\"AUD\">Australian Dollar</option>
                                        <option value=\"HKD\">Hong Kong Dollar</option>
                                        <option value=\"BDT\">Bangladeshi Taka</option>
                                        <option value=\"INR\">Indian Rupee</option>
                                    </select></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <input id=\"dc-amount\" min=\"1\" step=\".1\" value=\"1\" type=\"number\" class=\"form-control  pull-right\">
                            </div>
                            <div class=\"col-xs-6\">
                                <input id=\"pc-amount\" type=\"text\" class=\"form-control  pull-left\">
                            </div>
                        </div>
                    </div>

                    <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"btn btn-default converter-btn\">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class=\"cbx-statistics-review-wrapper\">
    <div class=\"container\">
        <div class=\"col-md-6\">
            <div class=\"statistics-review-content\">
                <h5><span>Upcoming</span> Digital Curency</h5>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem for our is
                    accusantium doloremque laudantium. Neque porro quisquam est, qui
                    dolorem ipsum quia dolor sit amet teaser your is nope luptatem.</p>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem discount
                    accusantium doloremque laudantium. Neque porro quisquam est, qui
                    dolorem ipsum quia dolor sit amet luptatem.</p>
                <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"btn btn-default about-btn\">Know More</a>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"statistics-review-chart-wrapper\"><div class=\"chartjs-size-monitor\" style=\"position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
                <h6><i class=\"fa fa-bar-chart\"></i>Global Views</h6>
                <canvas id=\"statistics-review-chart\" width=\"480\" height=\"240\" class=\"chartjs-render-monitor\" style=\"display: block; width: 480px; height: 240px;\"></canvas>
            </div>
        </div>
    </div>
</div>

    <div class=\"cbx-feature-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"feature-item\">
                    <div class=\"thmub\">
                        <i class=\"flaticon-handshake\"></i>
                    </div>
                    <h6>Best Deal</h6>
                    <p>Here we provide section dummy paragraph for this area, if you want to kow more please </p>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"feature-item\">
                    <div class=\"thmub\">
                        <i class=\"flaticon-bar-chart\"></i>
                    </div>
                    <h6>Profiteble</h6>
                    <p>Here we provide section dummy paragraph for this area, if you want to kow more please </p>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"feature-item\">
                    <div class=\"thmub\">
                        <i class=\"flaticon-visibility\"></i>
                    </div>
                    <h6>No Hiden Charge</h6>
                    <p>Here we provide section dummy paragraph for this area, if you want to kow more please </p>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"feature-item\">
                    <div class=\"thmub\">
                        <i class=\"flaticon-rotate\"></i>
                    </div>
                    <h6>Latest Update</h6>
                    <p>Here we provide section dummy paragraph for this area, if you want to kow more please </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class=\"cbx-call-to-action-wrapper\">
    <div class=\"cbx-call-to-action-inner-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7 col-md-offset-5\">
                    <div class=\"call-to-action-content\">
                        <h6>Download Our App</h6>
                        <div class=\"call-to-action-button\">

                            <ul class=\"list-unstyled\">

                                <li class=\"microsoft\">
                                    <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">
                                        <i class=\"fa fa-windows\"></i>
                                        <div class=\"cta-btn-content\">
                                            Download <span>From Microsoft</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"apple-store\">
                                    <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">
                                        <i class=\"fa fa-apple\"></i>
                                        <div class=\"cta-btn-content\">
                                            Download <span>From Apple Store</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"google-play\">
                                    <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">
                                        <i class=\"fa fa-android\"></i>
                                        <div class=\"cta-btn-content\">
                                            Download <span>From Playstore</span>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class=\"cbx-currency-rate-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"currency-rate-item rate1\">
                    <div class=\"thmub\">
                        <i class=\"fa fa-line-chart\"></i>
                    </div>
                    <h6>100/0.854<span>Dollar/BitCoin</span></h6>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"currency-rate-item rate2\">
                    <div class=\"thmub\">
                        <i class=\"fa fa-line-chart\"></i>
                    </div>
                    <h6>100/0.854<span>Dollar/BitCoin</span></h6>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"currency-rate-item rate3\">
                    <div class=\"thmub\">
                        <i class=\"fa fa-line-chart\"></i>
                    </div>
                    <h6>100/0.854<span>Dollar/BitCoin</span></h6>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"currency-rate-item rate4\">
                    <div class=\"thmub\">
                        <i class=\"fa fa-line-chart\"></i>
                    </div>
                    <h6>100/0.854<span>Dollar/BitCoin</span></h6>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"currency-rate-item rate5\">
                    <div class=\"thmub\">
                        <i class=\"fa fa-line-chart\"></i>
                    </div>
                    <h6>100/0.854<span>Dollar/BitCoin</span></h6>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"currency-rate-item rate6\">
                    <div class=\"thmub\">
                        <i class=\"fa fa-line-chart\"></i>
                    </div>
                    <h6>100/0.854<span>Dollar/BitCoin</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id=\"team\" class=\"cbx-team-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-title\">
                    <h6>Our Awesome Team</h6>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"team-item\">
                    <div class=\"team-thumb\">
                        <img src=\"./style/image/team-1.png\" alt=\"\" class=\"img-responsive\">
                    </div>
                    <div class=\"team-content\">
                        <h5>Clifford Linden</h5>
                        <h6>Web Developer</h6>
                        <p>Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                    <div class=\"team-social\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-vimeo\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"team-item\">
                    <div class=\"team-thumb\">
                        <img src=\"./style/image/team-2.png\" alt=\"\" class=\"img-responsive\">
                    </div>
                    <div class=\"team-content\">
                        <h5>Cecila Lininger</h5>
                        <h6>Android Developer</h6>
                        <p>Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                    <div class=\"team-social\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-vimeo\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"team-item\">
                    <div class=\"team-thumb\">
                        <img src=\"./style/image/team-3.png\" alt=\"\" class=\"img-responsive\">
                    </div>
                    <div class=\"team-content\">
                        <h5>Tifany Rech</h5>
                        <h6>UI &amp; UX Designer</h6>
                        <p>Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                    <div class=\"team-social\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-vimeo\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"team-item\">
                    <div class=\"team-thumb\">
                        <img src=\"./style/image/team-4.png\" alt=\"\" class=\"img-responsive\">
                    </div>
                    <div class=\"team-content\">
                        <h5>Celestina Hood</h5>
                        <h6>Business Developer</h6>
                        <p>Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                    <div class=\"team-social\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-vimeo\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id=\"pricing\" class=\"cbx-pricing-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-title\">
                    <h6>Pricing Plan</h6>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"pricing-item\">
                    <div class=\"pricing-price\">
                        <h6><sup>$</sup>24</h6>
                    </div>
                    <div class=\"pricing-content\">
                        <h5>Pro</h5>
                        <p>Space and light and order. Those are the things that men.</p>
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"btn btn-default converter-btn\">Purchase</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"pricing-item\">
                    <div class=\"recommanded\">
                        HOT
                    </div>
                    <div class=\"pricing-price\">
                        <h6><sup>$</sup>24</h6>
                    </div>
                    <div class=\"pricing-content\">
                        <h5>Pro</h5>
                        <p>Space and light and order. Those are the things that men.</p>
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"btn btn-default converter-btn\">Purchase</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"pricing-item\">
                    <div class=\"pricing-price\">
                        <h6><sup>$</sup>24</h6>
                    </div>
                    <div class=\"pricing-content\">
                        <h5>Pro</h5>
                        <p>Space and light and order. Those are the things that men.</p>
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"btn btn-default converter-btn\">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id=\"review\" class=\"cbx-review-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-title\">
                    <h6>Recent Review</h6>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"owl-carousel owl-theme owl-loaded owl-drag\" id=\"review-slider\">
                    
                    
                    
                    
                    
                <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transition: 0.25s; width: 4254px; transform: translate3d(-1160px, 0px, 0px);\"><div class=\"owl-item cloned\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Vitae suscipit tellus mauris a. Morbi leo urna molestie at elementum. Semper viverra nam libero justo. </p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-1.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item cloned\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Bibendum at varius vel pharetra vel turpis nunc eget lorem. In aliquam sem fringilla ut morbi tincidunt augue. Metus dictum at tempor commodo ullamcorper a.</p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-4.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item cloned\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Tortor vitae purus faucibus ornare suspendisse sed nisi. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. </p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-3.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item active\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Generate Lorem Ipsum placeholder text. Select the number of characters, words, sentences or paragraphs, and hit generate!</p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-3.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item active center\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-2.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item active\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Vitae suscipit tellus mauris a. Morbi leo urna molestie at elementum. Semper viverra nam libero justo. </p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-1.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Bibendum at varius vel pharetra vel turpis nunc eget lorem. In aliquam sem fringilla ut morbi tincidunt augue. Metus dictum at tempor commodo ullamcorper a.</p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-4.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Tortor vitae purus faucibus ornare suspendisse sed nisi. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. </p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-3.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item cloned\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Generate Lorem Ipsum placeholder text. Select the number of characters, words, sentences or paragraphs, and hit generate!</p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-3.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item cloned\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-2.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div><div class=\"owl-item cloned\" style=\"width: 366.667px; margin-right: 20px;\"><div class=\"item\">
                        <div class=\"review-item\">
                            <div class=\"review-content\">
                                <p>Vitae suscipit tellus mauris a. Morbi leo urna molestie at elementum. Semper viverra nam libero justo. </p>
                            </div>
                            <div class=\"review-info-wrapper\">
                                <div class=\"review-thumb\">
                                    <img src=\"./style/image/team-1.png\" alt=\"\" class=\"img-responsive\">
                                </div>
                                <div class=\"review-author\">
                                    <h6>Ronny Riemann</h6>
                                    <p>Art Director, Designer</p>
                                </div>
                            </div>
                        </div>
                    </div></div></div></div><div class=\"owl-nav\"><div class=\"owl-prev\"><i class=\"fa fa-chevron-left\"></i></div><div class=\"owl-next\"><i class=\"fa fa-chevron-right\"></i></div></div><div class=\"owl-dots disabled\"></div></div>
            </div>
        </div>
    </div>
</div>

    <div class=\"cbx-recent-blog-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-title\">
                    <h6>Recent blog</h6>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"post-item post-layout-1\" style=\"background-image: url(&#39;assets/img/blog/blog1.png&#39;);\">
                    <div class=\"post-content\">
                        <div class=\"post-meta\">
                            <ul class=\"list-unstyled\">
                                <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Technology</a></li>
                                <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Startups</a></li>
                            </ul>
                        </div>
                        <h5><a href=\"https://codeboxr.net/themedemo/coinz/html/single-blog-sidebar.html\">Best startups of 2016</a></h5>
                        <p>The Lord of the Rings is an epic high-fantasy novel written by English author J. R. R. Tolkien. The story began as a sequel to Tolkien's 1937 fantasy novel The Hobbit, but eventually developed into a much larger work.</p>
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/single-blog-sidebar.html\" class=\"btn btn-default about-btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
                <div class=\"post-item post-layout-2\" style=\"background-image: url(&#39;assets/img/blog/blog3.png&#39;);\">
                    <div class=\"post-content\">
                        <div class=\"post-meta\">
                            <ul class=\"list-unstyled\">
                                <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Technology</a></li>
                                <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Startups</a></li>
                            </ul>
                        </div>
                        <h5><a href=\"https://codeboxr.net/themedemo/coinz/html/single-blog-sidebar.html\">Best startups of 2016</a></h5>
                        <p>The Lord of the Rings is an epic high-fantasy novel written by English author J. R. R. Tolkien. The story began as a sequel to Tolkien's 1937 fantasy novel The Hobbit, but eventually developed into a much larger work.</p>
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/single-blog-sidebar.html\" class=\"btn btn-default about-btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
                <div class=\"post-item post-layout-1\" style=\"background-image: url(&#39;assets/img/blog/blog2.png&#39;);\">
                    <div class=\"post-content\">
                        <div class=\"post-meta\">
                            <ul class=\"list-unstyled\">
                                <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Technology</a></li>
                                <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Startups</a></li>
                            </ul>
                        </div>
                        <h5><a href=\"https://codeboxr.net/themedemo/coinz/html/single-blog-sidebar.html\">Best startups of 2016</a></h5>
                        <p>The Lord of the Rings is an epic high-fantasy novel written by English author J. R. R. Tolkien. The story began as a sequel to Tolkien's 1937 fantasy novel The Hobbit, but eventually developed into a much larger work.</p>
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/single-blog-sidebar.html\" class=\"btn btn-default about-btn\">Read More <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class=\"cbx-client-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"col-md-12\">
            <div class=\"owl-carousel owl-theme owl-loaded owl-drag\" id=\"client-slider\">
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

            <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transform: translate3d(-3840px, 0px, 0px); transition: 0.25s; width: 9216px;\"><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-17.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-18.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-19.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-20.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-21.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-22.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-23.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-24.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-25.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-8.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-9.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-10.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-11.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-12.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-13.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item active\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-14.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item active\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-15.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item active\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-16.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item active\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-17.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item active\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-18.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item active\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-19.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-20.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-21.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-22.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-23.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-24.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-25.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-8.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-9.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-10.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-11.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-12.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-13.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-14.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-15.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div><div class=\"owl-item cloned\" style=\"width: 226px; margin-right: 30px;\"><div class=\"item\">
                    <div class=\"client-thumb\">
                        <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><img src=\"./company-16.jpg\" alt=\"Client\" class=\"img-responsive\"></a>
                    </div>
                </div></div></div></div><div class=\"owl-nav\"><div class=\"owl-prev\"><i class=\"fa fa-chevron-left\"></i></div><div class=\"owl-next\"><i class=\"fa fa-chevron-right\"></i></div></div><div class=\"owl-dots disabled\"></div></div>
        </div>
    </div>
</div>

    <div id=\"contact\" class=\"cbx-contact-wrapper\">
    <div class=\"container\">
        <div class=\"col-md-6 col-md-offset-6\">
            <div class=\"contact-title\">
                <h6>Contact Us</h6>
                <p>If you want to know more about us or have any quary please send a masege </p>
            </div>
            <div class=\"post-comment-form-group\">
                <form action=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" method=\"post\" id=\"cbx-contact-form\" novalidate=\"novalidate\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <input type=\"text\" name=\"cbxname\" placeholder=\"Name*\" class=\"form-control\" required=\"\" aria-required=\"true\">
                        </div>
                        <div class=\"col-md-6\">
                            <input type=\"email\" name=\"cbxemail\" placeholder=\"Email*\" class=\"form-control\" required=\"\" aria-required=\"true\">
                        </div>

                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <input type=\"text\" name=\"subject\" placeholder=\"Subject\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <textarea cols=\"30\" name=\"cbxmessage\" rows=\"6\" placeholder=\"Message*\" class=\"form-control\" required=\"\"></textarea>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <input type=\"submit\" value=\"Send Your Message\" class=\"btn btn-block converter-btn btn-lg\">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <div class=\"cbx-footer-top-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget widget-text\">
                    <h6>About US</h6>
                    <p> The Lord of the Rings is an epic high-fantasy novel written by English author J. R. R. Tolkien. The story began as a sequel.</p>
                    <div class=\"widget-social\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><i class=\"fa fa-vimeo\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget widget-listing\">
                    <h6>Services</h6>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">History</a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Approach</a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Partners</a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Email Services</a></li>
                            <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Careers</a></li>
                        </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget widget-about\">
                    <h6>Contact Address</h6>
                    <p>No 6, Kamatchi Amman Nagar, Managdu, Chennai</p>
                    <p><i class=\"fa fa-phone\"></i>9566150480</p>
                    <p><i class=\"fa fa-envelope\"></i>chitrakumar2130@gmail.com</p>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget widget-listing\">
                    <h6>Support</h6>

                    <ul class=\"list-unstyled\">
                        <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Appointment</a></li>
                        <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Events</a></li>
                        <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Portfolio</a></li>
                        <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Testimonials</a></li>
                        <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Typography</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"cbx-footer-bottom-wrapper\">
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"copyright\">
                <p>Copyright © 2018. <a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">ReBooterz</a> All Rights Reserved.</p>
            </div>
            <div class=\"footer-nav\">
                <ul class=\"list-unstyled\">
                    <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Terms of Use</a></li>
                    <li>|</li>
                    <li><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" title=\"Scroll To Top\" class=\"scrollToTop\" style=\"display: none;\">
    <img src=\"./top2.png\" alt=\"\" class=\"img-responsive\">
</a>


    <!-- //SITE CONTENT END -->

</div>


<!-- *** ADD YOUR SITE SCRIPT HERE *** -->

<!-- jQuery JS  -->
<script src=\"./style/js/jquery-3.2.1.min.js\"> </script>
<!--script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script-->
<!-- load if our contact form or email subscribe options is used -->

<!-- BOOTSTRAP JS  -->
<script src=\"./style/js/bootstrap.min.js\"> </script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type=\"text/javascript\" src=\"./js\"></script>

<!-- google map plugin -->
<script src=\"./style/js/jqcbxgooglemap.js\"></script>

<!--bootstrap-select-->
<script src=\"./style/js/bootstrap-select.min.js\"></script>

<!--owl carousel -->
<script src=\"./style/js/owl.carousel.min.js\"></script>

<!--validation-->
<script src=\"./style/js/jquery.validate.min.js\"></script>

<!--jquery-smooth-scrolling-->
<script src=\"./style/js/jquery.smooth-scroll.min.js\"></script>

<!-- chart js -->
<script src=\"./style/js/Chart.min.js\"></script>



<!-- coinz SCRIPT  -->
<script src=\"./style/js/theme.js\"></script>

<!-- CUSTOM SCRIPT  -->
<script src=\"./style/js/custom.js\"></script>
<!-- FOR DEMO ONLY-->

<!-- comment this below line in production -->
<script id=\"switcherhandle\" type=\"text/javascript\" src=\"./style/js/switcher.js\"></script>







<div class=\"switcher-loader\"><div class=\"cbx-switcher-area\"><div class=\"cbx-switcher-inner\"><a id=\"cbx-switcher-btn\" class=\"cbx-switcher-btn\" href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\"><span class=\"fa fa-cog fa-spin\" aria-hidden=\"true\"></span></a><div id=\"cbx-switcher-body\" class=\"cbx-switcher-body cbx-hide\"><span class=\"cbx-switcher-text text-center\"> Style Switcher</span><ul class=\"list-unstyled clearfix cbx-switcher-list\"><li class=\"cbx-list-default\"><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"cbx-switcher-clr-btn\" data-color-name=\"-default\"></a></li><li class=\"cbx-list-blue\"><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"cbx-switcher-clr-btn\" data-color-name=\"-blue\"></a></li><li class=\"cbx-list-navy\"><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"cbx-switcher-clr-btn\" data-color-name=\"-navy\"></a></li><li class=\"cbx-list-olive\"><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"cbx-switcher-clr-btn\" data-color-name=\"-olive\"></a></li><li class=\"cbx-list-orange\"><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"cbx-switcher-clr-btn\" data-color-name=\"-orange\"></a></li><li class=\"cbx-list-pink\"><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"cbx-switcher-clr-btn\" data-color-name=\"-pink\"></a></li><li class=\"cbx-list-red\"><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"cbx-switcher-clr-btn\" data-color-name=\"-red\"></a></li><li class=\"cbx-list-violet\"><a href=\"https://codeboxr.net/themedemo/coinz/html/index.html#\" class=\"cbx-switcher-clr-btn\" data-color-name=\"-violet\"></a></li></ul><select id=\"layoutswitch\" class=\"form-control\"><option value=\"index.html\">Style1</option><option value=\"index-2.html\">Style2</option></select></div></div></div></div></body></html>";

