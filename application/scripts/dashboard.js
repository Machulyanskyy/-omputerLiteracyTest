/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $("#add-answ").click(function(){
        var html = "<li><input type='checkbox'><input type='hidden' name='check-answ[]' value='0' /><input type='text' name='answer[]'>" +
                       "<input type='button' onclick='del_answ(this)' value='Видалити відповідь'></li>";
        $('#answ-list').append(html);
    });
    
    $('#create-test').submit(function(event){
        event.preventDefault();
        
        //$('#answ-list input[type=checkbox]').val(0);
        //$('#answ-list input:checked').val(1);
        $('#answ-list input:checked').parent().find('input[type=hidden]').val(1);
        
        $.ajax({
            url: '/dashboard/save',
            type: 'POST',
            data: $('#create-test').serializeArray(),
                    /*{
               question: $('#create-test input[name=quest]').val(),
               answers: $('#answ-list input[type=text]').serialize(),
               check: $('#answ-list input[type=checkbox]').serialize()
            },*/
            dataType: 'json',
            success: function(){
               console.log('заливка пошла');
            }
        });
    });
    
    
    /*$('.del-answ').click(function(){
        console.log($(this).parent());
       $(this).parent().remove();
    });*/
});

function del_answ(event){
    $(event).parent().remove();
}
