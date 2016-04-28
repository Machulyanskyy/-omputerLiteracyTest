/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $("#add-answ").click(function(){
        var html = "<li><input type='radio' name='choose-answ[]' required><input type='hidden' name='check-answ[]' value='0'/><input type='text' name='answer[]' required>" +
                       "<input type='button' onclick='del_answ(this)' value='Видалити відповідь'></li>";
        $('#answ-list').append(html);
    });
    
    $('#create-test').click(function(){
        $('#qa-status').hide('slow');
    });
    
    $('#create-test').submit(function(event){
        event.preventDefault();
       //console.log($('.questions p').text().search($('#create-test input[name="quest"]').val()));
        if($('.questions p').text().search($('#create-test input[name="quest"]').val()) === 0)
            $('#qa-status').text('Вже є таке запитання!').show('slow');
        else
        {
            $('#answ-list input:checked').parent().find('input[type=hidden]').val(1);
            $.ajax({
                url: '/dashboard/save',
                type: 'POST',
                data: $('#create-test').serializeArray(),
                dataType: 'json',
                success: function(data){
                   console.log(data);               
                   $('#qa-status').text('Запитання збережено!').show('slow');
                   $('#answ-list').hide('slow');
                }
            });
        }
    });
    
    $('.questions p').click(function(){
        $('.answers[data-q-id=' + $(this).parent().attr('data-q-id') + ']').toggle('slow');
    });
});

function view_stat(event)
{
    var parent = $(event).parent();
        if(!parent.find($('.wrong-answ-list'))[0])
        {           
            $.ajax({
                url: '/dashboard/user_test',
                type: 'POST',
                data: {id : parent.attr('data-id')},
                dataType: 'json',
                success: function(data){
                    parent.find('.all_answers').text('Загальна кількість запитань: ' + data.count_all_questions);
                    parent.find('.wrong_answers').text('Кількість неправильних відповідей користувача: ' + data.count_wrong_answers);
                    parent.find('.test-result').text('Результат оцінювання: ' + data.result + '%');
                    if(data.count_wrong_answers > 0)
                    {
                        var html = "<table class='wrong-answ-list'><caption>Список неправильних відповідей користувача: <strong>" + $(event).parents('.user').find('.u_name').text() + "</strong></caption><tbody><thead>"+
                                     "<tr><th>№</th><th>Запитання</th><th>Неправильна відповідь</th><th>Правильна відповідь</th></tr>"+
                                     "</thead>";
                        var index = 1;
                        $.each(data.wrong_answers, function(){
                            html += "<tr><td>" + index + "</td><td>" + this.QUESTION + "</td><td>" + this.WRONG_ANSWER + "</td><td>" + this.TRUE_ANSWER + "</td></tr>";
                            index ++;
                        });
                        html += "</tbody><table><div><input type='button' class='btn-save-stat' onclick='save_stat(this)' value='Зберегти статистику'></div>"
                        //parent.find($('#wrong-answ-list tbody')).append(html);
                        //console.log(html);
                        $(html).insertAfter(parent.find($('.test-result')));
                    }
                    else {
                        var html = '</br><p class="wrong-answ-list"> Неправильні відповіді відсутні </p>';
                        $(html).insertAfter(parent.find($('.test-result')));
                    }
                }
            });
        }
        parent.find($('.user-status')).slideToggle('slow');
}

function save_stat(event)
{
    $.ajax({
        url: '/dashboard/generate_pdf',
        type: 'POST',
        //data: { data : $(event).parents('.user-status')},
        success: function(){
           console.log('Lets generate');
        }
    });
    
}

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
        text = parent.find('input[name="edit_qa"]').val().trim();       
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
            parent.find('p').text(data.QA_TEXT.trim()).show('slow');
            parent.find('input[name="cancel_change"]').hide('slow');
            parent.find('input[name="change_qa"]').val('Редагувати');
            if (type == 'question') parent.find('input:first-child').val(data.QA_WEIGHT.trim()).prop( "disabled", true );
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
                
                if(!$('.answers[data-q-id=' + parent.attr('data-q-id') + '] input').is(':checked'))
                {
                    parent.find($('.answers[data-a-id=' + data.TRUE_ID + '] input[type="radio"]').prop( "checked", true ))
                    parent.find($('.answers[data-a-id=' + data.TRUE_ID + '] input[type="hidden"]').val(1));
                }
            }
        }
    });
    
    /*parent.find('input[name="edit_qa"]').val().hide('slow');
    parent.find('p').show('slow');
    parent.find('input[name="cancel_change"]').hide('slow');
    $(event).val('Редагувати');
    parent.find('input:first-child').prop( "disabled", true );*/
}

