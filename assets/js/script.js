const name = $('#name');
const email = $('#email');
const phone = $('#phone');
const message = $('#msg');
const submit_btn = $('#submit_btn');

// validation creating function
function formValidation() 
{   
    name.blur(function(){
    let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
    let str = name.val();
   
    if (str == ""){
        name.parent().children('.formerror').text("please enter your name");
        name.parent().children('.formerror').css('display','inline-block');
        submit_btn.attr('id', 'nonind'); 

    }
    else if(regex.test(str)){
        
        name.parent().children('.formerror').css('display','none');
        submit_btn.attr('id', 'submit_btn'); 
      }
      else{
        name.parent().children('.formerror').text("invalid name!");
        name.parent().children('.formerror').css('display','inline-block');
        submit_btn.attr('id', 'nonind');    
      }
    })
    email.blur(function(){
      
      let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
      let str = email.val();
      
      if (str == "")
      {
        email.parent().children('.formerror').text("please enter your Email");
        email.parent().children('.formerror').css('display','inline-block');
        submit_btn.attr('id', 'nonind'); 
      }
      else if(regex.test(str)){
        
        email.parent().children('.formerror').css('display','none');
        submit_btn.attr('id', 'submit_btn'); 
      }
      else{
        
        email.parent().children('.formerror').text("invalid email Address!");
        email.parent().children('.formerror').css('display','inline-block'); 
        submit_btn.attr('id', 'nonind');   
        
        
      }
      
    })
    phone.blur(function(){
      let str = phone.val();
      let regex = /^\d{10}$/;
      if (str == "")
      {
        phone.parent().children('.formerror').text("please enter your phone");
        phone.parent().children('.formerror').css('display','inline-block');
        submit_btn.attr('id', 'nonind'); 
      }
      else if(regex.test(str)){
        console.log('Your Phone-no. is valid');
        phone.parent().children('.formerror').css('display','none');
        submit_btn.attr('id', 'submit_btn'); 
      }
      else{
        phone.parent().children('.formerror').text("invalid Phone Number!");
      phone.parent().children('.formerror').css('display','inline-block');
      submit_btn.attr('id', 'nonind');  
    }
    
  })
  message.blur(function(){
    let str = msg.value;
    let regex = /^[a-zA-Z]([0-9a-zA-Z]){10,100}$/;
    if (str == "")
    {  
      message.parent().children('.formerror').text("please enter your Query");
      message.parent().children('.formerror').css('display','inline-block');
      submit_btn.attr('id', 'nonind'); 
    }
    else if(regex.test(str))
    {
      // alert("Thank - you !")
      message.parent().children('.formerror').css('display','none');
      submit_btn.attr('id', 'submit_btn'); 
    }
    else{
      message.parent().children('.formerror').text(" message length must be atleast 10 charcter");
      message.parent().children('.formerror').css('display','inline-block');
      submit_btn.attr('id', 'nonind');  
    }
  })
};




// validation creating function end here

formValidation(); 

$('body').on('click', '#submit_btn', function (e) {
  var group = $(this).attr('data-selgroup');
  var func = $(this).attr('data-func');
  var _controller = "/controller/controller-" + $(this).attr('data-controller') + '.php';

  $(this).parent().children(".loading-btn").css('display', 'inline-block');
  $(this).css('display', 'none'); 
  
  DataObj = FormToObj(group)
 
  // ajax start from here
  $('input[data-selgroup="' + group + '"]').parent().children(".empty-error").css('display', 'none');
  jQuery.ajax({
    type: "POST",
    url: _controller,
    data: { "callFunc": func, "data": JSON.stringify(DataObj) },
    success: function (result) {
      console.log('Ajax Success :' + result)
      $('input[data-selgroup="' + group + '"]').parent().children(".loading-btn").css('display', 'none');
      $('input[data-selgroup="' + group + '"]').css('display', 'inline-block');
      if (DataObj['person_name'] == "" || DataObj['person_email'] == "" || DataObj['person_phone'] == "" || DataObj['person_msg'] == "") 
      {
        $('input[data-selgroup="' + group + '"]').parent().children(".submit-btn").css('display', 'block');
        $('input[data-selgroup="' + group + '"]').parent().children(".empty-error").css('display', 'inline-block');
        $('#submit_btn').attr('id', 'nonind');  
      }
      else {
        var elm = $('input[data-selgroup="' + group + '"]').parent().parent();
        elm.children('.form-mail').css('display', 'none');
        elm.children('.apriciate-msg').css('display', 'block');
      }
    },
    error: function (request, error) {
      alert("Ajax Eror: " + error);

      $(this).parent().children(".loading-btn").css('display', 'none');
      $(this).css('display', 'inline-block');
    }
  });

});
  // ajax end here

function FormToObj(group) {
  // creating for make an objecet
  DataObj = {};
  $('input[data-group="' + group + '"]').each(function (e) {
    DataObj[$(this).attr('data-key')] = $(this).val();
  });

  return DataObj;
}





