!function(n){var t=n.fn.jquery.split("."),e=parseInt(t[0]),r=parseInt(t[1]),i=parseInt(t[2]),o=i.toString()!==t[2];e>3||3===e&&r>4||3===e&&4===r&&i>0||3===e&&4===r&&0===i&&!o||(n.extend=n.fn.extend=function(){var t,e,r,i,o,a,s=arguments[0]||{},f=1,l=arguments.length,p=!1;for("boolean"==typeof s&&(p=s,s=arguments[f]||{},f++),"object"==typeof s||n.isFunction(s)||(s={}),f===l&&(s=this,f--);f<l;f++)if(null!=(t=arguments[f]))for(e in t)i=t[e],"__proto__"!==e&&s!==i&&(p&&i&&(n.isPlainObject(i)||(o=n.isArray(i)))?(r=s[e],a=o&&!n.isArray(r)?[]:o||n.isPlainObject(r)?r:{},o=!1,s[e]=n.extend(p,a,i)):void 0!==i&&(s[e]=i));return s})}(jQuery);