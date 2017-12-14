/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ 7:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(8);


/***/ }),

/***/ 8:
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(module) {var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*! modernizr 3.5.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-applicationcache-audio-backgroundsize-borderimage-borderradius-boxshadow-canvas-canvastext-cssanimations-csscolumns-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-flexbox-fontface-generatedcontent-geolocation-hashchange-history-hsla-indexeddb-inlinesvg-input-inputtypes-localstorage-multiplebgs-opacity-postmessage-rgba-sessionstorage-smil-svg-svgclippaths-textshadow-video-webgl-websockets-websqldatabase-webworkers-addtest-domprefixes-hasevent-prefixed-prefixes-setclasses-shiv-testallprops-testprop-teststyles !*/
!function (e, t, n) {
    function r(e, t) {
        return (typeof e === "undefined" ? "undefined" : _typeof(e)) === t;
    }

    function a() {
        var e, t, n, a, o, i, s;for (var c in w) {
            if (w.hasOwnProperty(c)) {
                if (e = [], t = w[c], t.name && (e.push(t.name.toLowerCase()), t.options && t.options.aliases && t.options.aliases.length)) for (n = 0; n < t.options.aliases.length; n++) {
                    e.push(t.options.aliases[n].toLowerCase());
                }for (a = r(t.fn, "function") ? t.fn() : t.fn, o = 0; o < e.length; o++) {
                    i = e[o], s = i.split("."), 1 === s.length ? Modernizr[s[0]] = a : (!Modernizr[s[0]] || Modernizr[s[0]] instanceof Boolean || (Modernizr[s[0]] = new Boolean(Modernizr[s[0]])), Modernizr[s[0]][s[1]] = a), T.push((a ? "" : "no-") + s.join("-"));
                }
            }
        }
    }

    function o(e) {
        var t = N.className,
            n = Modernizr._config.classPrefix || "";if (z && (t = t.baseVal), Modernizr._config.enableJSClass) {
            var r = new RegExp("(^|\\s)" + n + "no-js(\\s|$)");
            t = t.replace(r, "$1" + n + "js$2");
        }
        Modernizr._config.enableClasses && (t += " " + n + e.join(" " + n), z ? N.className.baseVal = t : N.className = t);
    }

    function i() {
        return "function" != typeof t.createElement ? t.createElement(arguments[0]) : z ? t.createElementNS.call(t, "http://www.w3.org/2000/svg", arguments[0]) : t.createElement.apply(t, arguments);
    }

    function s(e, t) {
        if ("object" == (typeof e === "undefined" ? "undefined" : _typeof(e))) for (var n in e) {
            R(e, n) && s(n, e[n]);
        } else {
            e = e.toLowerCase();var r = e.split("."),
                a = Modernizr[r[0]];if (2 == r.length && (a = a[r[1]]), "undefined" != typeof a) return Modernizr;
            t = "function" == typeof t ? t() : t, 1 == r.length ? Modernizr[r[0]] = t : (!Modernizr[r[0]] || Modernizr[r[0]] instanceof Boolean || (Modernizr[r[0]] = new Boolean(Modernizr[r[0]])), Modernizr[r[0]][r[1]] = t), o([(t && 0 != t ? "" : "no-") + r.join("-")]), Modernizr._trigger(e, t);
        }return Modernizr;
    }

    function c(e) {
        return e.replace(/([a-z])-([a-z])/g, function (e, t, n) {
            return t + n.toUpperCase();
        }).replace(/^-/, "");
    }

    function l(e, t) {
        return !!~("" + e).indexOf(t);
    }

    function d() {
        var e = t.body;return e || (e = i(z ? "svg" : "body"), e.fake = !0), e;
    }

    function u(e, n, r, a) {
        var o,
            s,
            c,
            l,
            u = "modernizr",
            f = i("div"),
            p = d();if (parseInt(r, 10)) for (; r--;) {
            c = i("div"), c.id = a ? a[r] : u + (r + 1), f.appendChild(c);
        }return o = i("style"), o.type = "text/css", o.id = "s" + u, (p.fake ? p : f).appendChild(o), p.appendChild(f), o.styleSheet ? o.styleSheet.cssText = e : o.appendChild(t.createTextNode(e)), f.id = u, p.fake && (p.style.background = "", p.style.overflow = "hidden", l = N.style.overflow, N.style.overflow = "hidden", N.appendChild(p)), s = n(f, e), p.fake ? (p.parentNode.removeChild(p), N.style.overflow = l, N.offsetHeight) : f.parentNode.removeChild(f), !!s;
    }

    function f(e, t) {
        return function () {
            return e.apply(t, arguments);
        };
    }

    function p(e, t, n) {
        var a;for (var o in e) {
            if (e[o] in t) return n === !1 ? e[o] : (a = t[e[o]], r(a, "function") ? f(a, n || t) : a);
        }return !1;
    }

    function m(t, n, r) {
        var a;if ("getComputedStyle" in e) {
            a = getComputedStyle.call(e, t, n);var o = e.console;if (null !== a) r && (a = a.getPropertyValue(r));else if (o) {
                var i = o.error ? "error" : "log";
                o[i].call(o, "getComputedStyle returning null, its possible modernizr test results are inaccurate");
            }
        } else a = !n && t.currentStyle && t.currentStyle[r];return a;
    }

    function g(e) {
        return e.replace(/([A-Z])/g, function (e, t) {
            return "-" + t.toLowerCase();
        }).replace(/^ms-/, "-ms-");
    }

    function h(t, r) {
        var a = t.length;if ("CSS" in e && "supports" in e.CSS) {
            for (; a--;) {
                if (e.CSS.supports(g(t[a]), r)) return !0;
            }return !1;
        }if ("CSSSupportsRule" in e) {
            for (var o = []; a--;) {
                o.push("(" + g(t[a]) + ":" + r + ")");
            }return o = o.join(" or "), u("@supports (" + o + ") { #modernizr { position: absolute; } }", function (e) {
                return "absolute" == m(e, null, "position");
            });
        }return n;
    }

    function v(e, t, a, o) {
        function s() {
            u && (delete U.style, delete U.modElem);
        }if (o = r(o, "undefined") ? !1 : o, !r(a, "undefined")) {
            var d = h(e, a);if (!r(d, "undefined")) return d;
        }for (var u, f, p, m, g, v = ["modernizr", "tspan", "samp"]; !U.style && v.length;) {
            u = !0, U.modElem = i(v.shift()), U.style = U.modElem.style;
        }for (p = e.length, f = 0; p > f; f++) {
            if (m = e[f], g = U.style[m], l(m, "-") && (m = c(m)), U.style[m] !== n) {
                if (o || r(a, "undefined")) return s(), "pfx" == t ? m : !0;try {
                    U.style[m] = a;
                } catch (y) {}if (U.style[m] != g) return s(), "pfx" == t ? m : !0;
            }
        }return s(), !1;
    }

    function y(e, t, n, a, o) {
        var i = e.charAt(0).toUpperCase() + e.slice(1),
            s = (e + " " + D.join(i + " ") + i).split(" ");return r(t, "string") || r(t, "undefined") ? v(s, t, a, o) : (s = (e + " " + P.join(i + " ") + i).split(" "), p(s, t, n));
    }

    function b(e, t) {
        var n = e.deleteDatabase(t);
        n.onsuccess = function () {
            s("indexeddb.deletedatabase", !0);
        }, n.onerror = function () {
            s("indexeddb.deletedatabase", !1);
        };
    }

    function x(e, t, r) {
        return y(e, n, n, t, r);
    }var T = [],
        w = [],
        S = { _version: "3.5.0", _config: { classPrefix: "", enableClasses: !0, enableJSClass: !0, usePrefixes: !0 }, _q: [], on: function on(e, t) {
            var n = this;
            setTimeout(function () {
                t(n[e]);
            }, 0);
        }, addTest: function addTest(e, t, n) {
            w.push({ name: e, fn: t, options: n });
        }, addAsyncTest: function addAsyncTest(e) {
            w.push({ name: null, fn: e });
        } },
        Modernizr = function Modernizr() {};
    Modernizr.prototype = S, Modernizr = new Modernizr(), Modernizr.addTest("applicationcache", "applicationCache" in e), Modernizr.addTest("geolocation", "geolocation" in navigator), Modernizr.addTest("history", function () {
        var t = navigator.userAgent;return -1 === t.indexOf("Android 2.") && -1 === t.indexOf("Android 4.0") || -1 === t.indexOf("Mobile Safari") || -1 !== t.indexOf("Chrome") || -1 !== t.indexOf("Windows Phone") || "file:" === location.protocol ? e.history && "pushState" in e.history : !1;
    }), Modernizr.addTest("postmessage", "postMessage" in e), Modernizr.addTest("svg", !!t.createElementNS && !!t.createElementNS("http://www.w3.org/2000/svg", "svg").createSVGRect);var C = !1;try {
        C = "WebSocket" in e && 2 === e.WebSocket.CLOSING;
    } catch (E) {}
    Modernizr.addTest("websockets", C), Modernizr.addTest("localstorage", function () {
        var e = "modernizr";try {
            return localStorage.setItem(e, e), localStorage.removeItem(e), !0;
        } catch (t) {
            return !1;
        }
    }), Modernizr.addTest("sessionstorage", function () {
        var e = "modernizr";try {
            return sessionStorage.setItem(e, e), sessionStorage.removeItem(e), !0;
        } catch (t) {
            return !1;
        }
    }), Modernizr.addTest("websqldatabase", "openDatabase" in e), Modernizr.addTest("webworkers", "Worker" in e);var k = S._config.usePrefixes ? " -webkit- -moz- -o- -ms- ".split(" ") : ["", ""];
    S._prefixes = k;var _ = "Moz O ms Webkit",
        P = S._config.usePrefixes ? _.toLowerCase().split(" ") : [];
    S._domPrefixes = P;var N = t.documentElement,
        z = "svg" === N.nodeName.toLowerCase();
    z || !function (e, t) {
        function n(e, t) {
            var n = e.createElement("p"),
                r = e.getElementsByTagName("head")[0] || e.documentElement;return n.innerHTML = "x<style>" + t + "</style>", r.insertBefore(n.lastChild, r.firstChild);
        }

        function r() {
            var e = b.elements;return "string" == typeof e ? e.split(" ") : e;
        }

        function a(e, t) {
            var n = b.elements;"string" != typeof n && (n = n.join(" ")), "string" != typeof e && (e = e.join(" ")), b.elements = n + " " + e, l(t);
        }

        function o(e) {
            var t = y[e[h]];return t || (t = {}, v++, e[h] = v, y[v] = t), t;
        }

        function i(e, n, r) {
            if (n || (n = t), u) return n.createElement(e);
            r || (r = o(n));var a;return a = r.cache[e] ? r.cache[e].cloneNode() : g.test(e) ? (r.cache[e] = r.createElem(e)).cloneNode() : r.createElem(e), !a.canHaveChildren || m.test(e) || a.tagUrn ? a : r.frag.appendChild(a);
        }

        function s(e, n) {
            if (e || (e = t), u) return e.createDocumentFragment();
            n = n || o(e);for (var a = n.frag.cloneNode(), i = 0, s = r(), c = s.length; c > i; i++) {
                a.createElement(s[i]);
            }return a;
        }

        function c(e, t) {
            t.cache || (t.cache = {}, t.createElem = e.createElement, t.createFrag = e.createDocumentFragment, t.frag = t.createFrag()), e.createElement = function (n) {
                return b.shivMethods ? i(n, e, t) : t.createElem(n);
            }, e.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + r().join().replace(/[\w\-:]+/g, function (e) {
                return t.createElem(e), t.frag.createElement(e), 'c("' + e + '")';
            }) + ");return n}")(b, t.frag);
        }

        function l(e) {
            e || (e = t);var r = o(e);return !b.shivCSS || d || r.hasCSS || (r.hasCSS = !!n(e, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")), u || c(e, r), e;
        }var d,
            u,
            f = "3.7.3",
            p = e.html5 || {},
            m = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
            g = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
            h = "_html5shiv",
            v = 0,
            y = {};!function () {
            try {
                var e = t.createElement("a");
                e.innerHTML = "<xyz></xyz>", d = "hidden" in e, u = 1 == e.childNodes.length || function () {
                    t.createElement("a");var e = t.createDocumentFragment();return "undefined" == typeof e.cloneNode || "undefined" == typeof e.createDocumentFragment || "undefined" == typeof e.createElement;
                }();
            } catch (n) {
                d = !0, u = !0;
            }
        }();var b = { elements: p.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video", version: f, shivCSS: p.shivCSS !== !1, supportsUnknownElements: u, shivMethods: p.shivMethods !== !1, type: "default", shivDocument: l, createElement: i, createDocumentFragment: s, addElements: a };
        e.html5 = b, l(t), "object" == ( false ? "undefined" : _typeof(module)) && module.exports && (module.exports = b);
    }("undefined" != typeof e ? e : this, t);var A = function () {
        function e(e, t) {
            var a;return e ? (t && "string" != typeof t || (t = i(t || "div")), e = "on" + e, a = e in t, !a && r && (t.setAttribute || (t = i("div")), t.setAttribute(e, ""), a = "function" == typeof t[e], t[e] !== n && (t[e] = n), t.removeAttribute(e)), a) : !1;
        }var r = !("onblur" in t.documentElement);return e;
    }();
    S.hasEvent = A, Modernizr.addTest("hashchange", function () {
        return A("hashchange", e) === !1 ? !1 : t.documentMode === n || t.documentMode > 7;
    }), Modernizr.addTest("audio", function () {
        var e = i("audio"),
            t = !1;try {
            t = !!e.canPlayType, t && (t = new Boolean(t), t.ogg = e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/, ""), t.mp3 = e.canPlayType('audio/mpeg; codecs="mp3"').replace(/^no$/, ""), t.opus = e.canPlayType('audio/ogg; codecs="opus"') || e.canPlayType('audio/webm; codecs="opus"').replace(/^no$/, ""), t.wav = e.canPlayType('audio/wav; codecs="1"').replace(/^no$/, ""), t.m4a = (e.canPlayType("audio/x-m4a;") || e.canPlayType("audio/aac;")).replace(/^no$/, ""));
        } catch (n) {}return t;
    }), Modernizr.addTest("canvas", function () {
        var e = i("canvas");return !(!e.getContext || !e.getContext("2d"));
    }), Modernizr.addTest("canvastext", function () {
        return Modernizr.canvas === !1 ? !1 : "function" == typeof i("canvas").getContext("2d").fillText;
    }), Modernizr.addTest("video", function () {
        var e = i("video"),
            t = !1;try {
            t = !!e.canPlayType, t && (t = new Boolean(t), t.ogg = e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, ""), t.h264 = e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, ""), t.webm = e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, ""), t.vp9 = e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/, ""), t.hls = e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/, ""));
        } catch (n) {}return t;
    }), Modernizr.addTest("webgl", function () {
        var t = i("canvas"),
            n = "probablySupportsContext" in t ? "probablySupportsContext" : "supportsContext";return n in t ? t[n]("webgl") || t[n]("experimental-webgl") : "WebGLRenderingContext" in e;
    }), Modernizr.addTest("cssgradients", function () {
        for (var e, t = "background-image:", n = "gradient(linear,left top,right bottom,from(#9f9),to(white));", r = "", a = 0, o = k.length - 1; o > a; a++) {
            e = 0 === a ? "to " : "", r += t + k[a] + "linear-gradient(" + e + "left top, #9f9, white);";
        }Modernizr._config.usePrefixes && (r += t + "-webkit-" + n);var s = i("a"),
            c = s.style;return c.cssText = r, ("" + c.backgroundImage).indexOf("gradient") > -1;
    }), Modernizr.addTest("multiplebgs", function () {
        var e = i("a").style;return e.cssText = "background:url(https://),url(https://),red url(https://)", /(url\s*\(.*?){3}/.test(e.background);
    }), Modernizr.addTest("opacity", function () {
        var e = i("a").style;return e.cssText = k.join("opacity:.55;"), /^0.55$/.test(e.opacity);
    }), Modernizr.addTest("rgba", function () {
        var e = i("a").style;return e.cssText = "background-color:rgba(150,255,150,.5)", ("" + e.backgroundColor).indexOf("rgba") > -1;
    }), Modernizr.addTest("inlinesvg", function () {
        var e = i("div");return e.innerHTML = "<svg/>", "http://www.w3.org/2000/svg" == ("undefined" != typeof SVGRect && e.firstChild && e.firstChild.namespaceURI);
    });var R;!function () {
        var e = {}.hasOwnProperty;
        R = r(e, "undefined") || r(e.call, "undefined") ? function (e, t) {
            return t in e && r(e.constructor.prototype[t], "undefined");
        } : function (t, n) {
            return e.call(t, n);
        };
    }(), S._l = {}, S.on = function (e, t) {
        this._l[e] || (this._l[e] = []), this._l[e].push(t), Modernizr.hasOwnProperty(e) && setTimeout(function () {
            Modernizr._trigger(e, Modernizr[e]);
        }, 0);
    }, S._trigger = function (e, t) {
        if (this._l[e]) {
            var n = this._l[e];
            setTimeout(function () {
                var e, r;for (e = 0; e < n.length; e++) {
                    (r = n[e])(t);
                }
            }, 0), delete this._l[e];
        }
    }, Modernizr._q.push(function () {
        S.addTest = s;
    }), Modernizr.addTest("hsla", function () {
        var e = i("a").style;return e.cssText = "background-color:hsla(120,40%,100%,.5)", l(e.backgroundColor, "rgba") || l(e.backgroundColor, "hsla");
    });var $ = i("input"),
        O = "autocomplete autofocus list placeholder max min multiple pattern required step".split(" "),
        L = {};
    Modernizr.input = function (t) {
        for (var n = 0, r = t.length; r > n; n++) {
            L[t[n]] = !!(t[n] in $);
        }return L.list && (L.list = !(!i("datalist") || !e.HTMLDataListElement)), L;
    }(O);var B = "search tel url email datetime date month week time datetime-local number range color".split(" "),
        j = {};
    Modernizr.inputtypes = function (e) {
        for (var r, a, o, i = e.length, s = "1)", c = 0; i > c; c++) {
            $.setAttribute("type", r = e[c]), o = "text" !== $.type && "style" in $, o && ($.value = s, $.style.cssText = "position:absolute;visibility:hidden;", /^range$/.test(r) && $.style.WebkitAppearance !== n ? (N.appendChild($), a = t.defaultView, o = a.getComputedStyle && "textfield" !== a.getComputedStyle($, null).WebkitAppearance && 0 !== $.offsetHeight, N.removeChild($)) : /^(search|tel)$/.test(r) || (o = /^(url|email)$/.test(r) ? $.checkValidity && $.checkValidity() === !1 : $.value != s)), j[e[c]] = !!o;
        }return j;
    }(B);var M = "CSS" in e && "supports" in e.CSS,
        F = "supportsCSS" in e;
    Modernizr.addTest("supports", M || F);var I = {}.toString;
    Modernizr.addTest("svgclippaths", function () {
        return !!t.createElementNS && /SVGClipPath/.test(I.call(t.createElementNS("http://www.w3.org/2000/svg", "clipPath")));
    }), Modernizr.addTest("smil", function () {
        return !!t.createElementNS && /SVGAnimate/.test(I.call(t.createElementNS("http://www.w3.org/2000/svg", "animate")));
    });var D = S._config.usePrefixes ? _.split(" ") : [];
    S._cssomPrefixes = D;var V = function V(t) {
        var r,
            a = k.length,
            o = e.CSSRule;if ("undefined" == typeof o) return n;if (!t) return !1;if (t = t.replace(/^@/, ""), r = t.replace(/-/g, "_").toUpperCase() + "_RULE", r in o) return "@" + t;for (var i = 0; a > i; i++) {
            var s = k[i],
                c = s.toUpperCase() + "_" + r;if (c in o) return "@-" + s.toLowerCase() + "-" + t;
        }return !1;
    };
    S.atRule = V;var W = S.testStyles = u,
        q = function () {
        var e = navigator.userAgent,
            t = e.match(/w(eb)?osbrowser/gi),
            n = e.match(/windows phone/gi) && e.match(/iemobile\/([0-9])+/gi) && parseFloat(RegExp.$1) >= 9;return t || n;
    }();
    q ? Modernizr.addTest("fontface", !1) : W('@font-face {font-family:"font";src:url("https://")}', function (e, n) {
        var r = t.getElementById("smodernizr"),
            a = r.sheet || r.styleSheet,
            o = a ? a.cssRules && a.cssRules[0] ? a.cssRules[0].cssText : a.cssText || "" : "",
            i = /src/i.test(o) && 0 === o.indexOf(n.split(" ")[0]);
        Modernizr.addTest("fontface", i);
    }), W('#modernizr{font:0/0 a}#modernizr:after{content:":)";visibility:hidden;font:7px/1 a}', function (e) {
        Modernizr.addTest("generatedcontent", e.offsetHeight >= 6);
    });var H = { elem: i("modernizr") };
    Modernizr._q.push(function () {
        delete H.elem;
    });var U = { style: H.elem.style };
    Modernizr._q.unshift(function () {
        delete U.style;
    });var G = S.testProp = function (e, t, r) {
        return v([e], n, t, r);
    };
    Modernizr.addTest("textshadow", G("textShadow", "1px 1px")), S.testAllProps = y;var J = S.prefixed = function (e, t, n) {
        return 0 === e.indexOf("@") ? V(e) : (-1 != e.indexOf("-") && (e = c(e)), t ? y(e, t, n) : y(e, "pfx"));
    };
    Modernizr.addAsyncTest(function () {
        var t;try {
            t = J("indexedDB", e);
        } catch (n) {}if (t) {
            var r = "modernizr-" + Math.random(),
                a = t.open(r);
            a.onerror = function () {
                a.error && "InvalidStateError" === a.error.name ? s("indexeddb", !1) : (s("indexeddb", !0), b(t, r));
            }, a.onsuccess = function () {
                s("indexeddb", !0), b(t, r);
            };
        } else s("indexeddb", !1);
    }), S.testAllProps = x, Modernizr.addTest("cssanimations", x("animationName", "a", !0)), Modernizr.addTest("backgroundsize", x("backgroundSize", "100%", !0)), Modernizr.addTest("borderimage", x("borderImage", "url() 1", !0)), Modernizr.addTest("borderradius", x("borderRadius", "0px", !0)), Modernizr.addTest("boxshadow", x("boxShadow", "1px 1px", !0)), function () {
        Modernizr.addTest("csscolumns", function () {
            var e = !1,
                t = x("columnCount");try {
                e = !!t, e && (e = new Boolean(e));
            } catch (n) {}return e;
        });for (var e, t, n = ["Width", "Span", "Fill", "Gap", "Rule", "RuleColor", "RuleStyle", "RuleWidth", "BreakBefore", "BreakAfter", "BreakInside"], r = 0; r < n.length; r++) {
            e = n[r].toLowerCase(), t = x("column" + n[r]), ("breakbefore" === e || "breakafter" === e || "breakinside" == e) && (t = t || x(n[r])), Modernizr.addTest("csscolumns." + e, t);
        }
    }(), Modernizr.addTest("flexbox", x("flexBasis", "1px", !0)), Modernizr.addTest("cssreflections", x("boxReflect", "above", !0)), Modernizr.addTest("csstransforms", function () {
        return -1 === navigator.userAgent.indexOf("Android 2.") && x("transform", "scale(1)", !0);
    }), Modernizr.addTest("csstransforms3d", function () {
        var e = !!x("perspective", "1px", !0),
            t = Modernizr._config.usePrefixes;if (e && (!t || "webkitPerspective" in N.style)) {
            var n,
                r = "#modernizr{width:0;height:0}";
            Modernizr.supports ? n = "@supports (perspective: 1px)" : (n = "@media (transform-3d)", t && (n += ",(-webkit-transform-3d)")), n += "{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}", W(r + n, function (t) {
                e = 7 === t.offsetWidth && 18 === t.offsetHeight;
            });
        }return e;
    }), Modernizr.addTest("csstransitions", x("transition", "all", !0)), a(), o(T), delete S.addTest, delete S.addAsyncTest;for (var Z = 0; Z < Modernizr._q.length; Z++) {
        Modernizr._q[Z]();
    }e.Modernizr = Modernizr;
}(window, document);
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(9)(module)))

/***/ }),

/***/ 9:
/***/ (function(module, exports) {

module.exports = function(module) {
	if(!module.webpackPolyfill) {
		module.deprecate = function() {};
		module.paths = [];
		// module.parent = undefined by default
		if(!module.children) module.children = [];
		Object.defineProperty(module, "loaded", {
			enumerable: true,
			get: function() {
				return module.l;
			}
		});
		Object.defineProperty(module, "id", {
			enumerable: true,
			get: function() {
				return module.i;
			}
		});
		module.webpackPolyfill = 1;
	}
	return module;
};


/***/ })

/******/ });