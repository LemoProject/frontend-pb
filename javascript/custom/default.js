(function($){
  $( document ).ready(function() {

    $.expr[":"].containsNoCase = function (el, i, m) {
      var search = m[3];
      if (!search) return false;
      return new RegExp(search, "i").test($(el).text());
    };

    $("#coursesearch input").keyup(function () {
      var search = $(this).val();
      $(".dropdown-menu tr").show();
      if (search) $(".dropdown-menu tr").not(":containsNoCase(" + search + ")").hide();
    }).click(function (e) {
      e.stopPropagation();
    });

  });
})(jQuery);

