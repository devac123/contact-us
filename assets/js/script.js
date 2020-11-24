$('body').on('click','#submit_btn',function(e)
{
    var group = $(this).attr('data-selgroup');
    var func = $(this).attr('data-func');
    var _controller = "/controller/"+$(this).attr('data-controller')+'.php';
    
    //JS validation
    DataObj = FormToObj(group);
    console.log(DataObj);
    jQuery.ajax({
      type: "POST",
      url: _controller,
      data:{ "callFunc": func,"data":JSON.stringify(DataObj) },
      success: function (result) 
        {
          alert(result);
        },
      error: function (request, error) 
        {
          alert("Ajax Eror: " + error);
        }
        
      });

});

function FormToObj(group)
{
  DataObj ={};
  $('input[data-group="' + group + '"]').each(function(e){

    DataObj[$(this).attr('data-key')] = $(this).val();
    console.log("dfjhskdjf");
   
  });

  return DataObj;
}


