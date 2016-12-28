window.NS = window.NS || {};
window.NS._submodules = window.NS._submodules || {};

(function($) {
  $(function() {
    var bodyClassName = document.body.className.replace(/-/g, '_');
    var bodyClasses = bodyClassName.split(/\s+/);

    var getSubmodule = function(name) {
      return function() {
        window.NS._submodules[name]($);
      };
    };

    $.each(['common'].concat(bodyClasses), function(i, module) {
      if ($.isFunction(window.NS[module])) {
        window.NS[module]($);
      }
    });
  });
}(jQuery));
