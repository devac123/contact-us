function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var templates = {
    decor_store: { index: 0, name: "Decore Store", url: "http://demo.templatetrip.com/Opencart/OPC022/" }
    , lighting_store: { index: 1, name: "Lighting Store", url: "http://demo.templatetrip.com/Opencart/OPC021/" }
    , tools_store: { index: 2, name: "Tools Store", url: "http://demo.templatetrip.com/Opencart/OPC020/" }
    , pets_store: { index: 3, name: "Pets Store", url: "http://demo.templatetrip.com/Opencart/OPC019/" }
    , furniture_store: { index: 4, name: "Furniture Store", url: "http://demo.templatetrip.com/Opencart/OPC011/" }
    , auto_parts: { index: 5, name: "Auto Parts", url: "http://demo.templatetrip.com/Opencart/OPC014/" }
    , ceramic_store: { index: 6, name: "Ceramic Store", url: "http://demo.templatetrip.com/Opencart/OPC013/" }
    , cold_store: { index: 7, name: "Cold Store", url: "http://demo.templatetrip.com/Opencart/OPC017/" }
    , watch_store: { index: 8, name: "Watch Store", url: "http://demo.templatetrip.com/Opencart/OPC018/" }
    , modern_suit: { index: 9, name: "Modern Suit", url: "http://demo.templatetrip.com/Opencart/OPC012/" }
    , flower_bouquet: { index: 10, name: "Flower Bouquet", url: "http://demo.templatetrip.com/Opencart/OPC016/" }
    , mochi_store: { index: 11, name: "Mochi Store", url: "http://demo.templatetrip.com/Opencart/OPC007/OPC01/" }
    , coffee_store: { index: 12, name: "Coffee Store", url: "http://demo.templatetrip.com/Opencart/OPC006/" }
    , home_decor: { index: 13, name: "Home Decor", url: "http://demo.templatetrip.com/Opencart/OPC009/" }
    , mega_shop: { index: 14, name: "Mega Shop", url: "http://demo.templatetrip.com/Opencart/OPC010/" }
    , cosmetic_store: { index: 15, name: "Cosmetic Store", url: "http://demo.templatetrip.com/Opencart/OPC004/" }
    , jewelry_store: { index: 16, name: "Jewelry Store", url: "http://demo.templatetrip.com/Opencart/OPC003/OPC02/" }
    , mochi_store_2: { index: 17, name: "Mochi Store", url: "http://demo.templatetrip.com/Opencart/OPC007/OPC02/" }
    , fashion_store: { index: 18, name: "Fashion Store", url: "http://demo.templatetrip.com/Opencart/OPC008/OPC01/" }
    , bag_store: { index: 19, name: "Bag Store", url: "http://demo.templatetrip.com/Opencart/OPC005/" }
    , jewelry_store_2: { index: 20, name: "Jewelry Store", url: "http://demo.templatetrip.com/Opencart/OPC003/OPC03/" }
    , goggles_store: { index: 21, name: "Goggles Store", url: "http://demo.templatetrip.com/Opencart/OPC002/" }
    , mochi_store_3: { index: 22, name: "Mochi Store", url: "http://demo.templatetrip.com/Opencart/OPC007/OPC03/" }
    , fashion_store_2: { index: 23, name: "Fashion Store", url: "http://demo.templatetrip.com/Opencart/OPC008/OPC03/" }
    , jewelry_store_3: { index: 24, name: "Jewelry Store", url: "http://demo.templatetrip.com/Opencart/OPC003/OPC04/" }
    , fashion_store_3: { index: 25, name: "Fashion Store", url: "http://demo.templatetrip.com/Opencart/OPC008/OPC02/" }
    , jewelry_store_4: { index: 26, name: "Jewwlry Store", url: "http://demo.templatetrip.com/Opencart/OPC003/OPC01/" }
};


$(document).ready(function () {
    var theme_name = getParameterByName('theme');
    var theme = templates[theme_name];
    var url = "";

    if (theme_name != null) {
        if (theme == undefined) {
            theme_name = Object.keys(templates)[0];
            //theme = templates[theme_name]
            window.location = '/projects/inficart/demo/?theme=' + theme_name;
        }
    }
    else {
        theme_name = Object.keys(templates)[0];
        //theme = templates[theme_name]
        window.location = '/projects/inficart/demo/?theme=' + theme_name;
    }

    $('#total_theme_index').html(Object.keys(templates).length);
    $('#current_theme_index').html(theme.index + 1);
    $('#theme_name').html(theme.name);
    url = theme.url;

    $('#if_template').attr('src', url);
});


$(document).ready(function () {
    $('#prev_theme').on('click', function () {
        var target_theme_index = parseInt($('#current_theme_index').html()) - 2;
        if (target_theme_index < 0) {
            target_theme_index = Object.keys(templates).length - 1;
        }
        window.location = '/projects/inficart/demo/?theme=' + Object.keys(templates)[target_theme_index];
    });

    $('#next_theme').on('click', function () {
        var target_theme_index = parseInt($('#current_theme_index').html());
        if (target_theme_index >= Object.keys(templates).length) {
            target_theme_index = 0;
        }
        window.location = '/projects/inficart/demo/?theme=' + Object.keys(templates)[target_theme_index];
    });
});






$(document).ready(function () {
    $('#btn_desk').on('click', function () {
        $('.btn_resp').removeClass('active');
        $(this).addClass('active');
        $('.iframe_tempalte_con').removeClass('desktop');
        $('.iframe_tempalte_con').removeClass('tablet');
        $('.iframe_tempalte_con').removeClass('mobile');
        $('.iframe_tempalte_con').addClass('desktop');
    });
    $('#btn_tab').on('click', function () {
        $('.btn_resp').removeClass('active');
        $(this).addClass('active');
        $('.iframe_tempalte_con').removeClass('desktop');
        $('.iframe_tempalte_con').removeClass('tablet');
        $('.iframe_tempalte_con').removeClass('mobile');
        $('.iframe_tempalte_con').addClass('tablet');
    });
    $('#btn_mob').on('click', function () {
        $('.btn_resp').removeClass('active');
        $(this).addClass('active');
        $('.iframe_tempalte_con').removeClass('desktop');
        $('.iframe_tempalte_con').removeClass('tablet');
        $('.iframe_tempalte_con').removeClass('mobile');
        $('.iframe_tempalte_con').addClass('mobile');
    });
});