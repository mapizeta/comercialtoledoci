/*
 Copyright 2011-2016 Adobe Systems Incorporated. All Rights Reserved.
*/
(function(){var d={waitSeconds:0,paths:{
	"html5shiv":"store_assets/scripts/html5shiv.js?crc=4241844378",
	"jquery":"store_assets/scripts/jquery-1.8.3.min.js?crc=209076791",
	"jquery.musemenu":"store_assets/scripts/jquery.musemenu.js?crc=3926474304",
	"jquery.museoverlay":"store_assets/scripts/jquery.museoverlay.js?crc=478602674",
	"jquery.musepolyfill.bgsize":"store_assets/scripts/jquery.musepolyfill.bgsize.js?crc=376823407",
	"jquery.museresponsive":"store_assets/scripts/jquery.museresponsive.js?crc=4034891291",
	"jquery.scrolleffects":"store_assets/scripts/jquery.scrolleffects.js?crc=291329570",
	"jquery.watch":"store_assets/scripts/jquery.watch.js?crc=141170477",
	"musedisclosure":"store_assets/scripts/musedisclosure.js?crc=472981680",
	"museutils":"store_assets/scripts/museutils.js?crc=407482107",
	"musewpdisclosure":"store_assets/scripts/musewpdisclosure.js?crc=3762128117",
	"musewpslideshow":"store_assets/scripts/musewpslideshow.js?crc=4044861007",
	"pie":"store_assets/scripts/pie.js?crc=3831537696",
	"taketori":"store_assets/scripts/taketori.js?crc=214255737",
	"touchswipe":"store_assets/scripts/touchswipe.js?crc=4065839998",
	"webpro":"store_assets/scripts/webpro.js?crc=4069187952",
	"whatinput":"store_assets/scripts/whatinput.js?crc=86476730"},map:{"*":{jquery:"jquery-private"},"jquery-private":{jquery:"jquery"}}};require.undef("jquery");define("jquery-private",["jquery"],function(b){b=b.noConflict(!0);if("undefined"===typeof $)window.$=window.jQuery=b;return b});if(true&&document.location.protocol!="https:")d.paths.jquery=["http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min",d.paths.jquery];requirejs.config(d);muse_init()})();
;(function(){if(!("undefined"==typeof Muse||"undefined"==typeof Muse.assets)){var a=function(a,b){for(var c=0,d=a.length;c<d;c++)if(a[c]==b)return c;return-1}(Muse.assets.required,"museconfig.js");if(-1!=a){Muse.assets.required.splice(a,1);for(var a=document.getElementsByTagName("meta"),b=0,c=a.length;b<c;b++){var d=a[b];if("generator"==d.getAttribute("name")){"2015.2.1.352"!=d.getAttribute("content")&&Muse.assets.outOfDate.push("museconfig.js");break}}}}})();
