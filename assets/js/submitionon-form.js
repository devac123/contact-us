
    $('body').on('click','#submit_btn',function(e){
    var group = $(this).attr('data-selgroup');
    var action = $(this).attr('data-action');
    DataObj =[];

    $('input[data-group="' + group + '"]').each(function(e){

      item = {}
      item [$(this).attr('data-key')] = $(this).val();
      DataObj.push(item);

    });

    DataObjString = JSON.stringify(DataObj);

    alert(DataObjString);


});