function add_answer(event){
    var answer = '<div class="answers" data-q-id="'+ $(event).parent().attr('data-q-id') +'">' + 
                    '<input type="radio" name="check'+ $(event).parent().attr('data-q-id')+'[]" onclick="change_check(this)" />' +
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
    var text = parent.find('input[name="answer_text"]').val().trim();
    var id = parent.attr('data-q-id');
    $.ajax({
        url: '/dashboard/save_answer',
        type: 'POST',
        data: { id : id,
                text : text,
                check : parent.find('input[name="check"]').val().trim()},
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
function test_open(event)
{   
    var id = $(event).parents('.user').attr('data-id');
    console.log(id);
    $.ajax({
        url: '/dashboard/open_test',
        type: 'POST',
        data: { id : id},
        dataType: 'json',
        success: function(data){
           $(event).prop( "disabled", true );
           var html = "<div class='test-open-status'>Проходження тесту заново дозволено</div>"
           $(html).insertBefore($(event));
        }
    });
}
function show_users()
{
    $('#test_manage').hide('slow');
    $('#user_manage').show('slow');
}

function show_tests()
{
    $('#user_manage').hide('slow');
    $('#test_manage').show('slow');
}

function change_u(event){
    var parent = $(event).parent();
    var name;
    var email;
    if($(event).val() === 'Редагувати' ){
        parent.find('input[name="cancel_u_change"]').show('slow');
        parent.find('input:first-child').prop("disabled", false);
        $(event).val('Зберегти');       
        name = parent.find('.u_name').text();
        email = parent.find('.u_email').text();
        parent.find('.u_name').hide('slow');
        parent.find('.u_email').hide('slow');
        parent.find('input[name="edit_name"]').val(name).show('slow');
        parent.find('input[name="edit_email"]').val(email).show('slow');
    }
    else{
        name = parent.find('input[name="edit_name"]').val().trim();
        email = parent.find('input[name="edit_email"]').val().trim();
        $.ajax({
                url: '/dashboard/update_user',
                type: 'POST',
                data: { id : parent.attr('data-id'),
                        name: name,
                        email : email,
                        role: parent.find('input[name="u_role"]').val()
                },
                success: function(){
                    parent.find('input[name="edit_name"]').hide('slow');
                    parent.find('input[name="edit_email"]').hide('slow');
                    parent.find('.u_name').text(name).show('slow');
                    parent.find('.u_email').text(email).show('slow');
                    parent.find('input[name="cancel_u_change"]').hide('slow');
                    $(event).val('Редагувати');
                    parent.find('input:first-child').prop( "disabled", true );
                }
        });
    }
}

function cancel_u_change(event)
{
    var parent = $(event).parent();
    $.ajax({
        url: '/dashboard/get_user',
        type: 'POST',
        data: { id : parent.attr('data-id')},
        dataType: 'json',
        success: function(data){
            parent.find('.edit_u').hide('slow');
            parent.find('.u_name').text(data.U_NAME.trim()).show('slow');
            parent.find('.u_email').text(data.U_EMAIL.trim()).show('slow');
            parent.find('input[name="u_role"]').val(data.U_ROLE.trim()).prop( "disabled", true );
            parent.find('input[name="cancel_u_change"]').hide('slow');
            parent.find('input[name="change_u"]').val('Редагувати');
        }
    });
}

function del_u(event){
    var parent = $(event).parent();
    $.ajax({
        url: '/dashboard/del_user',
        type: 'POST',
        data: { id : parent.attr('data-id')},
        success: function(){
            parent.hide('slow').remove();
        }
    });
}
