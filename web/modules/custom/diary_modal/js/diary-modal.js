(function ($) {
    Drupal.behaviors.diaryModalClose = {
      attach: function (context, settings) {
        $('.use-ajax-close').on('click', function (e) {
          e.preventDefault();
          $('.ui-dialog-titlebar-close').trigger('click'); // Close the modal dialog.
        });
      }
    };
  })(jQuery);