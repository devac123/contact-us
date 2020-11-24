

//Model---------------------------------------------------------------------
function toggle_iismodel(id)
{    $("#" + id).addClass('active');

$("#" + id + " .model-container .model-close").click(function (event) { $("#" + id).removeClass('active');  $("#" + id).addClass('removing'); setTimeout(function () { $("#" + id).removeClass('removing'); }, 300); event.stopPropagation() });
$("#" + id + " .model-container").click(function (event) {  event.stopPropagation(); });
$("#" + id).click(function (event) { $("#" + id).removeClass('active');  $("#" + id).addClass('removing'); setTimeout(function () { $("#" + id).removeClass('removing'); }, 300); event.stopPropagation() });

}



jQuery.fn.animateAuto = function (prop, speed, callback) {
    var elem, height, width;
    return this.each(function (i, el) {
        el = jQuery(el), elem = el.clone().css({ "height": "auto", "width": "auto" }).appendTo("body");
        height = elem.css("height"),
        width = elem.css("width"),
        elem.remove();

        if (prop === "height")
            el.animate({ "height": height }, speed, callback);
        else if (prop === "width")
            el.animate({ "width": width }, speed, callback);
        else if (prop === "both")
            el.animate({ "width": width, "height": height }, speed, callback);
    });
}



//forms

function toggleFromsProcessing(id)
{
    if ($("#" + id).hasClass('processing'))
    {
        $("#" + id).removeClass('processing');
        setTimeout(function () { $("#" + id + " .form-processing ").css('display', 'none'); }, 500);
    }
    else
    {
        $("#" + id + " .form-processing ").css('display', 'block');
        setTimeout(function () {$("#" + id).addClass('processing');}, 100);

    }

}

function nthform(id, number)
{
    $('#' + id + " .form-part.active").removeClass('active');
    $('#' + id + " .form-part:nth-child("+ number+")").addClass('active');
}

