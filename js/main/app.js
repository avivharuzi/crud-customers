"use strict";

$(document).ready(function () {
    $(".edit-pencil").on("click", function() {
        $(this).parent().next().toggle();
    });

    $("#displayCustomerForm").on("click", function() {
        $("#addCustomerForm").slideToggle();
    });
});

$.validate({
    lang: 'en'
});