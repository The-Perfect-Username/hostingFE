$(document).ready(function() {

    $("#layoutSelect").on("change", function (e) {
        var id = $(this).val();

        $(".video-item").each(function(i) {
            if (id === "list-style") {
                if ($(this).hasClass("list-style")) {
                    return false;
                } else {
                    $(this).removeClass("grid-style");
                    $(this).addClass("list-style");
                }
            } else {
                if ($(this).hasClass("grid-style")) {
                    return false;
                } else {
                    $(this).removeClass("list-style");
                    $(this).addClass("grid-style");
                }
            }

        });

    });

});
