/**
 * @file
 * Luigimon behaviors.
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.luigimon = {
    attach(context, settings) {
      once('luigimon-page', 'body', context).forEach(
        function (element) {
          var $temp = $("<input>");
          var $url = $(location).attr("href");
          $(".btn-share").click(function () {
            var $userId = $(".luigimon-page .user-id").val();
            var $lastPath = $url.substring($url.lastIndexOf('/') + 1);
            try {
              $("body").append($temp);
              $url = $userId && isNaN($lastPath) ? $url + "/" + $userId : $url;
              $temp.val($url).select();
              document.execCommand("copy");
              $temp.remove();
              $('[data-toggle="tooltip"]').tooltip("show");
              // copied animation
              setTimeout(function () {
                $('[data-toggle="tooltip"]').tooltip("dispose");
              }, 1500);
            } catch (err) {
              //fallback in case exexCommand doesnt work
              // alert("please press Ctrl/Cmd+C to copy");
            }
          });
        }
      );
    }
  };

})(jQuery, Drupal);
