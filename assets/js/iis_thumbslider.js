
function thumb_slider(settings)
{
    
    
    //default width
    settings.thumbs_width = 4324;
    
    //slider width
    settings.thumbs_width = document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class)[0].offsetWidth;
    
    settings.thumbs_count = document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class).length;
    
    
   
    for (i = 0; i < settings.thumbs_count; i++)
    {
        document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class)[i].style.left = ((i * 100) ).toString() + "%";
        document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class)[i].style.right = "auto";

    }
    
    var temp = document.getElementById(settings.parent_id).getElementsByClassName(settings.next_class)[0];
    $(temp).click(function () { next_thumb(settings) })
    temp = document.getElementById(settings.parent_id).getElementsByClassName(settings.prev_class)[0];
    $(temp).click(function () { prev_thumb(settings) })


    autotimer(settings);
    if (settings.hover)
    {
        temp = document.getElementById(settings.parent_id);
        $(temp).hover(function () { hoverStart(settings); }, function () { hoverStop(settings); });
    }
    
}

function next_thumb(settings) {
      
    clearTimeout(settings.timer);

    

    if (! settings.processing) {
        settings.processing = true;

        

        for (i = 0; i < settings.thumbs_count ; i++)
        {
            
            var ele = document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class)[i];
            ele.style.left = (ele.style.left.replace("%", "") - 100).toString() + "%";

        }

        
        
    
        
       

        
        setTimeout(function () {
            
            var activee = document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName('active')[0];
            $(activee).removeClass('active');
            $(activee).next().addClass('active');
            
            var p1 = parseInt(document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class)[settings.thumbs_count - 1].style.left.replace("%", ""));
            

            
            for (k = 1; k <= settings.thumbs_to_move; k++)
            {

              
                var el = document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class)[0];

                el.style.left = (p1 + (k * (100 + settings.spacing))) + "%";
                var txt = el.outerHTML;
                el.parentNode.removeChild(el);
                document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].innerHTML = document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].innerHTML + txt;


            }
            autotimer(settings);
            settings.processing = false;
            
        }, 1000);

    }


}

function prev_thumb(settings) {

    
    clearTimeout(settings.timer);

    if (!settings.processing) {
        settings.processing = true;

        var p1 = parseInt(document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class)[0].style.left.replace("px", ""));


        
        for (k = 1; k <= settings.thumbs_to_move; k++) {

            
            var el = document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class)[settings.thumbs_count - 1];
            
            el.style.left = (p1 - (k * ( 100 + settings.spacing))) + "%";
            var txt = el.outerHTML;
            el.parentNode.removeChild(el);
            document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].innerHTML = txt + document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].innerHTML;
            

        }

       


        setTimeout(function () {
            var activee = document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName('active')[0];
            $(activee).removeClass('active');
            $(activee).prev().addClass('active');
          

            for (i = 0; i < settings.thumbs_count ; i++) {
                var h = (100 * settings.thumbs_to_move);
                var ele = document.getElementById(settings.parent_id).getElementsByClassName(settings.container_class)[0].getElementsByClassName(settings.thumb_class)[i];
                ele.style.left = (parseInt(ele.style.left.replace("%", "")) + h).toString() + "%";

            }

            autotimer( settings );
            settings.processing = false;
        }, 1000);
    }


}

function autotimer(settings) {
    
   settings.timer = setTimeout(function () {
       
        if (! settings.hover) {
            
            next_thumb(settings);
            
        }
        
        autotimer(settings);
    }, settings.timeout);


}

function hoverStop(settings) {
    setTimeout(function () { settings.hover = false; }, 200);

}

function hoverStart(settings) {

    settings.hover = true;

}




/*

Please add these Styles
  .thumb_slider{overflow:hidden; position:relative; }
    .thumb_slider .thumbs{ position:absolute; right:-300px;  -webkit-transition: all .5s ease; 	-moz-transition: all .5s ease;	-o-transition: all .5s ease;	-ms-transition: all .5s ease;	transition: all .5s ease;  }


    Sample call
     thumb_slider({
        thumbs_to_show: 4,
        thumbs_to_move: 2,
        thumbs_width: 0,
        thumbs_count: 0,
        timeout: 3000,
        parent_id: "Fresh_slider",
        container_class: "thumb_slider",
        thumb_class: "thumbs",
        spacing: 10,
        processing: false,
        hover: false,
        next_class: "next",
        prev_class: "prev",
        timer: setTimeout(function () { })

    });
   









*/