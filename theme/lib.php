<?php

function get_script() {
    $output = '<script id="shopify-features" type="application/json">{"accessToken":"d8773b55f90ebfd5b68c714d3cc4d5ef","betas":["smart-payment-buttons"],"domain":"fruit-demo.myshopify.com","shopId":26441682,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "fruit-demo.myshopify.com";
Shopify.theme = {"name":"Fruit home 1 v2","id":28377317418,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=fruit-demo.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement("script");
      s.type = "text/javascript";
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName("script")[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent("onload", asyncLoad);
  } else {
    window.addEventListener("load", asyncLoad, false);
  }
})();
</script>
<script id="__st">var __st={"a":26441682,"offset":-14400,"reqid":"fdae6ffd-fa7a-48d0-8514-a7055933b405","pageurl":"fruit-demo.myshopify.com\/","t":"prospect","u":"9ef95bf8651f","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = "fruit-demo.myshopify.com";
window.ShopifyPay = window.ShopifyPay || {};
window.ShopifyPay.acceleratedFlowIncontext = false;
window.ShopifyPay.apiHost = "pay.shopify.com";
window.ShopifyPay.apiToken = "WHYyMHlpd0t6T2k0akwxN0dNQ0lvcEY3VUk1ZktOTkNoajNRRUNlTzc5bnBsZzBaK3pYODhjZ3BVekV4THZXSi0tRVVkd0hYeENOUGsxVHk3SGhBVVhHUT09--952aa326aeb427bcb7d9a491a2cf057227fb8ad0";
window.ShopifyPay.requestHost = "fruit-demo.myshopify.com"
window.ShopifyPay.sheetStyleSheetUrl = "\/\/cdn.shopify.com\/s\/assets\/shared\/sheet\/main-c150bd783aa9b2c6b0c41ded3880c45a0848a9914354d4222628be6c924200a3.css";
</script>
<script>
      window.ShopifyAnalytics = window.ShopifyAnalytics || {};
      window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
      window.ShopifyAnalytics.meta.currency = "USD";
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
      jquery("body").append(content);
    }
  };

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    "identify",
    "page",
    "ready",
    "track",
    "trackForm",
    "trackLink"
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
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.onerror = function(e) {
      (new Image()).src = "//v.shopify.com/internal_errors/track?error=trekkie_load";
    };
    script.async = true;
    script.src = "https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1";
    var first = document.getElementsByTagName("script")[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":26441682,"isMerchantRequest":null,"themeId":28377317418,"themeCityHash":7601608590117495552}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1.0},"Session Attribution":{}}
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

  
      var eventsListenerScript = document.createElement("script");
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-f2c5800305098f0ebebdfa7d980c9abf56514c46d5305e97a7c476f7c9116163.js";
      document.getElementsByTagName("head")[0].appendChild(eventsListenerScript);
    
})();
</script>
<script defer="defer" integrity="sha256-Gxguwl5tUJiCAQahws5YsUZydI9kO/Ae0NlSA6CxBbI=" crossorigin="anonymous" src="//cdn.shopify.com/s/assets/storefront/express_buttons-1b182ec25e6d5098820106a1c2ce58b14672748f643bf01ed0d95203a0b105b2.js"></script>
<script defer="defer" integrity="sha256-2VwcaH5++f6tBn1FlAz0S70S91W72Fx5p4AyR2ay1zw=" crossorigin="anonymous" src="//cdn.shopify.com/s/assets/storefront/features-d95c1c687e7ef9fead067d45940cf44bbd12f755bbd85c79a780324766b2d73c.js"></script>

 <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/assets/themes_support/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js" type="text/javascript"></script> 
 <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/modernizr.min.js?11789500483909204466" type="text/javascript"></script> 
<!-- swatch   -->
    <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/bootstrap.min.js?11789500483909204466" type="text/javascript"></script>
   <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/bootstrap-custom.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/assets/themes_support/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js" type="text/javascript"></script>
<!-- end -->
  
<!--   jstheme -->
  
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery-3.2.1.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.fancybox.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery-ui.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/owl.carousel.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.jcarousellite.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.elevatezoom.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.mCustomScrollbar.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/slick.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/popup.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/modernizr.custom.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.hoverdir.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/timecircles.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/wow.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/theme1.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/instafeed.min.js?11789500483909204466" type="text/javascript"></script>
  
   
<!--  end  -->
<!-- <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/theme.js?11789500483909204466" type="text/javascript"></script> -->
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/engo-theme.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/slick.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/jquery.flipster.min.js?11789500483909204466" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/engo-plugins.js?11789500483909204466" type="text/javascript"></script>
  
  <script>
  window.ajax_cart = true;
  window.loading_url = "//cdn.shopify.com/s/files/1/2644/1682/t/20/assets/loader2.gif?11789500483909204466";
  window.product_image_resize = true;
  window.enable_sidebar_multiple_choice = true;

  window.file_url = "//cdn.shopify.com/s/files/1/2644/1682/files/?11789500483909204466";
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

</script>';

    return $output;
}