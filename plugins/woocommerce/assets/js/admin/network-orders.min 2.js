!function(o,e,r){if("undefined"!=typeof woocommerce_network_orders){var t=[],n=[],s=[],a=o(document.getElementById("network-orders-tbody")),c=e.template(o(document.getElementById("network-orders-row-template")).text()),d=o(document.getElementById("woocommerce-network-order-table-loading")),i=o(document.getElementById("woocommerce-network-order-table")),m=o(document.getElementById("woocommerce-network-orders-no-orders"));if(!woocommerce_network_orders.sites.length)return d.removeClass("is-active"),i.removeClass("is-active"),m.addClass("is-active");o.each(woocommerce_network_orders.sites,function(r,e){n[r]=o.Deferred(),s.push(o.ajax({url:woocommerce_network_orders.order_endpoint,data:{_wpnonce:woocommerce_network_orders.nonce,network_orders:!0,blog_id:e},type:"GET"}).success(function(e){var o;for(o in e)t.push(e[o]);n[r].resolve()}).fail(function(){n[r].resolve()}))}),0<n.length&&o.when.apply(o,n).done(function(){var e,o;if(t.sort(function(e,o){var r,t;return(r=Date.parse(e.date_created_gmt))===(t=Date.parse(o.date_created_gmt))?0:r<t?1:-1}),0<t.length){for(e in t)o=t[e],a.append(c(o));m.removeClass("is-active"),d.removeClass("is-active"),i.addClass("is-active")}else m.addClass("is-active"),d.removeClass("is-active"),i.removeClass("is-active")})}}(jQuery,_);