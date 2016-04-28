/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    /*$('.questions').each(function(){
        console.log($(this).find('.answers input').first().click());
    });*/
    $('#testing').submit(function(){ 
        $('div[class="questions"]').not(':has(:radio:checked)').click(function(){
            $('div[class="questions"]:has(:radio:checked)').css({"background-color": "white", "color": "black"});
        });
        $('div[class="questions"]').not(':has(:radio:checked)').find(function(){
            $('html, body').animate({
                scrollTop: $('div[class="questions"]').not(':has(:radio:checked)').offset().top //scroll to top              
            }, 1000);
            event.preventDefault();
            $('div[class="questions"]').not(':has(:radio:checked)').css({"background-color": "#ff6666", "color": "#330000"});
        }); 
    });    
 });