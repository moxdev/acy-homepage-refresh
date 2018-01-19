/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

;
(function(e, t, n, r) {
  "use strict";
  var i = function() {
    var e = n.body || n.documentElement,
        e = e.style;
    if (e.WebkitTransition == "") return "-webkit-";
    if (e.MozTransition == "") return "-moz-";
    if (e.OTransition == "") return "-o-";
    if (e.transition == "") return "";
    return false
  },
      s = i() === false ? false : true,
      o = function(e, t, n) {
      var r = {},
          s = i();
      r[s + "transform"] = "translateX(" + t + ")";
      r[s + "transition"] = s + "transform " + n + "s linear";
      e.css(r)
      },
      u = "ontouchstart" in t,
      a = t.navigator.pointerEnabled || t.navigator.msPointerEnabled,
      f = function(e) {
      if (u) return true;
      if (!a || typeof e === "undefined" || typeof e.pointerType === "undefined") return false;
      if (typeof e.MSPOINTER_TYPE_MOUSE !== "undefined" && e.pointerType != e.MSPOINTER_TYPE_MOUSE) return true;
      if (e.pointerType != "mouse") return true;
      return false
      };
  e.fn.imageLightbox = function(r) {
    var r = e.extend({
      selector: 'id="imagelightbox"',
      allowedTypes: "png|jpg|jpeg|gif",
      animationSpeed: 250,
      preloadNext: true,
      enableKeyboard: true,
      quitOnEnd: false,
      quitOnImgClick: false,
      quitOnDocClick: true,
      onStart: false,
      onEnd: false,
      onLoadStart: false,
      onLoadEnd: false
    }, r),
        i = e([]),
        l = e(),
        c = e(),
        h = 0,
        p = 0,
        d = 0,
        v = false,
        m = function(t) {
        return e(t).prop("tagName").toLowerCase() == "a" && (new RegExp(".(" + r.allowedTypes + ")$", "i")).test(e(t).attr("href"))
        },
        g = function() {
        if (!c.length) return false;
        var n = e(t).width() * .8,
            r = e(t).height() * .9,
            i = new Image;
        i.src = c.attr("src");
        i.onload = function() {
          h = i.width;
          p = i.height;
          if (h > n || p > r) {
            var s = h / p > n / r ? h / n : p / r;
            h /= s;
            p /= s
          }
          c.css({
            width: h + "px",
            height: p + "px",
            top: (e(t).height() - p) / 2 + "px",
            left: (e(t).width() - h) / 2 + "px"
          })
        }
        },
        y = function(t) {
        if (v) return false;
        t = typeof t === "undefined" ? false : t == "left" ? 1 : -1;
        if (c.length) {
          if (t !== false && (i.length < 2 || r.quitOnEnd === true && (t === -1 && i.index(l) == 0 || t === 1 && i.index(l) == i.length - 1))) {
            w();
            return false
          }
          var n = {
            opacity: 0
          };
          if (s) o(c, 100 * t - d + "px", r.animationSpeed / 1e3);
          else n.left = parseInt(c.css("left")) + 100 * t + "px";
          c.animate(n, r.animationSpeed, function() {
            b()
          });
          d = 0
        }
        v = true;
        if (r.onLoadStart !== false) r.onLoadStart();
        setTimeout(function() {
          c = e("<img " + r.selector + " />").attr("src", l.attr("href")).load(function() {
            c.appendTo("body");
            g();
            var n = {
              opacity: 1
            };
            c.css("opacity", 0);
            if (s) {
              o(c, -100 * t + "px", 0);
              setTimeout(function() {
                o(c, 0 + "px", r.animationSpeed / 1e3)
              }, 50)
            } else {
              var u = parseInt(c.css("left"));
              n.left = u + "px";
              c.css("left", u - 100 * t + "px")
            }
            c.animate(n, r.animationSpeed, function() {
              v = false;
              if (r.onLoadEnd !== false) r.onLoadEnd()
            });
            if (r.preloadNext) {
              var a = i.eq(i.index(l) + 1);
              if (!a.length) a = i.eq(0);
              e("<img />").attr("src", a.attr("href")).load()
            }
          }).error(function() {
            if (r.onLoadEnd !== false) r.onLoadEnd()
          });
          var n = 0,
              u = 0,
              p = 0;
          c.on(a ? "pointerup MSPointerUp" : "click", function(e) {
            e.preventDefault();
            if (r.quitOnImgClick) {
              w();
              return false
            }
            if (f(e.originalEvent)) return true;
            var t = (e.pageX || e.originalEvent.pageX) - e.target.offsetLeft;
            l = i.eq(i.index(l) - (h / 2 > t ? 1 : -1));
            if (!l.length) l = i.eq(h / 2 > t ? i.length : 0);
            y(h / 2 > t ? "left" : "right")
          }).on("touchstart pointerdown MSPointerDown", function(e) {
            if (!f(e.originalEvent) || r.quitOnImgClick) return true;
            if (s) p = parseInt(c.css("left"));
            n = e.originalEvent.pageX || e.originalEvent.touches[0].pageX
          }).on("touchmove pointermove MSPointerMove", function(e) {
            if (!f(e.originalEvent) || r.quitOnImgClick) return true;
            e.preventDefault();
            u = e.originalEvent.pageX || e.originalEvent.touches[0].pageX;
            d = n - u;
            if (s) o(c, -d + "px", 0);
            else c.css("left", p - d + "px")
          }).on("touchend touchcancel pointerup MSPointerUp", function(e) {
            if (!f(e.originalEvent) || r.quitOnImgClick) return true;
            if (Math.abs(d) > 50) {
              l = i.eq(i.index(l) - (d < 0 ? 1 : -1));
              if (!l.length) l = i.eq(d < 0 ? i.length : 0);
              y(d > 0 ? "right" : "left")
            } else {
              if (s) o(c, 0 + "px", r.animationSpeed / 1e3);
              else c.animate({
                left: p + "px"
              }, r.animationSpeed / 2)
            }
          })
        }, r.animationSpeed + 100)
        },
        b = function() {
        if (!c.length) return false;
        c.remove();
        c = e()
        },
        w = function() {
        if (!c.length) return false;
        c.animate({
          opacity: 0
        }, r.animationSpeed, function() {
          b();
          v = false;
          if (r.onEnd !== false) r.onEnd()
        })
        };
    e(t).on("resize", g);
    if (r.quitOnDocClick) {
      e(n).on(u ? "touchend" : "click", function(t) {
        if (c.length && !e(t.target).is(c)) w()
      })
    }
    if (r.enableKeyboard) {
      e(n).on("keyup", function(e) {
        if (!c.length) return true;
        e.preventDefault();
        if (e.keyCode == 27) w();
        if (e.keyCode == 37 || e.keyCode == 39) {
          l = i.eq(i.index(l) - (e.keyCode == 37 ? 1 : -1));
          if (!l.length) l = i.eq(e.keyCode == 37 ? i.length : 0);
          y(e.keyCode == 37 ? "left" : "right")
        }
      })
    }
    e(n).on("click", this.selector, function(t) {
      if (!m(this)) return true;
      t.preventDefault();
      if (v) return false;
      v = false;
      if (r.onStart !== false) r.onStart();
      l = e(this);
      y()
    });
    this.each(function() {
      if (!m(this)) return true;
      i = i.add(e(this))
    });
    this.switchImageLightbox = function(e) {
      var t = i.eq(e);
      if (t.length) {
        var n = i.index(l);
        l = t;
        y(e < n ? "left" : "right")
      }
      return this
    };
    this.quitImageLightbox = function() {
      w();
      return this
    };
    return this
  }
})(jQuery, window, document);

