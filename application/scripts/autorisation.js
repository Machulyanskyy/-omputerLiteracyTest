/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){

   $("input[name=reg_show]").click(function(){
        console.log('registretion form open');
        $("#registration").show('slow');
        $("#login").hide();
    });
    $("input[name=login_show]").click(function(){
        console.log('login form open');
        $("#registration").hide();
        $("#login").show('slow');
    }); 
});

