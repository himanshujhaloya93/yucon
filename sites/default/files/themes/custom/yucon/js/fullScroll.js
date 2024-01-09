!(function (e) {
  var t = {};
  function n(r) {
    if (t[r]) return t[r].exports;
    var o = (t[r] = { i: r, l: !1, exports: {} });
    return e[r].call(o.exports, o, o.exports, n), (o.l = !0), o.exports;
  }
  (n.m = e),
    (n.c = t),
    (n.d = function (e, t, r) {
      n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: r });
    }),
    (n.r = function (e) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
        Object.defineProperty(e, "__esModule", { value: !0 });
    }),
    (n.t = function (e, t) {
      if ((1 & t && (e = n(e)), 8 & t)) return e;
      if (4 & t && "object" == typeof e && e && e.__esModule) return e;
      var r = Object.create(null);
      if (
        (n.r(r),
        Object.defineProperty(r, "default", { enumerable: !0, value: e }),
        2 & t && "string" != typeof e)
      )
        for (var o in e)
          n.d(
            r,
            o,
            function (t) {
              return e[t];
            }.bind(null, o)
          );
      return r;
    }),
    (n.n = function (e) {
      var t =
        e && e.__esModule
          ? function () {
              return e.default;
            }
          : function () {
              return e;
            };
      return n.d(t, "a", t), t;
    }),
    (n.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (n.p = ""),
    n((n.s = 0));
})([
  function (e, t, n) {
    "use strict";
    var r,
      o =
        (this && this.__extends) ||
        ((r = function (e, t) {
          return (r =
            Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array &&
              function (e, t) {
                e.__proto__ = t;
              }) ||
            function (e, t) {
              for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n]);
            })(e, t);
        }),
        function (e, t) {
          function n() {
            this.constructor = e;
          }
          r(e, t),
            (e.prototype =
              null === t
                ? Object.create(t)
                : ((n.prototype = t.prototype), new n()));
        }),
      i =
        (this && this.__assign) ||
        function () {
          return (i =
            Object.assign ||
            function (e) {
              for (var t, n = 1, r = arguments.length; n < r; n++)
                for (var o in (t = arguments[n]))
                  Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
              return e;
            }).apply(this, arguments);
        };
    Object.defineProperty(t, "__esModule", { value: !0 });
    var a = n(1),
      s = n(2),
      l = n(3),
      c = n(4);
    t.defaultScrollOptions = {
      transitionTime: 1e3,
      goToTopOnLast: !0,
      mediaQuery: "screen",
      slideSelector: "section",
    };
    var u = (function (e) {
      function n(n, r) {
        var o = e.call(this) || this;
        if (
          ((o.addStylesAndEvents = function () {
            window.scroll(0, 0),
              (o.currentSlide = 0),
              (document.body.style.overflow = "hidden"),
              (o.wrapperElement.style.transform = "translateY(0)"),
              (o.wrapperElement.style.transition =
                o.options.transitionTime.toString() +
                "ms cubic-bezier(0.5, 0, 0.5, 1)"),
              o.swipeEventHandler.addEventListeners(),
              o.scrollEventHandler.addEventListeners(),
              (o.isActive = !0),
              o.dispatchEvent(new Event("activate"));
          }),
          (o.removeStylesAndEvents = function () {
            (document.body.style.overflow = "auto"),
              (o.wrapperElement.style.transform = "none"),
              (o.wrapperElement.style.transition = "none"),
              o.swipeEventHandler.removeEventListeners(),
              o.scrollEventHandler.removeEventListeners(),
              (o.isActive = !1),
              o.dispatchEvent(new Event("deactivate"));
          }),
          (o.goToSlide = function (e) {
            if (!(e === o.currentSlide || e < 0)) {
              if (e >= o.slides.length) {
                if (!o.options.goToTopOnLast) return;
                e = 0;
              }
              if (!1 === o.waitForAnimation) {
                var t = new Event("slide");
                o.waitForAnimation = !0;
                var n = 100 * -e;
                (o.currentSlide = e),
                  (o.wrapperElement.style.transform =
                    "translateY(" + n + "vh)"),
                  o.dispatchEvent(t),
                  setTimeout(function () {
                    o.waitForAnimation = !1;
                  }, 1e3);
              }
            }
          }),
          (o.goToFirstSlide = function () {
            o.goToSlide(0);
          }),
          (o.nextSlide = function () {
            o.goToSlide(o.currentSlide + 1);
          }),
          (o.previousSlide = function () {
            o.goToSlide(o.currentSlide - 1);
          }),
          (o.wrapperElement = null),
          (o.waitForAnimation = !1),
          (o.currentSlide = 0),
          (o.isActive = !1),
          (o.options = t.defaultScrollOptions),
          r && (o.options = i({}, o.options, r)),
          (o.mediaQueryList = window.matchMedia(o.options.mediaQuery)),
          n instanceof HTMLElement
            ? (o.wrapperElement = n)
            : "string" == typeof n &&
              (o.wrapperElement = document.getElementById(n)),
          null === o.wrapperElement)
        )
          throw "An Element with the given ID could not be found.";
        return (
          (o.slides = o.wrapperElement.querySelectorAll(
            o.options.slideSelector
          )),
          (o.matchMediaEventHandler = new l.MatchMediaEventHandler(
            o.mediaQueryList,
            o.addStylesAndEvents,
            o.removeStylesAndEvents
          )),
          (o.swipeEventHandler = new a.SwipeEventHandler(
            o.wrapperElement,
            o.nextSlide,
            o.previousSlide,
            o.options.swipeOptions
          )),
          (o.scrollEventHandler = new s.ScrollEventHandler(
            o.wrapperElement,
            o.nextSlide,
            o.previousSlide,
            o.options.wheelOptions
          )),
          o.mediaQueryList.matches && o.addStylesAndEvents(),
          o.matchMediaEventHandler.addEventListeners(),
          o
        );
      }
      return o(n, e), n;
    })(c.EventTarget);
    (t.FullPageScroll = u),
      c.defineEventAttribute(u.prototype, "deactivate"),
      c.defineEventAttribute(u.prototype, "activate"),
      c.defineEventAttribute(u.prototype, "slide"),
      (window.FullPageScroll = u);
  },
  function (e, t, n) {
    "use strict";
    var r,
      o =
        (this && this.__assign) ||
        function () {
          return (o =
            Object.assign ||
            function (e) {
              for (var t, n = 1, r = arguments.length; n < r; n++)
                for (var o in (t = arguments[n]))
                  Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
              return e;
            }).apply(this, arguments);
        };
    Object.defineProperty(t, "__esModule", { value: !0 }),
      (function (e) {
        (e.NONE = "NONE"),
          (e.UP = "UP"),
          (e.DOWN = "DOWN"),
          (e.LEFT = "LEFT"),
          (e.RIGHT = "RIGHT");
      })(r || (r = {}));
    var i = (function () {
      return function (e, t, n, i) {
        var a = this;
        (this.addEventListeners = function () {
          a.target.addEventListener("touchstart", a.touchstartEventHandler),
            a.target.addEventListener("touchend", a.touchendEventHandler),
            a.target.addEventListener("touchmove", a.touchmoveEventHandler);
        }),
          (this.removeEventListeners = function () {
            a.target.removeEventListener(
              "touchstart",
              a.touchstartEventHandler
            ),
              a.target.removeEventListener("touchend", a.touchendEventHandler),
              a.target.removeEventListener(
                "touchmove",
                a.touchmoveEventHandler
              );
          }),
          (this.touchstartEventHandler = function (e) {
            var t = e.changedTouches[0];
            (a.touchEvent.swipeDirection = r.NONE),
              (a.touchEvent.touchstartPageX = t.pageX),
              (a.touchEvent.touchstartPageY = t.pageY),
              (a.touchEvent.touchstartTime = new Date().getTime());
          }),
          (this.touchendEventHandler = function (e) {
            var t = r.NONE,
              n = e.changedTouches[0],
              o = n.pageX - a.touchEvent.touchstartPageX,
              i = n.pageY - a.touchEvent.touchstartPageY;
            new Date().getTime() - a.touchEvent.touchstartTime <=
              a.swipeOptions.maxSwipeTime &&
              (Math.abs(o) > Math.abs(i)
                ? Math.abs(o) > a.swipeOptions.swipeMinDistance &&
                  (t = o < 0 ? r.LEFT : r.RIGHT)
                : Math.abs(i) > a.swipeOptions.swipeMinDistance &&
                  (t = i < 0 ? r.UP : r.DOWN),
              t === r.UP
                ? a.nextCallback()
                : t === r.DOWN && a.previousCallback(),
              e.stopPropagation());
          }),
          (this.touchmoveEventHandler = function (e) {
            e.preventDefault();
          }),
          (this.target = e),
          (this.nextCallback = t),
          (this.previousCallback = n),
          (this.swipeOptions = { swipeMinDistance: 30, maxSwipeTime: 500 }),
          i && (this.swipeOptions = o({}, this.swipeOptions, i)),
          (this.touchEvent = { swipeDirection: r.NONE });
      };
    })();
    t.SwipeEventHandler = i;
  },
  function (e, t, n) {
    "use strict";
    var r =
      (this && this.__assign) ||
      function () {
        return (r =
          Object.assign ||
          function (e) {
            for (var t, n = 1, r = arguments.length; n < r; n++)
              for (var o in (t = arguments[n]))
                Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
            return e;
          }).apply(this, arguments);
      };
    Object.defineProperty(t, "__esModule", { value: !0 }),
      (t.defaultWheelOptions = { newScrollThreshold: 400 });
    var o = (function () {
      return function (e, n, o, i) {
        var a = this;
        (this.addEventListeners = function () {
          a.target.addEventListener("wheel", a.wheelEventHandler);
        }),
          (this.removeEventListeners = function () {
            a.target.removeEventListener("wheel", a.wheelEventHandler);
          }),
          (this.wheelEventHandler = function (e) {
            var t = e.deltaY,
              n = (t > 0 && a.lastDelta < 0) || (t < 0 && a.lastDelta > 0);
            a.lastDelta = t;
            var r = new Date().getTime(),
              o = r - a.lastCall;
            (a.lastCall = r),
              (!n && o < a.options.newScrollThreshold) ||
                (e.stopPropagation(),
                t < 0 && a.previousCallback(),
                t > 0 && a.nextCallback());
          }),
          (this.target = e),
          (this.nextCallback = n),
          (this.previousCallback = o),
          (this.options = r({}, t.defaultWheelOptions, i));
      };
    })();
    t.ScrollEventHandler = o;
  },
  function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 });
    var r = (function () {
      return function (e, t, n) {
        var r = this;
        (this.addEventListeners = function () {
          "addEventListener" in r.target
            ? r.target.addEventListener("change", r.changeEventHandler)
            : window.addEventListener("resize", r.resizeEventHandler);
        }),
          (this.removeEventListeners = function () {
            "removeEventListener" in r.target
              ? r.target.removeEventListener("change", r.changeEventHandler)
              : window.removeEventListener("resize", r.resizeEventHandler);
          }),
          (this.resizeEventHandler = function (e) {
            r.tagetMatches !== r.target.matches &&
              ((r.tagetMatches = r.target.matches),
              r.target.matches ? r.matchesCallback() : r.noMatchesCallback());
          }),
          (this.changeEventHandler = function (e) {
            e.stopPropagation(),
              (r.tagetMatches = r.target.matches),
              r.target.matches ? r.matchesCallback() : r.noMatchesCallback();
          }),
          (this.target = e),
          (this.tagetMatches = this.target.matches),
          (this.matchesCallback = t),
          (this.noMatchesCallback = n);
      };
    })();
    t.MatchMediaEventHandler = r;
  },
  function (e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 });
    const r = new WeakMap(),
      o = new WeakMap();
    function i(e) {
      const t = r.get(e);
      return (
        console.assert(
          null != t,
          "'this' is expected an Event object, but got",
          e
        ),
        t
      );
    }
    function a(e) {
      null == e.passiveListener
        ? e.event.cancelable &&
          ((e.canceled = !0),
          "function" == typeof e.event.preventDefault &&
            e.event.preventDefault())
        : "undefined" != typeof console &&
          "function" == typeof console.error &&
          console.error(
            "Unable to preventDefault inside passive event listener invocation.",
            e.passiveListener
          );
    }
    function s(e, t) {
      r.set(this, {
        eventTarget: e,
        event: t,
        eventPhase: 2,
        currentTarget: e,
        canceled: !1,
        stopped: !1,
        immediateStopped: !1,
        passiveListener: null,
        timeStamp: t.timeStamp || Date.now(),
      }),
        Object.defineProperty(this, "isTrusted", { value: !1, enumerable: !0 });
      const n = Object.keys(t);
      for (let e = 0; e < n.length; ++e) {
        const t = n[e];
        t in this || Object.defineProperty(this, t, l(t));
      }
    }
    function l(e) {
      return {
        get() {
          return i(this).event[e];
        },
        set(t) {
          i(this).event[e] = t;
        },
        configurable: !0,
        enumerable: !0,
      };
    }
    function c(e) {
      return {
        value() {
          const t = i(this).event;
          return t[e].apply(t, arguments);
        },
        configurable: !0,
        enumerable: !0,
      };
    }
    function u(e) {
      if (null == e || e === Object.prototype) return s;
      let t = o.get(e);
      return (
        null == t &&
          ((t = (function (e, t) {
            const n = Object.keys(t);
            if (0 === n.length) return e;
            function r(t, n) {
              e.call(this, t, n);
            }
            r.prototype = Object.create(e.prototype, {
              constructor: { value: r, configurable: !0, writable: !0 },
            });
            for (let o = 0; o < n.length; ++o) {
              const i = n[o];
              if (!(i in e.prototype)) {
                const e =
                  "function" ==
                  typeof Object.getOwnPropertyDescriptor(t, i).value;
                Object.defineProperty(r.prototype, i, e ? c(i) : l(i));
              }
            }
            return r;
          })(u(Object.getPrototypeOf(e)), e)),
          o.set(e, t)),
        t
      );
    }
    function p(e) {
      return i(e).immediateStopped;
    }
    function d(e, t) {
      i(e).passiveListener = t;
    }
    (s.prototype = {
      get type() {
        return i(this).event.type;
      },
      get target() {
        return i(this).eventTarget;
      },
      get currentTarget() {
        return i(this).currentTarget;
      },
      composedPath() {
        const e = i(this).currentTarget;
        return null == e ? [] : [e];
      },
      get NONE() {
        return 0;
      },
      get CAPTURING_PHASE() {
        return 1;
      },
      get AT_TARGET() {
        return 2;
      },
      get BUBBLING_PHASE() {
        return 3;
      },
      get eventPhase() {
        return i(this).eventPhase;
      },
      stopPropagation() {
        const e = i(this);
        (e.stopped = !0),
          "function" == typeof e.event.stopPropagation &&
            e.event.stopPropagation();
      },
      stopImmediatePropagation() {
        const e = i(this);
        (e.stopped = !0),
          (e.immediateStopped = !0),
          "function" == typeof e.event.stopImmediatePropagation &&
            e.event.stopImmediatePropagation();
      },
      get bubbles() {
        return Boolean(i(this).event.bubbles);
      },
      get cancelable() {
        return Boolean(i(this).event.cancelable);
      },
      preventDefault() {
        a(i(this));
      },
      get defaultPrevented() {
        return i(this).canceled;
      },
      get composed() {
        return Boolean(i(this).event.composed);
      },
      get timeStamp() {
        return i(this).timeStamp;
      },
      get srcElement() {
        return i(this).eventTarget;
      },
      get cancelBubble() {
        return i(this).stopped;
      },
      set cancelBubble(e) {
        if (!e) return;
        const t = i(this);
        (t.stopped = !0),
          "boolean" == typeof t.event.cancelBubble &&
            (t.event.cancelBubble = !0);
      },
      get returnValue() {
        return !i(this).canceled;
      },
      set returnValue(e) {
        e || a(i(this));
      },
      initEvent() {},
    }),
      Object.defineProperty(s.prototype, "constructor", {
        value: s,
        configurable: !0,
        writable: !0,
      }),
      "undefined" != typeof window &&
        void 0 !== window.Event &&
        (Object.setPrototypeOf(s.prototype, window.Event.prototype),
        o.set(window.Event.prototype, s));
    const v = new WeakMap(),
      f = 3;
    function h(e) {
      return null !== e && "object" == typeof e;
    }
    function g(e) {
      const t = v.get(e);
      if (null == t)
        throw new TypeError(
          "'this' is expected an EventTarget object, but got another value."
        );
      return t;
    }
    function E(e, t) {
      Object.defineProperty(
        e,
        `on${t}`,
        (function (e) {
          return {
            get() {
              let t = g(this).get(e);
              for (; null != t; ) {
                if (t.listenerType === f) return t.listener;
                t = t.next;
              }
              return null;
            },
            set(t) {
              "function" == typeof t || h(t) || (t = null);
              const n = g(this);
              let r = null,
                o = n.get(e);
              for (; null != o; )
                o.listenerType === f
                  ? null !== r
                    ? (r.next = o.next)
                    : null !== o.next
                    ? n.set(e, o.next)
                    : n.delete(e)
                  : (r = o),
                  (o = o.next);
              if (null !== t) {
                const o = {
                  listener: t,
                  listenerType: f,
                  passive: !1,
                  once: !1,
                  next: null,
                };
                null === r ? n.set(e, o) : (r.next = o);
              }
            },
            configurable: !0,
            enumerable: !0,
          };
        })(t)
      );
    }
    function y(e) {
      function t() {
        b.call(this);
      }
      t.prototype = Object.create(b.prototype, {
        constructor: { value: t, configurable: !0, writable: !0 },
      });
      for (let n = 0; n < e.length; ++n) E(t.prototype, e[n]);
      return t;
    }
    function b() {
      if (!(this instanceof b)) {
        if (1 === arguments.length && Array.isArray(arguments[0]))
          return y(arguments[0]);
        if (arguments.length > 0) {
          const e = new Array(arguments.length);
          for (let t = 0; t < arguments.length; ++t) e[t] = arguments[t];
          return y(e);
        }
        throw new TypeError("Cannot call a class as a function");
      }
      v.set(this, new Map());
    }
    (b.prototype = {
      addEventListener(e, t, n) {
        if (null == t) return;
        if ("function" != typeof t && !h(t))
          throw new TypeError("'listener' should be a function or an object.");
        const r = g(this),
          o = h(n),
          i = (o ? Boolean(n.capture) : Boolean(n)) ? 1 : 2,
          a = {
            listener: t,
            listenerType: i,
            passive: o && Boolean(n.passive),
            once: o && Boolean(n.once),
            next: null,
          };
        let s = r.get(e);
        if (void 0 === s) return void r.set(e, a);
        let l = null;
        for (; null != s; ) {
          if (s.listener === t && s.listenerType === i) return;
          (l = s), (s = s.next);
        }
        l.next = a;
      },
      removeEventListener(e, t, n) {
        if (null == t) return;
        const r = g(this),
          o = (h(n) ? Boolean(n.capture) : Boolean(n)) ? 1 : 2;
        let i = null,
          a = r.get(e);
        for (; null != a; ) {
          if (a.listener === t && a.listenerType === o)
            return void (null !== i
              ? (i.next = a.next)
              : null !== a.next
              ? r.set(e, a.next)
              : r.delete(e));
          (i = a), (a = a.next);
        }
      },
      dispatchEvent(e) {
        if (null == e || "string" != typeof e.type)
          throw new TypeError('"event.type" should be a string.');
        const t = g(this),
          n = e.type;
        let r = t.get(n);
        if (null == r) return !0;
        const o = (function (e, t) {
          return new (u(Object.getPrototypeOf(t)))(e, t);
        })(this, e);
        let a = null;
        for (; null != r; ) {
          if (
            (r.once
              ? null !== a
                ? (a.next = r.next)
                : null !== r.next
                ? t.set(n, r.next)
                : t.delete(n)
              : (a = r),
            d(o, r.passive ? r.listener : null),
            "function" == typeof r.listener)
          )
            try {
              r.listener.call(this, o);
            } catch (e) {
              "undefined" != typeof console &&
                "function" == typeof console.error &&
                console.error(e);
            }
          else
            r.listenerType !== f &&
              "function" == typeof r.listener.handleEvent &&
              r.listener.handleEvent(o);
          if (p(o)) break;
          r = r.next;
        }
        return (
          d(o, null),
          (function (e, t) {
            i(e).eventPhase = t;
          })(o, 0),
          (function (e, t) {
            i(e).currentTarget = t;
          })(o, null),
          !o.defaultPrevented
        );
      },
    }),
      Object.defineProperty(b.prototype, "constructor", {
        value: b,
        configurable: !0,
        writable: !0,
      }),
      "undefined" != typeof window &&
        void 0 !== window.EventTarget &&
        Object.setPrototypeOf(b.prototype, window.EventTarget.prototype),
      (t.defineEventAttribute = E),
      (t.EventTarget = b),
      (t.default = b),
      (e.exports = b),
      (e.exports.EventTarget = e.exports.default = b),
      (e.exports.defineEventAttribute = E);
  },
]);
