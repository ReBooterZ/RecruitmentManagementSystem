<?php

function get_meta(){
    $output = '
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#7796A8">
    <link rel="canonical" href="http://uzhavarsandhai.com/">
    <link href="./theme/styles/Poppins.css" rel="stylesheet" type="text/css">
    <link href="./theme/styles/Pacifico.css" rel="stylesheet" type="text/css">
    <link href="./theme/styles/Poiret-One.css" rel="stylesheet" type="text/css">

    <!-- /snippets/social-meta-tags.liquid -->
    <meta property="og:site_name" content="Farmer\'s Market Manager">
    <meta property="og:url" content="http://uzhavarsandhai.com/">
    <meta property="og:title" content="Farmer\'s Market Manager">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Farmer\'s Market Manager">


    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Farmer\'s Market Manager">
    <meta name="twitter:description" content="Farmer\'s Market Manager">';
    return $output;
}
function get_styles() {
    $output = '
    <link href="../theme/styles/timber.scss.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/theme.scss.css" rel="stylesheet" type="text/css" media="all">

    <!--  css theme  -->


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/ionicons.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/owl.transitions.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/owl.theme.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/slick.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/hover.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/color.scss.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/theme.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/responsive.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/browser.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/custom-color.css" rel="stylesheet" type="text/css" media="all">

    <!--  end  -->
    <link href="../theme/styles/engo_plugins.css" rel="stylesheet" type="text/css" media="all">
    <link href="../theme/styles/engo_base.scss.css" rel="stylesheet" type="text/css" media="all">

    <style>
    .shopify-payment-button__button--hidden {
            visibility: hidden;
        }

        .shopify-payment-button__button {
            border-radius: 4px;
            border: none;
            box-shadow: 0 0 0 0 transparent;
            color: white;
            cursor: pointer;
            display: block;
            font-size: 1em;
            font-weight: 500;
            line-height: 1;
            text-align: center;
            width: 100%;
            transition: background 0.2s ease-in-out;
        }

        .shopify-payment-button__button[disabled] {
            opacity: 0.6;
            cursor: default;
        }

        .shopify-payment-button__button--unbranded {
            background-color: #1990c6;
            padding: 1em 2em;
        }

        .shopify-payment-button__button--unbranded:hover:not([disabled]) {
            background-color: #136f99;
        }

        .shopify-payment-button__more-options {
            background: transparent;
            border: 0 none;
            cursor: pointer;
            display: block;
            font-size: 1em;
            margin-top: 1em;
            text-align: center;
            width: 100%;
        }

        .shopify-payment-button__more-options:hover:not([disabled]) {
            text-decoration: underline;
        }

        .shopify-payment-button__more-options[disabled] {
            opacity: 0.6;
            cursor: default;
        }

        .shopify-payment-button__button--branded {
            display: flex;
            flex-direction: column;
            min-height: 44px;
            position: relative;
            z-index: 1;
        }

        .shopify-payment-button__button--branded .shopify-cleanslate {
            flex: 1 !important;
            display: flex !important;
            flex-direction: column !important;
        }
    </style>
    ';

    return $output;
}

