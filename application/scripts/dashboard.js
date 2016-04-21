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
    
    $('.questions p').click(function(){
        console.log('Hey jude');
        $('.answers[data-q-id=' + $(this).parent().attr('data-q-id') + ']').toggle('slow');
    });
    /*$('.del-answ').click(function(){
        console.log($(this).parent());
       $(this).parent().remove();
    });*/
    /*$('.check_qa[value="Редагувати"]').change(function(){
        $(this).find('.smth').val('Зберегти');
    });*/
});

function del_answ(event){
    $(event).parent().hide('slow').remove();
}

function change_qa(event){
    var parent = $(event).parent();
    var text;
    var id;
    var arg;
    var type;
    if($(event).val() == 'Редагувати' ){
        //console.log(parent.find('input:first-child').val());
        parent.find('input[name="cancel_change"]').show('slow');
        parent.find('input:first-child').prop("disabled", false);
        $(event).val('Зберегти');       
        text = parent.find('p').text();
        parent.find('p').hide('slow');
        //var input = "<input type='text' name='edit_qa' style='width: 600px' required>";
        //$(input).insertBefore(event);//parent.prepend(input);
        //parent.find('input[name="edit_qa"]').show('slow');
        parent.find('input[name="edit_qa"]').val(text).show('slow');
    }
    else{
        text = parent.find('input[name="edit_qa"]').val();       
        if(parent.hasClass('questions')){
            id = parent.attr('data-q-id');
            arg = parent.find('input[name="weight_q"]').val();
            type = 'question';
        }
        else if(parent.hasClass('answers'))
        {
            id = parent.attr('data-a-id');
            arg = parent.find('input[name="check"]').val();
            type = 'answer';
        }
        $.ajax({
                url: '/dashboard/change_qa',
                type: 'POST',
                data: { id : id,
                        text: text,
                        arg : arg,
                        type: type
                },
                success: function(){
                    parent.find('input[name="edit_qa"]').hide('slow');
                    //var p = "<p>" + text + " </p>";
                    //$(p).insertBefore(event);
                    parent.find('p').text(text).show('slow');
                    parent.find('input[name="cancel_change"]').hide('slow');
                    $(event).val('Редагувати');
                    parent.find('input:first-child').prop( "disabled", true );
                }
        });
    }
}

function del_question(event){
    $.ajax({
        url: '/dashboard/remove_question',
        type: 'POST',
        data: { id : $(event).parent().attr('data-q-id')},
        success: function(){
           console.log('lets delete');
           $(event).parent().hide('slow').remove();
           $('.answers[data-q-id=' + $(event).parent().attr('data-q-id') + ']').hide('slow').remove();
        }
    });
}

function del_answer(event){
    $.ajax({
        url: '/dashboard/remove_answer',
        type: 'POST',
        data: { id : $(event).parent().attr('data-a-id')},
        success: function(){
           console.log('lets delete answer');
           $(event).parent().hide('slow').remove();
        }
    });
}

function change_check(event){
    if ($(event).is( ":checked" )) $(event).parent().find('input[name="check"]').val('1');
    else                           $(event).parent().find('input[name="check"]').val('0');
}

function cancel_change(event){
    var parent = $(event).parent();
    var id;
    var type;
    if(parent.hasClass('questions')) {
        id = parent.attr('data-q-id');
        type = 'question';
    } 
    else if(parent.hasClass('answers')) 
    {
        id = parent.attr('data-a-id');
        type = 'answer';
    } 
    $.ajax({
        url: '/dashboard/get_qa',
        type: 'POST',
        data: { id : id, type: type},
        dataType: 'json',
        success: function(data){
            parent.find('input[name="edit_qa"]').hide('slow');
            parent.find('p').text(data.QA_TEXT).show('slow');
            parent.find('input[name="cancel_change"]').hide('slow');
            parent.find('input[name="change_qa"]').val('Редагувати');
            if (type == 'question') parent.find('input:first-child').val(data.QA_WEIGHT).prop( "disabled", true );
            else 
            {
                if(data.QA_ANSWER_TRUE == '1') {
                    $(event).parent().find('input[name="check"]').val('1');
                    parent.find('input:first-child').prop( "checked", true ).prop( "disabled", true );
                }
                else{
                    $(event).parent().find('input[name="check"]').val('0');
                    parent.find('input:first-child').prop( "checked", false ).prop( "disabled", true );
                }
            }
            /*console.log(data[text]);
            console.log(data['text']);*/
        }/*,
        error: console.log('спіймав на вила')*/
    });
    /*parent.find('input[name="edit_qa"]').val().hide('slow');
    parent.find('p').show('slow');
    parent.find('input[name="cancel_change"]').hide('slow');
    $(event).val('Редагувати');
    parent.find('input:first-child').prop( "disabled", true );*/
}

function add_answer(event){
    var answer = '<div class="answers" data-q-id="'+ $(event).parent().attr('data-q-id') +'">' + 
                    '<input type="checkbox" onclick="change_check(this)" />' +
                    '<input type="hidden" name="check" value=""/>' +
                    '<p style="display: none;"></p>' + 
                    '<input type="text" name="answer_text" style="width: 600px" required>' +
                    '<input type="button" onclick="save_question(this)" name="change_qa" value="Зберегти">'+
                    '<input type="button" onclick="cancel_change(this)" name="cancel_change" value="Відмінити">' +
                    '<input type="button" onclick="del_answ(this)" name="del_qa" value="Видалити"></div>';
    //$('#answ-list').append(html);
    $(answer).insertAfter($(event).parent()).show('slow');
}

function save_question(event){
    var parent = $(event).parent();
    var text = parent.find('input[name="answer_text"]').val();
    var id = parent.attr('data-q-id');
    $.ajax({
        url: '/dashboard/save_answer',
        type: 'POST',
        data: { id : id,
                text : text,
                check : parent.find('input[name="check"]').val()},
        success: function(data){
            if($('.answers[data-q-id='+ id +']').is(':hidden')) parent.hide('slow');
            parent.attr('data-a-id', data);
            $(event).attr('onclick', 'change_qa(this)');
            parent.find('input[name="answer_text"]').attr('name', 'edit_qa').hide('slow');
            parent.find('input[name="del_qa"]').attr('onclick', 'del_answer(this)'); 
            $(parent.find('p')).text(text).insertBefore(parent.find('input[name="edit_qa"]')).show('slow');
            $(event).val('Редагувати');
            parent.find('input:first-child').prop( "disabled", true );
        }
    });
}