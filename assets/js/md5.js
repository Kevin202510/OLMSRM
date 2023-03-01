!(function (_) {
  "use strict";
  function $(_, $) {
    var n = (65535 & _) + (65535 & $);
    return (((_ >> 16) + ($ >> 16) + (n >> 16)) << 16) | (65535 & n);
  }
  function n(_, n, t, r, o, e) {
    return $(((e = $($(n, _), $(r, e))) << o) | (e >>> (32 - o)), t);
  }
  function t(_, $, t, r, o, e, u) {
    return n(($ & t) | (~$ & r), _, $, o, e, u);
  }
  function r(_, $, t, r, o, e, u) {
    return n(($ & r) | (t & ~r), _, $, o, e, u);
  }
  function o(_, $, t, r, o, e, u) {
    return n($ ^ t ^ r, _, $, o, e, u);
  }
  function e(_, $, t, r, o, e, u) {
    return n(t ^ ($ | ~r), _, $, o, e, u);
  }
  function u(_, n) {
    var u, c, f, i;
    (_[n >> 5] |= 128 << n % 32), (_[14 + (((n + 64) >>> 9) << 4)] = n);
    for (
      var a = 1732584193, h = -271733879, g = -1732584194, l = 271733878, v = 0;
      v < _.length;
      v += 16
    )
      (a = t((u = a), (c = h), (f = g), (i = l), _[v], 7, -680876936)),
        (l = t(l, a, h, g, _[v + 1], 12, -389564586)),
        (g = t(g, l, a, h, _[v + 2], 17, 606105819)),
        (h = t(h, g, l, a, _[v + 3], 22, -1044525330)),
        (a = t(a, h, g, l, _[v + 4], 7, -176418897)),
        (l = t(l, a, h, g, _[v + 5], 12, 1200080426)),
        (g = t(g, l, a, h, _[v + 6], 17, -1473231341)),
        (h = t(h, g, l, a, _[v + 7], 22, -45705983)),
        (a = t(a, h, g, l, _[v + 8], 7, 1770035416)),
        (l = t(l, a, h, g, _[v + 9], 12, -1958414417)),
        (g = t(g, l, a, h, _[v + 10], 17, -42063)),
        (h = t(h, g, l, a, _[v + 11], 22, -1990404162)),
        (a = t(a, h, g, l, _[v + 12], 7, 1804603682)),
        (l = t(l, a, h, g, _[v + 13], 12, -40341101)),
        (g = t(g, l, a, h, _[v + 14], 17, -1502002290)),
        (a = r(
          a,
          (h = t(h, g, l, a, _[v + 15], 22, 1236535329)),
          g,
          l,
          _[v + 1],
          5,
          -165796510
        )),
        (l = r(l, a, h, g, _[v + 6], 9, -1069501632)),
        (g = r(g, l, a, h, _[v + 11], 14, 643717713)),
        (h = r(h, g, l, a, _[v], 20, -373897302)),
        (a = r(a, h, g, l, _[v + 5], 5, -701558691)),
        (l = r(l, a, h, g, _[v + 10], 9, 38016083)),
        (g = r(g, l, a, h, _[v + 15], 14, -660478335)),
        (h = r(h, g, l, a, _[v + 4], 20, -405537848)),
        (a = r(a, h, g, l, _[v + 9], 5, 568446438)),
        (l = r(l, a, h, g, _[v + 14], 9, -1019803690)),
        (g = r(g, l, a, h, _[v + 3], 14, -187363961)),
        (h = r(h, g, l, a, _[v + 8], 20, 1163531501)),
        (a = r(a, h, g, l, _[v + 13], 5, -1444681467)),
        (l = r(l, a, h, g, _[v + 2], 9, -51403784)),
        (g = r(g, l, a, h, _[v + 7], 14, 1735328473)),
        (a = o(
          a,
          (h = r(h, g, l, a, _[v + 12], 20, -1926607734)),
          g,
          l,
          _[v + 5],
          4,
          -378558
        )),
        (l = o(l, a, h, g, _[v + 8], 11, -2022574463)),
        (g = o(g, l, a, h, _[v + 11], 16, 1839030562)),
        (h = o(h, g, l, a, _[v + 14], 23, -35309556)),
        (a = o(a, h, g, l, _[v + 1], 4, -1530992060)),
        (l = o(l, a, h, g, _[v + 4], 11, 1272893353)),
        (g = o(g, l, a, h, _[v + 7], 16, -155497632)),
        (h = o(h, g, l, a, _[v + 10], 23, -1094730640)),
        (a = o(a, h, g, l, _[v + 13], 4, 681279174)),
        (l = o(l, a, h, g, _[v], 11, -358537222)),
        (g = o(g, l, a, h, _[v + 3], 16, -722521979)),
        (h = o(h, g, l, a, _[v + 6], 23, 76029189)),
        (a = o(a, h, g, l, _[v + 9], 4, -640364487)),
        (l = o(l, a, h, g, _[v + 12], 11, -421815835)),
        (g = o(g, l, a, h, _[v + 15], 16, 530742520)),
        (a = e(
          a,
          (h = o(h, g, l, a, _[v + 2], 23, -995338651)),
          g,
          l,
          _[v],
          6,
          -198630844
        )),
        (l = e(l, a, h, g, _[v + 7], 10, 1126891415)),
        (g = e(g, l, a, h, _[v + 14], 15, -1416354905)),
        (h = e(h, g, l, a, _[v + 5], 21, -57434055)),
        (a = e(a, h, g, l, _[v + 12], 6, 1700485571)),
        (l = e(l, a, h, g, _[v + 3], 10, -1894986606)),
        (g = e(g, l, a, h, _[v + 10], 15, -1051523)),
        (h = e(h, g, l, a, _[v + 1], 21, -2054922799)),
        (a = e(a, h, g, l, _[v + 8], 6, 1873313359)),
        (l = e(l, a, h, g, _[v + 15], 10, -30611744)),
        (g = e(g, l, a, h, _[v + 6], 15, -1560198380)),
        (h = e(h, g, l, a, _[v + 13], 21, 1309151649)),
        (a = e(a, h, g, l, _[v + 4], 6, -145523070)),
        (l = e(l, a, h, g, _[v + 11], 10, -1120210379)),
        (g = e(g, l, a, h, _[v + 2], 15, 718787259)),
        (h = e(h, g, l, a, _[v + 9], 21, -343485551)),
        (a = $(a, u)),
        (h = $(h, c)),
        (g = $(g, f)),
        (l = $(l, i));
    return [a, h, g, l];
  }
  function c(_) {
    for (var $ = "", n = 32 * _.length, t = 0; t < n; t += 8)
      $ += String.fromCharCode((_[t >> 5] >>> t % 32) & 255);
    return $;
  }
  function f(_) {
    var $ = [];
    for ($[(_.length >> 2) - 1] = void 0, t = 0; t < $.length; t += 1) $[t] = 0;
    for (var n = 8 * _.length, t = 0; t < n; t += 8)
      $[t >> 5] |= (255 & _.charCodeAt(t / 8)) << t % 32;
    return $;
  }
  function i(_) {
    for (var $, n = "0123456789abcdef", t = "", r = 0; r < _.length; r += 1)
      t += n.charAt((($ = _.charCodeAt(r)) >>> 4) & 15) + n.charAt(15 & $);
    return t;
  }
  function a(_) {
    return unescape(encodeURIComponent(_));
  }
  function h(_) {
    return c(u(f((_ = a(_))), 8 * _.length));
  }
  function g(_, $) {
    return (function (_, $) {
      var n,
        t = f(_),
        r = [],
        o = [];
      for (
        r[15] = o[15] = void 0,
          16 < t.length && (t = u(t, 8 * _.length)),
          n = 0;
        n < 16;
        n += 1
      )
        (r[n] = 909522486 ^ t[n]), (o[n] = 1549556828 ^ t[n]);
      return (
        ($ = u(r.concat(f($)), 512 + 8 * $.length)), c(u(o.concat($), 640))
      );
    })(a(_), a($));
  }
  function l(_, $, n) {
    return $ ? (n ? g($, _) : i(g($, _))) : n ? h(_) : i(h(_));
  }
  "function" == typeof define && define.amd
    ? define(function () {
        return l;
      })
    : "object" == typeof module && module.exports
    ? (module.exports = l)
    : (_.md5 = l);
})(this);