function get_script() {
    $output = '
    
    <script type="text/javascript" async="" src="./Fruits - Responsive Shopify Theme_files/spr.js"></script><script type="text/javascript" async="" src="./Fruits - Responsive Shopify Theme_files/trekkie.storefront.min.js"></script><script id="shopify-features" type="application/json">{"accessToken":"d8773b55f90ebfd5b68c714d3cc4d5ef","betas":["smart-payment-buttons"],"domain":"fruit-demo.myshopify.com","shopId":26441682,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"}</script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = "fruit-demo.myshopify.com";
        Shopify.theme = {"name":"Fruit home 7 v2","id":28982411306,"theme_store_id":null,"role":"unpublished"};
        Shopify.theme.handle = "null";
        Shopify.theme.style = {"id":null,"handle":null};
    </script>
    <script>(function() {
            function asyncLoad() {
                var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=fruit-demo.myshopify.com"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement(\'script\');
                    s.type = \'text/javascript\';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName(\'script\')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            if(window.attachEvent) {
                window.attachEvent(\'onload\', asyncLoad);
            } else {
                window.addEventListener(\'load\', asyncLoad, false);
            }
        })();
    </script>
    <script id="__st">var __st={"a":26441682,"offset":-14400,"reqid":"40eaeeba-de78-487d-b8a6-a9326cc4865e","pageurl":"fruit-demo.myshopify.com\/","t":"prospect","u":"577a7ac3cdee","p":"home"};</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script>window.Shopify = window.Shopify || {};
        window.Shopify.Checkout = window.Shopify.Checkout || {};
        window.Shopify.Checkout.apiHost = "fruit-demo.myshopify.com";
        window.ShopifyPay = window.ShopifyPay || {};
        window.ShopifyPay.acceleratedFlowIncontext = false;
        window.ShopifyPay.apiHost = "pay.shopify.com";
        window.ShopifyPay.apiToken = "WXBFKzNjYnd1Z0hKaks5RDJwVGNlZ3RUODhoOStVYklqSVdOTWVwamt0Qm8weXZNclRkMzZMcjViRXROeHlVeS0tZXJGdFpsNHZxblJyQk5DbHhsckc4UT09--ee124a2fb2f2ff9c7d774adb409cfff0d7dc4f80";
        window.ShopifyPay.requestHost = "fruit-demo.myshopify.com"
        window.ShopifyPay.sheetStyleSheetUrl = "\/\/cdn.shopify.com\/s\/assets\/shared\/sheet\/main-c150bd783aa9b2c6b0c41ded3880c45a0848a9914354d4222628be6c924200a3.css";
    </script>
    <script>
        window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = \'USD\';
        var meta = {"page":{"pageType":"home"}};
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

        };
    </script>
    <script class="analytics">


        (function () {
            var customDocumentWrite = function(content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery(\'body\').append(content);
                }
            };

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                \'identify\',
                \'page\',
                \'ready\',
                \'track\',
                \'trackForm\',
                \'trackLink\'
            ];
            trekkie.factory = function(method) {
                return function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function(config) {
                trekkie.config = config;
                var script = document.createElement(\'script\');
                script.type = \'text/javascript\';
                script.onerror = function(e) {
                    (new Image()).src = \'//v.shopify.com/internal_errors/track?error=trekkie_load\';
                };
                script.async = true;
                script.src = \'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1\';
                var first = document.getElementsByTagName(\'script\')[0];
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load(
                {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":26441682,"isMerchantRequest":null,"themeId":28982411306,"themeCityHash":5211552294933235627}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1.0},"Session Attribution":{}}
            );

            var loaded = false;
            trekkie.ready(function() {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
                document.write = originalDocumentWrite;


                window.ShopifyAnalytics.lib.page(
                    null,
                    {"pageType":"home"}
                );


            });


            var eventsListenerScript = document.createElement(\'script\');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-f2c5800305098f0ebebdfa7d980c9abf56514c46d5305e97a7c476f7c9116163.js";
            document.getElementsByTagName(\'head\')[0].appendChild(eventsListenerScript);

        })();
    </script><script async="" src="./Fruits - Responsive Shopify Theme_files/shop_events_listener-f2c5800305098f0ebebdfa7d980c9abf56514c46d5305e97a7c476f7c9116163.js"></script>
    <script>document.addEventListener(\'DOMContentLoaded\', function() {
            const previewBarInjector = new Shopify.PreviewBarInjector({
                targetNode: document.body,
                iframeSrc: \'https://fruit-demo.myshopify.com/preview_bar\',
                height: 60,
                previewToken: \'e0quxsed14v7ze2z\',
                themeStoreId: \'\'
            });
            previewBarInjector.init();
        });
    </script>
    <script defer="defer" integrity="sha256-SkxrUNm9fV+2aTJ3qSX4L18pDqpYdDQu5LieSdTE9ZQ=" crossorigin="anonymous" src="./Fruits - Responsive Shopify Theme_files/express_buttons-4a4c6b50d9bd7d5fb6693277a925f82f5f290eaa5874342ee4b89e49d4c4f594.js"></script>
    <script defer="defer" integrity="sha256-2VwcaH5++f6tBn1FlAz0S70S91W72Fx5p4AyR2ay1zw=" crossorigin="anonymous" src="./Fruits - Responsive Shopify Theme_files/features-d95c1c687e7ef9fead067d45940cf44bbd12f755bbd85c79a780324766b2d73c.js"></script>
    <script defer="defer" integrity="sha256-l8B+D/Mor3AP07CIydXrEn+yhp4KCKmZD7jszNRvevo=" crossorigin="anonymous" src="./Fruits - Responsive Shopify Theme_files/preview_bar_injector-97c07e0ff328af700fd3b088c9d5eb127fb2869e0a08a9990fb8ecccd46f7afa.js"></script>

    <script src="./Fruits - Responsive Shopify Theme_files/jquery.min.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/modernizr.min.js" type="text/javascript"></script>
    <!-- swatch   -->
    <script src="./Fruits - Responsive Shopify Theme_files/bootstrap.min.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/bootstrap-custom.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js" type="text/javascript"></script>
    <!-- end -->

    <!--   jstheme -->

    <script src="./Fruits - Responsive Shopify Theme_files/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/jquery.fancybox.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/jquery-ui.min.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/owl.carousel.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/jquery.jcarousellite.min.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/jquery.mCustomScrollbar.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/slick.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/popup.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/modernizr.custom.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/jquery.hoverdir.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/timecircles.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/wow.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/theme1.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/instafeed.min.js" type="text/javascript"></script>


    <!--  end  -->
    <!-- <script src="//cdn.shopify.com/s/files/1/2644/1682/t/27/assets/theme.js?6700549863267108354" type="text/javascript"></script> -->
    <script src="./Fruits - Responsive Shopify Theme_files/engo-theme.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/slick.min.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/jquery.flipster.min.js" type="text/javascript"></script>
    <script src="./Fruits - Responsive Shopify Theme_files/engo-plugins.js" type="text/javascript"></script>

    <script>
        window.ajax_cart = true;
        window.money_format = \'<span class="money">${{amount}} USD</span>\';
        window.shop_currency = \'USD\';
        window.show_multiple_currencies = true;
        window.loading_url = "//cdn.shopify.com/s/files/1/2644/1682/t/27/assets/loader2.gif?6700549863267108354";
        window.use_color_swatch = true;
        window.product_image_resize = true;
        window.enable_sidebar_multiple_choice = true;

        window.file_url = "//cdn.shopify.com/s/files/1/2644/1682/files/?6700549863267108354";
        window.asset_url = "";
        window.images_size = {
            is_crop: true,
            ratio_width : 1,
            ratio_height : 1,
        };
        window.inventory_text = {
            in_stock: "translation missing: en.products.product.in_stock",
            many_in_stock: "translation missing: en.products.product.many_in_stock",
            out_of_stock: "translation missing: en.products.product.out_of_stock",
            add_to_cart: "Add to Cart",
            sold_out: "Sold Out",
            unavailable: "Unavailable"
        };

        window.sidebar_toggle = {
            show_sidebar_toggle: "translation missing: en.general.sidebar_toggle.show_sidebar_toggle",
            hide_sidebar_toggle: "translation missing: en.general.sidebar_toggle.hide_sidebar_toggle"
        };

    </script>

    <script src="./Fruits - Responsive Shopify Theme_files/spb.js"></script><style type="text/css">.fancybox-margin{margin-right:15px;}</style><link rel="stylesheet" type="text/css" href="./Fruits - Responsive Shopify Theme_files/spr-5a2d2fd286dca8042a3a5a76bc9032c64c52a2792a734307c76740d012641514.css" media="screen"><script type="text/javascript" src="./Fruits - Responsive Shopify Theme_files/jquery.min(1).js"></script></head>
    ';

    return $output;
}