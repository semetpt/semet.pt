(function($) {
  $(document).ready(function() {
    var openClass = 'is-open';
    var $targets = $('.Burger');
    var $triggers = $('[data-toggle]');

    $triggers.click(function(evt) {
      var $trigger = $(evt.currentTarget);

      var toggleClass = $trigger.data('toggle');
      var targetsSelector = $trigger.data('target');
      var $targets = $(targetsSelector);
      $targets.toggleClass(toggleClass);
    });
  });
})(jQuery);
