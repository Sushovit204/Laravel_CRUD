$(document).ready(function () {
    $("#dialog-box").dialog({
        autoOpen: false,
        modal: true,
    });

    $(".close").click(function (e) {
        var currentElem = $(this);
        $("#dialog-box").dialog({
            buttons: {
                Confirm: function () {
                    currentElem.remove();
                },
                Cancel: function () {
                    $(this).dialog("close");
                },
            },
        });

        $("#dialog-box").dialog("open");
    });
});
