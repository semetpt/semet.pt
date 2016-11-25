(function($) {
  $(document).ready(function() {
    var openClass = 'is-open';
    var $targets = $('.Burger');
    var $triggers = $('[data-toggle-nav]');

    $triggers.click(function() {
      $targets.toggleClass(openClass);
    });
  });
})(jQuery);
