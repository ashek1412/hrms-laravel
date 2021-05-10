+function(e){"use strict";var t=function(a,r){this.$element=e(a),this.options=e.extend({},t.DEFAULTS,r),this.transitioning=null,this.options.parent&&(this.$parent=e(this.options.parent)),this.options.toggle&&this.toggle()};t.DEFAULTS={toggle:!0},t.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("sidebar-open")){var t=e.Event("show.bs.sidebar");if(this.$element.trigger(t),!t.isDefaultPrevented()){this.$element.addClass("sidebar-open"),this.transitioning=1;var a=function(){this.$element,this.transitioning=0,this.$element.trigger("shown.bs.sidebar")};return e.support.transition?void this.$element.one(e.support.transition.end,e.proxy(a,this)).emulateTransitionEnd(400):a.call(this)}}},t.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("sidebar-open")){var t=e.Event("hide.bs.sidebar");if(this.$element.trigger(t),!t.isDefaultPrevented()){this.$element.removeClass("sidebar-open"),this.transitioning=1;var a=function(){this.transitioning=0,this.$element.trigger("hidden.bs.sidebar")};return e.support.transition?void this.$element.one(e.support.transition.end,e.proxy(a,this)).emulateTransitionEnd(400):a.call(this)}}},t.prototype.toggle=function(){this[this.$element.hasClass("sidebar-open")?"hide":"show"]()};var a=e.fn.sidebar;e.fn.sidebar=function(a){return this.each(function(){var r=e(this),i=r.data("bs.sidebar"),n=e.extend({},t.DEFAULTS,r.data(),"object"==typeof n&&a);!i&&n.toggle&&"show"==a&&(a=!a),i||r.data("bs.sidebar",i=new t(this,n)),"string"==typeof a&&i[a]()})},e.fn.sidebar.Constructor=t,e.fn.collapse.noConflict=function(){return e.fn.sidebar=a,this},e(document).on("click.bs.sidebar.data-api",'[data-toggle="sidebar"]',function(t){var a,r=e(this),i=r.attr("data-target")||t.preventDefault()||(a=r.attr("href"))&&a.replace(/.*(?=#[^\s]+$)/,""),n=e(i),s=n.data("bs.sidebar"),o=s?"toggle":r.data();n.sidebar(o)}),e("html").on("click.bs.sidebar.autohide",function(t){var a=e(t.target),r=a.is('.sidebar, [data-toggle="sidebar"]')||a.parents('.sidebar, [data-toggle="sidebar"]').length;if(!r){var i=e(".sidebar");i.each(function(t,a){var r=e(a);r.data("bs.sidebar")&&r.hasClass("sidebar-open")&&r.sidebar("hide")})}})}(jQuery);