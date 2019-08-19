"use strict";function Pathformer(t){if(void 0===t)throw new Error('Pathformer [constructor]: "element" parameter is required');if(t.constructor===String&&!(t=document.getElementById(t)))throw new Error('Pathformer [constructor]: "element" parameter is not related to an existing ID');if(!(t instanceof window.SVGElement||t instanceof window.SVGGElement||/^svg$/i.test(t.nodeName)))throw new Error('Pathformer [constructor]: "element" parameter must be a string or a SVGelement');this.el=t,this.scan(t)}Pathformer.prototype.TYPES=["line","ellipse","circle","polygon","polyline","rect"],Pathformer.prototype.ATTR_WATCH=["cx","cy","points","r","rx","ry","x","x1","x2","y","y1","y2"],Pathformer.prototype.scan=function(t){for(var r,e,o,a=t.querySelectorAll(this.TYPES.join(",")),n=0;n<a.length;n++)e=(0,this[(r=a[n]).tagName.toLowerCase()+"ToPath"])(this.parseAttr(r.attributes)),o=this.pathMaker(r,e),r.parentNode.replaceChild(o,r)},Pathformer.prototype.lineToPath=function(t){var r={},e=t.x1||0,o=t.y1||0,a=t.x2||0,n=t.y2||0;return r.d="M"+e+","+o+"L"+a+","+n,r},Pathformer.prototype.rectToPath=function(t){var r={},e=parseFloat(t.x)||0,o=parseFloat(t.y)||0,a=parseFloat(t.width)||0,n=parseFloat(t.height)||0;if(t.rx||t.ry){var i=parseInt(t.rx,10)||-1,p=parseInt(t.ry,10)||-1;i=Math.min(Math.max(i<0?p:i,0),a/2),p=Math.min(Math.max(p<0?i:p,0),n/2),r.d="M "+(e+i)+","+o+" L "+(e+a-i)+","+o+" A "+i+","+p+",0,0,1,"+(e+a)+","+(o+p)+" L "+(e+a)+","+(o+n-p)+" A "+i+","+p+",0,0,1,"+(e+a-i)+","+(o+n)+" L "+(e+i)+","+(o+n)+" A "+i+","+p+",0,0,1,"+e+","+(o+n-p)+" L "+e+","+(o+p)+" A "+i+","+p+",0,0,1,"+(e+i)+","+o}else r.d="M"+e+" "+o+" L"+(e+a)+" "+o+" L"+(e+a)+" "+(o+n)+" L"+e+" "+(o+n)+" Z";return r},Pathformer.prototype.polylineToPath=function(t){var r,e,o={},a=t.points.trim().split(" ");if(-1===t.points.indexOf(",")){var n=[];for(r=0;r<a.length;r+=2)n.push(a[r]+","+a[r+1]);a=n}for(e="M"+a[0],r=1;r<a.length;r++)-1!==a[r].indexOf(",")&&(e+="L"+a[r]);return o.d=e,o},Pathformer.prototype.polygonToPath=function(t){var r=Pathformer.prototype.polylineToPath(t);return r.d+="Z",r},Pathformer.prototype.ellipseToPath=function(t){var r={},e=parseFloat(t.rx)||0,o=parseFloat(t.ry)||0,a=parseFloat(t.cx)||0,n=parseFloat(t.cy)||0,i=a-e,p=n,s=parseFloat(a)+parseFloat(e),h=n;return r.d="M"+i+","+p+"A"+e+","+o+" 0,1,1 "+s+","+h+"A"+e+","+o+" 0,1,1 "+i+","+h,r},Pathformer.prototype.circleToPath=function(t){var r={},e=parseFloat(t.r)||0,o=parseFloat(t.cx)||0,a=parseFloat(t.cy)||0,n=o-e,i=a,p=parseFloat(o)+parseFloat(e),s=a;return r.d="M"+n+","+i+"A"+e+","+e+" 0,1,1 "+p+","+s+"A"+e+","+e+" 0,1,1 "+n+","+s,r},Pathformer.prototype.pathMaker=function(t,r){var e,o,a=document.createElementNS("http://www.w3.org/2000/svg","path");for(e=0;e<t.attributes.length;e++)o=t.attributes[e],-1===this.ATTR_WATCH.indexOf(o.name)&&a.setAttribute(o.name,o.value);for(e in r)a.setAttribute(e,r[e]);return a},Pathformer.prototype.parseAttr=function(t){for(var r,e={},o=0;o<t.length;o++){if(r=t[o],-1!==this.ATTR_WATCH.indexOf(r.name)&&-1!==r.value.indexOf("%"))throw new Error("Pathformer [parseAttr]: a SVG shape got values in percentage. This cannot be transformed into 'path' tags. Please use 'viewBox'.");e[r.name]=r.value}return e};