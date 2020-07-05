jQuery(function(e){if("undefined"==typeof wc_add_to_cart_params)return!1;var t=function(){e(document.body).on("click",".add_to_cart_button",this.onAddToCart).on("click",".remove_from_cart_button",this.onRemoveFromCart).on("added_to_cart",this.updateButton).on("added_to_cart",this.updateCartPage).on("added_to_cart removed_from_cart",this.updateFragments)};t.prototype.onAddToCart=function(t){var a=e(this);if(a.is(".ajax_add_to_cart")){if(!a.attr("data-product_id"))return!0;t.preventDefault(),a.removeClass("added"),a.addClass("loading");var r={};e.each(a.data(),function(t,a){r[t]=a}),e(document.body).trigger("adding_to_cart",[a,r]),e.post(wc_add_to_cart_params.wc_ajax_url.toString().replace("%%endpoint%%","add_to_cart"),r,function(t){t&&(t.error&&t.product_url?window.location=t.product_url:"yes"!==wc_add_to_cart_params.cart_redirect_after_add?e(document.body).trigger("added_to_cart",[t.fragments,t.cart_hash,a]):window.location=wc_add_to_cart_params.cart_url)})}},t.prototype.onRemoveFromCart=function(t){var a=e(this),r=a.closest(".woocommerce-mini-cart-item");t.preventDefault(),r.block({message:null,overlayCSS:{opacity:.6}}),e.post(wc_add_to_cart_params.wc_ajax_url.toString().replace("%%endpoint%%","remove_from_cart"),{cart_item_key:a.data("cart_item_key")},function(t){t&&t.fragments?e(document.body).trigger("removed_from_cart",[t.fragments,t.cart_hash,a]):window.location=a.attr("href")}).fail(function(){window.location=a.attr("href")})},t.prototype.updateButton=function(t,a,r,o){(o=void 0!==o&&o)&&(o.removeClass("loading"),o.addClass("added"),wc_add_to_cart_params.is_cart||0!==o.parent().find(".added_to_cart").length||o.after(' <a href="'+wc_add_to_cart_params.cart_url+'" class="added_to_cart wc-forward" title="'+wc_add_to_cart_params.i18n_view_cart+'">'+wc_add_to_cart_params.i18n_view_cart+"</a>"),e(document.body).trigger("wc_cart_button_updated",[o]))},t.prototype.updateCartPage=function(){var t=window.location.toString().replace("add-to-cart","added-to-cart");e.get(t,function(t){e(".shop_table.cart:eq(0)").replaceWith(e(t).find(".shop_table.cart:eq(0)")),e(".cart_totals:eq(0)").replaceWith(e(t).find(".cart_totals:eq(0)")),e(".cart_totals, .shop_table.cart").stop(!0).css("opacity","1").unblock(),e(document.body).trigger("cart_page_refreshed"),e(document.body).trigger("cart_totals_refreshed")})},t.prototype.updateFragments=function(t,a){a&&(e.each(a,function(t){e(t).addClass("updating").fadeTo("400","0.6").block({message:null,overlayCSS:{opacity:.6}})}),e.each(a,function(t,a){e(t).replaceWith(a),e(t).stop(!0).css("opacity","1").unblock()}),e(document.body).trigger("wc_fragments_loaded"))},new t});