var $thirdFuns=function(){return function(){var a=function(){},b={playVideo:a,setAutoPlay:a,setPid:a,resetParam:a},c={};b.on=function(a,b){c[a]||(c[a]=[]);c[a].push(b)};b.trigger=function(a,b){var d=c[a];if(d){var e=d.length;for(var f=0;f<e;f++)try{d[f].apply(null,[b])}catch(g){}}};return b}}();
window.SVKFlashUtil=function(a,b){var c={},d="undefined",e=a.navagator,d="undefined",f="object",g="Shockwave Flash",h="ShockwaveFlash.ShockwaveFlash",i="application/x-shockwave-flash",j="SWFObjectExprInst",k="onreadystatechange",e=navigator,l=!1,m=function(){var c=typeof b.getElementById!=d&&typeof b.getElementsByTagName!=d&&typeof b.createElement!=d,j=e.userAgent.toLowerCase(),k=e.platform.toLowerCase(),m=k?/win/.test(k):/win/.test(j),n=k?/mac/.test(k):/mac/.test(j),o=/webkit/.test(j)?parseFloat(j.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):!1,p=!1,q=[0,0,0],r=null;if(typeof e.plugins!=d&&typeof e.plugins[g]==f){r=e.plugins[g].description;if(r&&(typeof e.mimeTypes==d||!e.mimeTypes[i]||!!e.mimeTypes[i].enabledPlugin)){l=!0;p=!1;r=r.replace(/^.*\s+(\S+\s+\S+$)/,"$1");q[0]=parseInt(r.replace(/^(.*)\..*$/,"$1"),10);q[1]=parseInt(r.replace(/^.*\.(.*)\s.*$/,"$1"),10);q[2]=/[a-zA-Z]/.test(r)?parseInt(r.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0}}else if(typeof a.ActiveXObject!=d)try{var s=new ActiveXObject(h);if(s){r=s.GetVariable("$version");if(r){p=!0;r=r.split(" ")[1].split(",");q=[parseInt(r[0],10),parseInt(r[1],10),parseInt(r[2],10)]}}}catch(t){}return{w3:c,pv:q,wk:o,ie:p,win:m,mac:n}}(),n=function(a,b){if(m.ie&&m.win){var c="",b=b||{};for(var d in a)a[d]!=Object.prototype[d]&&(d.toLowerCase()=="data"?b.movie=a[d]:d.toLowerCase()=="styleclass"?c+=' class="'+a[d]+'"':d.toLowerCase()!="classid"&&(c+=" "+d+'="'+a[d]+'"'));var e="";for(var f in b)b[f]!=Object.prototype[f]&&(e+='<param name="'+f+'" value="'+b[f]+'" />');return'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+c+">"+e+"</object>"}var g='<embed pluginspage="http://www.macromedia.com/go/getflashplayer" type="'+i+'" ';for(var d in a)a[d]!=Object.prototype[d]&&(d.toLowerCase()=="data"?g+='src="'+a[d]+'" ':d.toLowerCase()=="styleclass"?g+=' class="'+a[d]+'" ':d.toLowerCase()!="classid"&&(g+=" "+d+'="'+a[d]+'" '));for(var h in b)g+=h+'="'+b[h]+'" ';g+="/>";return g},o=function(a,b,c){var d,e={};b=b||{};for(d in a){e[d]=a[d];b[d]!=null&&(c?a.hasOwnProperty[d]&&(e[d]=b[d]):e[d]=b[d])}return e};c.getFlashHTML=function(a){var b={url:"",id:"vPlayer",width:640,height:480,flashvars:{},params:{allowNetworking:"all",allowScriptAccess:"always",wmode:"transparent",allowFullScreen:"true",quality:"high",bgcolor:"#000000"},attributes:{}};b=o(b,a);var c={},d={};c.data=b.url;c.width=b.width+"";c.height=b.height+"";c.id=b.id;for(var e in b.attributes)c[e]=b.attributes[e];for(var e in b.params)d[e]=b.params[e];d.flashvars="";for(var e in b.flashvars)d.flashvars?d.flashvars+="&"+e+"="+b.flashvars[e]:d.flashvars=e+"="+b.flashvars[e];return n(c,d)};c.isSupport=function(){};c.isSupportVersion=function(a){};return c}(window,document);
var $thirdFlashPlayer=function(){return function(a){var b=$thirdFuns(),c,d,e={dom:!1},f=function(){var b=document.getElementById(a.container);b.innerHTML=window.SVKFlashUtil.getFlashHTML(a)};d=function(){for(var a in b)a!="on"&&a!="trigger"&&g(a)};c=function(){f();e.dom=document.getElementById(a.id);d()};var g=function(a){b[a]=function(){e.dom[a].apply(e.dom,arguments)}},h=["flashInitCompleted","playCompleted"],i=function(a,c){window[a]=function(){b.trigger(a);c()}};for(var j=0;j<h.length;j++){var k=h[j],l=window[k]||function(){};i(k,l)}b.destroy=function(){e.dom=!1};b.init=c;b.on("playCompleted",function(){a.flashvars.vid||b.playVideo(-1)});return b}}();
var $videoUtil=function(){return function(a){return['<video id="'+a.id+'" src="" controls="" preload="" autoplay="'+(a.flashvars.autoPlay==1?"autoplay":"")+'" style="width: '+a.width+"px; height: "+a.height+'px;" poster="'+(a.thumbUrl||"")+'">',"</video>"].join("")}}();
var $utilJsonp=function(){var a=(new Date).getTime();return function(b,c){var d=document.getElementsByTagName("head")[0]||document.documentElement,e=document.createElement("script"),f="HTML5_"+a++;e.src=b+"&callback="+f;e.charset="utf-8";window[f]=function(a){if(c||typeof c=="function"){c(a);delete window[c];d.removeChild(e)}};d.appendChild(e)}}();
var $addEvent=function(){return function(a,b,c){if(a==null)return!1;if(typeof c!="function")return!1;a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent?a.attachEvent("on"+b,c):a["on"+b]=c;return!0}}();
var $thirdHTML5Player=function(){return function(a){var b=$thirdFuns(),c,d,e,f={dom:!1},g=function(){var b=document.getElementById(a.container);b.innerHTML=$videoUtil(a)};d=function(){var a=function(a){var b="http://v.iask.com/v_play_ipad.php?vid="+a;f.dom.src=b},c="http://video.sina.com.cn/interface/video_ids/video_ids.php?v=";b.playVideo=function(b,d,e,f){f?a(f):$utilJsonp(c+b,function(b){a(b.ipad_vid)})};var d=$thirdFuns();for(var e in d)f.dom[e]=b[e]};e=function(){$addEvent(f.dom,"ended",function(){b.trigger("playCompleted")})};c=function(){g();f.dom=document.getElementById(a.id);d();e();b.trigger("flashInitCompleted");a.flashvars&&a.flashvars.vid&&b.playVideo(a.flashvars.vid)};b.destroy=function(){f.dom=!1};b.init=c;return b}}();
(function(a,b){var c=function(a){var b;if(a instanceof Array){b=[];var d=a.length;while(d--)b[d]=c(a[d]);return b}if(a instanceof Object){b={};for(var e in a)b[e]=c(a[e]);return b}return a},d=function(a){var b={url:"http://p.you.video.sina.com.cn/swf/bokePlayer20131114_V4_1_42_31.swf",width:640,height:516,id:"myMovie",name:"myMovie",params:{allowNetworking:"all",allowScriptAccess:"always",wmode:"transparent",allowFullScreen:"true",quality:"high",bgcolor:"#000000"},container:"myflashBox",flashvars:{pid:"1",tid:"334",autoLoad:"1",as:"1",lightBtn:"0",popBtn:"0",wideBtn:"0",tj:"0",head:"0",continuePlayer:"1",actlogActive:"0",realfull:"1",oldApi:"0",moz:"1"}};if(!a)return b;a=c(a);var d=["id","name","width","height","container"];for(var e=0;e<d.length;e++){var f=d[e];if(a[f]){b[f]=a[f];delete a[f]}}a.playerWidth&&!a.width&&(b.width=a.playerWidth);a.playerHeight&&!a.height&&(b.height=a.playerHeight);if(a.flashvars){for(var e in a.flashvars)b.flashvars[e]=a.flashvars[e];delete a.flashvars}if(a.params){b.params=a.params;delete a.params}for(var e in a)b.flashvars[e]=a[e];b.flashvars.vid&&(b.flashvars.continuePlayer=0);return b},e=function(a){var b={param:{}};b.param=d(a);if(!b.param)throw"没有传入初始化参数";var c=null,e=function(){var a=navigator.userAgent.toLowerCase();a.match(/ipad/i)||a.match(/ipod/i)||a.match(/iphone/i)?c=$thirdHTML5Player(b.param):c=$thirdFlashPlayer(b.param)};e();return c},f=function(a){var b=d(a);for(var c in a)c!="id"&&c!="width"&&c!="height"&&(b.flashvars[c]=a[c]);var f={},g={};g.addVars=function(a,c){b.flashvars[a]=c};g.showFlashPlayer=function(){var a=window.playCompleted;f.flashObject=e(b);var c=function(){var b=window.playCompleted?window.playCompleted.toString():"";if(a){a();return}!b||b.indexOf("trigger")>=0?setTimeout(c,50):window.playCompleted()};f.flashObject.on("flashInitCompleted",function(){c()});f.flashObject.init();return f.flashObject};g.getPlayer=function(){return f.flashObject};return g};a.sinaVideoPlayerClient=f;a.sinaVideoPlayer=e;if(window.sinaBokePlayerConfig_o){var g=f(window.sinaBokePlayerConfig_o);window.SinaBokePlayer_o=g;window.__onloadFun__&&window.__onloadFun__()}})(window,document);