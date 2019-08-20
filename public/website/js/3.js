!function(t){var e={},r=0;t.fn.once=function(n,a){"string"!=typeof n&&(n in e||(e[n]=++r),a||(a=n),n="jquery-once-"+e[n]);var o=n+"-processed",u=this.not("."+o).addClass(o);return t.isFunction(a)?u.each(a):u},t.fn.removeOnce=function(e,r){var n=e+"-processed",a=this.filter("."+n).removeClass(n);return t.isFunction(r)?a.each(r):a}}(jQuery);var Drupal=Drupal||{settings:{},behaviors:{},locale:{}};jQuery.noConflict(),function(t){var e=t.fn.init;if(t.fn.init=function(t,r,n){if(t&&"string"==typeof t){var a=t.indexOf("#");if(a>=0)if(t.indexOf("<")>a)throw"Syntax error, unrecognized expression: "+t}return e.call(this,t,r,n)},t.fn.init.prototype=e.prototype,t.ajaxPrefilter)t.ajaxPrefilter(function(t){t.crossDomain&&(t.contents.script=!1)});else if(t.httpData){var r=t.httpData;t.httpData=function(t,e,n){e||Drupal.urlIsLocal(n.url)||(t.getResponseHeader("content-type")||"").indexOf("javascript")>=0&&(e="text");return r.call(this,t,e,n)},t.httpData.prototype=r.prototype}Drupal.attachBehaviors=function(e,r){e=e||document,r=r||Drupal.settings,t.each(Drupal.behaviors,function(){t.isFunction(this.attach)&&this.attach(e,r)})},Drupal.detachBehaviors=function(e,r,n){e=e||document,r=r||Drupal.settings,n=n||"unload",t.each(Drupal.behaviors,function(){t.isFunction(this.detach)&&this.detach(e,r,n)})},Drupal.checkPlain=function(t){var e,r,n={"&":"&amp;","'":"&#39;",'"':"&quot;","<":"&lt;",">":"&gt;"};for(e in t=String(t),n)n.hasOwnProperty(e)&&(r=new RegExp(e,"g"),t=t.replace(r,n[e]));return t},Drupal.formatString=function(t,e){for(var r in e)if(e.hasOwnProperty(r))switch(r.charAt(0)){case"@":e[r]=Drupal.checkPlain(e[r]);break;case"!":break;default:e[r]=Drupal.theme("placeholder",e[r])}return Drupal.stringReplace(t,e,null)},Drupal.stringReplace=function(e,r,n){if(0===e.length)return e;if(!t.isArray(n)){for(var a in n=[],r)r.hasOwnProperty(a)&&n.push(a);n.sort(function(t,e){return t.length-e.length})}if(0===n.length)return e;var o=n.pop(),u=e.split(o);if(n.length)for(var l=0;l<u.length;l++)u[l]=Drupal.stringReplace(u[l],r,n.slice(0));return u.join(r[o])},Drupal.t=function(t,e,r){return(r=r||{}).context=r.context||"",Drupal.locale.strings&&Drupal.locale.strings[r.context]&&Drupal.locale.strings[r.context][t]&&(t=Drupal.locale.strings[r.context][t]),e&&(t=Drupal.formatString(t,e)),t},Drupal.formatPlural=function(t,e,r,n,a){(n=n||{})["@count"]=t;var o=Drupal.locale.pluralFormula?Drupal.locale.pluralFormula(n["@count"]):1==n["@count"]?0:1;return 0==o?Drupal.t(e,n,a):1==o?Drupal.t(r,n,a):(n["@count["+o+"]"]=n["@count"],delete n["@count"],Drupal.t(r.replace("@count","@count["+o+"]"),n,a))},Drupal.absoluteUrl=function(t){var e=document.createElement("a");try{t=decodeURIComponent(t)}catch(t){}return e.setAttribute("href",t),e.cloneNode(!1).href},Drupal.urlIsLocal=function(t){var e=Drupal.absoluteUrl(t),r=location.protocol;"http:"===r&&0===e.indexOf("https:")&&(r="https:");var n=r+"//"+location.host+Drupal.settings.basePath.slice(0,-1);try{e=decodeURIComponent(e)}catch(t){}try{n=decodeURIComponent(n)}catch(t){}return e===n||0===e.indexOf(n+"/")},Drupal.theme=function(t){var e=Array.prototype.slice.apply(arguments,[1]);return(Drupal.theme[t]||Drupal.theme.prototype[t]).apply(this,e)},Drupal.freezeHeight=function(){Drupal.unfreezeHeight(),t('<div id="freeze-height"></div>').css({position:"absolute",top:"0px",left:"0px",width:"1px",height:t("body").css("height")}).appendTo("body")},Drupal.unfreezeHeight=function(){t("#freeze-height").remove()},Drupal.encodePath=function(t,e){return e=e||location.href,encodeURIComponent(t).replace(/%2F/g,"/")},Drupal.getSelection=function(t){if("number"!=typeof t.selectionStart&&document.selection){var e=document.selection.createRange(),r=e.duplicate();r.moveToElementText(t),r.setEndPoint("EndToEnd",e);var n=r.text.length-e.text.length;return{start:n,end:n+e.text.length}}return{start:t.selectionStart,end:t.selectionEnd}},Drupal.beforeUnloadCalled=!1,t(window).bind("beforeunload pagehide",function(){Drupal.beforeUnloadCalled=!0}),Drupal.displayAjaxError=function(t){Drupal.beforeUnloadCalled||alert(t)},Drupal.ajaxError=function(e,r,n){var a,o,u,l,i;a=e.status?"\n"+Drupal.t("An AJAX HTTP error occurred.")+"\n"+Drupal.t("HTTP Result Code: !status",{"!status":e.status}):"\n"+Drupal.t("An AJAX HTTP request terminated abnormally."),a+="\n"+Drupal.t("Debugging information follows."),u="\n"+Drupal.t("Path: !uri",{"!uri":r}),o="";try{o="\n"+Drupal.t("StatusText: !statusText",{"!statusText":t.trim(e.statusText)})}catch(t){}l="";try{l="\n"+Drupal.t("ResponseText: !responseText",{"!responseText":t.trim(e.responseText)})}catch(t){}return l=(l=l.replace(/<("[^"]*"|'[^']*'|[^'">])*>/gi,"")).replace(/[\n]+\s+/g,"\n"),i=0==e.status?"\n"+Drupal.t("ReadyState: !readyState",{"!readyState":e.readyState}):"",a+u+o+(n=n?"\n"+Drupal.t("CustomMessage: !customMessage",{"!customMessage":n}):"")+l+i},t("html").addClass("js"),document.cookie="has_js=1; path=/",t(function(){if(void 0===jQuery.support.positionFixed){var e=t('<div style="position:fixed; top:10px" />').appendTo(document.body);jQuery.support.positionFixed=10===e[0].offsetTop,e.remove()}}),t(function(){Drupal.attachBehaviors(document,Drupal.settings)}),Drupal.theme.prototype={placeholder:function(t){return'<em class="placeholder">'+Drupal.checkPlain(t)+"</em>"}}}(jQuery);