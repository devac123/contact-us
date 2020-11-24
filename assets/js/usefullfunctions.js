


function ToggleActive(from, to) {

    $("." + from).removeClass("active");

    $("." + to).addClass("active");

}



function wizardslideto(wiz, form_no) {

    var a = $("#" + wiz + " .wizard-wrapper");

    $(a).children(".wizard-form").addClass('active');

    var width = parseInt($(a).css("width").replace('px', ''));
    var left = (form_no - 1) * 100;
    $(a).css("marginLeft", '-' + (left) + '%');

    setTimeout(function () {
        $(a).children(".wizard-form").removeClass('active');
        $(a).children(".form" + form_no.toString()).addClass('active');
    }, 500);



}


//For button loading function
function showloding(e) {

    $(e).addClass('loading');
    $(e).attr('disabled', 'true');
    var ani = '&nbsp;&nbsp;<i class="icon-spin3 animate-spin"></i>'
    $(e).html($(e).html() + ani);

}

//For button unloading function
function endloading() {

    $('.loading').each(function () {
        $(this).html($(this).html().replace('&nbsp;&nbsp;<i class="icon-spin3 animate-spin"></i>', ''));
        $(this).prop('disabled', false);
        $(this).removeClass('loading');

    });


}
function UpdateQueryString(key, value, url) {
    if (!url) url = window.location.href;
    var re = new RegExp("([?&])" + key + "=.*?(&|#|$)(.*)", "gi"),
        hash;

    if (re.test(url)) {
        if (typeof value !== 'undefined' && value !== null)
            return url.replace(re, '$1' + key + "=" + value + '$2$3');
        else {
            hash = url.split('#');
            url = hash[0].replace(re, '$1$3').replace(/(&|\?)$/, '');
            if (typeof hash[1] !== 'undefined' && hash[1] !== null)
                url += '#' + hash[1];
            return url;
        }
    }
    else {
        if (typeof value !== 'undefined' && value !== null) {
            var separator = url.indexOf('?') !== -1 ? '&' : '?';
            hash = url.split('#');
            url = hash[0] + separator + key + '=' + value;
            if (typeof hash[1] !== 'undefined' && hash[1] !== null)
                url += '#' + hash[1];
            return url;
        }
        else
            return url;
    }
}

//Push notifications 

function pushNotification(heading, message, color, html, container) {
    var currentdate = new Date();

    var nc = $("." + "notification_conatiner");
    var html_c = '<span class="heading">' + heading + '</span><span class="message">' + message + '</span>';
    var noti_id = "noti_id_" + currentdate.getFullYear() + currentdate.getMonth() + currentdate.getDate() + currentdate.getHours() + currentdate.getMinutes() + currentdate.getSeconds() + currentdate.getMilliseconds();

    var noti = ' <div id="' + noti_id + '" class="notification unactive ' + color + ' "> <span class="close"></span>' + html_c + '</div>';

    $(nc).html(noti + $(nc).html());

    addSwipeToNotification(".notification");

    setTimeout(function () {

        $("#" + noti_id).removeClass("unactive");


        setTimeout(function () {

            $("#" + noti_id).addClass("noanimation");

            var l = 10;
            for (var i = 0; i < 10; i++) {
                $("#" + noti_id).animate({ 'margin-left': "+=" + (l = -l) + 'px' }, 50);
            }



            setTimeout(function () {

                $("#" + noti_id).css("marginLeft", '0px');
                $("#" + noti_id).removeClass("noanimation");

            }, 500);


        }, 500);

    }, 10);

    setTimeout(function () {

        removeNotification(noti_id);

    }, 100000);




}

function removeNotification(noti_id) {
    $("#" + noti_id).css("marginLeft", "400px");
    setTimeout(function () {

        $("#" + noti_id).remove();

    }, 200);

}

$(document).ready(function () {


    $(document.body).on('click', '.notification > .close', function () { removeNotification($(this).parent().attr('id')); });

});

var addSwipeToNotification = function (selector) {
    $(selector).swipe("destroy");
    $(selector).swipe({
        //Generic swipe handler for all directions
        swipe: function (event, direction, distance, duration, fingerCount) {

            removeNotification($(this).attr('id'));


        },
        //Default is 75px, set to 0 for demo so any distance triggers swipe
        threshold: 20
    });
};



//Shake Function pass element not name

function shakeElement(element_id) {
    var l = 20;
    for (var i = 0; i < 10; i++) {
        $("#" + element_id).animate({ 'margin-left': "+=" + (l = -l) + 'px' }, 50);
    }


}


//String Functions
function stringtosafe(e) {

    try {

        var ret = e.split('').map(function (char) {

            if ((char.charCodeAt(0) >= 97 && char.charCodeAt(0) <= 122) || (char.charCodeAt(0) >= 65 && char.charCodeAt(0) <= 90) || (char.charCodeAt(0) >= 48 && char.charCodeAt(0) <= 57)) {
                return char;

            }
            else {
                return "!" + char.charCodeAt(0) + ".";
            }



        }).reduce(function (current, previous) { return current.toString() + previous.toString(); })
        return ret;
    }
    catch (e) {
        return "";
    }


}

