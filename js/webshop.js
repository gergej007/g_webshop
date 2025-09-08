$(document).ready(function () {
    kategoriak_vissza();
    termekek_vissza(0);
});

function kategoriak_vissza() {
    $.ajax({
        url: "modulok/kategoriak_vissza.php",
        type: "post",
        dataType: "json",
        data: {},
        success: function (valasz) {
            $.each(valasz, function (idx, item) {
                var kategoria_item = $("<div class='kategoria_item'><img src='"
                    + item.ikon + "' class='kategoria_ikon'><div class='kategoria_felirat'>"
                    + item.megnevezes + "</div></div>");

                kategoria_item.appendTo($(".kategoriak_doboz"));

                kategoria_item.click(function () {
                    $(".kategoriak_doboz").find(".kategoria_item").removeClass("kijelolt_kategoria_item");
                    $(this).addClass("kijelolt_kategoria_item");
                    termekek_vissza(item);
                });
            });
        }
    });
}
function termekek_vissza(param, kereso_szo) {
    $(".termekek_doboz").empty();

    if (param == 0) {
        $("<h2 class='kategoria_cim'>Kiemelt termékek</h2>").appendTo($(".termekek_doboz"));
        var aktkategoria = 0;
    }
    else {
        $("<h2 class='kategoria_cim'>" + param.megnevezes + "</h2>").appendTo($(".termekek_doboz"));
        var aktkategoria = param.id;

    }
    var termek_lista_doboz = $("<div class='termekek_lista'></div>").appendTo($(".termekek_doboz"));

    $.ajax({
        url: "modulok/termekek_vissza.php",
        dataType: "json",
        type: "post",
        data: { "kategoria": aktkategoria },
        success: function (valasz) {
            termekek_mutat(valasz);
        }
    });
}

function termekek_mutat(valasz){
    $.get("templates/egy_termek_temp.php", function(visszatemp){
        var tempobj=$().add(visszatemp);

        $.each(valasz, function(idx, item){
            var uj_termek=tempobj.clone(true,true);

            uj_termek.find(".egy_termek_kep").attr("src","termek_kepek/"+item.kep);
            uj_termek.find(".egy_termek_nev").html(item.termeknev);
            uj_termek.find(".egy_termek_ar").html(item.kiir_ar+" Ft");

            uj_termek.appendTo($(".termekek_lista"));
        });
    });
}