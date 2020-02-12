require('./bootstrap');
var $ = require("jquery");
$(document).ready(function(){
    $("i").click(function(){
        $(this).parent("p").next().slideToggle();
    })
});
