$(document).ready(function () {
    $(document).on("click", ".navbar-left a", function () {

        var id = $(this).attr("id");
        $(".info").hide();
        $(".gallery-container").hide();
        $("." + id).show();
        if (id === "main") {
            $(".gallery-container").show();
        }
        $("#gallery").children().each(function () {
            if ($(this).css("display") !== "none") {
                $(this).trigger("click");
                return false;
            }
        });
    });
    var sel = window.location.search.substr(1).split("=")[1];
    //console.log(sel);
    $("#" + sel).trigger("click");
});
