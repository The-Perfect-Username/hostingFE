$(document).ready(function() {


    /*************************************************
    Navigation controls
    *************************************************/
    $(".list-nav a").on("click", function (e) {
        e.preventDefault();
        var body = $(".settings-body");
        body.empty();
        body.load($(this).attr("href"));
    });

    $(document).on("click", "#swapEmails", function(e) {
        e.preventDefault();
        var primary = $("#primaryEmail");
        var secondary = $("#secondaryEmail");
        var primaryEmail = primary.val();
        var secondaryEmail = secondary.val();

        if ((secondaryEmail !== "" && secondaryEmail !== null) && (primaryEmail !== "" && primaryEmail !== null)) {
            primary.val(secondaryEmail);
            secondary.val(primaryEmail);
        } else {
            alert("You must have two email accounts in order to swap");
        }

    });

    $(document).on("submit", "form#updatePassword", function(e) {
        e.preventDefault();
        var form = $(this);
        var oldPassword = $("#oldPassword").val();
        var newPassword = $("#oldPassword").val();

        if (oldPassword === newPassword) {
            alert("Password cannot be the same as your old one.");
        } else if (newPassword.length < 8) {
            alert("Password must not be less than 8 characters.")
        } else {
            $.ajax({
                url: form.attr("action"),
                type: form.attr("method"),
                dataType: "text",
                data: form.serialize(),
                success: function(res) {
                    console.log(res);
                },
                error: function(err) {
                    console.log(err);
                }
            })
        }

    });

});
