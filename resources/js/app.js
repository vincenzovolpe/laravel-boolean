require('./bootstrap');

var $ = require('jquery');

$(document).ready(function() {


    $(".boolean__faq__body__question").click(function(){
        if ($(this).hasClass("attivo")) {
            $('.boolean__faq__body__question').removeClass("attivo");
            $('.boolean__faq__body__question p').slideUp(),
            $('.boolean__faq__body__question h3 i').removeClass("fa-minus").addClass("fa-plus")
        } else {
            $('.boolean__faq__body__question').removeClass("attivo");
            $('.boolean__faq__body__question p').slideUp();
            $('.boolean__faq__body__question h3 i').removeClass("fa-minus").addClass("fa-plus");
            $(this).addClass("attivo");
            $(this).children("h3").children("i").addClass("fa-minus").removeClass("fa-plus"); $(this).children("p").slideDown();
        }
    });

});
