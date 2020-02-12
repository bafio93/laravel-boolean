require('./bootstrap');
var $ = require("jquery");
$(document).ready(function(){
    $("i").click(function(){
        if ($(this).parent("p").next().hasClass("baf-answer")) {
            $(".baf-questionbox p:nth-of-type(even)").addClass("baf-answer");
            $(this).parent("p").next().toggleClass("baf-answer");
        } else {
            $(this).parent("p").next().toggleClass("baf-answer");
        }
    })
});
