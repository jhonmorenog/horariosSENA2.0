/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function (){
    var maxW=$(document).width()-260;
    var maxH=$(document).height()-300;
    var min=499;
    
    $(".login").css(
            {"left":(Math.random()*(maxW))+"px",
            "top":(Math.random()*(maxH))+"px"}
    );
});