jQuery(function() {
  var e = function() {
    jQuery('<div id="imagelightbox-loading"><div></div></div>').appendTo("body")
  },
      t = function() {
      jQuery("#imagelightbox-loading").remove()
      },
      n = function() {
      jQuery('<div id="imagelightbox-overlay"></div>').appendTo("body")
      },
      r = function() {
      jQuery("#imagelightbox-overlay").remove()
      },
      i = function(e) {
      jQuery('<a href="#" id="imagelightbox-close">X</a>').appendTo("body").on("click", function() {
        jQuery(this).remove();
        e.quitImageLightbox();
        return false
      })
      },
      s = function() {
      jQuery("#imagelightbox-close").remove()
      },
      o = function() {
      var e = jQuery('a[href="' + jQuery("#imagelightbox").attr("src") + '"] img').attr("alt");
      if (typeof e !== "undefined" && e.length > 0) jQuery('<div id="imagelightbox-caption">' + e + ' <a id="imagelightbox-zoom" href="' + jQuery("#imagelightbox").attr("src") + '" target="_blank">Zoom</a></div>').appendTo("body").on("click", function(event) {
        event.stopPropagation();
      });
      },
      u = function() {
      jQuery("#imagelightbox-caption").remove()
      },
      a = function(e, t) {
      var n = jQuery(t);
      if (n.length) {
        var r = jQuery('<div id="imagelightbox-nav"></div>');
        for (var i = 0; i < n.length; i++) r.append('<a href="#"></a>');
        r.appendTo("body");
        r.on("click touchend", function() {
          return false
        });
        var s = r.find("a");
        s.on("click touchend", function() {
          var t = jQuery(this);
          if (n.eq(t.index()).attr("href") != jQuery("#imagelightbox").attr("src")) e.switchImageLightbox(t.index());
          s.removeClass("active");
          s.eq(t.index()).addClass("active");
          return false
        }).on("touchend", function() {
          return false
        })
      }
      },
      f = function(e) {
      var t = jQuery("#imagelightbox-nav a");
      t.removeClass("active");
      t.eq(jQuery(e).filter('[href="' + jQuery("#imagelightbox").attr("src") + '"]').index(e)).addClass("active")
      },
      l = function() {
      jQuery("#imagelightbox-nav").remove()
      };

      // ARROWS

      arrowsOn = function( instance, selector )
              {
                        var $arrows = jQuery( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>' );

                                $arrows.appendTo( 'body' );

                                        $arrows.on( 'click touchend', function( e )
                                                    {
                                                                e.preventDefault();

                                                                          var $this = jQuery( this ),
                                                      $target = jQuery( selector + '[href="' + jQuery( '#imagelightbox' ).attr( 'src' ) + '"]' ),
                                                      index = $target.index( selector );

                                                  if( $this.hasClass( 'imagelightbox-arrow-left' ) )
                                                    {
                                                                  index = index - 1;
                                                                              if( !jQuery( selector ).eq( index ).length )
                                                        index = jQuery( selector ).length;
                                                  }
                                                  else
                                                    {
                                                                  index = index + 1;
                                                                              if( !jQuery( selector ).eq( index ).length )
                                                        index = 0;
                                                  }

                                                            instance.switchImageLightbox( index );
                                                                      return false;
                                                                              });
                                              },
              arrowsOff = function()
                      {
                                jQuery( '.imagelightbox-arrow' ).remove();
                                      };

  jQuery('a[data-imagelightbox="a"]').imageLightbox({
    onLoadStart: function() {
      e()
    },
    onLoadEnd: function() {
      t()
    },
    onEnd: function() {
      t()
    }
  });
  jQuery('a[data-imagelightbox="b"]').imageLightbox({
    onStart: function() {
      n()
    },
    onEnd: function() {
      r();
      t()
    },
    onLoadStart: function() {
      e()
    },
    onLoadEnd: function() {
      t()
    }
  });
  var c = jQuery('a[data-imagelightbox="c"]').imageLightbox({
    quitOnDocClick: false,
    onStart: function() {
      i(c)
    },
    onEnd: function() {
      s();
      t()
    },
    onLoadStart: function() {
      e()
    },
    onLoadEnd: function() {
      t()
    }
  });
  jQuery('a[data-imagelightbox="d"]').imageLightbox({
    onLoadStart: function() {
      u();
      e()
    },
    onLoadEnd: function() {
      o();
      t()
    },
    onEnd: function() {
      u();
      t()
    }
  });
  var h = 'a[data-imagelightbox="e"]';
  var p = jQuery(h).imageLightbox({
    onStart: function() {
      a(p, h)
    },
    onEnd: function() {
      l();
      t()
    },
    onLoadStart: function() {
      e()
    },
    onLoadEnd: function() {
      f(h);
      t()
    }
  });
  var d = 'a[data-imagelightbox="f"]';
  var v = jQuery(d).imageLightbox({
    onStart: function() {
      a(v, d);
      n();
      i(v);
      arrowsOn( v, d );
    },
    onEnd: function() {
      l();
      r();
      u();
      s();
      t();
      arrowsOff();
    },
    onLoadStart: function() {
      u();
      e()
    },
    onLoadEnd: function() {
      f(d);
      t();
      o();
      jQuery( '.imagelightbox-arrow' ).css( 'display', 'block' );
    }
  })
})
