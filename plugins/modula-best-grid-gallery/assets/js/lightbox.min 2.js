!function(t,i){"function"==typeof define&&define.amd?define(["jquery"],i):"object"==typeof exports?module.exports=i(require("jquery")):t.lightbox=i(t.jQuery)}(this,function(c){function t(t){this.album=[],this.currentImageIndex=void 0,this.init(),this.options=c.extend({},this.constructor.defaults),this.option(t)}return t.defaults={albumLabel:"Image %1 of %2",showNavigation:!0,showNavigationOnMobile:!1,fadeDuration:600,fitImagesInViewport:!0,imageFadeDuration:600,positionFromTop:50,resizeDuration:700,showImageNumberLabel:!0,wrapAround:!1,disableScrolling:!1,enableSwipeOnTouchDevices:!0,sanitizeTitle:!1},t.prototype.option=function(t){c.extend(this.options,t)},t.prototype.imageCountLabel=function(t,i){return this.options.albumLabel.replace(/%1/g,t).replace(/%2/g,i)},t.prototype.mobilecheck=function(){var t,i=!1;return t=navigator.userAgent||navigator.vendor||window.opera,(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(i=!0),i},t.prototype.init=function(){var t=this;c(document).ready(function(){t.enable(),t.build()})},t.prototype.enable=function(){var i=this;c("body").on("click","a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]",function(t){return i.start(c(t.currentTarget)),!1})},t.prototype.swipedetect=function(t,i){var n,o,a,r,s,h,e=t,l=i||function(t){};e.addEventListener("touchstart",function(t){var i=t.changedTouches[0];n="none",dist=0,o=i.pageX,a=i.pageY,h=(new Date).getTime(),t.preventDefault()},!1),e.addEventListener("touchmove",function(t){t.preventDefault()},!1),e.addEventListener("touchend",function(t){var i=t.changedTouches[0];if(r=i.pageX-o,s=i.pageY-a,(new Date).getTime()-h<=300&&(1<=Math.abs(r)&&Math.abs(s)<=100?n=r<0?"left":"right":1<=Math.abs(s)&&Math.abs(r)<=100&&(n=s<0?"up":"down")),"none"==n){var e=c(t.target);e.hasClass("lb-prev")?n="left":e.hasClass("lb-next")&&(n="right")}l(n),t.preventDefault()},!1)},t.prototype.build=function(){if(!(0<c("#lightbox").length)){var i=this;c('<div id="lightboxOverlay" class="lightboxOverlay"></div><div id="lightbox" class="lightbox"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" /><div class="lb-nav"><a class="lb-prev" href="" ></a><a class="lb-next" href="" ></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div>').appendTo(c("body")),this.$lightbox=c("#lightbox"),this.$overlay=c("#lightboxOverlay"),this.$outerContainer=this.$lightbox.find(".lb-outerContainer"),this.$container=this.$lightbox.find(".lb-container"),this.$image=this.$lightbox.find(".lb-image"),this.$nav=this.$lightbox.find(".lb-nav"),this.containerPadding={top:parseInt(this.$container.css("padding-top"),10),right:parseInt(this.$container.css("padding-right"),10),bottom:parseInt(this.$container.css("padding-bottom"),10),left:parseInt(this.$container.css("padding-left"),10)},this.imageBorderWidth={top:parseInt(this.$image.css("border-top-width"),10),right:parseInt(this.$image.css("border-right-width"),10),bottom:parseInt(this.$image.css("border-bottom-width"),10),left:parseInt(this.$image.css("border-left-width"),10)},this.$overlay.hide().on("click",function(){return i.end(),jQuery(document).trigger("modula_lightbox2_lightbox_close"),!1}),this.$lightbox.hide().on("click",function(t){return"lightbox"===c(t.target).attr("id")&&(i.end(),jQuery(document).trigger("modula_lightbox2_lightbox_close")),!1}),this.$outerContainer.on("click",function(t){return"lightbox"===c(t.target).attr("id")&&(i.end(),jQuery(document).trigger("modula_lightbox2_lightbox_close")),!1}),this.$lightbox.find(".lb-prev").on("click",function(){return 0===i.currentImageIndex?i.changeImage(i.album.length-1):i.changeImage(i.currentImageIndex-1),setTimeout(function(){jQuery(document).trigger("modula_lightbox2_lightbox_prev",[i,i.currentImageIndex])},600),!1}),this.$lightbox.find(".lb-next").on("click",function(){return i.currentImageIndex===i.album.length-1?i.changeImage(0):i.changeImage(i.currentImageIndex+1),setTimeout(function(){jQuery(document).trigger("modula_lightbox2_lightbox_next",[i,i.currentImageIndex])},600),!1});var t=this.$lightbox.find(".lb-container")[0];i.swipedetect(t,function(t){"left"==t?i.currentImageIndex===i.album.length-1?i.changeImage(0):i.changeImage(i.currentImageIndex+1):"right"==t&&(0===i.currentImageIndex?i.changeImage(i.album.length-1):i.changeImage(i.currentImageIndex-1))}),this.$nav.on("mousedown",function(t){3===t.which&&(i.$nav.css("pointer-events","none"),i.$lightbox.one("contextmenu",function(){setTimeout(function(){this.$nav.css("pointer-events","auto")}.bind(i),0)}))}),this.$lightbox.find(".lb-loader, .lb-close").on("click",function(){return i.end(),jQuery(document).trigger("modula_lightbox2_lightbox_close"),!1})}},t.prototype.start=function(t){var i=this,e=c(window);e.on("resize",c.proxy(this.sizeOverlay,this)),c("select, object, embed").css({visibility:"hidden"}),this.sizeOverlay(),this.album=[];var n=0;function o(t){i.album.push({alt:t.attr("data-alt"),link:t.attr("href"),title:t.attr("data-title")||t.attr("title")})}var a,r,s=t.attr("data-lightbox");if(s){0<(r=(a=c(t.prop("tagName")+'[data-lightbox="'+s+'"]')).filter("[data-cyclefilter=show]")).length&&r.length!=a.length&&(a=r);for(var h=0;h<a.length;h=++h)o(c(a[h])),a[h]===t[0]&&(n=h)}else if("lightbox"===t.attr("rel"))o(t);else{0<(r=(a=c(t.prop("tagName")+'[rel="'+t.attr("rel")+'"]')).filter("[data-cyclefilter=show]")).length&&r.length!=a.length&&(a=r);for(var l=0;l<a.length;l=++l)o(c(a[l])),a[l]===t[0]&&(n=l)}var d=e.scrollTop()+this.options.positionFromTop,g=e.scrollLeft();this.$lightbox.css({top:d+"px",left:g+"px"}).fadeIn(this.options.fadeDuration),this.options.disableScrolling&&c("html").addClass("lb-disable-scrolling"),this.changeImage(n),setTimeout(function(){jQuery(document).trigger("modula_lightbox2_lightbox_open",[i,t])},600)},t.prototype.changeImage=function(r){var s=this;this.disableKeyboardNav();var h=this.$lightbox.find(".lb-image");this.$overlay.fadeIn(this.options.fadeDuration),c(".lb-loader").fadeIn("slow"),this.$lightbox.find(".lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption").hide(),this.$outerContainer.addClass("animating");var l=new Image;l.onload=function(){var t,i,e,n,o,a;h.attr({alt:s.album[r].alt,src:s.album[r].link}),c(l),h.width(l.width),h.height(l.height),s.options.fitImagesInViewport&&(a=c(window).width(),o=c(window).height(),n=a-s.containerPadding.left-s.containerPadding.right-s.imageBorderWidth.left-s.imageBorderWidth.right-20,e=o-s.containerPadding.top-s.containerPadding.bottom-s.imageBorderWidth.top-s.imageBorderWidth.bottom-120,s.options.maxWidth&&s.options.maxWidth<n&&(n=s.options.maxWidth),s.options.maxHeight&&s.options.maxHeight<n&&(e=s.options.maxHeight),(l.width>n||l.height>e)&&(l.width/n>l.height/e?(i=n,t=parseInt(l.height/(l.width/i),10)):(t=e,i=parseInt(l.width/(l.height/t),10)),h.width(i),h.height(t))),s.sizeContainer(h.width(),h.height())},l.src=this.album[r].link,this.currentImageIndex=r},t.prototype.sizeOverlay=function(){this.$overlay.width(c(document).width()).height(c(document).height())},t.prototype.sizeContainer=function(t,i){var e=this,n=this.$outerContainer.outerWidth(),o=this.$outerContainer.outerHeight(),a=t+this.containerPadding.left+this.containerPadding.right+this.imageBorderWidth.left+this.imageBorderWidth.right,r=i+this.containerPadding.top+this.containerPadding.bottom+this.imageBorderWidth.top+this.imageBorderWidth.bottom;function s(){e.$lightbox.find(".lb-dataContainer").width(a),e.$lightbox.find(".lb-prevLink").height(r),e.$lightbox.find(".lb-nextLink").height(r),e.showImage()}n!==a||o!==r?this.$outerContainer.animate({width:a,height:r},this.options.resizeDuration,"swing",function(){s()}):s()},t.prototype.showImage=function(){this.$lightbox.find(".lb-loader").stop(!0).hide(),this.$lightbox.find(".lb-image").fadeIn(this.options.imageFadeDuration),this.updateNav(),this.updateDetails(),this.preloadNeighboringImages(),this.enableKeyboardNav()},t.prototype.updateNav=function(){var t=!!this.options.showNavigation,i=!1;try{document.createEvent("TouchEvent"),!!this.options.enableSwipeOnTouchDevices,i=!0}catch(t){}this.mobilecheck()&&(t=!!this.options.showNavigationOnMobile),t?(this.$lightbox.find(".lb-nav").show(),1<this.album.length&&(this.options.wrapAround?(i&&this.$lightbox.find(".lb-prev, .lb-next").css("opacity","1"),this.$lightbox.find(".lb-prev, .lb-next").show()):(0<this.currentImageIndex&&(this.$lightbox.find(".lb-prev").show(),i&&this.$lightbox.find(".lb-prev").css("opacity","1")),this.currentImageIndex<this.album.length-1&&(this.$lightbox.find(".lb-next").show(),i&&this.$lightbox.find(".lb-next").css("opacity","1"))))):this.$lightbox.find(".lb-nav").hide()},t.prototype.updateDetails=function(){var t=this;if(void 0!==this.album[this.currentImageIndex].title&&""!==this.album[this.currentImageIndex].title){var i=this.$lightbox.find(".lb-caption");this.options.sanitizeTitle?i.text(this.album[this.currentImageIndex].title):i.html(this.album[this.currentImageIndex].title),i.fadeIn("fast").find("a").on("click",function(t){void 0!==c(this).attr("target")?window.open(c(this).attr("href"),c(this).attr("target")):location.href=c(this).attr("href")})}if(1<this.album.length&&this.options.showImageNumberLabel){var e=this.imageCountLabel(this.currentImageIndex+1,this.album.length);this.$lightbox.find(".lb-number").text(e).fadeIn("fast")}else this.$lightbox.find(".lb-number").hide();this.$outerContainer.removeClass("animating"),this.$lightbox.find(".lb-dataContainer").fadeIn(this.options.resizeDuration,function(){return t.sizeOverlay()})},t.prototype.preloadNeighboringImages=function(){this.album.length>this.currentImageIndex+1&&((new Image).src=this.album[this.currentImageIndex+1].link);0<this.currentImageIndex&&((new Image).src=this.album[this.currentImageIndex-1].link)},t.prototype.enableKeyboardNav=function(){c(document).on("keyup.keyboard",c.proxy(this.keyboardAction,this))},t.prototype.disableKeyboardNav=function(){c(document).off(".keyboard")},t.prototype.keyboardAction=function(t){var i=t.keyCode,e=String.fromCharCode(i).toLowerCase();27===i||e.match(/x|o|c/)?this.end():"p"===e||37===i?0!==this.currentImageIndex?this.changeImage(this.currentImageIndex-1):this.options.wrapAround&&1<this.album.length&&this.changeImage(this.album.length-1):"n"!==e&&39!==i||(this.currentImageIndex!==this.album.length-1?this.changeImage(this.currentImageIndex+1):this.options.wrapAround&&1<this.album.length&&this.changeImage(0))},t.prototype.end=function(){this.disableKeyboardNav(),c(window).off("resize",this.sizeOverlay),this.$lightbox.fadeOut(this.options.fadeDuration),this.$overlay.fadeOut(this.options.fadeDuration),c("select, object, embed").css({visibility:"visible"}),this.options.disableScrolling&&c("html").removeClass("lb-disable-scrolling")},new t});