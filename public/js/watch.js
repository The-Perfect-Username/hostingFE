$(document).ready(function() {

    $(document).on("focus", "#mainCommentTextArea", function(e) {
        $("#commentButtons").css("display", "flex");
    });

    $(document).on("click", "#mainCommentForm button.cancel", function(e) {
        e.preventDefault();
        $("#commentButtons").css("display", "none");
        $("#mainCommentForm")[0].reset();
    });

});
