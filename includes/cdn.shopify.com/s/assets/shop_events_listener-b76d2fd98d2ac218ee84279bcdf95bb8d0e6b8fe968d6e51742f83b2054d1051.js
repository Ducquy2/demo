!function(){function t(t,e,n){window.jQuery&&window.jQuery(t).bind?window.jQuery(t).bind(e,n):t.addEventListener?t.addEventListener(e,n):t.attachEvent&&t.attachEvent("on"+e,n)}function e(t){if(t=t||window.event,!(t.defaultPrevented||t.isDefaultPrevented&&t.isDefaultPrevented())){var e=t.target||t.srcElement;if(e&&(e.getAttribute("action")||e.getAttribute("href")))try{if(e.id.options)var n=e.id.options[e.id.selectedIndex];else var n=e.id;var r,i,o,a,s,u,c,l=window.ShopifyAnalytics.meta.product,d=n.value,h=e.quantity?e.quantity.value:1;if(l)for(var p=0;p<l.variants.length;p++)if(l.variants[p].id==d){r=l.id;var f=l.variants[p];i=f.price/100,o=f.name,a=f.sku,s=l.vendor,u=f.public_title,c=l.type;break}window.ShopifyAnalytics.lib.track("Added Product",{currency:window.ShopifyAnalytics.meta.currency,id:d,productId:r,quantity:h,price:i,name:o,sku:a,brand:s,variant:u,category:c})}catch(m){console&&console.warn&&console.warn("[shop_events_listener] Error in handleSubmitCartAdd: "+m.message)}}}function n(t){t=t||window.event;var e=t.target||t.srcElement;if(e&&e.getAttribute("action"))try{window.ShopifyAnalytics.lib.track("Added Payment",{currency:window.ShopifyAnalytics.meta.currency})}catch(n){console&&console.warn&&console.warn("[shop_events_listener] Error in handleSubmitToPaymentAdd: "+n.message)}}t(window,"load",function(){for(var r=0;r<document.forms.length;r++){var i=document.forms[r].getAttribute("action");i&&i.indexOf("/cart/add")>=0&&t(document.forms[r],"submit",e);var o=document.forms[r].elements.previous_step;o&&"payment_method"==o.value&&t(document.forms[r],"submit",n)}})}(),function(t){"use strict";function e(t){}function n(t){try{switch(t.url){case"/cart/add.js":t.xhr.responseText&&""!=t.xhr.responseText&&i(JSON.parse(t.xhr.responseText),r(t.body));break;case"/cart/change.js":case"/cart/clear.js":case"/cart.js":}}catch(e){console&&console.warn&&console.warn("[shop_events_listener] Error in handleXhrDone: "+e.message)}}function r(t){for(var e=t.split("&"),n=0;n<e.length;n++){var r=e[n].split("=");if("quantity"===r[0])return r[1]}return 1}function i(t,e){window.ShopifyAnalytics.lib.track("Added Product",{id:t.id,productId:t.product_id,currency:window.ShopifyAnalytics.meta.currency,quantity:e,price:t.price/100,name:t.title,sku:t.sku,brand:t.vendor,variant:t.variant_title,category:t.product_type})}var o=t.prototype.open,a=t.prototype.send;t.prototype.open=function(t,n,r,i,a){this._url=n,this._method=t,e({method:t,url:n,xhr:this}),o.apply(this,arguments)},t.prototype.send=function(t){function e(){i.readyState==i.DONE&&n({method:s,url:o,body:u,xhr:i}),r&&r()}var r,i=this,o=this._url,s=this._method,u=t;this.addEventListener?this.addEventListener("readystatechange",e,!1):(r=this.onreadystatechange,this.onreadystatechange=e),a.call(this,t)}}(XMLHttpRequest);