



$('body').on('click', ".menu-item-head", function (e) {
    
    
    if ($(this).parent().hasClass('active')) {

        $(this).parent().parent().children('.menu-item.active').removeClass('active');
        
    }
    else
    {
        
        $(this).parent().parent().children('.menu-item.active').removeClass('active');
        $(this).parent().addClass('active');
       
    }
   // e.preventDefault();
    e.stopPropagation();

});
$('body').on('click', ".menu-item-con", function (e) {

   // e.preventDefault();
    e.stopPropagation();
});

$("body").click(function () {
    $('.menu-item.active').removeClass('active');
});



$('body').on('click', ".menu-thumb", function (e)
{
    $(this).closest('.menu-bar').toggleClass('active');
    e.stopPropagation();
});
$('body').on('click', ".menu-bar", function (e) {
    $(this).toggleClass('active');
    e.stopPropagation();
});
$('body').on('click', ".mega-menu", function (e) {   
    e.stopPropagation();
});


