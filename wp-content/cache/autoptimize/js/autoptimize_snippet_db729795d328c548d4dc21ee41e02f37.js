!function(a){a.fn.hotSpot=function(b){function l(){a(".popover",d).each(function(b){var c=parseFloat(a(this).next(".info-icon").css("top")),d=parseFloat(a(this).next(".info-icon").css("left")),e=a(this).data("direction"),f=a(this).width(),h=a(this).height();switch(g[b]=a(this).data("index",b),e){case"top":a(this).css({top:c-h,left:d-.5*f+10});break;case"left":a(this).css({top:c-.5*h+10,left:d-f-2});break;case"bottom":a(this).css({top:c+22,left:d-.5*f+10});break;case"right":a(this).css({top:c-.5*h+10,left:d+22})}})}function p(){clearTimeout(m),m=setTimeout(function(){q()},c.slideshowDelay)}function q(){clearTimeout(m);var b=g[n];if(null!=b&&(Modernizr.csstransitions?b.removeClass("cardIn"+b.data("direction")).addClass("cardOut"+b.data("direction")):b.animate({opacity:0},300,function(){a(this).hide()}),b.data("isshow",!1)),n++,n>g.length-1){if(!c.loop)return!1;n=0}""!=g[n].find("p").html()?Modernizr.csstransitions?g[n].show().removeClass("animatedelay cardOut"+g[n].data("direction")).addClass("hotspotanimate cardIn"+g[n].data("direction")).on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){d.data("slideshow")&&p()}):g[n].show().animate({opacity:1},300,function(){d.data("slideshow")&&p()}):d.data("slideshow")&&p(),g[n].data("isshow",!0),o=g[n]}var c={triggerBy:"click",delay:0,slideshow:!0,loop:!0,autoHide:!0,slideshowDelay:4e3,sticky:!0,dropInEase:!1,displayVideo:!0,customIcon:"",clickImageToClose:!0};b&&a.extend(c,b);var d=this,e=!0;d.data("_allowOut",e);var f,g=[];d.data("slideshow",c.slideshow);var h=[];a(".popover",d).each(function(b){var e=a(this).data("top"),i=a(this).data("left"),j=a(this).data("width");0!=j&&236!=j&&""!=j&&(a(this).css("width",j),a(this).find(".popover-content").css("width",j-28),a(this).find("h4.popover-title").css("width",j-27));var k=a(this).data("style"),l=a(this).data("direction");if(""!=k&&(a(this).addClass(k),a(this).find("h4.popover-title").addClass(k)),c.displayVideo){var n=a(this).find("iframe");n&&n.data("videourl",n.attr("src"))}var q=a(this).height();switch(g[b]=a(this).data("index",b),h[b]=a(".popover-content > p",a(this)).html(),""!=c.customIcon&&a(this).next(".cq-hotspot-custom-icon").css("background","url("+c.customIcon+") no-repeat"),a(this).next(".info-icon").show().css({top:e,left:i}).delay(500).animate({opacity:1},300),l){case"top":a(this).css({top:e-q,left:i-.5*j+10});break;case"left":a(this).css({top:e-.5*q+10,left:i-j-2});break;case"bottom":a(this).css({top:e+22,left:i-.5*j+10});break;case"right":a(this).css({top:e-.5*q+10,left:i+22})}c.sticky&&a(this).on("mouseover",function(){clearTimeout(f),clearTimeout(m),d.data("_allowOut",!1)}).on("mouseleave",function(){(d.data("slideshow")||c.autoHide&&o)&&(clearTimeout(f),f=setTimeout(function(){d.data("_allowOut",!0),Modernizr.csstransitions?o.removeClass("cardIn"+o.data("direction")).addClass("cardOut"+o.data("direction")).on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){clearTimeout(m),d.data("slideshow")&&p()}):o.animate({opacity:0},300,function(){clearTimeout(m),d.data("slideshow")&&p()}),o.data("isshow",!1)},c.delay))})});var j,k,i=a(".popover-image",d)[0];a("<img/>").attr("src",a(i).attr("src")).load(function(){j=this.width,k=this.height,a(window).trigger("resize")});var m,n=0,o=null;return c.slideshow&&(Modernizr.csstransitions?g[n].show().addClass("animatedelay cardIn"+g[n].data("direction")).on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){a(window).trigger("resize"),p()}):g[n].show().delay(500).animate({opacity:1},300,function(){p()}),g[n].data("isshow",!0),o=g[n]),a(".info-icon",d).each(function(b){if(c.dropInEase){var e=b>15?b%15:b;a(this).addClass("dropin"+e+" cq-dropInDown");var g=a(this).next(".cq-hotspot-label");g&&g.addClass("dropin"+e+" cq-dropInDown")}"mouseover"==c.triggerBy?a(this).on("mouseover",function(){a(window).trigger("resize"),clearTimeout(f),clearTimeout(m);var d=a(this).prev(".popover");if(null!=o&&!o.is(d)){if(c.displayVideo){var e=o.find("iframe");e&&e.attr("src","")}Modernizr.csstransitions?o.removeClass("cardIn"+o.data("direction")).addClass("cardOut"+o.data("direction")):o.animate({opacity:0},300,function(){a(this).hide()}),o.data("isshow",!1)}if(o=d,n=o.data("index"),""!=o.find("p").html()){if(c.displayVideo){var e=o.find("iframe");e&&e.attr("src",e.data("videourl"))}Modernizr.csstransitions?o.show().removeClass("animatedelay cardOut"+o.data("direction")).addClass("hotspotanimate cardIn"+o.data("direction")):o.show().animate({opacity:1},300)}o.data("isshow",!0)}).on("mouseleave",function(){o=a(this).prev(".popover"),d.data("_allowOut")&&c.autoHide&&(clearTimeout(f),f=setTimeout(function(){if(c.displayVideo){var b=o.find("iframe");b&&b.attr("src","")}Modernizr.csstransitions?o.removeClass("cardIn"+o.data("direction")).addClass("cardOut"+o.data("direction")).on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){clearTimeout(m),d.data("slideshow")&&p()}):o.animate({opacity:0},300,function(){a(this).hide(),clearTimeout(m),d.data("slideshow")&&p()}),o.data("isshow",!1)},c.delay))}).on("click",function(b){""!=a(this).data("link")&&window.open(a(this).data("link"),a(this).data("target")),b.preventDefault()}):a(this).on("click",function(b){""!=a(this).data("link")&&window.open(a(this).data("link"),a(this).data("target")),b.preventDefault(),clearTimeout(m),a(window).trigger("resize");var d=a(this).prev(".popover");if(null!=o&&!o.is(d)){if(c.displayVideo){var e=o.find("iframe");e&&e.attr("src","")}Modernizr.csstransitions?o.removeClass("cardIn"+o.data("direction")).addClass("cardOut"+o.data("direction")):o.animate({opacity:0},300,function(){a(this).hide()}),o.data("isshow",!1)}if(o=d,n=o.data("index"),o.data("isshow"))Modernizr.csstransitions?o.removeClass("cardIn"+o.data("direction")).addClass("cardOut"+o.data("direction")):o.animate({opacity:0},300,function(){a(this).hide()}),o.data("isshow",!1);else{if(c.displayVideo){var e=o.find("iframe");e&&e.attr("src",e.data("videourl"))}""!=o.find("p").html()&&(Modernizr.csstransitions?o.show().removeClass("animatedelay cardOut"+o.data("direction")).addClass("hotspotanimate cardIn"+o.data("direction")):o.show().animate({opacity:1},300)),o.data("isshow",!0)}}).on("mouseleave",function(){d.data("_allowOut")&&c.autoHide&&(o=a(this).prev(".popover"),clearTimeout(f),f=setTimeout(function(){if(c.displayVideo){var b=o.find("iframe");b&&b.attr("src","")}Modernizr.csstransitions?o.removeClass("cardIn"+o.data("direction")).addClass("cardOut"+o.data("direction")).on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){clearTimeout(m),d.data("slideshow")&&p()}):o.animate({opacity:0},300,function(){a(this).hide()}),o.data("isshow",!1)},c.delay))})}),d.on("click",".popover-image",function(a){a.preventDefault(),c.clickImageToClose&&d.hideCurrentPop()}),d.hideCurrentPop=function(){if(null!=o){if(c.displayVideo){var b=o.find("iframe");b&&b.attr("src","")}Modernizr.csstransitions?o.removeClass("cardIn"+o.data("direction")).addClass("cardOut"+o.data("direction")):o.animate({opacity:0},300,function(){a(this).hide()}),o.data("isshow",!1)}},d.resetPopPos=l,a(window).on("resize",function(){var c=a(".popover-image",d).width(),e=a(".popover-image",d).height();a(".info-icon",d).each(function(){var b=a(this).data("top"),d=a(this).data("left");a(this).css({top:Math.floor(b*e/k-18*(k-e)/k),left:Math.floor(d*c/j-10*(j-c)/j)}),a(this).next(".info-icon-pulse").css({top:Math.floor(b*e/k-18*(k-e)/k),left:Math.floor(d*c/j-10*(j-c)/j)});var f=a(this).find(".cq-hotspot-label");f&&(f.width(),""!=f.html()?f.show().css({display:"inline-block",position:"absolute",visibility:"visible",opacity:1}):f.remove())}),l()}),a(window).trigger("resize"),this}}(jQuery),jQuery(document).ready(function(){jQuery(".hotspot-container").each(function(){jQuery(this).hotSpot({slideshow:jQuery(this).data("slideshow"),slideshowDelay:jQuery(this).data("slideshowdelay"),triggerBy:jQuery(this).data("triggerby"),delay:jQuery(this).data("autohidedelay"),displayVideo:jQuery(this).data("displayvideo"),autoHide:jQuery(this).data("autohide"),sticky:jQuery(this).data("sticky"),dropInEase:jQuery(this).data("dropinease"),customIcon:jQuery(this).data("customicon"),clickImageToClose:jQuery(this).data("clickimageclose")})})});