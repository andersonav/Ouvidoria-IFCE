/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    var indiceId = {"system": 0, "notifications": 0, "informationsUser": 0};
    $('.menu .item').tab();
    $('.checkbox').checkbox();
    $('select').dropdown();




    $(window).resize(function () {
        //=location.reload();

//        if ($(window).width() >= 200 && $(window).width() <= 549) {
//
//        } else {
//            $("#sibebarMaior").addClass("visible");
//        }
    });

    if ($(window).width() >= 200 && $(window).width() <= 549) {
        $("#sibebarMaior").removeClass("visible");
        $("#iconSidebarMobile").click(function () {
            $("#sibebarMaior").addClass("visible");
            var aux = auxWidthScreenSidebar();
            $("#sibebarMaior").css("width", aux + "%");
            $("#sibebarMaior").css("display", "block");
            $(".openbtn").addClass("closeMobile");
            clickDeviceMobile();
        });
    } else {
        $(".openbtn#btnDevices").click(function () {
            $(".ui.sidebar").toggleClass("very thin icon");
            $(".asd").toggleClass("marginlefting");
            $(".sidebar z").toggleClass("displaynone");
            $(".ui.accordion").toggleClass("displaynone");
            $(".ui.dropdown.item.iconShort").toggleClass("displayblock");
            var aux = auxWidthScreen();
            $(".teste").toggleClass(aux);
            $("#sibebarMaior").toggleClass("sibebarToMenor");
            $(".logo").find('img').toggle();
        });
    }

    function clickDeviceMobile() {
        $(".closeMobile").click(function () {
            $("#sibebarMaior").removeClass("visible");
            $(this).removeClass("closeMobile");
        });
    }


    $(".openDivNone").click(function () {
        var valorId = $(this).attr("id");
        $(".divMae").each(function () {
            $(this).removeClass("displayblock");
            $(this).addClass("displaynone");
        });
        $("#iconsAndInformationsUser .arrow").each(function () {
            $(this).removeClass("displayblock");
            $(this).addClass("displaynone");
        });
        if (indiceId[valorId] == 0) {
            $(".divMae#" + valorId).addClass("displayblock");
            $("#iconsAndInformationsUser .arrow#" + valorId).addClass("displayblock");
            auxIndiceArray(valorId, 1);
        } else {
            $(".divMae#" + valorId).removeClass("displayblock");
            $("#iconsAndInformationsUser .arrow#" + valorId).removeClass("displayblock");
            $(".divMae#" + valorId).addClass("displaynone");
            $("#iconsAndInformationsUser .arrow#" + valorId).addClass("displaynone");
            auxIndiceArray(valorId, 0);
        }
    });

    function auxIndiceArray(valorId, valorInteiro) {
        if (valorId == "system") {
            indiceId[valorId] = valorInteiro;
            indiceId["notifications"] = 0;
            indiceId["informationsUser"] = 0;
        } else if (valorId == "notifications") {
            indiceId[valorId] = valorInteiro;
            indiceId["system"] = 0;
            indiceId["informationsUser"] = 0;
        } else {
            indiceId[valorId] = valorInteiro;
            indiceId["system"] = 0;
            indiceId["notifications"] = 0;
        }
    }

    function auxWidthScreen() {
        var aux = "";
        if ($(window).width() >= 550 && $(window).width() <= 849) {
            aux = "marginLeftingResolutionMenor";
        } else {
            aux = "testeMarginLefting";
        }
        return aux;
    }

    function auxWidthScreenSidebar() {
        if ($(window).width() >= 500 && $(window).width() <= 549) {
            aux = "52";
        } else if ($(window).width() >= 450 && $(window).width() <= 499) {
            aux = "63";
        } else if ($(window).width() >= 350 && $(window).width() <= 449) {
            aux = "77";
        } else if ($(window).width() >= 200 && $(window).width() <= 349) {
            aux = "85";
        }
    }


    $(".ui.accordion#accordionSidebar .title").click(function () {
        var valorId = $(this).attr("id");
        clearClassActive(".ui.accordion#accordionSidebar .title", "active");
        clearClassActive(".ui.accordion#accordionSidebar .title", "activeAccordion");
        clearClassActive(".ui.accordion#accordionSidebar .content", "active");
        clearClassActive(".iconsSidebarFix .iconShort .icon", "active");
        hideElement(valorId);
        showElement(".ui.accordion#accordionSidebar .content", valorId);
        addClassActive("#accordionSidebar .title", valorId, "activeAccordion");
        addClassActive(".iconsSidebarFix .iconShort .icon", valorId, "active");
        $("#accordionSidebar .content .item").each(function () {
            $(this).css("color", "white");
        });
        if ($("#accordionSidebar .content#" + valorId).attr("id") != null) {
            functionAjaxToLoadPageToContent(valorId);
        } else {
            functionAjaxToLoadPage(valorId);

        }
        logicIconsDropdown(valorId);
    });

    $(".iconsSidebarFix .iconShort .icon").click(function () {
        var valorId = $(this).attr("id");
        clearClassActive(".ui.accordion#accordionSidebar .title", "active");
        clearClassActive(".ui.accordion#accordionSidebar .title", "activeAccordion");
        clearClassActive(".iconsSidebarFix .iconShort .icon", "active");
        hideElement(valorId);
        showElement(".ui.accordion#accordionSidebar .content", valorId);
        addClassActive(".title", valorId, "activeAccordion");
        addClassActive(".iconsSidebarFix .iconShort .icon", valorId, "active");
        $(".content .item").each(function () {
            $(this).css("color", "white");
        });
        if ($(".content#" + valorId).attr("id") != null) {
            functionAjaxToLoadPageToContent(valorId);
        } else {
            functionAjaxToLoadPage(valorId);
        }
        logicIconsDropdown(valorId);
    });

    function clearClassActive(elemento, valorClass) {
        $(elemento).each(function () {
            $(this).removeClass(valorClass);
        });
    }

    function eachAdicionarClasse(elemento, valorClass) {
        $(elemento).each(function () {
            $(this).addClass(valorClass);
        });
    }

    function removeClassElement(elemento, valorClass) {
        $(elemento).removeClass(valorClass);
    }

    function addClassElement(elemento, valorClass) {
        $(elemento).addClass(valorClass);
    }

    function addClassActive(elemento, valorId, valorClass) {
        $(elemento + "#" + valorId).addClass(valorClass);
    }

    function hideElement(valorId) {
        $(".ui.accordion#accordionSidebar .content").each(function () {
            if ($(this).attr("id") != valorId) {
                $(this).hide(500);
            }
        });
    }

    function showElement(elemento, valorId) {
        $(elemento + "#" + valorId).show(500);
    }

    function logicIconsDropdown(valorId) {
        clearClassActive("#accordionSidebar .title span i", "caret");
        clearClassActive("#accordionSidebar .title span i", "down");
        clearClassActive("#accordionSidebar .title span i", "icon");
        eachAdicionarClasse("#accordionSidebar .title span i", "dropdown");
        eachAdicionarClasse("#accordionSidebar .title span i", "icon");

        var elemento = "#accordionSidebar .title.activeAccordion#" + valorId + " span i#" + valorId;
        removeClassElement(elemento, "dropdown");
        removeClassElement(elemento, "icon");

        addClassElement(elemento, "caret");
        addClassElement(elemento, "down");
        addClassElement(elemento, "icon");
    }

    function functionAjaxToLoadPageToContent(valorId) {
        $("#accordionSidebar .content#" + valorId + " .item").click(function () {
            var valorIdToA = $(this).attr("id");
            $("#accordionSidebar .content#" + valorId + " .item").each(function () {
                $(this).css("color", "white");
            });
            $("#accordionSidebar .content#" + valorId + " .item#" + valorIdToA).css("color", "gold");
            $.ajax({
                url: "/" + valorIdToA,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, success: function (data, textStatus, jqXHR) {
                    $("#containerToInformations").html(data);
                }
            });
        });
    }

    function functionAjaxToLoadPage(valorId) {
        $.ajax({
            url: "/" + valorId,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, success: function (data, textStatus, jqXHR) {
                $("#containerToInformations").html(data);
            }
        });
    }

    $(".ui.accordion#accordionSidebar .title").each(function () {
        if ($(this).hasClass("activeAccordion")) {
            $(this).trigger("click");
        }
    });

    $("body").click(function (e) {
        if ($(e.target).hasClass("openDivNone")) {

        } else {
            $(".divMae").each(function () {
                $(this).removeClass("displayblock");
                $(this).addClass("displaynone");
            });

            $("#iconsAndInformationsUser .arrow").each(function () {
                $(this).removeClass("displayblock");
                $(this).addClass("displaynone");
            });
        }
    });

});