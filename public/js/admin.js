$(document).ready(function() {

    $(".admin-nav-item").on("click", function(e) {
        e.preventDefault();
        var btn = $(this);
        var page = btn.attr("rel");
        $.ajax({
            url: page + ".php",
            typpe: "get",
            dataType: "html",
            beforeSend: function() {
                btn.prop("disabled", true);
            },
            success: function(res) {
                btn.prop("disabled", false);
                $("#adminPanel").empty();
                $("#adminPanel").html(res);
            },
            error: function(err) {
                btn.prop("disabled", false);
                console.log(err);
            }
        });
    });

});
