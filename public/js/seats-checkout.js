$(document).ready(function () {
    // Toggles occupation options when admin or employee is selected
    $("#confirm-booking").click(function () {
        $("#seats-section").hide();
        $("#checkout-section").show();
        $("body").css("background-image", "none");
    });

    // $("#show-current").click(function () {
    //     $("#deleted-users").hide();
    //     $("#current-users").show();
    // });
});