function safetostring(e) {
    try {
        var s = e.split('!');
        var temp = s[0];
        for (var i = 1; i < s.length; i++) {
            var temp2 = s[i].split('.');
            temp += String.fromCharCode(temp2[0]) + temp2[1]

        }
        return temp;
    }
    catch (e) {
        return "";
    }
}
function objecttostring(obj) {
    var str = ""; for (var key in obj) { if (str != "") { str += ";" } str += key + ":" + stringtosafe(obj[key]); } return str
}
function stringtoobject(str) {
    var obj = {}
    var str_arr = str.split(';');
    for (var i = 0; i < str_arr.length; i++) {
        var temp_arr = str_arr[i].split(':');
        obj[temp_arr[0]] = temp_arr[1];

    }

    return obj;

}

function getParameterfromUrl(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)", "i"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

//iis_alert iis_confirm iis_input  --------------------------------------------------------------------------------------------------------------------------------------------IIS-input confirm alert
$(document).ready(function () {
    $('body').on('click', '.alert-container', function (e) {
        e.stopPropagation();
    });

    $('body').on('click', '.confirm-butt', function () {
        $('input[data-alert-for="' + $(this).attr('data-alert-for') + '"]').val($(this)[0].innerHTML);
        $('#' + $(this).attr('data-alert-for')).addClass('true');
    });

    $('body').on('click', '.alert-box-backdrop.iis-confirm', function () {
        $('#' + $(this).attr('id')).addClass('true');
    });


    $('body').on('click', '.input-butt', function () {
        $('input[data-alert-for="' + $(this).attr('data-alert-for') + '"]').val($(this)[0].innerHTML + ',' + $('#tb-' + $(this).attr('data-alert-for')).val());
        $('#' + $(this).attr('data-alert-for')).addClass('true');

    });

    $('body').on('click', '.alert-box-backdrop.iis-input', function () {
        $('#' + $(this).attr('id')).addClass('true');
    });


    $('body').on('click', '.alert-box-backdrop.iis-alert', function () {
        $(this).remove();
    });
    $('body').on('click', '.alert-butt', function () {
        $('#' + $(this).attr('data-alert-for')).remove();
    });


});

function iis_confirm(message, options, onfinish) {
    var settings = $.extend({
        title: 'Are you Sure !',
        color: 'green',
        buttons: 'Cancel|Ok'
    }, options);

    var id = 'alert-instance-' + $('.alert-box-backdrop').length;

    var btn = settings.buttons.split('|').map(function (q) { return '<span data-alert-for="' + id + '"  class="btn blue pull-right confirm-butt">' + q + '</span>' }).reduce(function (a, b) { return b + a; })
    var html_code = ' <div id="' + id + '" class="alert-box-backdrop iis-confirm"><div class="aligner"></div><div class="alert-container"><div class="alert-header alert-' + settings.color + '">' + settings.title + '</div><div class="alert-content">' + message + '</div><div class="alert-footer"><input style="display:none;" data-alert-for="' + id + '"  type="text" />' + btn + '</div></div></div>';
    $('form').append(html_code);
    wait_for_response(id, onfinish);

}

function iis_alert(message, options) {
    var settings = $.extend({
        title: 'Alert !',
        color: 'green',
        buttons: 'Ok'
    }, options);

    var id = 'alert-instance-' + $('.alert-box-backdrop').length;
    var btn = settings.buttons.split('|').map(function (q) { return '<span data-alert-for="' + id + '"  class="btn blue pull-right alert-butt">' + q + '</span>' }).reduce(function (a, b) { return b + a; })
    var html_code = ' <div id="' + id + '" class="alert-box-backdrop iis-alert"><div class="aligner"></div><div class="alert-container"><div class="alert-header alert-' + settings.color + '">' + settings.title + '</div><div class="alert-content">' + message + '</div><div class="alert-footer"><input style="display:none;" data-alert-for="' + id + '"  type="text" />' + btn + '</div></div></div>';
    $('form').append(html_code);

}

function iis_input(message, options, onfinish) {
    var settings = $.extend({
        title: 'Please Enter',
        color: 'blue',
        buttons: 'Cancel|Ok',
        type: 'text',
        placeholder: 'Please Enter Value',
        value: '',
        allow_null: false
    }, options);


    var id = 'alert-instance-' + $('.alert-box-backdrop').length;
    message += "<input id='tb-" + id + "' data-iis-type='" + settings.type + "' value=\"" + settings.value + "\" />";
    var btn = settings.buttons.split('|').map(function (q) { return '<span data-alert-for="' + id + '"  class="btn blue pull-right input-butt">' + q + '</span>' }).reduce(function (a, b) { return b + a; })
    var html_code = ' <div id="' + id + '" class="alert-box-backdrop iis-input"><div class="aligner"></div><div class="alert-container"><div class="alert-header alert-' + settings.color + '">' + settings.title + '</div><div class="alert-content">' + message + '</div><div class="alert-footer"><input style="display:none;" data-alert-for="' + id + '"  type="text" />' + btn + '</div></div></div>';
    $('form').append(html_code);
    iis_input_load();
    wait_for_response(id, onfinish);

}

function wait_for_response(id, passfunc) {
    setTimeout(function () {
        if ($('#' + id).hasClass('true')) {
            var a = $('input[data-alert-for="' + id + '"]').val();
            $('#' + id).remove();
            passfunc(a);
        }
        else {
            wait_for_response(id, passfunc);
        }
    }, 100);


}

