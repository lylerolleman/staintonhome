$(document).ready(function () {
    $(document).on("click", ".gallery-container", function () {
        $("#gallery-selection").empty();
        var simg = $("<img />", {
            src: $(this).find("img").attr("src"),
            class: "selected-image",
            alt: $(this).find("img").attr("alt")
        });
        var p = $("<p>" + $(this).find("p").text() + "</p>");
        $("#gallery-selection").append(simg);
        $("#gallery-selection").append(p);
    });
    $.get("https://api.github.com/repos/lylerolleman/staintonhome/git/trees/master", function (data) {
        //console.log(data);
        var url;
        for (var i in data.tree) {
            if (data.tree[i].path === "images") {
                url = data.tree[i].url;
            }
        }
        console.log(url);
        $.get(url, function (imagedata) {
            
            for (var j in imagedata.tree) {
                var src = imagedata.tree[j].path;
                var dat = src.split("-");
                var loc = dat[1];
                var desc = dat[2].split(".")[0];
                var div = $("<div></div>", {
                    id: "img-" + j,
                    class: "gallery-container " + loc
                });
                var img = $("<img />", {
                    src: "https://raw.githubusercontent.com/lylerolleman/staintonhome/master/images/" + src,
                    alt: desc,
                    class: "gallery-image"
                });
                var p = $("<p>" + desc + "</p>");
                div.append(img);
                div.append(p);
                $("#gallery").append(div);
                
            }
            
            $("#img-0").trigger("click");
            
            $(".gallery-container").show();
            var sel = window.location.search.substr(1).split("=")[1];
            $("#" + sel).trigger("click");
        });
        
    });
});